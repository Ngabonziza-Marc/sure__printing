<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{    
    public function __construct()
    {
        $user=Auth::user();
        if(!$user){
            return redirect('/user/login');
        }
    } 
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }
        public function login()
    {
        return view('login');
    }

    public function create()
    {
        return view('users.create');
    }
    public function sign()
    {
        return view('users.login');
    }
    public function signin(Request $request){
         $validatedData = $request -> validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
         ]);

         if(auth()->attempt(['name'=>$validatedData['loginname'], 'password' => $validatedData['loginpassword'] ])){
           $request->session()->regenerate();   

           return redirect('index');

         }else{
            return redirect('/');
         }

    }
        public function logout (){
         auth()->logout();
         return redirect('/');
    }
        public function about(){
         return view('about');
   }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name') ],
            'phone' => ['required', 'min:10', 'max:15'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required', 'min:8', 'max:50'],
            
        ],
        [
            'name.required' => 'Name is required',
            'phone.required' => 'Phone number is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'password is required',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        auth()->login($user);

        return redirect('/user/login')->with('success','User created successifully');

    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:15'],
            'phone' => ['required', 'min:10', 'max:15'],
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => ['required', 'min:8', 'max:100'],
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}