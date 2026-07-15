<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_can_be_created(): void
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'sku' => $product->sku,
        ]);
    }

    public function test_products_can_be_listed(): void
    {
        Product::factory()->count(5)->create();

        $response = $this->get('/products');

        $response->assertStatus(200);
    }
}