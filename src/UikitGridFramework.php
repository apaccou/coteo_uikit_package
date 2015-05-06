<?php
namespace Concrete\Package\Uikit\Src;

use Concrete\Core\Page\Theme\GridFramework\GridFramework;

defined('C5_EXECUTE') or die('Access Denied.');

class UikitGridFramework extends GridFramework
{

  public function getPageThemeGridFrameworkName()
  {
    return t('Uikit');
  }

  public function getPageThemeGridFrameworkRowStartHTML()
  {
    return '<div class="uk-grid">';
  }

  public function getPageThemeGridFrameworkRowEndHTML()
  {
    return '</div>';
  }

  public function getPageThemeGridFrameworkContainerStartHTML()
  {
    return '';
  }

  public function getPageThemeGridFrameworkContainerEndHTML()
  {
    return '';
  }

  public function getPageThemeGridFrameworkColumnClasses()
  {
    $columns = array(
      'uk-width-1-1',
      'uk-width-1-2',
      'uk-width-1-3',
      'uk-width-2-3',
      'uk-width-1-4',
      'uk-width-1-5',
      'uk-width-1-6',
      'uk-width-1-10'
    );
    return $columns;
  }

  public function getPageThemeGridFrameworkColumnOffsetClasses()
  {
    $offsets = array(
      'small-offset-1',
      'small-offset-2',
      'small-offset-3',
      'small-offset-4',
      'small-offset-5',
      'small-offset-6',
      'small-offset-7',
      'small-offset-8',
      'small-offset-9',
      'small-offset-10',
      'small-offset-11',
      'small-offset-12'
    );
    return $offsets;
  }

  public function getPageThemeGridFrameworkColumnAdditionalClasses()
  {
    return 'columns';
  }

  public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
  {
    return 'columns';
  }
}
