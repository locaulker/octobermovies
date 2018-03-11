<?php namespace Creativedev\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCreativedevMovies extends Migration
{
    public function up()
    {
        Schema::create('creativedev_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('creativedev_movies_');
    }
}
