<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VentasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VentasTable Test Case
 */
class VentasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VentasTable
     */
    protected $Ventas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ventas',
        'app.Clientes',
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
        $config = $this->getTableLocator()->exists('Ventas') ? [] : ['className' => VentasTable::class];
        $this->Ventas = $this->getTableLocator()->get('Ventas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ventas);

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
