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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('extension')->nullable(false);
            $table->bigInteger('permission_id')->nullable(false);
            $table->bigInteger('owner_id')->nullable(false);
            $table->bigInteger('catalog_id')->nullable(false);
            $table->timestamps();
        });
        Schema::table('files', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('catalog_id')->references('id')->on('catalogs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
