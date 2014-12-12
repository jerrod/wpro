<?php

class BackendTest extends WP_UnitTestCase {

	function testDeactivationOfBackendShouldMakeActiveBackendNull() {
		wpro()->backends->deactivate_backend();
		$this->assertNull(wpro()->backends->active_backend);
	}

	function testBackendByNameShouldReturnNullIfNonexisting() {
		$this->assertNull(wpro()->backends->backend_by_name('this_shit_does_not_exist'));
	}

}


/*
class ExampleBackendClass {

	const NAME = "Example";

	function __construct($name) {
		$this->name = $name;
	}

}

class BackendTest extends WP_UnitTestCase {

	function testRegisteringBackendClass() {
		$backend = new ExampleBackendClass('Unit Test Backend');
		$this->assertTrue(wpro()->backends->register($backend));
		$this->assertTrue(wpro()->backends->has_backend('Unit Test Backend'));
		$this->assertFalse(wpro()->backends->has_backend('Unit Test Backend Which Does not Exist'));

		// Registering the instance once again. Should return false.
		$this->assertFalse(wpro()->backends->register($backend));

		// Regostering another instance with the same name. Should not work. Names must be unique.
		$backend2 = new ExampleBackendClass('Unit Test Backend');
		$this->assertFalse(wpro()->backends->register($backend));

		// Regostering yet another instance with another name. Should work.
		$backend3 = new ExampleBackendClass('3rd Unit Test Backend');
		$this->assertTrue(wpro()->backends->register($backend3));
	}

	function testStandardBackendsAreRegistered() {
		$this->assertTrue(wpro()->backends->has_backend('Amazon S3'));
	}

	function testActiveBackendBackwardsCompatibilityForS3() {
		$this->assertTrue(wpro()->options->set('wpro-service', 's3')); // Set to old legacy value.
		$active_backend = wpro()->backends->active_backend;
		$this->assertNotNull($active_backend);
		$this->assertEquals($active_backend->name, 'Amazon S3');
	}
	
}
	*/

