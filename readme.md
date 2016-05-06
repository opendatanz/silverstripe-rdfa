# SilverStripe RDFa

This module adds RDFa content in SilverStripe CMS for Linked Data.

It uses the RDFa Lite 1.1 spec from https://www.w3.org/TR/rdfa-lite/

## Requirements
 * SilverStripe ^3.1

## Installation 

```
composer require opendatanz/silverstripe-rdfa
```

## License
See [License](license.md)

## Documentation

### Including a vocab and typeof

In your custom template <body> tag, add the following to render the `vocab` and `typeof` attributes.

```
<% include RDFaVocab %>
```

You can edit the default vocab or add a vocab prefix including the CURIE (compact URI) by using the SilverStripe Config API.

```yaml
Page:
  rdfa_vocab: 'http://some-other-vocab.org/'
  rdfa_prefix: 'ov: http://open.vocab.org/terms/'
```

Set the `typeof` attribute on a per page basis in the CMS unber the RDFa tab.

### Setting properties and resources

A shortcode is available in order to add new  `property` and `resource` attributes, it wraps the content in a <span> tag and can be used in the CMS content editor using the following shortcode format:

```
[rdfa,property="name",resource="#jo-bloggs"]Jo Bloggs[/rdfa]
```

## TODO
 - Auto populate the `typeof` based on the available `vocab`.
 - A GUI for the shortcode that auto populates the `property` attribute.
 - More control over the template (currently just renders in a <span>).
 - SPARQL endpoint using something like easyrdf library.
 - Expand to the full RDFa spec.


## Maintainers
 * Cam Findlay <cam@camfindlay.com>
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
See [Contributing](contributing.md)