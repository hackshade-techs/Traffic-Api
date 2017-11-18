<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserUpdateApiTest extends TestCase
{
    use MakeUserUpdateTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateUserUpdate()
    {
        $userUpdate = $this->fakeUserUpdateData();
        $this->json('POST', '/api/v1/userUpdates', $userUpdate);

        $this->assertApiResponse($userUpdate);
    }

    /**
     * @test
     */
    public function testReadUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $this->json('GET', '/api/v1/userUpdates/'.$userUpdate->id);

        $this->assertApiResponse($userUpdate->toArray());
    }

    /**
     * @test
     */
    public function testUpdateUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $editedUserUpdate = $this->fakeUserUpdateData();

        $this->json('PUT', '/api/v1/userUpdates/'.$userUpdate->id, $editedUserUpdate);

        $this->assertApiResponse($editedUserUpdate);
    }

    /**
     * @test
     */
    public function testDeleteUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $this->json('DELETE', '/api/v1/userUpdates/'.$userUpdate->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/userUpdates/'.$userUpdate->id);

        $this->assertResponseStatus(404);
    }
}
