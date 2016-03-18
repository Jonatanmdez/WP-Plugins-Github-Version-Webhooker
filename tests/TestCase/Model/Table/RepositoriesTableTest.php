<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepositoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepositoriesTable Test Case
 */
class RepositoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepositoriesTable
     */
    public $Repositories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.repositories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Repositories') ? [] : ['className' => 'App\Model\Table\RepositoriesTable'];
        $this->Repositories = TableRegistry::get('Repositories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Repositories);

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
