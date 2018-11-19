<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissoesApiTest extends TestCase
{
    use MakePermissoesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePermissoes()
    {
        $permissoes = $this->fakePermissoesData();
        $this->json('POST', '/api/v1/permissoes', $permissoes);

        $this->assertApiResponse($permissoes);
    }

    /**
     * @test
     */
    public function testReadPermissoes()
    {
        $permissoes = $this->makePermissoes();
        $this->json('GET', '/api/v1/permissoes/'.$permissoes->id);

        $this->assertApiResponse($permissoes->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePermissoes()
    {
        $permissoes = $this->makePermissoes();
        $editedPermissoes = $this->fakePermissoesData();

        $this->json('PUT', '/api/v1/permissoes/'.$permissoes->id, $editedPermissoes);

        $this->assertApiResponse($editedPermissoes);
    }

    /**
     * @test
     */
    public function testDeletePermissoes()
    {
        $permissoes = $this->makePermissoes();
        $this->json('DELETE', '/api/v1/permissoes/'.$permissoes->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/permissoes/'.$permissoes->id);

        $this->assertResponseStatus(404);
    }
}
