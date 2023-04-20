<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();
        if($articoles)
        {
            return response()->json([
                'status'=> '200',
                'articles'=> $articles
            ]);
        }
        else
        {
            return response()->json([
                'status'=> '300',
                'message'=> 'Something Went Wrong'
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $test = new Article();
        $test->title = $request->title;
        $test->body = $request->body;
        $test->save();
        if($test)
        {
            return response()->json([
                'status'=> '200',
                'message' => 'Saved Successfully !',
                'test' => $test
            ]);
        }
        else
        {
            return response()->json([
                '400 error' => 'something went wrong'
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
