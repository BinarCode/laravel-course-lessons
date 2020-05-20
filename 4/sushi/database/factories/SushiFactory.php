<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sushi;
use Faker\Generator as Faker;

$factory->define(Sushi::class, function (Faker $faker) {
    $images = [
        'https://media-cdn.tripadvisor.com/media/photo-s/14/ba/1d/82/sushi.jpg',
        'https://media.kaufland.com/images/PPIM/AP_Content_1010/std.lang.all/42/25/Asset_3464225.jpg',
        'https://cdn.veggies.de/wp-content/uploads/2020/02/01163405/Sushi_Inside_Out-7_2550_vegan_veggies.jpg',
        'https://zensushibucuresti.ro/wp-content/uploads/2018/05/SUSHI-MENU.jpg'
    ];
    return [
        'name' => $faker->text(50),
        'description' => $faker->text(200),
        'price' => $faker->numberBetween(0, 100),
        'image' => $faker->randomElement($images),
    ];
});
