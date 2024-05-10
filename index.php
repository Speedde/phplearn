<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name() . '<br>';

