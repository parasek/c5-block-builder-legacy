<?php namespace Concrete\Package\BlockBuilder\Src\BlockBuilder;

use Concrete\Core\Block\BlockType\Set as BlockTypeSet;

defined('C5_EXECUTE') or die('Access Denied.');

class OptionList
{

    public function getBlockTypeSets() {

        $options = array();
        $options[''] = t('None');

        $blockTypeSets = BlockTypeSet::getList();

        foreach ($blockTypeSets as $blockTypeSet) {
            $options[$blockTypeSet->btsHandle] = $blockTypeSet->btsName;
        }

        return $options;

    }

    public function getEntriesAsFirstTabOptions() {

        $options = array();
        $options[0] = t('No');
        $options[1] = t('Yes');

        return $options;

    }

    public function getFieldTypes() {

        $options = array();
        $options['']                       = t('+ Add new field type');
        $options['text_field']             = t('Text field');
        $options['textarea']               = t('Textarea');
        $options['wysiwyg_editor']         = t('WYSIWYG Editor');
        $options['select_field']           = t('Select field');
        $options['link_from_sitemap']      = t('Link from Sitemap');
        $options['link_from_file_manager'] = t('Link from File Manager');
        $options['external_link']          = t('External Link');
        $options['image']                  = t('Image');
        $options['html_editor']            = t('HTML Editor');
        $options['date_picker']            = t('Date Picker');

        return $options;

    }

    public function getDividerOptions() {

        $options = array();
        $options['smart']  = t('Only if the field type consists of more than 1 element (default)');
        $options['always'] = t('Always');
        $options['never']  = t('Never');

        return $options;

    }

    public function getInstallBlockOptions() {

        $options = array();
        $options[0] = t('No');
        $options[1] = t('Yes');

        return $options;

    }

}
