<?php

use Faker\Factory as Faker;
use App\Models\UserUpdate;
use App\Repositories\UserUpdateRepository;

trait MakeUserUpdateTrait
{
    /**
     * Create fake instance of UserUpdate and save it in database
     *
     * @param array $userUpdateFields
     * @return UserUpdate
     */
    public function makeUserUpdate($userUpdateFields = [])
    {
        /** @var UserUpdateRepository $userUpdateRepo */
        $userUpdateRepo = App::make(UserUpdateRepository::class);
        $theme = $this->fakeUserUpdateData($userUpdateFields);
        return $userUpdateRepo->create($theme);
    }

    /**
     * Get fake instance of UserUpdate
     *
     * @param array $userUpdateFields
     * @return UserUpdate
     */
    public function fakeUserUpdate($userUpdateFields = [])
    {
        return new UserUpdate($this->fakeUserUpdateData($userUpdateFields));
    }

    /**
     * Get fake data of UserUpdate
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUserUpdateData($userUpdateFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'road' => $fake->word,
            'starting_at' => $fake->word,
            'ending_at' => $fake->word,
            'description' => $fake->text,
            'status' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $userUpdateFields);
    }
}
