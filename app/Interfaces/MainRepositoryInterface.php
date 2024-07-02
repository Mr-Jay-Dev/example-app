<?php

// App/Interfaces/RegistrationRepositoryInterface.php

namespace App\Interfaces;

interface MainRepositoryInterface
{
    public function create(array $data);
    public function login(array $credentials);
}

