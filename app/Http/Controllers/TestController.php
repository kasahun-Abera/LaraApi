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
        $articles = Article::orderBy('created_at', 'desc')->get();
        if($articles)
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
        $Test = Article::findOrfail($id);
        if(isset($Test))
        {
            return response()->json([
                'status' => '200',
                'msg' => 'success',
                'record' => $Test
            ]);
        }
        else
        {
            $message = "Record not found with this id ";
            return response()->json($message, 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Article::find($id);
        $row->title = $request->title;
        $row->body = $request->body;
        $row->save();
        return response()->json([
            'status' => 200,
            'row' => $row,
            'message' => 'Row  Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the row
        $row = Article::find($id)->delete();
        if($row)
        {
            return response()->json([
                'status'=> 200,
                'message' => 'Row------------'.$row.'--------deleted Successfully'
            ]);
        }
    }
}
