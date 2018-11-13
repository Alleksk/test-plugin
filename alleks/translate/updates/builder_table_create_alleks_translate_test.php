<?php namespace Alleks\Translate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlleksTranslateTest extends Migration
{
    public function up()
    {
        Schema::create('alleks_translate_test', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('site_name')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alleks_translate_test');
    }
}
