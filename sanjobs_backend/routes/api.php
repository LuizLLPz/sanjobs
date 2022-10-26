<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

class APIResponse {
    public String $message;
    public mixed $data;
}


Route::post('/session', function (Request $request) {
    $resp = new APIResponse();
    $email = $request->input('email');
    $password = $request->input('password');
    if (!$email || !$password) {
        $resp->message = 'BAD REQUEST';
        return response (
            json_encode($resp),
            400);
    }

    $user = DB::table('User')->where('email', $email)->limit(1)->first();
    if (!$user) {
        $resp->message = 'User not found!';
        return response (
            json_encode($resp),
            404
        );
    }

    if (!Hash::check($password, $user->password)) {
        $resp->message = 'Incorrect Credentials';
        return response(
            json_encode($resp),
            401
        );
    }

    $resp->message = 'Logged in Successfully!';
    $resp->data = $user;
    return response(json_encode($resp));
});
