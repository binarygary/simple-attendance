<?php
/**
 * Simple Attendance Sa Classes.
 *
 * @since   0.1.0
 * @package Simple_Attendance
 */



/**
 * Simple Attendance Sa Classes.
 *
 * @since 0.1.0
 *
 * @see   https://github.com/WebDevStudios/Taxonomy_Core
 */
class SA_Sa_Classes extends Taxonomy_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var    Simple_Attendance
	 * @since  0.1.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Taxonomy.
	 *
	 * See documentation in Taxonomy_Core, and in wp-includes/taxonomy.php.
	 *
	 * @since  0.1.0
	 *
	 * @param  Simple_Attendance $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		parent::__construct(
			// Should be an array with Singular, Plural, and Registered name.
			array(
				__( 'Simple Attendance Sa Classes', 'simple-attendance' ),
				__( 'Simple Attendance Sa Classess', 'simple-attendance' ),
				'sa-sa-classes',
			),
			// Register taxonomy arguments.
			array(
				'hierarchical' => false,
			),
			// Post types to attach to.
			array(
				'sa-attendance',
				'sa-attendee',
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since 0.1.0
	 */
	public function hooks() {

	}
}
