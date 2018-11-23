<?php

use App\Models\PermissoesEs;
use App\Repositories\PermissoesEsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissoesEsRepositoryTest extends TestCase
{
    use MakePermissoesEsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PermissoesEsRepository
     */
    protected $permissoesEsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->permissoesEsRepo = App::make(PermissoesEsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePermissoesEs()
    {
        $permissoesEs = $this->fakePermissoesEsData();
        $createdPermissoesEs = $this->permissoesEsRepo->create($permissoesEs);
        $createdPermissoesEs = $createdPermissoesEs->toArray();
        $this->assertArrayHasKey('id', $createdPermissoesEs);
        $this->assertNotNull($createdPermissoesEs['id'], 'Created PermissoesEs must have id specified');
        $this->assertNotNull(PermissoesEs::find($createdPermissoesEs['id']), 'PermissoesEs with given id must be in DB');
        $this->assertModelData($permissoesEs, $createdPermissoesEs);
    }

    /**
     * @test read
     */
    public function testReadPermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $dbPermissoesEs = $this->permissoesEsRepo->find($permissoesEs->id);
        $dbPermissoesEs = $dbPermissoesEs->toArray();
        $this->assertModelData($permissoesEs->toArray(), $dbPermissoesEs);
    }

    /**
     * @test update
     */
    public function testUpdatePermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $fakePermissoesEs = $this->fakePermissoesEsData();
        $updatedPermissoesEs = $this->permissoesEsRepo->update($fakePermissoesEs, $permissoesEs->id);
        $this->assertModelData($fakePermissoesEs, $updatedPermissoesEs->toArray());
        $dbPermissoesEs = $this->permissoesEsRepo->find($permissoesEs->id);
        $this->assertModelData($fakePermissoesEs, $dbPermissoesEs->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $resp = $this->permissoesEsRepo->delete($permissoesEs->id);
        $this->assertTrue($resp);
        $this->assertNull(PermissoesEs::find($permissoesEs->id), 'PermissoesEs should not exist in DB');
    }
}
