<?php

namespace App\Livewire\Admin\Project;

use App\Livewire\MyComponent;
use App\Models\Category;
use App\Models\Project;

class ProcectsComponent extends MyComponent
{
    public $title = "projects";
    public $thead = [
        0=>'№',
        1=>'name',
        2=>'image',
        3=>'link',
        4=>'category',
        5=>'action',
    ];
    public $category,$id,$link,$image,$name,$category_id;
    public function mount(){
        $this->category = Category::all();
    }

    public function updateWindow($id){
        $this->updateOpen();
        $this->id = $id;
        $project = Project::find($id);
        $this->link = $project->link;
        $this->image = $project->image;
        $this->name = $project->name;
        $this->category_id = $project->category_id;
    }

    public function deleteWindow($id){
        $project = Project::find($id);
        $project->delete();
        session()->flash('delete','Project deleted successfully');
    }

    public function render()
    {
        $models = Project::paginate(15);
        return view('livewire.admin.project.procects-component' , compact('models'));
    }
}
