<?php
/*
Plugin Name: TLD30 Short URL
Plugin URI: http://tld30.com/webmaster/tools/wordpress-short-url-plugin/
Description: Create Short URL for your posts and pages permalinks. Must insert a php code into single post template. <a href="http://tld30.com/webmaster/tools/wordpress-short-url-plugin/" target="_blank" title="Setup Information">Setup Information</a>
Author: Qorporate LLC
Author: Jason Jersey
Version: 1.0
Author URI: http://qorporate.com
Licence: Provided under the GNU General Public Licence v3.0 - http://www.gnu.org/licenses/gpl-3.0.txt
*/

/*
Copyright (C) 2010 Jason Jersey, Qorporate.com (op@qorporate.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/gpl-3.0.txt>.
*/

function TLD30() {
		
	$tld30 =  file_get_contents("http://tld30.com/a/?fullurl=" . get_permalink());
	echo $tld30;

	}
?>