<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponModel extends Model
{
    use HasFactory;
    protected $table = 'coupons';


    public function email()
    {
        return $this->belongsTo(EmailsModel::class, 'email_id');
    }
}
