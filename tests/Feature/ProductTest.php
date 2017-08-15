<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductTest extends TestCase
{

	use DatabaseMigrations;

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

	/** @test */
	public function unknown_categories_throw_error()
	{
		try {
			$response = $this->get('/catalog/tusmuelas');
		} catch (NotFoundHttpException $e) {
			$this->assertTrue(true);

			return;
		}

		$this->fail('Unknown category does not return a 404 error');
	}
}
