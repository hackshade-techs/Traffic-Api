<?php

use Faker\Factory as Faker;
use App\Models\Incident;
use App\Repositories\IncidentRepository;

trait MakeIncidentTrait
{
    /**
     * Create fake instance of Incident and save it in database
     *
     * @param array $incidentFields
     * @return Incident
     */
    public function makeIncident($incidentFields = [])
    {
        /** @var IncidentRepository $incidentRepo */
        $incidentRepo = App::make(IncidentRepository::class);
        $theme = $this->fakeIncidentData($incidentFields);
        return $incidentRepo->create($theme);
    }

    /**
     * Get fake instance of Incident
     *
     * @param array $incidentFields
     * @return Incident
     */
    public function fakeIncident($incidentFields = [])
    {
        return new Incident($this->fakeIncidentData($incidentFields));
    }

    /**
     * Get fake data of Incident
     *
     * @param array $postFields
     * @return array
     */
    public function fakeIncidentData($incidentFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'road' => $fake->word,
            'starting_at' => $fake->word,
            'ending_at' => $fake->word,
            'status' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $incidentFields);
    }
}
