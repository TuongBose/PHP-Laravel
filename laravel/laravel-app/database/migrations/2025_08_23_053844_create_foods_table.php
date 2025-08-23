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
        Schema::create('foods', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->integer("count");
            $table->longText("description");
            $table->timestamps();
            // One category has many foods
            // foreign keys
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade'); // Khi xóa bên thực thể 1 thì bên thực thể nhiều, thực thể liên quan sẽ bị xóa theo
                // ->onDelete('set null'); // Khi xóa bên thực thể 1 thì bên thực thể nhiều, thực thể liên quan sẽ bị set null, không xóa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
