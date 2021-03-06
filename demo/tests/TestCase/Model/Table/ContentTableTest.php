<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContentTable Test Case
 */
class ContentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContentTable
     */
    public $Content;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Content'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Content') ? [] : ['className' => ContentTable::class];
        $this->Content = TableRegistry::getTableLocator()->get('Content', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Content);

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
