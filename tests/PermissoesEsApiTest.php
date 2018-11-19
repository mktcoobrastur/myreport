<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissoesEsApiTest extends TestCase
{
    use MakePermissoesEsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePermissoesEs()
    {
        $permissoesEs = $this->fakePermissoesEsData();
        $this->json('POST', '/api/v1/permissoesEs', $permissoesEs);

        $this->assertApiResponse($permissoesEs);
    }

    /**
     * @test
     */
    public function testReadPermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $this->json('GET', '/api/v1/permissoesEs/'.$permissoesEs->id);

        $this->assertApiResponse($permissoesEs->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $editedPermissoesEs = $this->fakePermissoesEsData();

        $this->json('PUT', '/api/v1/permissoesEs/'.$permissoesEs->id, $editedPermissoesEs);

        $this->assertApiResponse($editedPermissoesEs);
    }

    /**
     * @test
     */
    public function testDeletePermissoesEs()
    {
        $permissoesEs = $this->makePermissoesEs();
        $this->json('DELETE', '/api/v1/permissoesEs/'.$permissoesEs->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/permissoesEs/'.$permissoesEs->id);

        $this->assertResponseStatus(404);
    }
}
