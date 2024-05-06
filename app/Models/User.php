<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'state',
        'address',
        'city',
        'zip',
        'password',
        'stripe_id',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function cards()
    {
        return $this->hasMany(CardsModel::class, 'user_id');
    }


    public function invoices()
    {
        return $this->hasMany(StripeInvoicesModel::class, 'user_id')->orderBy("created_at", 'DESC');
    }


    public function work()
    {
        return $this->hasMany(WorkModel::class, 'user_id');
    }

    public function work_by_id($id)
    {
        return $this->hasOne(WorkModel::class, 'user_id')->with('files')->where('id', $id);
    }
}
