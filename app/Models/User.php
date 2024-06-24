<?php


namespace App\Models;

use DateTime;
use ZFramework\Database\Turbo\Model;

class User extends Model
{
    protected string $table = "users";

    public string $id;
    public string $name;
    public string $email;
    public string $password;
    public string $create_time;

    public function user(){
        // $this->belongTo(User::class);
    }
}
