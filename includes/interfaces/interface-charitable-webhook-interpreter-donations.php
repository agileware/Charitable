<?php
/**
 * Webhook interpreter interface for webhooks related to donations.
 *
 * @package   Charitable/Interfaces/Charitable_Webhook_Interpreter_Donations_Interface
 * @author    Eric Daams
 * @copyright Copyright (c) 2020, Studio 164a
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since     1.7.0
 * @version   1.7.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! interface_exists( 'Charitable_Webhook_Interpreter_Donations_Interface' ) ) :

	/**
	 * Charitable_Webhook_Interpreter_Donations_Interface
	 *
	 * @since 1.5.0
	 */
	interface Charitable_Webhook_Interpreter_Donations_Interface {

		/**
		 * Get the donation object.
		 *
		 * @since  1.7.0
		 *
		 * @return Charitable_Donation|false Returns the donation if one matches the webhook.
		 *                                   If not, returns false.
		 */
		public function get_donation();

		/**
		 * Get the type of event described by the webhook.
		 *
		 * @since  1.7.0
		 *
		 * @return string
		 */
		public function get_event_type();

		/**
		 * Get the refunded amount.
		 *
		 * @since  1.7.0
		 *
		 * @return float|false The amount to be refunded, or false if this is not a refund.
		 */
		public function get_refund_amount();

		/**
		 * Get a log message to include when adding the refund.
		 *
		 * @since  1.7.0
		 *
		 * @return string
		 */
		public function get_refund_log_message();

		/**
		 * Return the gateway transaction ID.
		 *
		 * @since  1.7.0
		 *
		 * @return string|false The gateway transaction ID if available, otherwise false.
		 */
		public function get_gateway_transaction_id();

		/**
		 * Return the donation status based on the webhook event.
		 *
		 * @since  1.7.0
		 *
		 * @return string
		 */
		public function get_donation_status();

		/**
		 * Return an array of log messages to update the donation.
		 *
		 * @since  1.7.0
		 *
		 * @return array
		 */
		public function get_logs();

		/**
		 * Return an array of meta data to add/update for the donation.
		 *
		 * @since  1.7.0
		 *
		 * @return array
		 */
		public function get_meta();

		/**
		 * Get the response message.
		 *
		 * @since  1.7.0
		 *
		 * @return string
		 */
		public function get_response_message();

		/**
		 * Get the response HTTP status.
		 *
		 * @since  1.7.0
		 *
		 * @return int
		 */
		public function get_response_status();

	}

endif;