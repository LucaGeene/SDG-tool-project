<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->boolean('verified')->default(0);
            $table->text('goalid');
            $table->foreignId('education_id')->nullable()
//                ->constrained('education')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('activity_type');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('category');
            $table->text('education');
            $table->text('body');
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
        Schema::dropIfExists('projects');
    }
}
