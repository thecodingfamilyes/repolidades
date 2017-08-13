<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
	/** @test */
	public function display_categorized_products_list()
	{
		$catalog = factory(\App\Product::class, 10)->create();

		$categories = $catalog->pluck('category');

		$groupedCatalog = $catalog->groupBy('category');

		foreach ($categories as $category) {
			$response = $this->get('/catalog/'.$category);

			foreach ($groupedCatalog->get($category) as $product) {
				$response->assertSee($product->reference);
				$response->assertSee($product->name);
				$response->assertSee($product->description);
				$response->assertSee((string) $product->price);
				$response->assertSee($product->category);
			}
		}

	}

}
