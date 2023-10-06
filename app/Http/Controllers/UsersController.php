<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Services\SomeService;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController {



    public function index(Request $request, int $id){

        $service = new SomeService();
        $result = $service->getResult();

        $user = User::find($id);

        return $user->email;
    }

}
