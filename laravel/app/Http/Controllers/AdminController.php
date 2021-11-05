<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;



class AdminController extends Controller



{
    use RegistersUsers;
    //protected $redirectTo = '/administrador';
    public function __construct()
    {
        $this->middleware('guest');
    }
    // public function index(Request $request)
    // {

    //    $request->user()->authorizeRoles('admin');
    //     return view('administrador');
    // }

    public function create()
    {
        return view('register-admin');


    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:users'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function store(Request $data){
        $user= User::create([
            //'role' => 'user',
            'name' => $data['name'],
            'surname' => $data['surname'],
            'nick' => $data['nick'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'image' => 'anonimo.png',

        ]);
        $user->roles()->attach(Role::where('name', 'admin')->first());

        //return $user;
        //return view('administrador');
        auth()->login($user);
        //return redirect()->to('administrador');
        return redirect()->back();


    }




}
