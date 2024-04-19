<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_product'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
