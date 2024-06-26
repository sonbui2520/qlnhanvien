<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ChiTietBangChamCong', function (Blueprint $table) {
            $table->string('MaBangChamCong');
            $table->string('MaNV');
            $table->time('CheckIn');
            $table->time('CheckOut');
            $table->date('Date');
            $table->time('TotalTime');
            $table->string('Note');
            $table->foreign('MaNV')->references('MaNV')->on('NhanVien');
            $table->foreign('MaBangChamCong')->references('MaBangChamCong')->on('BangChamCong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChiTietBangChamCong');
    }
};
