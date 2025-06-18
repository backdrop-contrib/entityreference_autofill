Entity Reference Autofill
=========================

The Entity Reference Autofill module gives Entity Reference fields
support to populate fields in their form with values from the
referenced entities.

Status
------

The basics are working. It may be that the submodules aren't working yet. Ready for testing, but not ready for a release.


Installation
------------

Install this module using the [official Backdrop CMS instructions](https://backdropcms.org/guide/modules).


Configuration
-------------

- Add a field you want to be auto-filled to your entity.

- If you plan to load the referenced values from another entity type or bundle,
  add the same field to the referenced entity.

- When you have set up both a source and destination field, add an
  entityreference field to the source entity. Currently supported widgets are
  autocomplete, select list and radio buttons. Note that the field can only have
  one value, i.e. multi-value fields wont work.
  
- In the reference field's instance settings, enable "Entity reference autofill"
  under "Additional behaviors". Select the fields you wish to fetch from the
  referenced entity.

- Optionally, unselect "Overwrite existing data" if you want to preserve
  field data already entered before selecting referenced entity.
  
- Go to the entity form and try it out by loading a value into the
  reference field.

Issues
------

Bugs and Feature requests should be reported in the [Issue Queue](https://github.com/backdrop-contrib/entityreference_autofill/issues).

Current Maintainers
-------------------

- [Olaf Grabienski](https://github.com/olafgrabienski)

Credits
-------

- Ported to Backdrop CMS by [Olaf Grabienski](https://github.com/olafgrabienski).
- Originally written for Drupal by [Josef Gullström](https://www.drupal.org/u/jgullstr).

License
-------

This project is GPL v2 software.
See the LICENSE.txt file in this directory for complete text.

