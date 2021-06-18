<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingContactTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingContactTable Test Case
 */
class SettingContactTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingContactTable
     */
    public $SettingContact;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingContact'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingContact') ? [] : ['className' => SettingContactTable::class];
        $this->SettingContact = TableRegistry::getTableLocator()->get('SettingContact', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingContact);

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
