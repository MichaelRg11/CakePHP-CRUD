<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedoresTable Test Case
 */
class VendedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedoresTable
     */
    protected $Vendedores;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Vendedores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vendedores') ? [] : ['className' => VendedoresTable::class];
        $this->Vendedores = $this->getTableLocator()->get('Vendedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Vendedores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
