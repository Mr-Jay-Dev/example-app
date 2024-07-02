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
        return redirect()->route('adduser')->with('success', 'User data added successfully.');
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

        $this->dataRepository->update($data, $id);

        return redirect('dataFetch')->with('status', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->dataRepository->delete($id);
        return redirect()->route('dataFetch')->with('success', 'User data deleted successfully.');
    }
    
}
