<?php

use App\Models\table;
use App\Repositories\tableRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class tableRepositoryTest extends TestCase
{
    use MaketableTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var tableRepository
     */
    protected $tableRepo;

    public function setUp()
    {
        parent::setUp();
        $this->tableRepo = App::make(tableRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatetable()
    {
        $table = $this->faketableData();
        $createdtable = $this->tableRepo->create($table);
        $createdtable = $createdtable->toArray();
        $this->assertArrayHasKey('id', $createdtable);
        $this->assertNotNull($createdtable['id'], 'Created table must have id specified');
        $this->assertNotNull(table::find($createdtable['id']), 'table with given id must be in DB');
        $this->assertModelData($table, $createdtable);
    }

    /**
     * @test read
     */
    public function testReadtable()
    {
        $table = $this->maketable();
        $dbtable = $this->tableRepo->find($table->id);
        $dbtable = $dbtable->toArray();
        $this->assertModelData($table->toArray(), $dbtable);
    }

    /**
     * @test update
     */
    public function testUpdatetable()
    {
        $table = $this->maketable();
        $faketable = $this->faketableData();
        $updatedtable = $this->tableRepo->update($faketable, $table->id);
        $this->assertModelData($faketable, $updatedtable->toArray());
        $dbtable = $this->tableRepo->find($table->id);
        $this->assertModelData($faketable, $dbtable->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletetable()
    {
        $table = $this->maketable();
        $resp = $this->tableRepo->delete($table->id);
        $this->assertTrue($resp);
        $this->assertNull(table::find($table->id), 'table should not exist in DB');
    }
}
