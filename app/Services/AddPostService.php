<?php


namespace App\Services;


use App\AddPostModel;

class AddPostService
{
    public function save($request)
    {
        $post = new AddPostModel();

        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->text = $request->text;

        $post->save();

        return;
    }

}
