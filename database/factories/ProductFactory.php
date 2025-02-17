<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama_produk' => $this->faker->word(),
            'harga_beli' => $this->faker->numberBetween(10000, 50000),
            'harga_jual' => $this->faker->numberBetween(10000, 50000),
            'stok' => $this->faker->numberBetween(1, 100),
            'satuan' => $this->faker->randomElement(['pcs']),
            'barcode' => $this->faker->unique()->numerify('##########'),
        ];
    }
}
