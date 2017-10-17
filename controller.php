<?php
namespace Concrete\Package\CoteoUikitPackage;

use Package;
use \Concrete\Core\Page\Theme\Theme;
use BlockType;
use AttributeSet;
use \Concrete\Core\Attribute\Key\Category as AttributeKeyCategory;
use \Concrete\Core\Attribute\Key\CollectionKey as CollectionKey;
use \Concrete\Core\Attribute\Key\FileKey as FileKey;
use \Concrete\Core\Attribute\Key\UserKey as UserKey;
use \Concrete\Core\Attribute\Type as AttributeType;
use Page;
use PageType;
use PageTemplate;
use \Concrete\Core\Page\Type\PublishTarget\Type\Type as PublishTargetType;
use \Concrete\Core\Page\Type\Composer\LayoutSet as LayoutSet;
use \Concrete\Core\Page\Type\Composer\Control\CollectionAttributeControl as AttributeControl;
use \Concrete\Core\Page\Type\Composer\Control\BlockControl as BlockControl;
use SinglePage;
use PageTheme;
use FileSet;

// use Concrete\Package\CoteoUikitPackage\Src\UikitGridFramework;
use Core;
use Concrete\Core\Asset\AssetList;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{

    protected $pkgHandle = 'coteo_uikit_package';
    protected $appVersionRequired = '5.8.0';
    protected $pkgVersion = '0.0.1';
    protected $previousVersion = '0.0.0';

    public function getPackageName()
    {
        return t("Concrete 5.8 Framework Uikit Package");
    }

    public function getPackageDescription()
    {
        return t("A package that installs the Uikit Framework for Concrete5 version 8.0.");
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installOrUpgrade($pkg);
    }

    public function upgrade()
    {
        $pkg = Package::getByHandle($this->pkgHandle);
        $this->previousVersion = $pkg->getPackageVersion();
        parent::upgrade();
        $this->installOrUpgrade($pkg);
    }
    protected function installOrUpgrade($pkg)
    {
        // Install theme
        $handle = 'theme_vitrine_uikit';
        $this->addTheme($handle, $pkg);

        // Install single page
        $path = '/mentions-legales';
        $this->addSinglePage($path, $pkg, $name="Mentions Légales", $description="");

        // Install single page
        $path = '/plan-du-site';
        $this->addSinglePage($path, $pkg, $name="Plan du site", $description="");

    }

    public function on_start()
    {
        // $manager = Core::make('manager/grid_framework');
        // $manager->extend('uikit', function($app) {
        //     return new UikitGridFramework();
        // });

        $al = AssetList::getInstance();
        $al->register(
          'css', 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
            array('local' => false, 'version' => '4.7.0', 'minify' => false, 'combine' => true)
        );
        $al->register('javascript', 'uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit.min.js', ['local' => false], $this->pkgHandle);
        $al->register('css', 'uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/css/uikit.min.css', ['local' => false], $this->pkgHandle);

        $al->registerGroup('uikit', array(
            array('css', 'uikit'),
            array('javascript', 'jquery'),
            array('javascript', 'uikit'),
        ));
    }

    /**
     * Add Theme
     * @param string $handle Theme Handle
     * @param object $pkg Package Object
     * @return object Theme Object
     */
    protected function addTheme($handle, $pkg)
    {
        $theme = Theme::getByHandle($handle);
        if (!is_object($theme)) {
            $theme = Theme::add($handle, $pkg);
        }

        return $theme;
    }

    /**
     * Add Single Page
     * @param string $path Page Path
     * @param object $pkg Package Object
     * @param string $name Single Page Name
     * @param string $description Single Page Description
     * @return object Single Page Object
     */
    protected function addSinglePage($path, $pkg, $name="", $description="")
    {
        //Install single page
        $sp = Page::getByPath($path);
        if ($sp->isError() && $sp->getError() == COLLECTION_NOT_FOUND) {
           $sp = SinglePage::add($path, $pkg);
        }

        //Set name and description
        if (!empty($name) || !empty($description)) {
            $data = array();
            if (!empty($name)) {
                $data['cName'] = $name;
            }
            if (!empty($description)) {
                $data['cDescription'] = $description;
            }
            $sp->update($data);
        }

        return $sp;
    }
}
