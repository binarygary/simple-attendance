<?php
/**
 * Simple_Attendance.
 *
 * @since   0.1.0
 * @package Simple_Attendance
 */
class Simple_Attendance_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.1.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'Simple_Attendance') );
	}

	/**
	 * Test that our main helper function is an instance of our class.
	 *
	 * @since  0.1.0
	 */
	function test_get_instance() {
		$this->assertInstanceOf(  'Simple_Attendance', simple_attendance() );
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
