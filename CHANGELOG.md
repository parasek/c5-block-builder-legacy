#1.2.0
- Added optional target="_blank" rel="noopener" to all Link fields
- Fixed json_decode error when copied block is added to page
- Fixed edge case when smart horizontal line was not added
- Fixed missing translations
- Fixed missing 'link_type' variable in view() for Link with Type Selection fields
- Fixed External Link variable typo in generated view.php

#1.1.0
- Added "Date Picker" field
- Added "Link with Type Selection" field ("Link from Sitemap", "Link from File Manager" and "External Link" combined together)
- Added option to have Entries as first/active tab
- Added optional counter to Repeatable entries
- Added "Remove all" and "Scroll down" buttons when creating block
- Added BASE_URL option to available protocols in "External Link" field
- Fixed css of editable field when height of CKEditor is set
- Fixed some missing addslashes() when creating block
- Multiple minor fixes

#1.0.5
- Added possibility to use CKEditor in repeatable entries. Check "_ckeditor_in_repeatable_entries" folder in package.

#1.0.4
- Fixed: Removed duplicated .js-entry-title

#1.0.3
- Fixed: Check if file exists in repeatable entries when editing block
- Field type "Textarea" now has option "Use this field as title in repeatable entries" available

#1.0.2
- Changed package version/changelog updated

#1.0.1
- Bug: Disappearing entries when changing block template

#1.0.0
- Created legacy repository for c5.7 version