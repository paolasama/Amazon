<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // database/migrations/xxxx_xx_xx_create_orders_table.php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->decimal('total', 10, 2);
        $table->timestamps();
    });
}

}
