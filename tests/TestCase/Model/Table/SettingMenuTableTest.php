<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingMenuTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingMenuTable Test Case
 */
class SettingMenuTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingMenuTable
     */
    public $SettingMenu;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingMenu'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingMenu') ? [] : ['className' => SettingMenuTable::class];
        $this->SettingMenu = TableRegistry::getTableLocator()->get('SettingMenu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingMenu);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
