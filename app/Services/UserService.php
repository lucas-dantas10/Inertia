<?php 

namespace App\Services;

use App\Repository\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(
        protected UserRepository $userRepository
    )
    {}

    public function getAllUsers(): Collection
    {
        return $this->userRepository->all();
    }       
}