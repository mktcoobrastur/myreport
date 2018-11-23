<?php

use App\Models\Permissoes;
use App\Repositories\PermissoesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissoesRepositoryTest extends TestCase
{
    use MakePermissoesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PermissoesRepository
     */
    protected $permissoesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->permissoesRepo = App::make(PermissoesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePermissoes()
    {
        $permissoes = $this->fakePermissoesData();
        $createdPermissoes = $this->permissoesRepo->create($permissoes);
        $createdPermissoes = $createdPermissoes->toArray();
        $this->assertArrayHasKey('id', $createdPermissoes);
        $this->assertNotNull($createdPermissoes['id'], 'Created Permissoes must have id specified');
        $this->assertNotNull(Permissoes::find($createdPermissoes['id']), 'Permissoes with given id must be in DB');
        $this->assertModelData($permissoes, $createdPermissoes);
    }

    /**
     * @test read
     */
    public function testReadPermissoes()
    {
        $permissoes = $this->makePermissoes();
        $dbPermissoes = $this->permissoesRepo->find($permissoes->id);
        $dbPermissoes = $dbPermissoes->toArray();
        $this->assertModelData($permissoes->toArray(), $dbPermissoes);
    }

    /**
     * @test update
     */
    public function testUpdatePermissoes()
    {
        $permissoes = $this->makePermissoes();
        $fakePermissoes = $this->fakePermissoesData();
        $updatedPermissoes = $this->permissoesRepo->update($fakePermissoes, $permissoes->id);
        $this->assertModelData($fakePermissoes, $updatedPermissoes->toArray());
        $dbPermissoes = $this->permissoesRepo->find($permissoes->id);
        $this->assertModelData($fakePermissoes, $dbPermissoes->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePermissoes()
    {
        $permissoes = $this->makePermissoes();
        $resp = $this->permissoesRepo->delete($permissoes->id);
        $this->assertTrue($resp);
        $this->assertNull(Permissoes::find($permissoes->id), 'Permissoes should not exist in DB');
    }
}
