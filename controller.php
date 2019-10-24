<?php namespace Concrete\Package\BlockBuilder;

use Concrete\Core\Package\Package;
use Concrete\Core\Support\Facade\Route;
use Concrete\Core\Page\Single as SinglePage;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{
    protected $pkgHandle = 'block_builder';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '1.2.1';

    public function getPackageName() {
        return t('Block Builder');
    }

    public function getPackageDescription() {
        return t('Build your custom c5 blocks (with optional set of repeatable entries).');
    }

    public function on_start() {

        Route::register('ajax/delete-block-type-folder', 'Concrete\Package\BlockBuilder\Controller\Ajax::deleteBlockTypeFolder');

    }

    public function install() {

        $pkg = parent::install();

        // Install single pages
        $page = SinglePage::add('/dashboard/blocks/block_builder', $pkg);
        $page->updateCollectionName(t('Block Builder'));

    }

    public function uninstall() {

        parent::uninstall();

    }

}