<?php

namespace App\Livewire\Admin\Kategory;

use App\Livewire\MyComponent;
use App\Models\Category;
use App\Services\CategoryService;
use Livewire\Component;

class CategoryComponent extends MyComponent
{
    public $title = 'category';
    public $id,$name , $url;
    public $thead=[
        0=>"№",
        1=>'Name',
        2=>'Action',
    ];


    public function deleteWindow($id){
        $this->id = $id;
        $this->url = '/category/'. $this->id;
        $this->deleteOpen();
    }
    public function updateWindow($id){
        $category = Category::find($id);
        $this->name = $category->name;
        $this->id = $id;
        $this->updateOpen();
    }

    public function render()
    {
        if ($this->search != null){
            $models = Category::where('name','like','%'.$this->search.'%')->paginate(10);
        }else{
            $models = Category::paginate(10);
        }
        return view('livewire.admin.kategory.category-component',compact('models'));
    }
}
