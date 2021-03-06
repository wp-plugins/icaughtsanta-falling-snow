<?php
/*
Copyright: © 2009 CatchACharacter.com ( coded in the USA )
<mailto:support@catchacharacter.com> <http://www.catchacharacter.com/>

Released under the terms of the GNU General Public License.
You should have received a copy of the GNU General Public License,
along with this software. In the main directory, see: [gpl-v3.txt]
If not, see: <http://www.gnu.org/licenses/>.
*/
/*
WARNING: This is a system configuration file, please DO NOT EDIT this file directly!
... Instead, use the plugin options panel in WordPress to override these settings.
*/
/*
Direct access denial.
*/
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"]))
	exit;
/*
Determine the full url to the directory this plugin resides in.
*/
$GLOBALS["WS_PLUGIN__"]["ics_snow"]["c"]["dir_url"] = WP_PLUGIN_URL . "/" . basename(dirname(dirname(__FILE__)));
/*
Check if the plugin has been configured *should be set after the first config via options panel*.
*/
$GLOBALS["WS_PLUGIN__"]["ics_snow"]["c"]["configured"] = get_option("ws_plugin__ics_snow_configured");
/*
Configure the file modification time for the syscon.inc.php file.
*/
$GLOBALS["WS_PLUGIN__"]["ics_snow"]["c"]["filemtime"] = filemtime(__FILE__);
/*
Configure & validate all of the plugin options; and set their defaults.
*/
function ws_plugin__ics_snow_configure_options_and_their_defaults ($options = FALSE) /* Can also be used to merge options with defaults. */
	{
		/* Here we build the default options array, which will be merged with the user options.
		It is important to note that sometimes default options may not or should not be pre-filled on an options form.
		These defaults are for the system to use in various ways, we may choose not to pre-fill certain fields.
		In other words, some defaults may be used internally, but to the user, the option will be empty. */
		$default_options = array( /* Please comment each line for clarity, it is easy to forget things. */
		/**/
		"options_version" => "1.0", /* Used internally to keep runtime files up-to-date. */
		/**/
		"enable_snow" => "1", /* Enable the snow fall effect? True or false. */
		"enable_peel" => "0", /* Enable the peel ad? True or false. */
		"idev_id" => ""); /* Affiliate ID# for iDev tracking. */
		/*
		Here they are merged. user options will overwrite some or all default values. 
		*/
		$GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"] = array_merge($default_options, (($options !== false) ? (array)$options : (array)get_option("ws_plugin__ics_snow_options")));
		/*
		Validate each option, possibly reverting back to the default value if invalid.
		Also check if options were passed in on some of these, in case empty values are to be allowed. 
		*/
		foreach ($GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"] as $key => &$value)
			{
				if (!is_array($value))
					$value = trim(stripslashes($value));
				else /* A string, or an array of strings. */
					foreach ($value as $k => $v)
						$value[$k] = trim(stripslashes($v));
				/**/
				if (!isset($default_options[$key]))
					unset($GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"][$key]);
				/**/
				else if ($key === "enable_snow" && (!is_string($value) || !is_numeric($value)))
					$value = $default_options[$key];
				/**/
				else if ($key === "enable_peel" && (!is_string($value) || !is_numeric($value)))
					$value = $default_options[$key];
				/**/
				else if ($key === "idev_id" && (!is_string($value) || !is_numeric($value)))
					$value = $default_options[$key];
			}
		/**/
		return $GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"];
	}
/*
Now lets call the function.
*/
call_user_func("ws_plugin__ics_snow_configure_options_and_their_defaults");
?>