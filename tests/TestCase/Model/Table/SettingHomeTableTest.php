<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingHomeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingHomeTable Test Case
 */
class SettingHomeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingHomeTable
     */
    public $SettingHome;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingHome'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingHome') ? [] : ['className' => SettingHomeTable::class];
        $this->SettingHome = TableRegistry::getTableLocator()->get('SettingHome', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingHome);

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
