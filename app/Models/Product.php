<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStatusAttribute()
    {
        $status = $this->attributes['status'];

        if($status) {
            return '<div class="badge badge-success">Aktif</div>';
        } else {
            return '<div class="badge badge-danger">Nonaktif</div>';
        }
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function cart_details()
    {
        return $this->hasMany(CartDetail::class, 'product_id', 'id');
    }
}
