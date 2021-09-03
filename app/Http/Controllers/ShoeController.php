<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller
{
    //creating a shoe
    public function createShoe (Request $req) {

        $shoe = new Shoe();
        $shoe->type = $req->input ('type');
        $shoe->brand = $req->input ('brand');
        $shoe->size = $req->input('size');
        $shoe->limited = $req->input('limited');
        $shoe->save();

        return response()->json($shoe);
        
    }
    //getting all shoe
    public function getAllShoe(Request $req){
        $shoe = Shoe::all();
        return response()->json($shoe);
    }
    
    public function getShoeById(Request $req, $id) {
        $shoe = Shoe::find($id);
        return response()->json($shoe);
    }

    public function updateShoeById(Request $req, $id){
        $shoe = Shoe::find($id);
        $shoe->type = $req->input('type');
        $shoe->brand = $req->input('brand');
        $shoe->size = $req->input('size');
        $shoe->limited = $req->input('limited');
        $shoe->save();
        return response()->json($shoe);
    }

    public function deleteShoeById(Request $req, $id) {
        $shoe = Shoe::find($id)->delete();
        return response()->json($shoe);
    }
}
