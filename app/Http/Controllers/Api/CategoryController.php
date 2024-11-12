<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CretegoryCreateRequest;
use App\Http\Repositorys\CategoryRepository;


class CategoryController extends Controller
{
    private $category;

    public __construct(){
        $this->category = new CategoryRepository();
    }

    public function index(){
        return ;
    }

    public function add(CretegoryCreateRequest $data){
        return null;
    }

    public function one($id){
        return null;
    }

    public function update($id, $reques){

    }

    public function delete($id){

    }
}
