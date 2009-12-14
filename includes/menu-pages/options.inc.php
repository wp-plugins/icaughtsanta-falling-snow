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
Direct access denial.
*/
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"]))
	exit;
/*
Options page.
*/
echo '<style type="text/css">' . "\n";
echo 'div.possible-option-xlinks a[rel=xlink]' . "\n"; /* Only on option pages, to prevent disruption. */
echo '{ padding-right: 18px; background: url(http://img9.imageshack.us/img9/1851/xlink.png) no-repeat center right; }' . "\n";
echo '</style>' . "\n";
/**/
echo '<div class="wrap possible-option-xlinks">' . "\n";
/**/
echo '<div id="icon-plugins" class="icon32"><br /></div>' . "\n";
echo '<h2>iCaughtSanta Snow Options</h2>' . "\n";
/**/
echo '<hr />' . "\n";
/**/
echo '<form method="post" name="ws_plugin__ics_snow_options_form" id="ws-plugin--ics-snow-options-form">' . "\n";
echo '<input type="hidden" name="ws_plugin__ics_snow_options_save" id="ws-plugin--ics-snow-options-save" value="1" />' . "\n";
echo '<input type="hidden" name="ws_plugin__ics_snow_configured" id="ws-plugin--ics-snow-configured" value="1" />' . "\n";
/**/
echo '<h3>Enable The Falling Snow Effect?</h3>' . "\n";
echo '<p>Adds a beautiful falling snow effect to any Wordpress powered site.</p>' . "\n";
/**/
echo '<table class="form-table">' . "\n";
echo '<tr valign="top">' . "\n";
/**/
echo '<th scope="row">' . "\n";
echo '<label for="ws-plugin--ics-snow-enable-snow">' . "\n";
echo 'Enable<br />Snow?' . "\n";
echo '</label>' . "\n";
echo '</th>' . "\n";
/**/
echo '<td>' . "\n";
echo '<select name="ws_plugin__ics_snow_enable_snow" id="ws-plugin--ics-snow-enable-snow">' . "\n";
echo '<option value="1"' . (($GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"]["enable_snow"]) ? ' selected="selected"' : '') . '>Yes ( enable snow )</option>' . "\n";
echo '<option value="0"' . ((!$GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"]["enable_snow"]) ? ' selected="selected"' : '') . '>No ( disable snow )</option>' . "\n";
echo '</select><br />' . "\n";
echo '<span class="setting-description">' . "\n";
echo 'Charm your visitors with this wonderful winter scenery.' . "\n";
echo '</span>' . "\n";
echo '</td>' . "\n";
/**/
echo '</tr>' . "\n";
echo '</table>' . "\n";
/**/
echo '<hr />' . "\n";
/**/
echo '<h3>Enable The iCaughtSanta Peel Ad?</h3>' . "\n";
echo '<p>Earn holiday cash promoting iCaughtSanta.com. Join our affiliate program.</p>' . "\n";
/**/
echo '<table class="form-table">' . "\n";
echo '<tr valign="top">' . "\n";
/**/
echo '<th scope="row">' . "\n";
echo '<label for="ws-plugin--ics-snow-enable-peel">' . "\n";
echo 'Enable<br />Peel Ad?' . "\n";
echo '</label>' . "\n";
echo '</th>' . "\n";
/**/
echo '<td>' . "\n";
echo '<select name="ws_plugin__ics_snow_enable_peel" id="ws-plugin--ics-snow-enable-peel">' . "\n";
echo '<option value="1"' . (($GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"]["enable_peel"]) ? ' selected="selected"' : '') . '>Yes ( enable peel ad )</option>' . "\n";
echo '<option value="0"' . ((!$GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"]["enable_peel"]) ? ' selected="selected"' : '') . '>No ( disable peel ad )</option>' . "\n";
echo '</select><br />' . "\n";
echo '<span class="setting-description">' . "\n";
echo 'Enter your affiliate ID# below to earn cash.' . "\n";
echo '</span>' . "\n";
echo '</td>' . "\n";
/**/
echo '</tr>' . "\n";
echo '</table>' . "\n";
/**/
echo '<hr />' . "\n";
/**/
echo '<h3>iDev Affiliate ID# For iCaughtSanta Commissions?</h3>' . "\n";
echo '<p>Join our affiliate program <a rel="xlink" href="http://www.catchacharacter.com/affiliates/signup.php">HERE</a> to get your ID#.</p>' . "\n";
/**/
echo '<table class="form-table">' . "\n";
echo '<tr valign="top">' . "\n";
/**/
echo '<th scope="row">' . "\n";
echo '<label for="ws-plugin--ics-snow-idev-id">' . "\n";
echo 'iDev<br />Affiliate ID#' . "\n";
echo '</label>' . "\n";
echo '</th>' . "\n";
/**/
echo '<td>' . "\n";
echo '<input type="text" name="ws_plugin__ics_snow_idev_id" id="ws-plugin--ics-snow-idev-id" value="' . format_to_edit($GLOBALS["WS_PLUGIN__"]["ics_snow"]["o"]["idev_id"]) . '" class="regular-text" /><br />' . "\n";
echo '<span class="setting-description">' . "\n";
echo 'Click <a rel="xlink" href="http://www.catchacharacter.com/affiliates/signup.php">here</a> to get your ID#.' . "\n";
echo '</span>' . "\n";
echo '</td>' . "\n";
/**/
echo '</tr>' . "\n";
echo '</table>' . "\n";
/**/
echo '<hr />' . "\n";
/**/
echo '<p class="submit"><input type="submit" class="button-primary" value="Save Changes" /></p>' . "\n";
/**/
echo '</form>' . "\n";
/**/
echo '</div>' . "\n";
?>