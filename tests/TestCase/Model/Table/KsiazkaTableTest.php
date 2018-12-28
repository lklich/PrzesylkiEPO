<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KsiazkaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KsiazkaTable Test Case
 */
class KsiazkaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KsiazkaTable
     */
    public $Ksiazka;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ksiazka'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ksiazka') ? [] : ['className' => KsiazkaTable::class];
        $this->Ksiazka = TableRegistry::getTableLocator()->get('Ksiazka', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ksiazka);

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
