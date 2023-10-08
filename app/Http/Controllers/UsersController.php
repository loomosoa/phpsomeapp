<?php
namespace App\Http\Controllers;

use App\Http\Resources\PhoneResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Services\SomeService;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Collection;

class UsersController extends BaseController {



    public function index(Request $request, int $id){

        $service = new SomeService();
        $result = $service->getResult();

//        $user = User::find($id);

//        $users = User::all();
//        $users = User::where('id','>',4)->count();

//        foreach ($users as $user) {
//            echo $user->email."<br>";
//        }

//        return new UserCollection($users);


//        $user = User::find($id);
//        $phone = $user->phone;
//
//        /**
//         *@var Collection $phones
//         */
//        $phones = Phone::where('user_id', $id)->get();
//        $userName = $phones->first()->user->name;
//        return PhoneResource::collection($phones);

//        $post = Post::find(11);

//        $comments = $post->comments;

//        $comment = Comment::find(5);
//
//        $post = $comment->post->title;

        $user = User::find($id);

//        $posts = Post::whereBelongsTo($user)->get();
        $comments = $user->comments;

        $roles = $user->roles;

        return $roles;
    }

}
