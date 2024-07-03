<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\DataRepositoryInterface;

class UserController extends Controller
{
    protected $dataRepository;

    public function __construct(DataRepositoryInterface $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    public function openMain()
    {
        return view('welcome');
    }

    public function addUser()
    {
        return view('page.adduser');
    }


    public function addUserData(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'address1' => 'required',
            'address2' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
        ]);

        $data = $request->only([
            'firstname', 'lastname', 'country', 'address1', 'address2', 'city', 'state', 'postcode', 'billing'
        ]);

        $this->dataRepository->create($data);

        toastr()->success('User data added successfully.');
        return redirect()->route('dataFetch')->with('success', 'User data added successfully.');
    }

    public function dataFetch()
    {

        $data = $this->dataRepository->all();
        return view('page.usertable', compact('data'));
        view('page.usertable');
    }

    public function edit($id)
    {
        $data = $this->dataRepository->find($id);
        return view('page.edit', compact('data'));
        view('page.edit');
    }


    public function update(Request $request, $id)
{
    // Validate incoming request data
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'country' => 'required',
        'address1' => 'required',
        'address2' => 'nullable',
        'city' => 'required',
        'state' => 'required',
        'postcode' => 'required',
    ]);

    // Extract only the allowed fields from the request
    $data = $request->only([
        'firstname', 'lastname', 'country', 'address1', 'address2', 'city', 'state', 'postcode', 'billing'
    ]);

    // Assuming $this->dataRepository refers to a repository/service responsible for data operations
    // Update the record in the database using the extracted data and the provided $id
    $this->dataRepository->update($data, $id);

    toastr()->success('User data update successfully.');
    // Redirect back to a route named 'dataFetch' with a success message
    return redirect('dataFetch')->with('status', 'Data Updated Successfully');
}


    public function delete($id)
    {
        $this->dataRepository->delete($id);
        toastr()->success('User data delete successfully.');
        return redirect()->route('dataFetch')->with('success', 'User data deleted successfully.');
    }
    
}
