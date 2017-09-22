<?php
/**
 * Simple Attendance Attendee Tests.
 *
 * @since   0.1.0
 * @package Simple_Attendance
 */
class SA_Attendee_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.1.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'SA_Attendee') );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  0.1.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'SA_Attendee', simple_attendance()->attendee' );
	}

	/**
	 * Test to make sure the CPT now exists.
	 *
	 * @since  0.1.0
	 */
	function test_cpt_exists() {
		$this->assertTrue( post_type_exists( 'sa-attendee' ) );
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
