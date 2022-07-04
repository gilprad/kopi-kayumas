<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->string('customer_province');
            $table->string('customer_city');
            $table->string('customer_postal_code');
            $table->integer('customer_shipping');
            $table->integer('subtotal');
            $table->enum('payment_type', ['transfer', 'cod']);
            $table->string('customer_validation')->nullable();
            $table->string('shipping_receipt')->nullable();
            $table->string('refund_validation')->nullable();
            $table->string('refund_reason')->nullable();
            $table->enum('status', ['Menunggu Pembayaran', 'Pesanan Diproses', 'Pesanan Diterima', 'Pesanan Dibatalkan', 'Pesanan Dikirim', 'Pengajuan Pengembalian', 'Pesanan Dikembalikan', 'Pengembalian Ditolak', 'Pesanan Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
