<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\MessageBag;
use RealRashid\SweetAlert\Facades\Alert;


class UserloginController extends Controller
{


    public function __construct()

    {
    $this->middleware('guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('client.login');
    }
    public function register()
    {
        return view('client.register');
    }
    public function auth(Request $request)
    {
         request()->validate([
             'email'=>'required',
             'password'=>'required',
         ]);
         $credentials = $request->only('email','password');
         //dd($credentials);
         if(Auth::attempt($credentials))
         {
             if(Auth()->user()->group ==0){
                Alert::success('Success', 'Login Successfull');
                return redirect(route('user.dash'));
             }
             elseif(Auth()->user()->group ==1){
               // Alert::success('Success', 'Login Successfull');
                return redirect(route('user.merdash'));
             }
             elseif(Auth()->user()->group ==2){
               // Alert::success('Success', 'Login Successfull');
                return redirect(route('user.traindash'));
             }

         }
         Alert::error('Login Error', 'Please check your credentials');

           $errors = new MessageBag(['passwords' => ['Email / Password invalid.']]);
           return redirect()->back()->withInput($request->all())->withErrors($errors);
    }

    public function registersave(Request $request)
    {
        $rules=[

            'email' => 'required|email|unique:users,email',
            'mobile'=>'required|string|min:10|max:12|unique:users,mobile',
            'name'=>'required',
            'password'=>'required',
            'confirm_password'=>['same:password'],
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            Alert::error('Validation error', 'Please enter valid information');

            return redirect()->back()->withInput($request->all())->withErrors($validator);



        }
        else{


        $data = $request->all();
     // dd($data);
      $password=$request->input('password');
      // $password='password';
      // dd($password);
     // 'password' => Hash::make($password);
      $pass= Hash::make($password);




        $userreg = new User;
       // dd($userreg);
       $uuid = Str::uuid()->toString();
        $userreg->name = $data['name'];
        $userreg->email = $data['email'];
        $userreg->password = $pass;
        $userreg->mobile = $data['mobile'];
        $userreg->uuid = $uuid;

        $userreg->save();
        Alert::success('Success', 'Account created successfully');
      //  $request->session()->put('user',$userreg->id);
        return redirect(route('user.login'));


        }



    }





    public function logout(){
        Auth::logout();
        return redirect(route('home'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
