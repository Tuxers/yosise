<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('areas', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('colleges', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('tags', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('users', function($t) {
			$t->increments('id');
			$t->string('username');
			$t->string('name');
			$t->string('email');
			$t->string('password');
			$t->string('bio')->nullable();
			$t->string('ocupation');
			$t->string('school')->nullable();
			$t->string('college')->nullable();
			$t->string('career')->nullable();
			$t->string('organization')->nullable();
			$t->string('remember_token')->nullable();
			$t->timestamps();
		});
		Schema::create('communities', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->string('description')->default('Comunidad universitaria');
			$t->integer('members')->nullable();
			$t->integer('college_id')->unsigned()->nullable();
			$t->integer('area_id')->unsigned();
			$t->integer('father_id')->unsigned();
			$t->timestamps();

			$t->foreign('college_id')
				->references('id')->on('colleges')->onDelete('cascade');
			$t->foreign('area_id')
				->references('id')->on('areas')->onDelete('cascade');
			$t->foreign('father_id')
				->references('id')->on('communities')->onDelete('cascade');
		});
		Schema::create('questions', function($t) {
			$t->increments('id');
			$t->string('title');
			$t->text('description');
			$t->boolean('is_promoted');
			$t->integer('up_votes');
			$t->integer('down_votes');
			$t->integer('community_id')->unsigned();
			$t->integer('user_id')->unsigned();
			$t->timestamps();

			$t->foreign('community_id')
				->references('id')->on('communities')->onDelete('cascade');
			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
		});
		Schema::create('answers', function($t) {
			$t->increments('id');
			$t->text('content');
			$t->boolean('is_best');
			$t->integer('up_votes');
			$t->integer('down_votes');
			$t->integer('question_id')->unsigned();
			$t->integer('user_id')->unsigned();
			$t->timestamps();

			$t->foreign('question_id')
				->references('id')->on('questions')->onDelete('cascade');
			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
		});
		Schema::create('follows', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->integer('community_id')->unsigned();
			$t->timestamps();

			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
			$t->foreign('community_id')
				->references('id')->on('communities')->onDelete('cascade');
		});
		Schema::create('interests', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->integer('tag_id')->unsigned();
			$t->timestamps();

			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
			$t->foreign('tag_id')
				->references('id')->on('tags')->onDelete('cascade');
		});
		Schema::create('question_tag', function($t) {
			$t->increments('id');
			$t->integer('question_id')->unsigned();
			$t->integer('tag_id')->unsigned();
			$t->timestamps();

			$t->foreign('question_id')
				->references('id')->on('questions')->onDelete('cascade');
			$t->foreign('tag_id')
				->references('id')->on('tags')->onDelete('cascade');
		});
		Schema::create('question_vote', function($t) {
			$t->increments('id');
			$t->integer('question_id')->unsigned();
			$t->integer('user_id')->unsigned();
			$t->boolean('is_upvote');
			$t->timestamps();

			$t->foreign('question_id')
				->references('id')->on('questions')->onDelete('cascade');
			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
		});
		Schema::create('answer_vote', function($t) {
			$t->increments('id');
			$t->integer('answer_id')->unsigned();
			$t->integer('user_id')->unsigned();
			$t->boolean('is_upvote');
			$t->timestamps();

			$t->foreign('answer_id')
				->references('id')->on('answers')->onDelete('cascade');
			$t->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answer_vote');
		Schema::drop('question_vote');
		Schema::drop('question_tag');
		Schema::drop('interests');
		Schema::drop('follows');
		Schema::drop('answers');
		Schema::drop('questions');
		Schema::drop('communities');
		Schema::drop('users');
		Schema::drop('tags');
		Schema::drop('colleges');
		Schema::drop('areas');
	}

}
