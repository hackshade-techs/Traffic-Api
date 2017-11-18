<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IncidentApiTest extends TestCase
{
    use MakeIncidentTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateIncident()
    {
        $incident = $this->fakeIncidentData();
        $this->json('POST', '/api/v1/incidents', $incident);

        $this->assertApiResponse($incident);
    }

    /**
     * @test
     */
    public function testReadIncident()
    {
        $incident = $this->makeIncident();
        $this->json('GET', '/api/v1/incidents/'.$incident->id);

        $this->assertApiResponse($incident->toArray());
    }

    /**
     * @test
     */
    public function testUpdateIncident()
    {
        $incident = $this->makeIncident();
        $editedIncident = $this->fakeIncidentData();

        $this->json('PUT', '/api/v1/incidents/'.$incident->id, $editedIncident);

        $this->assertApiResponse($editedIncident);
    }

    /**
     * @test
     */
    public function testDeleteIncident()
    {
        $incident = $this->makeIncident();
        $this->json('DELETE', '/api/v1/incidents/'.$incident->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/incidents/'.$incident->id);

        $this->assertResponseStatus(404);
    }
}
