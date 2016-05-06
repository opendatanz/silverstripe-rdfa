<?php

/**
 * Class RDFaExtension
 * Using definition of RDFa Lite 1.1 from https://www.w3.org/TR/rdfa-lite/
 */
class RDFaExtension extends DataExtension {

    /**
     * @var string vocab to use on page
     */
    private static $rdfa_vocab = "http://schema.org/";

    private static $rdfa_prefix;

    private static $casting = array(
        'RDFaShortcode' => 'HTMLText'
    );

    public static function RDFaShortcode($arguments, $content = null, $parser = null, $tagName){
        $rdfa = '<span';
        foreach ($arguments as $attr => $value){
            $rdfa .= ' ' . $attr . '="' . $value . '"';
        }
        $rdfa .= '>'. $content. '</span>';

        return $rdfa;
    }

    /**
     * @var array
     */
    private static $db = array(
        'RDFaTypeof' => 'Varchar(255)',
    );
    
    public function updateCMSFields(FieldList $fields)
    {
        //@TODO use "easyrdf/easyrdf": "^0.9", to pre populate available typeof

        $fields->addFieldToTab('Root.RDFa', TextField::create('RDFaTypeof','RDFa typeof')->setDescription('See https://schema.org/docs/schema_org_rdfa.html'));
    }

    public function getRDFaVocab()
    {
        return $this->owner->config()->get('rdfa_vocab');
    }

    public function getRDFaVocabPrefix()
    {
        return $this->owner->config()->get('rdfa_prefix');
    }

}