<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = DB::table('posts')->select('excerpt', 'description')->get();

        return $posts;
        // print_r($posts);

    }


    public function FirstRecord()
    {
        $posts = DB::table('posts')
                ->where('id', 2)
                ->first();

        echo $posts->description;
    }


    public function PluckValue()
    {
        $posts = DB::table('posts')
                ->where('id', 2)
                ->pluck('description');

        return $posts;
        // print_r($posts);

    }


    public function UseSelectQuery()
    {
        $posts = DB::table('posts')
                ->select('title')
                ->get();

        return $posts;
        // print_r($posts);

    }


    public function InsertData(Request $request)
    {
        $result = DB::table('posts')->insert([
                    'title' => 'X',
                    'slug' => 'X',
                    'excerpt' => 'excerpt',
                    'description' => 'description',
                    'is_published' => true,
                    'min_to_read' => 2,
                ]);

        var_dump($result);

    }


    public function updateData(Request $request, string $id)
    {
        $affectedRows = DB::table('posts')
                        ->where('id', $id)
                        ->update([
                            'excerpt' => 'Laravel 10',
                            'description' => 'Laravel 10',
                        ]);
        echo "Number of affected rows: " . $affectedRows;

    }


    public function deleteData(string $id)
    {
        $affectedRows = DB::table('posts')
                        ->where('id', $id)
                        ->delete();

        echo "Number of affected rows: " . $affectedRows;

    }
    public function ConditionalData()
    {
        $posts = DB::table('posts')
                    ->whereBetween('min_to_read', [1, 5])
                    ->get();

        return $posts;
        // print_r($posts);

    }
    public function MinToRead()
    {
        $affectedRows = DB::table('posts')
                        ->where('id', 3)
                        ->increment('min_to_read', 1);

        echo "Number of affected rows: " . $affectedRows;
    }
}
