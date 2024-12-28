<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    function createArtical(Request $request)
    {
        return $request->user();
        $artical = Artical::create([
            'title' => "Wether",
            'body' => "japj9e9fe9fue9f"
        ]);

        return $artical;
    }

    function allArticals(){
        return Artical::all();
    }

    function showArtical($id){
        $artical = Artical::findOrFail($id);
        return $artical;
    }

    function deleteArtical($id){
        $artical = Artical::findOrFail($id);
        $artical->delete();
        return response()->json(['msg' => "Artical is Deletesd successfully"]);
    }

    function update(Request $request, $id){

        $artical = Artical::findOrFail($id);
        $artical->title = $request->input('title');
        $artical->body = $request->input('body');

        return response()->json(
            [
                'msg' => 'Updated Successfully',
                'data' => [
                    $artical
                ]
            ]
        );

    }
}
