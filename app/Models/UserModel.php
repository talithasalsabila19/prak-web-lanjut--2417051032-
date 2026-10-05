<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $guarded = ['id'];

    public function getUser()
    {
        return $this->join('kelas', 'user.kelas_id', '=', 'kelas.id')
                    ->select(
                        'user.id',
                        'user.nama',
                        'user.nim',
                        'kelas.nama_kelas'
                    )
                    ->get();
    }
}