<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function signin(Request $request){
         $validatedData = $request -> validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
         ]);

         if(auth()->attempt(['name'=>$validatedData['loginname'], 'password' => $validatedData['loginpassword'] ])){
           $request->session()->regenerate();       
     
         }
         return redirect('/');

    }
    public function logout (){
         auth()->logout();
         return redirect('/');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name') ],
            'phone' => ['required', 'min:10', 'max:15'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required', 'min:8', 'max:100'],
            
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        auth()->login($user);

        return view('users.index');
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