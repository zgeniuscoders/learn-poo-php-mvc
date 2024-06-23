<?php


namespace App;

use ZFramework\Database\Turbo\Model;

class User extends Model
{
    protected string $table = "users";

    public function user(){
        $this->belongTo(User::class);
    }
}
