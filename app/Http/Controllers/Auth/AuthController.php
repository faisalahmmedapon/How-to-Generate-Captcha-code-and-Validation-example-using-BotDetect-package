<?php


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    protected $redirectTo = '/';


    /**

     * Create a new authentication controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest', ['except' => 'logout']);
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

            'name' => 'required|max:255',

            'email' => 'required|email|max:255|unique:users',

            'password' => 'required|confirmed|min:6',

        ]);
    }


    /**

     * Create a new user instance after a valid registration.

     *

     * @param  array  $data

     * @return User

     */

    protected function create(array $data)

    {

        return User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => bcrypt($data['password']),

        ]);
    }


    public function webRegister()

    {

        return view('webRegister');
    }


    public function webRegisterPost(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|same:password_confirmation',

            'password_confirmation' => 'required',

            'CaptchaCode' => 'required|valid_captcha'

        ]);

        print('write your other code here.');
    }
}
