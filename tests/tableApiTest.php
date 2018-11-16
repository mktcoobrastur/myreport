<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class tableApiTest extends TestCase
{
    use MaketableTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatetable()
    {
        $table = $this->faketableData();
        $this->json('POST', '/api/v1/tables', $table);

        $this->assertApiResponse($table);
    }

    /**
     * @test
     */
    public function testReadtable()
    {
        $table = $this->maketable();
        $this->json('GET', '/api/v1/tables/'.$table->id);

        $this->assertApiResponse($table->toArray());
    }

    /**
     * @test
     */
    public function testUpdatetable()
    {
        $table = $this->maketable();
        $editedtable = $this->faketableData();

        $this->json('PUT', '/api/v1/tables/'.$table->id, $editedtable);

        $this->assertApiResponse($editedtable);
    }

    /**
     * @test
     */
    public function testDeletetable()
    {
        $table = $this->maketable();
        $this->json('DELETE', '/api/v1/tables/'.$table->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/tables/'.$table->id);

        $this->assertResponseStatus(404);
    }
}
