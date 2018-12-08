<?php
require_once 'vendor/autoload.php';
require_once 'config/database.php';

Illuminate\Database\Capsule\Manager::schema()->create('products', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('price');
    $table->string('old-price');
    $table->string('email')->unique();
    $table->timestamps();
});