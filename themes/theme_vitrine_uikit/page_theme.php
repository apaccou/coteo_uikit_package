<?php
namespace Concrete\Package\CoteoBoilerplatePackage\Theme\ThemeVitrineUikit;

use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Asset\Asset;

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'uikit';

    public function registerAssets()
    {
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('uikit');
        $this->requireAsset('css', 'styles');
        $this->requireAsset('javascript', 'jquery');

        $c = \Page::getCurrentPage();
        $currentPermissions = new \Permissions($c);
        $user = new \User;
        if ($currentPermissions->canViewToolbar() || $user->isLoggedIn()) {
            // $this->requireAsset('javascript', 'jquery');
        } else {
            $al = AssetList::getInstance();

            $al->register(
              'javascript', 'jquery', 'https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js',
                array('local' => false, 'version' => '3.1.1', 'minify' => false, 'combine' => true, 'position' => \Concrete\Core\Asset\Asset::ASSET_POSITION_HEADER)
            );
        }
        
    }
}
