<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    public function create(array $data): User
    {
        // Add implementation logic for creating a new User object using the $data array
        // TODO: Implement create method logic
    }

    public function find(int $id): ?User
    {
        // Add implementation logic for finding a User object with the given $id
        // TODO: Implement find method logic
    }

    public function update(User $user, array $data): bool
    {
        // Add implementation logic for updating the User object with the given $data
        // TODO: Implement update method logic
    }

    public function delete(User $user): bool
    {
        // Add implementation logic for deleting the User object
        // TODO: Implement delete method logic
    }
}