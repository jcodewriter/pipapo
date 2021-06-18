<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingBusinessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingBusinessTable Test Case
 */
class SettingBusinessTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingBusinessTable
     */
    public $SettingBusiness;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingBusiness'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingBusiness') ? [] : ['className' => SettingBusinessTable::class];
        $this->SettingBusiness = TableRegistry::getTableLocator()->get('SettingBusiness', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingBusiness);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
