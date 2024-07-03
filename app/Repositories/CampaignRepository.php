<?php

namespace App\Repositories;

use App\Models\Campaigns; // Ensure File model is correctly imported
use App\Interfaces\CampaignRepositoryInterface;
use Illuminate\Support\Facades\Storage; // Import Storage facade for file storage

class CampaignRepository implements CampaignRepositoryInterface
{
    public function all()
    {
        // Return all files from the File model
        return Campaigns::all();
    }

    public function store($data)
    {   
        return Campaigns::create($data);
    }

    public function update(array $data, $id)
    {   
        $user = Campaigns::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function find($id)
    {   
        return Campaigns::findOrFail($id);
    }
}
