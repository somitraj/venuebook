<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Dingo\Api\Exception\ValidationHttpException;
use Venue\ExceptionCode;
use Venue\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Venue\Models\UserInfo;
use Venue\Models\UserVenue;
use Venue\User;

class AuthController extends Controller
{
    use Helpers;

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function Login(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        $validator = Validator::make($credentials, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            throw new ValidationHttpException($validator->errors()->all());
        }

        $user=\Venue\Models\User::where('username','=',$request->username)->first();

        if(!$user)
        {
            throw new \Exception('Invalid username',ExceptionCode::INVALID_USER);
        }

        elseif(!Hash::check($request->password,$user->password))
        {
            throw new \Exception('Invalid Password',ExceptionCode::INVALID_PASSWORD);
        }
        $userinfo=UserInfo::where('user_id','=',$user->id )
            ->where('status_id','=',1)
            ->first();
        if(!$userinfo) {
            throw new \Exception('Invalid user', ExceptionCode::INVALID_USER);

        }

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->response->errorUnauthorized();
            }
        } catch (JWTException $e) {
            return $this->response->error('could_not_create_token', 500);
        }
        $user=\Venue\Models\User::where('username','=',$request->username)->first()->toArray();  //database bata data tanna
        return response()->json(compact('user','token'));
        $userinfo=\Venue\Models\UserInfo::where('user_id','=',$request->id)->where('status_id','=',1)->first()->toArray();
        return response()->json(compact('userinfo','token'));

    }
}
