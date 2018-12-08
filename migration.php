<?php
require_once 'vendor/autoload.php';
require_once 'config/database.php';

//Illuminate\Database\Capsule\Manager::schema()->create('products', function ($table) {
//    $table->increments('id');
//    $table->string('title');
//    $table->string('price');
//    $table->string('old-price');
//    $table->string('email')->unique();
//    $table->timestamps();
//});

Illuminate\Database\Capsule\Manager::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('description');
    $table->text('content');
    $table->string('cover');
    $table->timestamps();
});

Illuminate\Database\Capsule\Manager::schema()->create('categories', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('key');
    $table->timestamps();
});

Illuminate\Database\Capsule\Manager::schema()->create('category_post', function ($table) {
    $table->integer('post_id');
    $table->integer('category_id');
    $table->timestamps();
    $table->primary(['post_id','category_id']);
});