<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User; // ユーザモデルを使用すると指定①

class UserController extends Controller
{
 public function show()
 {
     
      $user = User::find(1);

      return view('users.show',[
        
        'user' => $user
        
        ]);
 }
 
 public function new(){
     
  
  
  
 }
 
}