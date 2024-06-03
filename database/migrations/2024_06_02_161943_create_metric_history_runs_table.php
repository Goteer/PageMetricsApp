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
        Schema::create('metric_history_runs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('strategy_id');
            $table->foreign('strategy_id')->references('id')->on('strategies');
            $table->string('url',2000); //2000 characters is the limit used in most modern browsers. The WWW recommends 8000, but it's probably overkill given the use of this app.
            $table->float('accesibility_metric');
            $table->float('pwa_metric');
            $table->float('performance_metric');
            $table->float('seo_metric');
            $table->float('best_practices_metric');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metric_history_runs');
    }
};
