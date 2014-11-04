<?php
/**
 * Entry Point for Single Image 1.0 module
 * @ J.S. Negley
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