<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulos',function(Blueprint $table){
			$table->increments('id');
			$table->integer('id_categoria')->unsigned();
			$table->string('nombre');
			$table->string('unidad_medida');
			$table->double('precio');
			$table->integer('cantidad');
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
		Schema::drop('articulos');
	}

}
