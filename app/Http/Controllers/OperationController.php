<?php

namespace App\Http\Controllers;

use App\Http\Helper\Constructor;
use App\Http\Helper\Product;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class OperationController extends Controller
{


    public function laravelOperaion()
    {
        // dd("ok");
        // $product = Product::getData(25);
        // dump($product);
        // $number ='10';
        // $data =  (new Constructor($number));
        // dump($data);
        $data['user'] = User::get();
        // dd($user->get());

        // $data = Employee::all();
        // Cache::put('key',$data);
        // $value = Cache::get('key');
        // $data_array = [];
        // $value->chunk(100, function (Collection $flights) {
        //     foreach ($flights as $datas) {
        //         $data_array[] = [
        //             'userId' => $datas->user_id,
        //             'name' => $datas->employee_name
        //         ];
        //     }
        // });

        // return  response()->json([
        //     "record" =>$data_array
        // ]);


        return view("welcome",$data);
    }

    public function employee()
    {
        $data['employee'] = Employee::limit(10)->get();
        return view("employee",$data);
    }

    public function add_employee(Request $request)
    {


        dump($request->fullurl());
        // dd();
        return redirect("employee");
    }
}
