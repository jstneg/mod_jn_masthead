<?php
// This is the default output file
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
if($bkgStretchF){

	$doc->addScript( $doc->baseurl.'/modules/mod_jn_masthead/js/jquery.backstretch.min.js', 'text/javascript', false );

	$addscript  = 'jQuery(document).ready(function(){'."\n";
	$addscript .= ' jQuery(".mod-masthead-id-'.$module->id.'").backstretch("'.$doc->baseurl.'/'.$bkgSrc.'");'."\n";
	$addscript .= "});\n\n"; 	

	$doc->addScriptDeclaration($addscript);
} else {
	$addstyle = '.mod-masthead-id-'.$module->id.'{ background:url('.$doc->baseurl.'/'.$bkgSrc.') top center; }'; 
	$doc->addStyleDeclaration( $addstyle );
}
//$doc->addStyleSheet( $doc->baseurl.'/modules/mod_jn_masthead/tmpl/style.css' );

echo '<div class="mod-masthead mod-masthead-id-'.$module->id.'"><div class="mod-masthead-in">'."\n";
?>
<div class="container"><div class="row"><div class="col-sm-12">
<?php
if($imgSrc){
	echo '<img src="'.$imgSrc.'" ';
	echo 'alt="'.$imgAlt.'" ';
	echo 'class="section-img';
	if($imgShape){
		echo ' '.$imgShape;
	}
	if($imgAlign){
		echo ' '.$imgAlign;
	}
	if($imgResponsive){
		echo ' '.$imgResponsive;
	}
	echo '">'."\n";
}
if($sectionTitle){
	echo '<div class="section-title">'.$sectionTitle.'</div>';
}
if($sectionSubtitle){
	echo '<div class="section-subtitle">'.$sectionSubtitle.'</div>';
}

echo "</div>\n";
?>
</div></div></div>
</div></div>
