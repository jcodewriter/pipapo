<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CopyrightsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CopyrightsTable Test Case
 */
class CopyrightsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CopyrightsTable
     */
    public $Copyrights;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Copyrights'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Copyrights') ? [] : ['className' => CopyrightsTable::class];
        $this->Copyrights = TableRegistry::getTableLocator()->get('Copyrights', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Copyrights);

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
