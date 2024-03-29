<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CartItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['color_id', 'number', 'product_id', 'user_id', 'guarantee_id'];

}
