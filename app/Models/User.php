<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'tblteacher';
protected $primarykey = 'teacherid';

protected $fillable = [
    'teacherid', 'lastname', 'firstname', 'middlename', 'bday', 'age'
];
public $timestamps = false;
}