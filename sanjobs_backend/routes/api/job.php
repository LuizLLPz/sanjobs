<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Helpers\APIResponse;


Route::post('/job', function (Request $request) {
    $resp = new APIResponse();
    $title = $request->input('title');
    $description = $request->input('description');
    if (!$title || !$description) {
        $resp->message = 'Bad Request';
        return response(
            json_encode($resp),
            400);
    }
    DB::table('Job')->insert([
        'title' => $title,
        'description' => $description,
        'post_date' => now(),
        'company_id' => 1,
        'city_id' => 1
    ]);
    $resp->message = 'Job created successfully';
    return response(
        json_encode($resp),
        201
    );
});
