<?php
/*
jsN Masthead Module for Joomla 3.x, Load a simple masthead 
Copyright (c) 2014 J.S. Negley LLC

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>
*/

defined( '_JEXEC' ) or die( 'Restricted access' ); // no direct access allowed

require_once __DIR__ . '/helper.php';
 
$hello = modjnmasthead::test($params);

$loadCSS		= $params->get('mod_jn_masthead_loadcss','0');
$sectionTitle	= $params->get('mod_jn_masthead_sectiontitle','');
$sectionSubtitle= $params->get('mod_jn_masthead_sectionsubtitle','');

$imgSrc			= $params->get('mod_jn_masthead_imgsrc','');
$imgAlt			= $params->get('mod_jn_masthead_imgalt', 'image');
$imgShape		= $params->get('mod_jn_masthead_imgshape', '');
$imgAlign		= $params->get('mod_jn_masthead_imgalign', '');
$imgResponsive	= ($params->get('mod_jn_masthead_imgresponsive'))?('img-responsive'):('');

$bkgSrc			= $params->get('mod_jn_masthead_bkgsrc', '');
$bkgStretchF	= $params->get('mod_jn_masthead_bkgstretch', 1 );

require JModuleHelper::getLayoutPath('mod_jn_masthead', $params->get('layout', 'default'));
?>