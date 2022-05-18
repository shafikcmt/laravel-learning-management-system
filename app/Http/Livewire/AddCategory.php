<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
class AddCategory extends Component
{
    public $category_name;
    public $cat_items;
    public function render()
    {
        $this->cat_items = Category::all();
        return view('livewire.add-category');
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
  
}
