<?php

namespace App\Repositorys;

use App\Models\Passwords;

class PasswordsRepository
{
    public function all(){
        return Passwords::orderByDesc('id')->pagination();
    }    
    public function groupPass($group_id){
        return Passwords::where(['group_id'=>$group_id])->pagination();
    }
}
