<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardsModel extends Model
{
    use HasFactory;
    protected $table = 'cards';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'stripe_id',
        'pm_type',
        'pm_last_four',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
