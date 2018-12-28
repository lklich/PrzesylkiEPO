<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpoTable Test Case
 */
class EpoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EpoTable
     */
    public $Epo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.epo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Epo') ? [] : ['className' => EpoTable::class];
        $this->Epo = TableRegistry::getTableLocator()->get('Epo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Epo);

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
