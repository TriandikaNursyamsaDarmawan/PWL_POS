<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
      $user= userModel::firstwhere('level_id',2);
      return view('user', ['data'=>$user]);
}
}
