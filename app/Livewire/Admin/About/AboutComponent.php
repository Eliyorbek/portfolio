<?php

namespace App\Livewire\Admin\About;

use App\Livewire\MyComponent;
use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class AboutComponent extends MyComponent
{
    public $title = 'about';
    public $thead = [
        0=>'№',
        1=>'name',
        2=>'title',
        3=>'action',
    ];
    public $id;
    public function deleteWindow($id){
        $this->id = $id;
        $this->deleteOpen();
    }

    public function delete($id){
        dd($id);
    }
    public function render()
    {
        if ($this->search !=null){
            $models = About::where('name','like','%'.$this->search.'%')->orWhere('title','like','%'.$this->search.'%')->paginate(10);
        }else{
            $models = About::paginate(10);
        }
        return view('livewire.admin.about.about-component' , compact('models'));
    }
}
