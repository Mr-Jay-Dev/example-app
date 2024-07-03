<?php

namespace App\Http\Controllers;

use App\Interfaces\CampaignRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Campaigns;

class CampaignController extends Controller
{
    protected $campaignRepository;

    public function __construct(CampaignRepositoryInterface $campaignRepository)
    {
        $this->campaignRepository = $campaignRepository;
    }
    public function index()
    {   
       
        $data = $this->campaignRepository->all();
        return view('page.listing', compact('data'));
        view('page.listing');

       
    }

    public function edit($id)
    {   
    
        $data = $this->campaignRepository->find($id);
        return view('page.listing', compact('data'));
        view('page.listing');
    }


    public function update(Request $request, $id)
    {   
        $request->validate([
            'avatar' => 'required|mimes:png,jpg,jpeg|max:3000',
            'campaign_name' => 'required|string|max:255',
            'user_role' => 'required',
        ]);

        $data = $request->only(['avatar','campaign_name','user_role']);
        $this->campaignRepository->update($data , $id);
        
        toastr()->success('User data update successfully.');
        // Redirect back to a route named 'dataFetch' with a success message
        return redirect('listing')->with('status', 'Data Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|mimes:png,jpg,jpeg|max:3000',
            'campaign_name' => 'required|string|max:255',
            'user_role' => 'required',
        ]);

        $main = $request->file('avatar');
        
        $fileName = $main->getClientOriginalName();
        $path = $main->storeAs('image', $fileName ,'public');
        
        $file = [
            'avatar' => $path,
            'campaign_name' => $request->input('campaign_name'),
            'user_role' => $request->input('user_role'),
        ];
        
       

        $this->campaignRepository->store($file);
        
        toastr()->success('data added successfully.');
        return redirect()->route('dataFetch')->with('success', 'File uploaded successfully.');
    }
}
