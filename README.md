Entity Reference Autofill
=========================

The Entity Reference Autofill module provides an option for Entity Reference 
fields to populate other fields in the entity form with values from a referenced 
entity's field.

Status
------

The basics are working, including the submodules.


Installation
------------

Install this module using the [official Backdrop CMS instructions](https://backdropcms.org/guide/modules).


Requirements
------------

Entity Reference (part of Backdrop core)


Configuration
-------------

The module doesn't provide a configuration page.

To provide the Autofill option for an Entity Reference field, configure your 
fields as follows:

- Add the field you want to be autofilled to your entity type or bundle,
  let's say content type A. This is the destination field.

- If you plan to load referenced values from another content type, add the same
  field as 'existing field' to content type B. This is the source field.

- Add an Entity Reference field to content type A.
  Supported widgets: Autocomplete, Select list, and Checkboxes/radio buttons.
  Note: The field can only have one value; multi-value fields are not supported.
  
  - In the Entity Reference field instance settings, enable the option "Entity
    Reference Autofill" under "Additional behaviors". Select the source field you
    want to load from the referenced entity.
  - If desired, disable the option "Overwrite existing data".
  
- Create a content item and fill in the source field.

- Create another content item and reference the content item from above in the Entity Reference field.
  The destination field will be autofilled. If you want, you can overwrite it.
  
To provide the autofill feature to more than one field, choose another field 
and repeat the steps from above.
  
Example
-------

Provide a page with the phone number of a contact person:

- Add a Phone Number field to the Page content type.

- Create a content type called Contact Person, and add the same Phone Number
  field as existing field.

- Add an Entity Reference field to the Page content type.

  - Additional behaviors: Entity Reference Autofill, Fields: Phone Number
  - Number of values: 1
  - Target bundles: Contact Person
  - Widget type: Autocomplete

- Create some Contact Person items and fill in their phone numbers.

- Create a Page, and reference a Contact Person. The Phone Number field of the Page
  will be autofilled.

Issues
------

Bugs and Feature requests should be reported in the [Issue Queue](https://github.com/backdrop-contrib/entityreference_autofill/issues).

Current Maintainers
-------------------

- [Olaf Grabienski](https://github.com/olafgrabienski)
- Looking for co-maintainers.

Credits
-------

- Ported to Backdrop CMS by [Olaf Grabienski](https://github.com/olafgrabienski).
- Porting support by [Herb](https://github.com/herbdool) and [argiepiano](https://github.com/argiepiano).
- Originally written for Drupal by [Josef Gullström](https://www.drupal.org/u/jgullstr).

License
-------

This project is GPL v2 software.
See the LICENSE.txt file in this directory for complete text.

