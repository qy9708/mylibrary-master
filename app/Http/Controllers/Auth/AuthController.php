<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use JWTFactory;
use JWTAuth;
use Response;


class AuthController extends Controller
{
    //
    /**
 * Create a new AuthController instance.
 *
 * @return void
 */

 /**
 * Get a JWT via given credentials.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function register(Request $request)
{
    /*
    $request->validate(
        [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            
        ]
    );
    */
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|string|email|max:255|unique:users',
        'password'=> 'required|string|min:5|confirmed',
    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors());
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->role = 'member';
    $user->save();

    $token = JWTAuth::fromUser($user);
    //return Response::json(compact('token'));
    return $this->respondWithToken($token);

}
/*
public function login()
 {
 $credentials = request(['email','password','role']);
 if (!$token = auth()->attempt($credentials)) {
 return response()->json(['error' => 'Unauthorized'], 401);
 }
 return $this->respondWithToken($token);
 return response()->json(auth()->user()->role);
 }
 */
public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required',
            'role'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $credentials = $request->only('email', 'password','role');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return $this->respondWithToken($token);
        response()->json(auth()->user()->role);
    }
 /**
 * Get the authenticated User.
 *
 * @return \Illuminate\Http\JsonResponse
 */
 public function me()
 {
 return response()->json(auth()->user());
 }
 /**
 * Log the user out (Invalidate the token).
 *
 * @return \Illuminate\Http\JsonResponse
 */
 public function logout()
 {
 auth()->logout();
 return response()->json(['message' => 'Successfully logged out']);
 }
 /**
 * Refresh a token.
 *
 * @return \Illuminate\Http\JsonResponse
 */
 public function refresh()
 {
 return $this->respondWithToken(auth()->refresh());
 }
 /**
 * Get the token array structure.
 *
 * @param string $token
 *
 * @return \Illuminate\Http\JsonResponse
 */
 protected function respondWithToken($token)
 {
 return response()->json([
 'access_token' => $token,
 'token_type' => 'bearer',
 'expires_in' => auth()->factory()->getTTL() * 60
 ]);
 }
}
