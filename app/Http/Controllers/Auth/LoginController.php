<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('salida');
    }
    public function getingreso(){
        return view('auth.login');         
    }
    public function postingreso(Request $request){
        $rules = [
            'usuario' => 'required',
            'password' => 'required'
        ];
        
        $messages = [
            'usuario.required' => 'Es necesario ingresar un usuario',
            'password.required' => 'Es necesario ingresar una contraseña'
        ];
        
        $credentials = $request->only('usuario', 'password');
        $validator = Validator::make($credentials, $rules, $messages);


        if ($validator->fails()) {
            //return dd($request);
            //return redirect()->intended('/home');
            return back()->withErrors($validator)->withInput();
        }else {
            if (Auth::attempt($credentials, true)) {
                //return dd($credentials);
                // Si las credenciales son correctas, el usuario ha sido autenticado
                return redirect()->intended('/home');
            }
            else{
                $message = "El usuario o la contraseña están incorrectas";
                return back()->with(compact('message'));
            }            
            
            
        }        
    }
    public function salida(){
        Auth::logout();
        return redirect('/');
        //return view('auth.login');
    }
}
