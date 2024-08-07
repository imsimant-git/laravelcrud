<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ArticleController extends Controller
{
    public function store()
    {
        $data=[

            "title"=>"hello nepal",
            "description"=>"it is best book",
            "author"=>"harry",

        ];
        DB::table('articles')->insert($data);
        dd('articles created successfully',$data);
    }
    public function list()
    {
        $article=DB:: table('articles')->get();
        dd($article[2]->author);
    }

}
