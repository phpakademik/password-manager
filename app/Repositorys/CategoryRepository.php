<?php

namespace App\Repositorys;

use App\Models\Category;

class CategoryRepository
{
    public function all(){
        return Category::paginate();
    }
    public function one($id){
        return Category::where(['id'=>$id])->first();
    }
    public function create($data){
        return Category::create($data);
    }
    public function update($id, $data){
        $one = $this->one($id);
        if($one){
            return Category::where(['id'=>$id])->update($data);
        }else{
            return false;
        }
    }
}
