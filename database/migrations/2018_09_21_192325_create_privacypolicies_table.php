<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacypoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacypolicies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content_header');
            $table->text('text');
            $table->unsignedInteger('seo_id');
            $table->foreign('seo_id')->references('id')->on('seos');
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
        Schema::dropIfExists('privacypolicies');
    }
}
