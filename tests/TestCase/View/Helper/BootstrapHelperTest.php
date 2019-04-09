<?php
namespace CakeBootstrap\Test\TestCase\View\Helper;

use CakeBootstrap\View\Helper\BootstrapHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * CakeBootstrap\View\Helper\BootstrapHelper Test Case
 */
class BootstrapHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeBootstrap\View\Helper\BootstrapHelper
     */
    public $Bootstrap;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Bootstrap = new BootstrapHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bootstrap);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
