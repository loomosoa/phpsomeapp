<?php
namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\SomeService;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController {



    public function index(Request $request){

        $service = new SomeService();
        $result = $service->getResult();

//        $user = User::find($id);

        $users = User::all();
//        $users = User::where('id','>',4)->count();

//        foreach ($users as $user) {
//            echo $user->email."<br>";
//        }

        return new UserCollection($users);
    }

}
