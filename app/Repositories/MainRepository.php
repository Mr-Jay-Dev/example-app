<?php

namespace App\Repositories;

use App\Models\User; // Ensure User model is correctly imported
use App\Interfaces\MainRepositoryInterface;
use Illuminate\Support\Facades\Auth; // Import Auth facade for authentication

class MainRepository implements MainRepositoryInterface
{
    public function create(array $data)
    {
        // Hash the password before storing
        $data['password'] = bcrypt($data['password']);

        return User::create($data); // Assuming User model exists and is correctly implemented
    }

    public function login(array $credentials)
    {
    
        if (Auth::attempt($credentials)) {
            // Authentication successful
            
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
}
