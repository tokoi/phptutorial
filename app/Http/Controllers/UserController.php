<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User; // ユーザモデルを使用すると指定①

class UserController extends Controller
{
 public function index(Request $req)
 {
     dd(User::all()); // ユーザ一覧を取得②
     return view('users.index', $data);
 }