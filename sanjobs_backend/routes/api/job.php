<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Helpers\APIResponse;

Route::get('/jobs', function (Request $request) {
    $resp = new APIResponse();
    $jobs = DB::table('Job as j')
        ->join('User as company', 'company.id', '=', 'j.company_id')
        ->join('City as ci', 'ci.id',   '=', 'j.city_id')
        ->select('j.title',
            'j.description',
            'j.post_date as postDate',
            DB::raw('(SELECT JSON_OBJECT("name", name, "email", email) FROM User WHERE id = j.company_id) as company'),
            'ci.name as city')->get();
    $resp->data = $jobs;

    if (count($jobs) > 0) {
        $resp->message = "Jobs found";
        return json_encode($resp);
    } else {
        $resp->message = "No jobs found";
        return response(json_encode($resp), 404);
    }
});


Route::post('/jobs', function (Request $request) {
    $resp = new APIResponse();
    $title = $request->input('title');
    $description = $request->input('description');
    $company_id = $request->input('company_id');
    $city_id = $request->input('city_id');
    if (!$title || !$description) {
        $resp->message = 'Bad Request';
        return response(
            json_encode($resp),
            400);
    }
    DB::table('Job')->insert([
        'title' => $title,
        'description' => $description,
        'postDate' => now(),
        'company_id' => $company_id,
        'city_id' => $city_id,
    ]);
    $resp->message = 'Job created successfully';
    return response(
        json_encode($resp),
        201
    );
});
