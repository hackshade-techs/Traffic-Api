<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserUpdateAPIRequest;
use App\Http\Requests\API\UpdateUserUpdateAPIRequest;
use App\Models\UserUpdate;
use App\Repositories\UserUpdateRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class UserUpdateController
 * @package App\Http\Controllers\API
 */

class UserUpdateAPIController extends AppBaseController
{
    /** @var  UserUpdateRepository */
    private $userUpdateRepository;

    public function __construct(UserUpdateRepository $userUpdateRepo)
    {
        $this->userUpdateRepository = $userUpdateRepo;
    }

    /**
     * Display a listing of the UserUpdate.
     * GET|HEAD /userUpdates
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userUpdateRepository->pushCriteria(new RequestCriteria($request));
        $this->userUpdateRepository->pushCriteria(new LimitOffsetCriteria($request));
        $userUpdates = $this->userUpdateRepository->all();

        return $this->sendResponse($userUpdates->toArray(), 'User Updates retrieved successfully');
    }

    /**
     * Store a newly created UserUpdate in storage.
     * POST /userUpdates
     *
     * @param CreateUserUpdateAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUserUpdateAPIRequest $request)
    {
        $input = $request->all();

        $userUpdates = $this->userUpdateRepository->create($input);

        return $this->sendResponse($userUpdates->toArray(), 'User Update saved successfully');
    }

    /**
     * Display the specified UserUpdate.
     * GET|HEAD /userUpdates/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var UserUpdate $userUpdate */
        $userUpdate = $this->userUpdateRepository->findWithoutFail($id);

        if (empty($userUpdate)) {
            return $this->sendError('User Update not found');
        }

        return $this->sendResponse($userUpdate->toArray(), 'User Update retrieved successfully');
    }

    /**
     * Update the specified UserUpdate in storage.
     * PUT/PATCH /userUpdates/{id}
     *
     * @param  int $id
     * @param UpdateUserUpdateAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserUpdateAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserUpdate $userUpdate */
        $userUpdate = $this->userUpdateRepository->findWithoutFail($id);

        if (empty($userUpdate)) {
            return $this->sendError('User Update not found');
        }

        $userUpdate = $this->userUpdateRepository->update($input, $id);

        return $this->sendResponse($userUpdate->toArray(), 'UserUpdate updated successfully');
    }

    /**
     * Remove the specified UserUpdate from storage.
     * DELETE /userUpdates/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var UserUpdate $userUpdate */
        $userUpdate = $this->userUpdateRepository->findWithoutFail($id);

        if (empty($userUpdate)) {
            return $this->sendError('User Update not found');
        }

        $userUpdate->delete();

        return $this->sendResponse($id, 'User Update deleted successfully');
    }
}
