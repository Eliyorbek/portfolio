<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
class MyComponent extends Component
{
use withPagination;
protected $paginationTheme = 'bootstrap';
public $show=0,$update,$delete,$create,$search,$count=0;

public function mount(){
    if (session('locale') ==null) {
        session('locale' , 'en');
    }
    App::setLocale(session('locale'));
}
    public function updateOpen(){
        $this->show=1;
        $this->update=1;
    }

    public function deleteOpen(){
        $this->delete=1;
        $this->show=1;
    }

    public function createOpen(){
        $this->create=1;
        $this->show=1;
    }

    public function close(){
        $this->show=0;
        $this->update=0;
        $this->delete=0;
        $this->create=0;
    }

}
