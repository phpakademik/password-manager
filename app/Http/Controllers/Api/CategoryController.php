<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CretegoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Repositorys\CategoryRepository;


class CategoryController extends Controller
{
    private $category;

    public __construct(){
        $this->category = new CategoryRepository();
    }

    public function index(){
        return $this->category->all();
    }

    public function store(CretegoryCreateRequest $r){
        return $this->category->create([

        ]);
    }

    public function one($id){
        return $this->category->one($id);
    }

    public function update($id,CategoryUpdateRequest $r){
        return $this->category->update($id,[

        ]);
    }

    public function delete($id){
        return $this->category->delete($id);
    }
}
