<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
class CourseController extends Controller
{
    public function addCategory(){
        $categories = Category::paginate(10);
        return view('/add-category',compact('categories'));
    }

   

    public function createCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        $categories = new Category;
        $categories->category_name = $request->category_name;
        $categories->save();
        return back()->with('add-category','Category record successfully Added ');
    }
    public function editCategory($id){
        $categories = Category::find($id);
        return view('/edit-category',compact('categories'));
    }

    public function updateCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);
        $categories = Category::find($request->id);
        $categories->category_name = $request->category_name;
        $categories->save();
        session()->flash('update-category','Category Updated Successfully!');
        return redirect('/add-category');
        
    }

    public function categoryDelete($id){
        Category::where('id',$id)->delete();
        return back()->with('delete-category','Category record Deleted Successfully !');
    }



    
}
