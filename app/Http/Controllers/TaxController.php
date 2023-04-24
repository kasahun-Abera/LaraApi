<?php

namespace App\Http\Controllers;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $taxes = Tax::get();
        if($taxes)
        {
            return response()->json([
                'status'=> '200',
                'taxes'=> $taxes
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
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $test = new Tax();
        $test->rate = $request->rate;
        $test->start_date = $request->start_date;
        $test->end_date = $request->end_date;
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
        $Test = Tax::findOrfail($id);
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
        $row = Tax::find($id);
        $row->rate = $request->rate;
        $row->start_date = $request->start_date;
        $row->end_date = $request->end_date;
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
        $row = Tax::find($id)->delete();
        if($row)
        {
            return response()->json([
                'status'=> 200,
                'message' => 'Tax with rate '.$row->rate.' Deleted Successfully ! '
            ]);
        }
    }
}
