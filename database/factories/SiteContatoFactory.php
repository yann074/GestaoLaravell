<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            //criado na aula 119 factories

            'nome' => fake()->name(),

            'telefone' => fake()->regexify('\(0[1-9]{2}\) [9][0-9]{4}-[0-9]{4}'), // Exemplo de número de celular brasileiro


            'email' => fake()->unique()->email(),

            'motivo_contato' => fake()->numberBetween(1,3),

            'mensagem' => fake()->sentence(4)
    ];
    }
}
