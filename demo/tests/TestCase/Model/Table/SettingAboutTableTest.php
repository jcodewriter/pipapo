<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingAboutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingAboutTable Test Case
 */
class SettingAboutTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingAboutTable
     */
    public $SettingAbout;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingAbout'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingAbout') ? [] : ['className' => SettingAboutTable::class];
        $this->SettingAbout = TableRegistry::getTableLocator()->get('SettingAbout', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingAbout);

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
