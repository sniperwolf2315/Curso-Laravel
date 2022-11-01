<?php

// namespace Database\Factories;

use App\Models\Models\Permiso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;
 

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
//  */
// class PermisoFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }
// }
$factory->define(Permiso::class,function(Faker$faker){
    return[
        'nombre'=>$faker->word,
            'slug'=>$faker->word,
    ];
});