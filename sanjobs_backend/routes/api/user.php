<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use App\Helpers\APIResponse;

Route::post('/user', function (Request $request) {
    $name = $request->input('name');
    $surname = $request->input('surname');
    $email = $request->input('email');
    $password = $request->input('password');
    $overview = $request->input('overview');
    $resp = new APIResponse();
    if (!$name || !$surname || !$email || !$password || !$overview) {
        $resp->message = 'Bad Request';
        return response(
            json_encode($resp),
            400);
    }

    $id = DB::table('User')->insertGetId([
        'name' => $name,
        'surname' => $surname,
        'email' => $email,
        'password' => Hash::make($password),
        'overview' => $overview,
        'created_at' => now(),
    ]);
    $sid = uniqid().$id;
    Redis::set($sid, $id);
    $resp->message = 'User registered successfully';
    $resp->data = $id;
    return response(
        json_encode($resp)
    )->cookie('sid', $sid, 2 * 24 * 60);


});
