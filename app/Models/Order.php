<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('d F Y');
    }

    public function getStatusAttribute()
    {
        $status = $this->attributes['status'];

        if($status == 'Menunggu Pembayaran') {
            return '<div class="badge badge-secondary">Menunggu Pembayaran</div>';
        } elseif($status == 'Pesanan Diproses') {
            return '<div class="badge badge-warning">Pesanan Diproses</div>';
        } elseif($status == 'Pesanan Diterima') {
            return '<div class="badge badge-success">Pesanan Diterima</div>';
        } elseif($status == 'Pesanan Dibatalkan') {
            return '<div class="badge badge-danger">Pesanan Dibatalkan</div>';
        } elseif($status == 'Pesanan Dikirim') {
            return '<div class="badge badge-success">Pesanan Dikirim</div>';
        } elseif($status == 'Pesanan Selesai') {
            return '<div class="badge badge-success">Pesanan Selesai</div>';
        }
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
