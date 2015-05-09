<?php
namespace Concrete\Package\CoteoUikitPackage;

use Concrete\Core\Package\Package;
use Concrete\Package\CoteoUikitPackage\Src\UikitGridFramework;
use Core;
use Concrete\Core\Asset\AssetList;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{

    protected $pkgHandle = 'coteo_uikit_package';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t("Concrete 5.7 Framework Uikit Package");
    }

    public function getPackageDescription()
    {
        return t("A package that installs the 2.20.3 Uikit Framework for 5.7.3.");
    }

    public function install()
    {
        $pkg = parent::install();
    }

    public function on_start()
    {
        $manager = Core::make('manager/grid_framework');
        $manager->extend('uikit', function($app) {
            return new UikitGridFramework();
        });

        $al = AssetList::getInstance();
        $al->register('javascript', 'uikit', 'uikit-2.20.3/js/uikit.min.js', array(), 'coteo_uikit_package');
        $al->register('css', 'uikit', 'uikit-2.20.3/css/uikit.min.css', array(), 'coteo_uikit_package');

        $al->registerGroup('uikit', array(
            array('css', 'uikit'),
            array('javascript', 'jquery'),
            array('javascript', 'uikit'),
        ));
    }
}
