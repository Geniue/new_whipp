<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitedUsersModel extends Model
{
    use HasFactory;
    protected $table = 'invited_users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'user_id',
        'stripe_id',
    ];



    public function invoices()
    {
        return $this->hasMany(StripeInvoicesModel::class, 'inv_user_id');
    }
}
