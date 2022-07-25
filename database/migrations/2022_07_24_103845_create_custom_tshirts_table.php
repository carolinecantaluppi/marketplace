<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomTshirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_tshirts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tshirt_id')->constrained();
            $table->string('img')->nullable();
            $table->string('title');
            $table->string('text');
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
        Schema::dropIfExists('custom_tshirts');

        Schema::table('custom_tshirts', function(Blueprint $table){
            $table->dropForeign(['tshirt_id']);
            $table->dropColumn(['tshirt_id']); 
        });
    }
}
