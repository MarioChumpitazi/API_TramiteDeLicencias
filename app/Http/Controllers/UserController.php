<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth;
use App\Models\User;

class UserController extends Controller
{
    // public function login(){
    //     $data=[
    //         'email'=>request('email'),
    //         'password'=>request('password')
    //     ];
    //     if(Auth::attempt($data)){
    //         $user= Auth::user();
    //         $loginData['token']=$user->createToken('EDtoken')->accessToken;

    //         return response()->json([
    //             "message"=>"Bienvenido",
    //             "data"=>$loginData
    //         ],200);

    //     } else{
    //         return response()->json([
    //             "message"=>"Error en el login"
    //         ],401);
    //     }

    // }
    // public function login(Request $request)
    // {
    //     $user = User::where('email', $request->email)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
    //         $token = $user->createToken('edtoken')->accessToken;

    //         return response()->json(["message"=>"Bienvenido",'token' => $token], 200);
    //     }else{

    //     return response()->json(['error' => 'Invalid Credentials'], 401);}
    // }

    public function register(Request $request){
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $loginData['token'] = $user->createToken('token')->accessToken;
            return response()->json([
                "message"=>"Bienvenido",
                "data"=>$loginData,
        ],200);

    }

    // public function register(Request $request) {
    //     $fields = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string|unique:users,email',
    //         'password' => 'required|string|confirmed'
    //     ]);

    //     $user = User::create([
    //         'name' => $fields['name'],
    //         'email' => $fields['email'],
    //         'password' => bcrypt($fields['password'])
    //     ]);

    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];


    // }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


}
