<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1564">
	<div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 		<div class="container-fluid">
 			<!-- Brand and toggle get grouped for better mobile display -->
 			<div class="navbar-header">
 				<a class="navbar-brand hv-text-main" href="#">MAIN</a>
 				<a class="navbar-brand hv-text" href="#">FASHION</a>
 				<a class="navbar-brand hv-text" href="#">BEAUTY</a>
 				<a class="navbar-brand hv-text" href="#">LIFESTYLE</a>
 			</div>
 			<div class="navbar-header navbar-center img-logo">
 				<a class="navbar-brand" href="#">
 					<img src="images/logo-mobile.PNG" alt="logo" class="img-fluid">
 				</a>
 			</div>
 			<div class="navbar-header navbar-right">
 				<a class="navbar-brand hv-text" href="#">SHOP THE LOOK</a>
 				<a class="navbar-brand hv-icon" href="#"><i class="fa fa-facebook fa-w" aria-hidden="true"></i></a>
 				<a class="navbar-brand hv-icon" href="#"><i class="fa fa-twitter fa-w" aria-hidden="true"></i></a>
 				<a class="navbar-brand hv-icon" href="#"><i class="fa fa-instagram fa-w" aria-hidden="true"></i></a>
 				<a class="navbar-brand hv-icon" href="#"><i class="fa fa-youtube-play fa-w" aria-hidden="true"></i></a>
 				<a class="navbar-brand" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
 			</div>
 		</div>
 	</nav>
    </div>
</div>
