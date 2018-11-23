<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FotoApiTest extends TestCase
{
    use MakeFotoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateFoto()
    {
        $foto = $this->fakeFotoData();
        $this->json('POST', '/api/v1/fotos', $foto);

        $this->assertApiResponse($foto);
    }

    /**
     * @test
     */
    public function testReadFoto()
    {
        $foto = $this->makeFoto();
        $this->json('GET', '/api/v1/fotos/'.$foto->id);

        $this->assertApiResponse($foto->toArray());
    }

    /**
     * @test
     */
    public function testUpdateFoto()
    {
        $foto = $this->makeFoto();
        $editedFoto = $this->fakeFotoData();

        $this->json('PUT', '/api/v1/fotos/'.$foto->id, $editedFoto);

        $this->assertApiResponse($editedFoto);
    }

    /**
     * @test
     */
    public function testDeleteFoto()
    {
        $foto = $this->makeFoto();
        $this->json('DELETE', '/api/v1/fotos/'.$foto->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/fotos/'.$foto->id);

        $this->assertResponseStatus(404);
    }
}
