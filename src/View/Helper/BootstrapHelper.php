<?php
namespace CakeBootstrap\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;
use Cake\View\View;

/**
 * Bootstrap helper
 */
class BootstrapHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function getAppName()
    {
        return Configure::read('CakeBootstrap.ApplicationName');
    }

}
