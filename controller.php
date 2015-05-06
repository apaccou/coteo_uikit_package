<?php
namespace Concrete\Package\CoteoUikitPackage\Src;

use Concrete\Core\Package\Package;
use Concrete\Package\CoteoUikit\Src\UikitGridFramework;
use Core;

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
    return t("A package that installs the Uikit Framework for 5.7.3.");
  }

  public function install()
  {
    $pkg = parent::install();
  }

  // public function on_start()
  // {
  //   $manager = Core::make('manager/grid_framework');
  //   $manager->extend('uikit', function($app) {
  //     return new UikitGridFramework();
  //   });
  // }
}
