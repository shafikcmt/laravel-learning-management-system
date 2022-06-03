<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qcategory;
use App\Models\Qtopic;
use Illuminate\Support\Facades\DB;
class QuestionsController extends Controller
{
    public function addTopic(){
        $topics = DB::table('qcategories')
        ->leftJoin('qtopics', 'qcategories.id', '=', 'qtopics.qcategory_id')
        ->get();
        $categories = Qcategory::all();
        return view('/questions-topic',compact('categories','topics'));
    }
    public function createTopic(Request $request){
        $request->validate([
            'topic_name' => 'required',
        ]);
        $qcategory = Qcategory::find($request->category_id);
        $topics = new Qtopic;
        $topics->topic_name = $request->topic_name;
        $qcategory->qtopic()->save($topics);
        return back()->with('add-topic','Topic added successfully !');
    }
    public function editTopic($id){
        $topics = DB::table('qcategories')
        ->leftJoin('qtopics', 'qcategories.id', '=', 'qtopics.qcategory_id')
        ->get();
        $categories = Qcategory::all();
        return view('/edit-topic',compact('categories'));
    }

    public function addCategory(){
        $categories = Qcategory::all();
        return view('/questions-category',compact('categories'));
    }

    public function createQcategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:qcategories',
        ]);

        $categories = new Qcategory;
        $categories->category_name = $request->category_name;
        $categories->save();
        return back()->with('add-category','Category record successfully Added !');
    }
    public function editQcategory($id){
        $categories = Qcategory::find($id);
        return view('/edit-qcategory',compact('categories'));
    }

    public function updateQcategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:qcategories',
        ]);
        $categories = Qcategory::find($request->id);
        $categories->category_name = $request->category_name;
        $categories->save();
        return back()->with('update-category','Category Updated Successfully !');
        return redirect('/edit-qcategory');
    }

    public function deleteQcategory($id){
        Qcategory::where('id',$id)->delete();
        return back()->with('delete-category','Category record Deleted Successfully !');
    }



}
