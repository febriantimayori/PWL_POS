<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = 'm_user'; //mendefinisikan primary key dari tabel yang digunakan
}
