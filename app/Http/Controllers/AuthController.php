<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request){
        return User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);
    }
    public function login(Request $request){
        if(!Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ])){
            return response([
                "message"=>"Invalid Credidential"
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        return response([
                "message"=> "User created",
                "token"=>$token
        ]);

    }
    public function user(){
        return Auth::user();
    }
    
    public function logout(Request $request){
        if(!$request->user()->currentAccessToken()->delete()){
            return response([
                "message"=>"Error"
            ]);
        }
        return response([
            "message"=>"Logged out"
        ]);
    }
}
