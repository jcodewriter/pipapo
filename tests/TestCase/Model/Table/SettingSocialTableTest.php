<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingSocialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingSocialTable Test Case
 */
class SettingSocialTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingSocialTable
     */
    public $SettingSocial;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingSocial'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingSocial') ? [] : ['className' => SettingSocialTable::class];
        $this->SettingSocial = TableRegistry::getTableLocator()->get('SettingSocial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingSocial);

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
