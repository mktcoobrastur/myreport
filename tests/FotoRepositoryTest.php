<?php

use App\Models\Foto;
use App\Repositories\FotoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FotoRepositoryTest extends TestCase
{
    use MakeFotoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var FotoRepository
     */
    protected $fotoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->fotoRepo = App::make(FotoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateFoto()
    {
        $foto = $this->fakeFotoData();
        $createdFoto = $this->fotoRepo->create($foto);
        $createdFoto = $createdFoto->toArray();
        $this->assertArrayHasKey('id', $createdFoto);
        $this->assertNotNull($createdFoto['id'], 'Created Foto must have id specified');
        $this->assertNotNull(Foto::find($createdFoto['id']), 'Foto with given id must be in DB');
        $this->assertModelData($foto, $createdFoto);
    }

    /**
     * @test read
     */
    public function testReadFoto()
    {
        $foto = $this->makeFoto();
        $dbFoto = $this->fotoRepo->find($foto->id);
        $dbFoto = $dbFoto->toArray();
        $this->assertModelData($foto->toArray(), $dbFoto);
    }

    /**
     * @test update
     */
    public function testUpdateFoto()
    {
        $foto = $this->makeFoto();
        $fakeFoto = $this->fakeFotoData();
        $updatedFoto = $this->fotoRepo->update($fakeFoto, $foto->id);
        $this->assertModelData($fakeFoto, $updatedFoto->toArray());
        $dbFoto = $this->fotoRepo->find($foto->id);
        $this->assertModelData($fakeFoto, $dbFoto->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteFoto()
    {
        $foto = $this->makeFoto();
        $resp = $this->fotoRepo->delete($foto->id);
        $this->assertTrue($resp);
        $this->assertNull(Foto::find($foto->id), 'Foto should not exist in DB');
    }
}
