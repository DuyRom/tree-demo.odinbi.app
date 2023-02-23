<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    /**
     * Get all users.
     *
     * @return mixed
     */
    public function allUsers()
    {
        return $this->model->all();
    }

    /**
     * Find a user by email.
     *
     * @param string $email
     * @return mixed
     */
    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }
}
