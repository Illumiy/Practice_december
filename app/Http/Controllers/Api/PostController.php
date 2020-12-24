<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


//Контроллер для работы с таблицей Post
class PostController extends Controller
{

    // Вывод всех записей
    public function index()
    {
        return Post::all();
    }


    // Создание записи
    public function store(Request $request)
    {
            $validator = Validator::make(
                $request->all(),
                [
                    "title" => ["required"],
                    "descr" => ["required"],
                    "type" => ["required"]
                ]
            );
    
            if ($validator->fails()) {//Валидация
                return [
                    "status" => false,
                    "errors" => $validator->messages()
                ];
            }
            $post = Post::create([
                "title" => $request->title,
                "descr" => $request->descr,
                "type" => $request->type
            ]);
            return[
                "status"=>true,
                "post"=>$post
            ];
    }

    // Вывод записи по первичному ключу
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

     //Изменение по номеру записи
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title=$request->title;
        $post->descr=$request->descr;
        $post->type=$request->type;
        if($post->save())
        {
            return new PostResource($post);
        }
    }

    //Удаление записи
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if($post->delete()){
            return new PostResource($post);
        }
    }
}
