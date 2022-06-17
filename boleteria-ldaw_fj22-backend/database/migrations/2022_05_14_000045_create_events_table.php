<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Autoincremental
            $table->string('name',100)->nullable(false);
            $table->string('tel_number',10)->nullable(false);
            $table->dateTime('start_date', $precision = 0)->nullable(false);
            $table->dateTime('end_date', $precision = 0)->nullable(false);
            $table->text('description')->nullable(false);
            $table->decimal('fee', $precision = 8, $scale = 2)->nullable(false);
            $table->integer('attendant_limit')->nullable(false)->default(0);
            $table->text('place')->nullable(false);
            $table->boolean('active')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
