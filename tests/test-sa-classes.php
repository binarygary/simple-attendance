<?php
/**
 * Simple Attendance Sa Classes Tests.
 *
 * @since   0.1.0
 * @package Simple_Attendance
 */
class SA_Sa_Classes_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.1.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'SA_Sa_Classes') );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  0.1.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'SA_Sa_Classes', simple_attendance()->sa-classes );
	}

	/**
	 * Test that our taxonomy now exists.
	 *
	 * @since  0.1.0
	 */
	function test_taxonomy_exists() {
		$this->assertTrue( taxonomy_exists( 'sa-sa-classes' ) );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  0.1.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
