<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public function getCategories(){
        return Category::all();
    }


    public function save($data){
        return Category::create($data);
    }

    public function update($data, $id){
        return Category::find($id)->update($data);
    }
}
