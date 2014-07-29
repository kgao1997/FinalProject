<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCardsAndColorAndTypeAndSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('cards', function($table){
	    $table ->increments('id');
		$table ->string('name');
		$table ->string('text');
		$table ->string('manaCost');
		$table ->integer('color_id')->nullable();
		$table ->integer('type_id')->nullable();
		$table ->integer('set_id')->nullable();
		$table ->timestamps();
		});
	  Schema::create('colors', function($table){
	    $table -> increments('id');
		$table -> string('name');
	  });
	  Schema::create('types', function($table){
	    $table ->increments('id');
		$table ->string('name');
	  });
	  Schema::create('sets', function($table){
	    $table ->increments('id');
		$table ->string('name');
		});
		
	  
		
		
		
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
		Schema::drop('colors');
		Schema::drop('types');
		Schema::drop('sets');
	}

}