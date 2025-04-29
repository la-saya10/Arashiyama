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
        Schema::create('arashiyama', function (Blueprint $table) {
            $table->bigIncrements('id');                    // ID
            $table->string('name');                         // 店名・施設名
            $table->string('type');                         // 種別（例：レストラン、カフェ、など）
            $table->text('description')->nullable();                    // 情報
            $table->string('website_url')->nullable();      // 公式サイトURL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arashiyama');
    }
};
