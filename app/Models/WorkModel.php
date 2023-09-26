<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkModel extends Model
{
    use HasFactory;
    protected $table = 'work';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function files()
    {
        return $this->hasMany(FilesModel::class, 'work_id');
    }
}
