<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
class AddCategory extends Component
{
    public $category_name;
    public $cat_items;
    // public $updateMode = false;
    public function render()
    {
        $categories = Category::orderBy('id','DESC')->get();
        // $categories = Category::all();
        return view('livewire.add-category',['categories'=>$categories]);
    }
    private function resetInput(){
        $this->category_name = null;
    }
    public function insertCategory(){
        $this->validate([
           'category_name' => 'required' 
        ]);
       $category = new Category;
       $category->category_name = $this->category_name;
       $category->save();
        session()->flash('message','Category Added Successfully.');
        return redirect('add-category');
    }
    public function delete($id){
        Category::find($id)->delete();
        session()->flash('message','Category Deleted');
    }

    // public function edit($id){
    //     $this->updateMode = true;
    //     $category = Category::where('id',$id)->first();
    //     $this->id = $id;
    //     $this->category_name = $category->category_name;
    //     }
  
}
