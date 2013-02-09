<?php
/**
* Authorize.Net® Pro Form responses.
*
* Copyright: © 2009-2011
* {@link http://www.websharks-inc.com/ WebSharks, Inc.}
* ( coded in the USA )
*
* This WordPress® plugin ( s2Member Pro ) is comprised of two parts:
*
* o (1) Its PHP code is licensed under the GPL license, as is WordPress®.
* 	You should have received a copy of the GNU General Public License,
* 	along with this software. In the main directory, see: /licensing/
* 	If not, see: {@link http://www.gnu.org/licenses/}.
*
* o (2) All other parts of ( s2Member Pro ); including, but not limited to:
* 	the CSS code, some JavaScript code, images, and design;
* 	are licensed according to the license purchased.
* 	See: {@link http://www.s2member.com/prices/}
*
* Unless you have our prior written consent, you must NOT directly or indirectly license,
* sub-license, sell, resell, or provide for free; part (2) of the s2Member Pro Module;
* or make an offer to do any of these things. All of these things are strictly
* prohibited with part (2) of the s2Member Pro Module.
*
* Your purchase of s2Member Pro includes free lifetime upgrades via s2Member.com
* ( i.e. new features, bug fixes, updates, improvements ); along with full access
* to our video tutorial library: {@link http://www.s2member.com/videos/}
*
* @package s2Member\AuthNet
* @since 1.5
*/
if(realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"]))
	exit("Do not access this file directly.");

if(!class_exists("c_ws_plugin__s2member_pro_authnet_responses"))
	{
		/**
		* Authorize.Net® Pro Form responses.
		*
		* @package s2Member\AuthNet
		* @since 1.5
		*/
		class c_ws_plugin__s2member_pro_authnet_responses
			{
				/**
				* Creates response divs after Cancellation processing.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return array An array of response details.
				*/
				public static function authnet_cancellation_response($attr = FALSE)
					{
						$_response = $GLOBALS["ws_plugin__s2member_pro_authnet_cancellation_response"];

						$_response = (!$_response) ? c_ws_plugin__s2member_pro_authnet_responses::authnet_form_attr_validation_errors($attr) : $_response;

						if /* Error reporting. */($_response && ($error = $_response["error"]))
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-error s2member-pro-authnet-cancellation-form-response-error">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						else if /* Otherwise, we treat this as an informational response. */($_response)
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-info s2member-pro-authnet-cancellation-form-response-info">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						return array("response" => $response, "error" => $error);
					}
				/**
				* Creates response divs after Update processing.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return array An array of response details.
				*/
				public static function authnet_update_response($attr = FALSE)
					{
						$_response = $GLOBALS["ws_plugin__s2member_pro_authnet_update_response"];

						$_response = (!$_response) ? c_ws_plugin__s2member_pro_authnet_responses::authnet_form_attr_validation_errors($attr) : $_response;

						if /* Error reporting. */($_response && ($error = $_response["error"]))
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-error s2member-pro-authnet-update-form-response-error">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						else if /* Otherwise, we treat this as an informational response. */($_response)
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-info s2member-pro-authnet-update-form-response-info">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						return array("response" => $response, "error" => $error);
					}
				/**
				* Creates response divs after Registration processing.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return array An array of response details.
				*/
				public static function authnet_registration_response($attr = FALSE)
					{
						$_response = $GLOBALS["ws_plugin__s2member_pro_authnet_registration_response"];

						$_response = (!$_response) ? c_ws_plugin__s2member_pro_authnet_responses::authnet_form_attr_validation_errors($attr) : $_response;

						if /* Error reporting. */($_response && ($error = $_response["error"]))
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-error s2member-pro-authnet-registration-form-response-error">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						else if /* Otherwise, we treat this as an informational response. */($_response)
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-info s2member-pro-authnet-registration-form-response-info">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						return array("response" => $response, "error" => $error);
					}
				/**
				* Creates response divs after Specific Post/Page checkout processing.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return array An array of response details.
				*/
				public static function authnet_sp_checkout_response($attr = FALSE)
					{
						$_response = $GLOBALS["ws_plugin__s2member_pro_authnet_sp_checkout_response"];

						$_response = (!$_response) ? c_ws_plugin__s2member_pro_authnet_responses::authnet_form_attr_validation_errors($attr) : $_response;

						if /* Error reporting. */($_response && ($error = $_response["error"]))
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-error s2member-pro-authnet-sp-checkout-form-response-error">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						else if /* Otherwise, we treat this as an informational response. */($_response)
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-info s2member-pro-authnet-sp-checkout-form-response-info">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						return array("response" => $response, "error" => $error);
					}
				/**
				* Creates response divs after Membership checkout processing.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return array An array of response details.
				*/
				public static function authnet_checkout_response($attr = FALSE)
					{
						$_response = $GLOBALS["ws_plugin__s2member_pro_authnet_checkout_response"];

						$_response = (!$_response) ? c_ws_plugin__s2member_pro_authnet_responses::authnet_form_attr_validation_errors($attr) : $_response;

						if /* Error reporting. */($_response && ($error = $_response["error"]))
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-error s2member-pro-authnet-checkout-form-response-error">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						else if /* Otherwise, we treat this as an informational response. */($_response)
							{
								$response = '<div id="s2member-pro-authnet-form-response" class="s2member-pro-authnet-form-response-info s2member-pro-authnet-checkout-form-response-info">';
								$response .= $_response["response"];
								$response .= '</div>';
							}
						return array("response" => $response, "error" => $error);
					}
				/**
				* Validates the configuration of API Credentials.
				*
				* Free Registration Forms do NOT require API Credentials.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return null|array Null if there are no errors, else a response array.
				*/
				public static function authnet_form_api_validation_errors($attr = FALSE)
					{
						if(!$GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_authnet_api_login_id"])
							$response = array("response" => _x('Authorize.Net® configuration error. Please configure your Authorize.Net® API Login ID.', "s2member-admin", "s2member"), "error" => true);

						else if(!$GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_authnet_api_trans_key"])
							$response = array("response" => _x('Authorize.Net® configuration error. Your Authorize.Net® API Transaction Key is not yet configured.', "s2member-admin", "s2member"), "error" => true);

						else if(!$GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_authnet_api_salt_key"])
							$response = array("response" => _x('Authorize.Net® configuration error. Your Authorize.Net® Secret MD5 Hash is not yet configured.', "s2member-admin", "s2member"), "error" => true);

						return (empty($response) || !empty($attr["register"])) ? null : $response;
					}
				/**
				* Validates the configuration of the current form.
				*
				* Free Registration Forms do NOT require API Credentials.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param array $attr An array of Pro Form Attributes.
				* @return null|array Null if there are no errors, else a response array.
				*/
				public static function authnet_form_attr_validation_errors($attr = FALSE)
					{
						if(!($response = c_ws_plugin__s2member_pro_authnet_responses::authnet_form_api_validation_errors($attr)) || !empty($attr["register"]))
							{
								if /* Special form for Cancellations. User/Member must be logged in. */($attr["cancel"])
									{
										if(!is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> to cancel your account.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);

										else if(!is_object($user = wp_get_current_user()) || !($user_id = $user->ID) || !($subscr_id = get_user_option("s2member_subscr_id", $user_id)))
											$response = array("response" => _x('Nothing to cancel. You\'re NOT a paid Member.', "s2member-front", "s2member"), "error" => true);

										else if(is_array($authnet = array("x_method" => "status", "x_subscription_id" => $subscr_id)))
											{
												if(!($authnet = c_ws_plugin__s2member_pro_authnet_utilities::authnet_arb_response($authnet)) || !empty($authnet["__error"]))
													$response = array("response" => _x('Nothing to cancel. You have NO recurring fees.', "s2member-front", "s2member"), "error" => true);

												else if(!preg_match("/^(active|suspended)$/i", $authnet["subscription_status"]))
													$response = array("response" => _x('Nothing to cancel. You have NO recurring fees.', "s2member-front", "s2member"), "error" => true);
											}
									}
								else if /* Special form for Updates. User/Member must be logged in. */($attr["update"])
									{
										if(!is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> to update your billing information.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);

										else if(!is_object($user = wp_get_current_user()) || !($user_id = $user->ID) || !($subscr_id = get_user_option("s2member_subscr_id", $user_id)))
											$response = array("response" => _x('Nothing to update. You\'re NOT a paid Member.', "s2member-front", "s2member"), "error" => true);

										else if(is_array($authnet = array("x_method" => "status", "x_subscription_id" => $subscr_id)))
											{
												if(!($authnet = c_ws_plugin__s2member_pro_authnet_utilities::authnet_arb_response($authnet)) || !empty($authnet["__error"]))
													$response = array("response" => _x('Nothing to update. You have NO recurring fees. Or, your billing profile is no longer active. Please contact Support if you need assistance.', "s2member-front", "s2member"), "error" => true);

												else if(!preg_match("/^(active|suspended)$/i", $authnet["subscription_status"]))
													$response = array("response" => _x('Nothing to update. You have NO recurring fees. Or, your billing profile is no longer active. Please contact Support if you need assistance.', "s2member-front", "s2member"), "error" => true);
											}
									}
								else if /* Free Registration does not require attr validation. */($attr["register"])
									{
										if(!is_string($attr["level"]) || !is_numeric($attr["level"]))
											$response = array("response" => sprintf(_x('Invalid form configuration. Missing "level" attribute. Membership Level. Must be numeric [0-%s].', "s2member-admin", "s2member"), esc_html($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"])), "error" => true);

										else if($attr["level"] < 0 || $attr["level"] > $GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"])
											$response = array("response" => sprintf(_x('Invalid form configuration. Invalid "level" attribute. Membership Level. Must be numeric [0-%s].', "s2member-admin", "s2member"), esc_html($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"])), "error" => true);

										else if($attr["ccaps"] && (!is_string($attr["ccaps"]) || (preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"])) && !preg_match("/^([a-z_0-9,]+)$/", preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"]))))))
											$response = array("response" => _x('Invalid form configuration. Invalid "ccaps" attribute. Custom Capabilities. When provided, must be all lowercase [a-z_0-9,]. A preceding `-all,` directive is also acceptable.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && (!is_string($attr["tp"]) || !is_numeric($attr["tp"])))
											$response = array("response" => _x('Invalid form configuration. Invalid "tp" attribute. The Trial Period. When provided, must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tp"] < 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "tp" attribute. The Trial Period. When provided, must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && (!$attr["tt"] || !is_string($attr["tt"])))
											$response = array("response" => _x('Invalid form configuration. Missing "tt" attribute. The Trial Term. When "tp" is provided, "tt" ( Trial Term ) must be one of D,W,M,Y.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && !preg_match("/[DWMY]/", $attr["tt"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "tt" attribute. The Trial Term. When "tp" is provided, "tt" ( Trial Term ) must be one of D,W,M,Y.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["custom"] && (!is_string($attr["custom"]) || !preg_match("/^".preg_quote(preg_replace("/\:([0-9]+)$/", "", $_SERVER["HTTP_HOST"]), "/")."/i", $attr["custom"])))
											$response = array("response" => _x('Invalid form configuration. Invalid "custom" attribute. When provided, must start with your domain name.', "s2member-admin", "s2member-admin"), "error" => true);
									}
								else if /* Validation routines for Specific Post/Page checkout forms. */($attr["sp"])
									{
										if(!$attr["ids"] || !is_string($attr["ids"]))
											$response = array("response" => _x('Invalid form configuration. Missing "ids" attribute. Must contain comma-delimited Post/Page IDs.', "s2member-admin", "s2member"), "error" => true);

										else if(!preg_match("/^([0-9,]+)$/", $attr["ids"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "ids" attribute. Must contain comma-delimited Post/Page IDs. Must contain [0-9,] only.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["exp"] || !is_string($attr["exp"]))
											$response = array("response" => _x('Invalid form configuration. Missing "exp" attribute. Specific Post/Page Expiration ( in hours ). Must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if(!is_numeric($attr["exp"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "exp" attribute. Specific Post/Page Expiration ( in hours ). Must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["exp"] < 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "exp" attribute. Specific Post/Page Expiration ( in hours ). Must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["exp"] > 43800)
											$response = array("response" => _x('Invalid form configuration. Invalid "exp" attribute. Specific Post/Page Expiration ( in hours ). Must be <= 43800.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["sp_ids_exp"] || !is_string($attr["sp_ids_exp"]))
											$response = array("response" => _x('Invalid form configuration. Missing "sp_ids_exp" internal attribute. Please check Shortcode Attributes.', "s2member-admin", "s2member"), "error" => true);

										else if(!preg_match($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["sp_access_item_number_regex"], $attr["sp_ids_exp"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "sp_ids_exp" internal attribute. Please check Shortcode Attributes.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["desc"] || !is_string($attr["desc"]))
											$response = array("response" => _x('Invalid form configuration. Missing "desc" attribute. Please provide a Description for this form.', "s2member-admin", "s2member"), "error" => true);

										else if(strlen($attr["desc"]) > 100 /* Actually, this can be 255 chars; but we need plenty of room for s2Member's reference/coupon info. */)
											$response = array("response" => _x('Invalid form configuration. Your "desc" ( Description ) attribute must be <= 100 characters long.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["custom"] || !is_string($attr["custom"]))
											$response = array("response" => _x('Invalid form configuration. Missing "custom" attribute. Must start with your domain name.', "s2member-admin", "s2member"), "error" => true);

										else if(!preg_match("/^".preg_quote(preg_replace("/\:([0-9]+)$/", "", $_SERVER["HTTP_HOST"]), "/")."/i", $attr["custom"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "custom" attribute. Must start with your domain name.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["cc"] || !is_string($attr["cc"]))
											$response = array("response" => _x('Invalid form configuration. Missing "cc" attribute. Must be a 3 character Currency Code.', "s2member-admin", "s2member"), "error" => true);

										else if(strlen($attr["cc"]) !== 3)
											$response = array("response" => _x('Invalid form configuration. Invalid "cc" attribute. Must be a 3 character Currency Code.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["ra"] || !is_string($attr["ra"]))
											$response = array("response" => _x('Invalid form configuration. Missing "ra" attribute. The Regular Amount. Must be >= 0.01.', "s2member-admin", "s2member"), "error" => true);

										else if(!is_numeric($attr["ra"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["ra"] < 0.01)
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be >= 0.01.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["ra"] > 10000.00)
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be <= 10000.00.', "s2member-admin", "s2member"), "error" => true);
									}
								else // Validation routines for Member Level checkout forms. This is the default functionality.
									{
										if /* Must be logged in before a modification can take place. */($attr["modify"] && !is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">login</a> to update your billing plan.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);

										else if /* Must be logged in before purchasing. */($attr["level"] === "*" && !is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">login</a> before making this purchase.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);

										else if((!$attr["level"] || !is_string($attr["level"]) || !is_numeric($attr["level"])) && $attr["level"] !== "*")
											$response = array("response" => sprintf(_x('Invalid form configuration. Missing "level" attribute. Membership Level. Must be numeric [1-%s], or an asterisk (*).', "s2member-admin", "s2member"), esc_html($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"])), "error" => true);

										else if(($attr["level"] < 1 || $attr["level"] > $GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"]) && $attr["level"] !== "*")
											$response = array("response" => sprintf(_x('Invalid form configuration. Invalid "level" attribute. Membership Level. Must be numeric [1-%s], or an asterisk (*).', "s2member-admin", "s2member"), esc_html($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["levels"])), "error" => true);

										else if($attr["ccaps"] && (!is_string($attr["ccaps"]) || (preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"])) && !preg_match("/^([a-z_0-9,]+)$/", preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"]))))))
											$response = array("response" => _x('Invalid form configuration. Invalid "ccaps" attribute. Custom Capabilities. When provided, must be all lowercase [a-z_0-9,]. A preceding `-all,` directive is also acceptable.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["level"] === "*" && (!is_string($attr["ccaps"]) || !preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"])) || !preg_match("/^([a-z_0-9,]+)$/", preg_replace("/^-all[\r\n\t\s;,]*/", "", str_replace("+", "", $attr["ccaps"])))))
											$response = array("response" => _x('Invalid form configuration. Missing or invalid "ccaps" attribute. When "level" is "*" for ( Independent Custom Capabilities ), "ccaps" is required. All lowercase [a-z_0-9,]. A preceding `-all,` directive is also acceptable.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["desc"] || !is_string($attr["desc"]))
											$response = array("response" => _x('Invalid form configuration. Missing "desc" attribute. Please provide a Description for this form.', "s2member-admin", "s2member"), "error" => true);

										else if(strlen($attr["desc"]) > 100 /* Actually, this can be 255 chars; but we need plenty of room for s2Member's reference/coupon info. */)
											$response = array("response" => _x('Invalid form configuration. Your "desc" ( Description ) attribute must be <= 100 characters long.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["custom"] || !is_string($attr["custom"]))
											$response = array("response" => _x('Invalid form configuration. Missing "custom" attribute. Must start with your domain name.', "s2member-admin", "s2member"), "error" => true);

										else if(!preg_match("/^".preg_quote(preg_replace("/\:([0-9]+)$/", "", $_SERVER["HTTP_HOST"]), "/")."/i", $attr["custom"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "custom" attribute. Must start with matching domain.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["cc"] || !is_string($attr["cc"]))
											$response = array("response" => _x('Invalid form configuration. Missing "cc" attribute. Must be a 3 character Currency Code.', "s2member-admin", "s2member"), "error" => true);

										else if(strlen($attr["cc"]) !== 3)
											$response = array("response" => _x('Invalid form configuration. Invalid "cc" attribute. Must be a 3 character Currency Code.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && (!is_string($attr["tp"]) || !is_numeric($attr["tp"])))
											$response = array("response" => _x('Invalid form configuration. Invalid "tp" attribute. The Trial Period. When provided, must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tp"] < 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "tp" attribute. The Trial Period. When provided, must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && (!$attr["tt"] || !is_string($attr["tt"])))
											$response = array("response" => _x('Invalid form configuration. Missing "tt" attribute. The Trial Term. When "tp" is provided, "tt" ( Trial Term ) must be one of D,W,M,Y.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && !preg_match("/[DWMY]/", $attr["tt"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "tt" attribute. The Trial Term. When "tp" is provided, "tt" ( Trial Term ) must be one of D,W,M,Y.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tt"] === "D" && $attr["tp"] > 365)
											$response = array("response" => _x('Invalid form configuration. Invalid "tt, tp" attributes. The "tt" ( Trial Term ) attribute is "D", and "tp" ( Trial Period ) > 365.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tt"] === "W" && $attr["tp"] > 52)
											$response = array("response" => _x('Invalid form configuration. Invalid "tt, tp" attributes. The "tt" ( Trial Term ) attribute is "W", and "tp" ( Trial Period ) > 52.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tt"] === "M" && $attr["tp"] > 12)
											$response = array("response" => _x('Invalid form configuration. Invalid "tt, tp" attributes. The "tt" ( Trial Term ) attribute is "M", and "tp" ( Trial Period ) > 12.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["tt"] === "Y" && $attr["tp"] > 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "tt, tp" attributes. The "tt" ( Trial Term ) attribute is "Y", and "tp" ( Trial Period ) > 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["ta"] && !is_numeric($attr["ta"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "ta" attribute. The Trial Amount. When provided, must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["ta"] && $attr["ta"] < 0.00)
											$response = array("response" => _x('Invalid form configuration. Invalid "ta" attribute. The Trial Amount. When provided, must be >= 0.00.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["tp"] && $attr["ta"] && $attr["ta"] > 10000.00)
											$response = array("response" => _x('Invalid form configuration. Invalid "ta" attribute. The Trial Amount. When provided, must be <= 10000.00.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["rp"] || !is_string($attr["rp"]))
											$response = array("response" => _x('Invalid form configuration. Missing "rp" attribute. The Regular Period. Must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if(!is_numeric($attr["rp"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "rp" attribute. The Regular Period. Must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rp"] < 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "rp" attribute. The Regular Period. Must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["rt"] || !is_string($attr["rt"]))
											$response = array("response" => _x('Invalid form configuration. Missing "rt" attribute. The Regular Term. Must be one of D,W,M,Y,L.', "s2member-admin", "s2member"), "error" => true);

										else if(!preg_match("/[DWMYL]/", $attr["rt"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "rt" attribute. The Regular Term. Must be one of D,W,M,Y,L.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "D" && $attr["rp"] < 7 && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rp, rr" attributes. The "rt" ( Regular Term ) attribute is "D", "rp" ( Regular Period ) is < 7, and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "D" && $attr["rp"] > 365 && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rp, rr" attributes. The "rt" ( Regular Term ) attribute is "D", "rp" ( Regular Period ) > 365, and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "W" && $attr["rp"] > 52 && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rp, rr" attributes. The "rt" ( Regular Term ) attribute is "W", "rp" ( Regular Period ) > 52, and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "M" && $attr["rp"] > 12 && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rp, rr" attributes. The "rt" ( Regular Term ) attribute is "M", "rp" ( Regular Period ) > 12, and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "Y" && $attr["rp"] > 1 && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rp, rr" attributes. The "rt" ( Regular Term ) attribute is "Y", "rp" ( Regular Period ) > 1, and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "L" && $attr["rp"] > 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "rp, rt" attributes. The "rt" ( Regular Term ) attribute is "L" ( Lifetime ), and "rp" ( Regular Period ) > 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rt"] === "L" && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "rt, rr" attributes. The "rt" ( Regular Term ) attribute is "L" ( Lifetime ), and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["level_ccaps_eotper"] || !is_string($attr["level_ccaps_eotper"]))
											$response = array("response" => _x('Invalid form configuration. Missing "level_ccaps_eotper" attribute. Please check Shortcode Attributes.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["level"] !== "*" && !preg_match($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["membership_item_number_w_level_regex"], $attr["level_ccaps_eotper"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "level_ccaps_eotper" attribute. Please check Shortcode Attributes.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["level"] === "*" && !preg_match($GLOBALS["WS_PLUGIN__"]["s2member"]["c"]["membership_item_number_wo_level_regex"], $attr["level_ccaps_eotper"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "level_ccaps_eotper" attribute. Please check Shortcode Attributes.', "s2member-admin", "s2member"), "error" => true);

										else if(!$attr["ra"] || !is_string($attr["ra"]))
											$response = array("response" => _x('Invalid form configuration. Missing "ra" attribute. The Regular Amount. Must be >= 0.01.', "s2member-admin", "s2member"), "error" => true);

										else if(!is_numeric($attr["ra"]))
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["ra"] < 0.01)
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be >= 0.01.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["ra"] > 10000.00)
											$response = array("response" => _x('Invalid form configuration. Invalid "ra" attribute. The Regular Amount. Must be <= 10000.00.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rr"] && (!is_string($attr["rr"]) || !preg_match("/^([0-1]|BN)$/", $attr["rr"])))
											$response = array("response" => _x('Invalid form configuration. Invalid "rr" attribute. Regular Recurring. When provided, must be 0, 1, or BN.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rr"] === "BN" && $attr["tp"])
											$response = array("response" => _x('Invalid form configuration. Invalid "rr, tp" attributes. The "rr" ( Regular Recurring ) attribute is "BN" ( Buy Now ), and "tp" ( Trial Period ) is not "0".', "s2member-admin", "s2member"), "error" => true);

										else if($attr["level"] === "*" && $attr["rr"] !== "BN")
											$response = array("response" => _x('Invalid form configuration. Invalid "level, rr" attributes. The "level" ( Level ) attribute is "*" for ( Independent Custom Capabilities ), and "rr" is not "BN" ( Buy Now ).', "s2member-admin", "s2member"), "error" => true);

										else if($attr["ta"] === $attr["ra"] && $attr["tp"] === $attr["rp"] && $attr["tt"] === $attr["rt"])
											$response = array("response" => _x('Invalid form configuration. Invalid "ta, tp, tt" attributes. Trial Period. When provided, these cannot be exactly the same as your "ra, rp, rt" attributes.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rrt"] && (!is_string($attr["rrt"]) || !is_numeric($attr["rrt"])))
											$response = array("response" => _x('Invalid form configuration. Invalid "rrt" attribute. Recurring Times ( fixed ). When provided, must be numeric.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rrt"] && $attr["rrt"] < 1)
											$response = array("response" => _x('Invalid form configuration. Invalid "rrt" attribute. Recurring Times ( fixed ). When provided, must be >= 1.', "s2member-admin", "s2member"), "error" => true);

										else if($attr["rrt"] && $attr["rr"] !== "1")
											$response = array("response" => _x('Invalid form configuration. Invalid "rr, rrt" attributes. When "rrt" ( Recurring Times ) is provided, "rr" ( Regular Recurring ) must be 1.', "s2member-admin", "s2member"), "error" => true);
									}
							}
						return (empty($response)) ? null : $response;
					}
				/**
				* Validates different kinds of form submissions.
				*
				* Free Registration Forms do NOT require API Credentials.
				*
				* @package s2Member\AuthNet
				* @since 1.5
				*
				* @param str $form The type of Pro Form being submitted.
				* @param array $s An array of data submitted through the Pro Form.
				* @return null|array Null if there are no errors, else a response array.
				*/
				public static function authnet_form_submission_validation_errors($form = FALSE, $s = FALSE)
					{
						if($form === "registration" || !($response = c_ws_plugin__s2member_pro_authnet_responses::authnet_form_api_validation_errors()))
							{
								if /* Special form for Cancellations. User/Member must be logged in. */($form === "cancellation")
									{
										if(!is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> to cancel your account.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["captcha"] && (!$s["recaptcha_challenge_field"] || !$s["recaptcha_response_field"] || !c_ws_plugin__s2member_utils_captchas::recaptcha_code_validates($s["recaptcha_challenge_field"], $s["recaptcha_response_field"])))
											$response = array("response" => _x('Missing or invalid Security Code. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(is_object($user = wp_get_current_user()) && $user->ID && /* NOT for Administrators. */ $user->has_cap("administrator"))
											$response = array("response" => _x('Unable to process. You are an Administrator. Stopping here for security. Otherwise, an Administrator could lose access.', "s2member-admin", "s2member"), "error" => true);
									}
								else if /* Special form for Updates. User/Member must be logged in. */($form === "update")
									{
										if(!is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> to update your billing information.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(is_object($user = wp_get_current_user()) && $user->ID && /* NOT for Administrators. */ $user->has_cap("administrator"))
											$response = array("response" => _x('Unable to process. You are an Administrator. Stopping here for security. Otherwise, an Administrator could lose access.', "s2member-admin", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(!$s["card_type"] || !is_string($s["card_type"]))
											$response = array("response" => _x('Missing Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) || !is_array($s["attr"]["accept"]) || !in_array(strtolower($s["card_type"]), $s["attr"]["accept"]))
											$response = array("response" => _x('Invalid Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_number"] || !is_string($s["card_number"])))
											$response = array("response" => _x('Missing Card Number. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_expiration"] || !is_string($s["card_expiration"])))
											$response = array("response" => _x('Missing Card Expiration Date ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && !preg_match("/^[0-9]{2}\/[0-9]{4}$/", $s["card_expiration"]))
											$response = array("response" => _x('Invalid Card Expiration Date. Must be in this format ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_verification"] || !is_string($s["card_verification"])))
											$response = array("response" => _x('Missing Card Verification Code. It\'s on the back of your Card. 3-4 digits. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Maestro", "Solo")) && (!$s["card_start_date_issue_number"] || !is_string($s["card_start_date_issue_number"])))
											$response = array("response" => _x('Missing Card Start Date, or Issue #. Required for Maestro/Solo. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["street"] || !is_string($s["street"])))
											$response = array("response" => _x('Missing Street Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["city"] || !is_string($s["city"])))
											$response = array("response" => _x('Missing City/Town. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["state"] || !is_string($s["state"])))
											$response = array("response" => _x('Missing State/Province. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["country"] || !is_string($s["country"])))
											$response = array("response" => _x('Missing Country. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["zip"] || !is_string($s["zip"])))
											$response = array("response" => _x('Missing Postal/Zip Code. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["captcha"] && (!$s["recaptcha_challenge_field"] || !$s["recaptcha_response_field"] || !c_ws_plugin__s2member_utils_captchas::recaptcha_code_validates($s["recaptcha_challenge_field"], $s["recaptcha_response_field"])))
											$response = array("response" => _x('Missing or invalid Security Code. Please try again.', "s2member-front", "s2member"), "error" => true);
									}
								else if /* Validation routines for free Registration forms. */($form === "registration")
									{
										if($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_names"] && (!$s["first_name"] || !is_string($s["first_name"])))
											$response = array("response" => _x('Missing First Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_names"] && (!$s["last_name"] || !is_string($s["last_name"])))
											$response = array("response" => _x('Missing Last Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!$s["email"] || !is_string($s["email"]))
											$response = array("response" => _x('Missing or invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_email($s["email"]))
											$response = array("response" => _x('Invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(email_exists($s["email"]) && (!is_multisite() || !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"])))
											$response = array("response" => _x('That Email Address is already in use. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!$s["username"] || !is_string($s["username"]))
											$response = array("response" => _x('Missing or invalid Username. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!validate_username($s["username"]))
											$response = array("response" => _x('Invalid Username. Please try again. Use ONLY lowercase alphanumerics.', "s2member-front", "s2member"), "error" => true);

										else if(username_exists($s["username"]) && (!is_multisite() || !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"])))
											$response = array("response" => _x('That Username is already in use. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(is_multisite() && !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"]) && ($_response = wpmu_validate_user_signup($s["username"], $s["email"])) && is_wp_error($_errors = $_response["errors"]) && $_errors->get_error_message())
											$response = array("response" => $_errors->get_error_message(), "error" => true);

										else if((!$s["password1"] || !is_string($s["password1"])) && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Missing Password. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(strlen($s["password1"]) < 6 && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Invalid Password. Must be at least 6 characters. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(strlen($s["password1"]) > 20 && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Invalid Password. Max length is 20 characters. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if($s["password2"] !== $s["password1"] && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Password fields do NOT match. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["captcha"] && (!$s["recaptcha_challenge_field"] || !$s["recaptcha_response_field"] || !c_ws_plugin__s2member_utils_captchas::recaptcha_code_validates($s["recaptcha_challenge_field"], $s["recaptcha_response_field"])))
											$response = array("response" => _x('Missing or invalid Security Code. Please try again.', "s2member-front", "s2member"), "error" => true);
									}
								else if /* Validation routines for Specific Post/Page checkout forms. */($form === "sp-checkout")
									{
										if(!$s["first_name"] || !is_string($s["first_name"]))
											$response = array("response" => _x('Missing First Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!$s["last_name"] || !is_string($s["last_name"]))
											$response = array("response" => _x('Missing Last Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!$s["email"] || !is_string($s["email"]))
											$response = array("response" => _x('Missing or invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_email($s["email"]))
											$response = array("response" => _x('Invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(!$s["card_type"] || !is_string($s["card_type"]))
											$response = array("response" => _x('Missing Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) || !is_array($s["attr"]["accept"]) || !in_array(strtolower($s["card_type"]), $s["attr"]["accept"]))
											$response = array("response" => _x('Invalid Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_number"] || !is_string($s["card_number"])))
											$response = array("response" => _x('Missing Card Number. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_expiration"] || !is_string($s["card_expiration"])))
											$response = array("response" => _x('Missing Card Expiration Date ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && !preg_match("/^[0-9]{2}\/[0-9]{4}$/", $s["card_expiration"]))
											$response = array("response" => _x('Invalid Card Expiration Date. Must be in this format ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_verification"] || !is_string($s["card_verification"])))
											$response = array("response" => _x('Missing Card Verification Code. It\'s on the back of your Card. 3-4 digits. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Maestro", "Solo")) && (!$s["card_start_date_issue_number"] || !is_string($s["card_start_date_issue_number"])))
											$response = array("response" => _x('Missing Card Start Date, or Issue #. Required for Maestro/Solo. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["street"] || !is_string($s["street"])))
											$response = array("response" => _x('Missing Street Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["city"] || !is_string($s["city"])))
											$response = array("response" => _x('Missing City/Town. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["state"] || !is_string($s["state"])))
											$response = array("response" => _x('Missing State/Province. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["country"] || !is_string($s["country"])))
											$response = array("response" => _x('Missing Country. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["zip"] || !is_string($s["zip"])))
											$response = array("response" => _x('Missing Postal/Zip Code. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["captcha"] && (!$s["recaptcha_challenge_field"] || !$s["recaptcha_response_field"] || !c_ws_plugin__s2member_utils_captchas::recaptcha_code_validates($s["recaptcha_challenge_field"], $s["recaptcha_response_field"])))
											$response = array("response" => _x('Missing or invalid Security Code. Please try again.', "s2member-front", "s2member"), "error" => true);
									}
								else if /* Validation routines for Member Level checkout forms. This is the default functionality. */($form === "checkout")
									{
										if($s["attr"]["modify"] && !is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> to modify your billing plan.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["level"] === "*" && !is_user_logged_in())
											$response = array("response" => sprintf(_x('You must <a href="%s" rel="nofollow">log in</a> before making this purchase.', "s2member-front", "s2member"), esc_attr(wp_login_url($_SERVER["REQUEST_URI"]))), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(is_user_logged_in() && is_object($user = wp_get_current_user()) && $user->ID && /* NOT for Administrators. */ $user->has_cap("administrator"))
											$response = array("response" => _x('Unable to process. You are an Administrator. Stopping here for security. Otherwise, an Administrator could lose access.', "s2member-admin", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(!$s["first_name"] || !is_string($s["first_name"]))
											$response = array("response" => _x('Missing First Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!$s["last_name"] || !is_string($s["last_name"]))
											$response = array("response" => _x('Missing Last Name. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && (!$s["email"] || !is_string($s["email"])))
											$response = array("response" => _x('Missing or invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && !is_email($s["email"]))
											$response = array("response" => _x('Invalid Email Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && email_exists($s["email"]) && (!is_multisite() || !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"])))
											$response = array("response" => _x('That Email Address is already in use. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && (!$s["username"] || !is_string($s["username"])))
											$response = array("response" => _x('Missing or invalid Username. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && !validate_username($s["username"]))
											$response = array("response" => _x('Invalid Username. Please try again. Use ONLY lowercase alphanumerics.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && username_exists($s["username"]) && (!is_multisite() || !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"])))
											$response = array("response" => _x('That Username is already in use. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && is_multisite() && !c_ws_plugin__s2member_utils_users::ms_user_login_email_can_join_blog($s["username"], $s["email"]) && ($_response = wpmu_validate_user_signup($s["username"], $s["email"])) && is_wp_error($_errors = $_response["errors"]) && $_errors->get_error_message())
											$response = array("response" => $_errors->get_error_message(), "error" => true);

										else if(!is_user_logged_in() && (!$s["password1"] || !is_string($s["password1"])) && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Missing Password. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && strlen($s["password1"]) < 6 && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Invalid Password. Must be at least 6 characters. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && strlen($s["password1"]) > 20 && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Invalid Password. Max length is 20 characters. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!is_user_logged_in() && $s["password2"] !== $s["password1"] && $GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["custom_reg_password"])
											$response = array("response" => _x('Password fields do NOT match. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(!$s["card_type"] || !is_string($s["card_type"]))
											$response = array("response" => _x('Missing Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(!in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) || !is_array($s["attr"]["accept"]) || !in_array(strtolower($s["card_type"]), $s["attr"]["accept"]))
											$response = array("response" => _x('Invalid Card Type ( Billing Method ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_number"] || !is_string($s["card_number"])))
											$response = array("response" => _x('Missing Card Number. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_expiration"] || !is_string($s["card_expiration"])))
											$response = array("response" => _x('Missing Card Expiration Date ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && !preg_match("/^[0-9]{2}\/[0-9]{4}$/", $s["card_expiration"]))
											$response = array("response" => _x('Invalid Card Expiration Date. Must be in this format ( mm/yyyy ). Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["card_verification"] || !is_string($s["card_verification"])))
											$response = array("response" => _x('Missing Card Verification Code. It\'s on the back of your Card. 3-4 digits. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Maestro", "Solo")) && (!$s["card_start_date_issue_number"] || !is_string($s["card_start_date_issue_number"])))
											$response = array("response" => _x('Missing Card Start Date, or Issue #. Required for Maestro/Solo. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["street"] || !is_string($s["street"])))
											$response = array("response" => _x('Missing Street Address. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["city"] || !is_string($s["city"])))
											$response = array("response" => _x('Missing City/Town. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["state"] || !is_string($s["state"])))
											$response = array("response" => _x('Missing State/Province. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["country"] || !is_string($s["country"])))
											$response = array("response" => _x('Missing Country. Please try again.', "s2member-front", "s2member"), "error" => true);

										else if(in_array($s["card_type"], array("Visa", "MasterCard", "Discover", "Amex", "Maestro", "Solo")) && (!$s["zip"] || !is_string($s["zip"])))
											$response = array("response" => _x('Missing Postal/Zip Code. Please try again.', "s2member-front", "s2member"), "error" => true);
										/* ----------------------------------------------------------------------------------------------------------------- */
										else if($s["attr"]["captcha"] && (!$s["recaptcha_challenge_field"] || !$s["recaptcha_response_field"] || !c_ws_plugin__s2member_utils_captchas::recaptcha_code_validates($s["recaptcha_challenge_field"], $s["recaptcha_response_field"])))
											$response = array("response" => _x('Missing or invalid Security Code. Please try again.', "s2member-front", "s2member"), "error" => true);
									}
								else // Else we are dealing with an unknown form submission type.
									$response = array("response" => _x('Unknown form submission type. Please contact Support.', "s2member-front", "s2member"), "error" => true);
							}
						return apply_filters("ws_plugin__s2member_pro_authnet_form_submission_validation_response", ((empty($response)) ? null : $response), $form, $s);
					}
			}
	}
?>