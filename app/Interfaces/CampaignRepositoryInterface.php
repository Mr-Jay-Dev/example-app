<?php

namespace App\Interfaces;

use Flasher\Laravel\Http\Request;

interface CampaignRepositoryInterface {
    public function all();

    public function store($data);

    public function update(array $data, $id);

    public function find($id);
}

