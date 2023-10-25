<?php

/**
 * This file is part of playSMS.
 *
 * playSMS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * playSMS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with playSMS. If not, see <http://www.gnu.org/licenses/>.
 */
defined('_SECURE_') or die('Forbidden');

$plugin_config['dev']['name'] = 'dev';
$plugin_config['dev']['enable_incoming'] = true;
$plugin_config['dev']['enable_outgoing'] = true;

// smsc configuration
$plugin_config['dev']['_smsc_config_'] = array();

if (auth_isadmin()) {
	$menutab = $core_config['menutab']['settings'];
	$menu_config[$menutab][] = array(
		"index.php?app=main&inc=gateway_dev&route=simulate&op=simulate",
		_('Simulate incoming SMS')
	);
}
