<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContaTable Test Case
 */
class ContaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContaTable
     */
    protected $Conta;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Conta',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conta') ? [] : ['className' => ContaTable::class];
        $this->Conta = $this->getTableLocator()->get('Conta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Conta);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ContaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
