<?php

namespace App\Repositories;

use App\Models\Incident;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IncidentRepository
 * @package App\Repositories
 * @version November 13, 2017, 11:05 am UTC
 *
 * @method Incident findWithoutFail($id, $columns = ['*'])
 * @method Incident find($id, $columns = ['*'])
 * @method Incident first($columns = ['*'])
*/
class IncidentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'road',
        'starting_at',
        'ending_at',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Incident::class;
    }
}
