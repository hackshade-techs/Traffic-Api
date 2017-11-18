<?php

namespace App\Repositories;

use App\Models\UserUpdate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserUpdateRepository
 * @package App\Repositories
 * @version November 13, 2017, 11:18 am UTC
 *
 * @method UserUpdate findWithoutFail($id, $columns = ['*'])
 * @method UserUpdate find($id, $columns = ['*'])
 * @method UserUpdate first($columns = ['*'])
*/
class UserUpdateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'road',
        'starting_at',
        'ending_at',
        'description',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserUpdate::class;
    }
}
