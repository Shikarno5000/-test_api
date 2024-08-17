<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['login', 'register']]);
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);
    $credentials = $request->only('email', 'password');

    $token = Auth::attempt($credentials);
    if (!$token) {
      return $this->errorResponse('Неправильный логин или пароль', 'Ошибка авторизации', 403);
    }

    return $this->goodResponse([
      'user_id' => Auth::user()->id,
      'token' => $token,
    ]);
  }


  public function logout()
  {
    Auth::logout();
    return $this->goodResponse(true);
  }

  public function user()
  {
    return response()->json([
      'success' => true,
      'user' => Auth::user(),
      'token' => Auth::refresh(),
    ]);
  }

  public function refresh()
  {
    return response()->json([
      'success' => true,
      'user' => Auth::user(),
      'token' => Auth::refresh(),
    ]);
  }
}
