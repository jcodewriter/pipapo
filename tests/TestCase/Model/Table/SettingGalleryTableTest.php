<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettingGalleryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettingGalleryTable Test Case
 */
class SettingGalleryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettingGalleryTable
     */
    public $SettingGallery;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SettingGallery'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettingGallery') ? [] : ['className' => SettingGalleryTable::class];
        $this->SettingGallery = TableRegistry::getTableLocator()->get('SettingGallery', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettingGallery);

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
