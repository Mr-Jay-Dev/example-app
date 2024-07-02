<?php

// App/Http/Controllers/UserRegistration.php

namespace App\Http\Controllers;

use App\Interfaces\MainRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    protected $mainRepository;

    public function __construct(MainRepositoryInterface $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function signUp()
    {
        return view('page.usersignup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $data = $request->only(['name', 'email', 'password']);

        $user = $this->mainRepository->create($data);

        if ($user) {
            // Login the user after registration
            auth()->login($user);
            return redirect()->route('signIn')->with('success', 'User registered and logged in successfully.');
        } else {
            return back()->withErrors(['error' => 'Failed to register user.']);
        }
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        $con = $this->mainRepository->login($credentials);
       
        if ($con) {
            toastr()->success('You have successfully logged in!');
            return redirect()->intended('/dashboard');
        } else {
            toastr()->error('An error has occurred please try again later.');

            return back();
        }
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function signIn()
    {
        return view('page.usersignin');
    }
}
