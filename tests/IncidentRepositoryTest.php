<?php

use App\Models\Incident;
use App\Repositories\IncidentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IncidentRepositoryTest extends TestCase
{
    use MakeIncidentTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var IncidentRepository
     */
    protected $incidentRepo;

    public function setUp()
    {
        parent::setUp();
        $this->incidentRepo = App::make(IncidentRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateIncident()
    {
        $incident = $this->fakeIncidentData();
        $createdIncident = $this->incidentRepo->create($incident);
        $createdIncident = $createdIncident->toArray();
        $this->assertArrayHasKey('id', $createdIncident);
        $this->assertNotNull($createdIncident['id'], 'Created Incident must have id specified');
        $this->assertNotNull(Incident::find($createdIncident['id']), 'Incident with given id must be in DB');
        $this->assertModelData($incident, $createdIncident);
    }

    /**
     * @test read
     */
    public function testReadIncident()
    {
        $incident = $this->makeIncident();
        $dbIncident = $this->incidentRepo->find($incident->id);
        $dbIncident = $dbIncident->toArray();
        $this->assertModelData($incident->toArray(), $dbIncident);
    }

    /**
     * @test update
     */
    public function testUpdateIncident()
    {
        $incident = $this->makeIncident();
        $fakeIncident = $this->fakeIncidentData();
        $updatedIncident = $this->incidentRepo->update($fakeIncident, $incident->id);
        $this->assertModelData($fakeIncident, $updatedIncident->toArray());
        $dbIncident = $this->incidentRepo->find($incident->id);
        $this->assertModelData($fakeIncident, $dbIncident->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteIncident()
    {
        $incident = $this->makeIncident();
        $resp = $this->incidentRepo->delete($incident->id);
        $this->assertTrue($resp);
        $this->assertNull(Incident::find($incident->id), 'Incident should not exist in DB');
    }
}
