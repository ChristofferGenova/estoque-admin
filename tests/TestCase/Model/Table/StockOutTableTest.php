<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StockOutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StockOutTable Test Case
 */
class StockOutTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StockOutTable
     */
    public $StockOut;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StockOut',
        'app.Products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StockOut') ? [] : ['className' => StockOutTable::class];
        $this->StockOut = TableRegistry::getTableLocator()->get('StockOut', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockOut);

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
