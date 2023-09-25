<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//SERVICES
use App\Services\StripeService;

class StripeInvoicesModel extends Model
{
    use HasFactory;
    protected $table = 'stripe_invoices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uniqId',
        'invoice_id',
        'user_id',
        'inv_user_id',
        'stripe_id',
        'sub_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function getStripeInvoiceAttribute()
    {
        $service = new StripeService();
        return $service->retrieveInvoice($this->invoice_id);
    }

    public function getStripePriceAttribute()
    {
        $service = new StripeService();
        return $service->retrieveProductFromPrice($this->stripe_id);
    }
}
