<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Collection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


route::get("get-employee",[EmployeeController::class,'getEmployee']);


route::get("data",function(){
//    $data = Employee::all();
// Cache::put('key',$data);
    // $value = Cache::get('key');
    $seconds ='';
    $value = cache()->remember('', $seconds, function () {
        return Employee::get();
    });

    $data_array = [];
    $value->chunk(100, function (Collection $flights) {
        foreach ($flights as $datas) {
            $data_array[] = [
                'userId' => $datas->user_id,
                'name' => $datas->employee_name
            ];
        }
    });

    return response()->json([
        'data'=>$data_array
    ]);
});
