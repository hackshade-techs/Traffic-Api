<?php

use App\Models\UserUpdate;
use App\Repositories\UserUpdateRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserUpdateRepositoryTest extends TestCase
{
    use MakeUserUpdateTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var UserUpdateRepository
     */
    protected $userUpdateRepo;

    public function setUp()
    {
        parent::setUp();
        $this->userUpdateRepo = App::make(UserUpdateRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateUserUpdate()
    {
        $userUpdate = $this->fakeUserUpdateData();
        $createdUserUpdate = $this->userUpdateRepo->create($userUpdate);
        $createdUserUpdate = $createdUserUpdate->toArray();
        $this->assertArrayHasKey('id', $createdUserUpdate);
        $this->assertNotNull($createdUserUpdate['id'], 'Created UserUpdate must have id specified');
        $this->assertNotNull(UserUpdate::find($createdUserUpdate['id']), 'UserUpdate with given id must be in DB');
        $this->assertModelData($userUpdate, $createdUserUpdate);
    }

    /**
     * @test read
     */
    public function testReadUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $dbUserUpdate = $this->userUpdateRepo->find($userUpdate->id);
        $dbUserUpdate = $dbUserUpdate->toArray();
        $this->assertModelData($userUpdate->toArray(), $dbUserUpdate);
    }

    /**
     * @test update
     */
    public function testUpdateUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $fakeUserUpdate = $this->fakeUserUpdateData();
        $updatedUserUpdate = $this->userUpdateRepo->update($fakeUserUpdate, $userUpdate->id);
        $this->assertModelData($fakeUserUpdate, $updatedUserUpdate->toArray());
        $dbUserUpdate = $this->userUpdateRepo->find($userUpdate->id);
        $this->assertModelData($fakeUserUpdate, $dbUserUpdate->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteUserUpdate()
    {
        $userUpdate = $this->makeUserUpdate();
        $resp = $this->userUpdateRepo->delete($userUpdate->id);
        $this->assertTrue($resp);
        $this->assertNull(UserUpdate::find($userUpdate->id), 'UserUpdate should not exist in DB');
    }
}
