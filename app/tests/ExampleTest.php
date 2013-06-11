<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
<<<<<<< HEAD
=======

		$this->assertCount(1, $crawler->filter('h1:contains("Hello World!")'));
>>>>>>> 4a317c81d5cc2dd794650ce7cac4ad5e231bd6fe
	}

}