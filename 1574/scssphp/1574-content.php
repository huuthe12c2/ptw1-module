<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1574">
  <div class="container mar-screen">
        <div class="row more-about">
          <div class="col-6 col-sm-6 col-md-6 img-more-about">
            <img src="images/flaunter-com.png" alt="flaunt" class="img-fluid img-flaunt">
            <img src="images/laura-chouette.png" alt="laura" class="img-fluid img-laura">
            <img src="images/photo-of-women.png" alt="women" class="img-fluid img-women">
          </div>
          <div class="col-6 col-sm-6 col-md-6 conten-more-about">
            <h4>Create your own style, let it be unique for yourself and yet identifiable for others.</h4>
            <p>Hello and welcome to Seven Fashion blog! Lorem ipsum dolor sit amet, consectetur adipiscing fermentum non turpis eu massa id ex placerat.</p>
            <a href="#">
            <span class="button-more">MORE ABOUT ME</span>
              <i class="fa fa-long-arrow-right fa-right-me" aria-hidden="true"></i>
            </a>
          </div>
        </div>
    </div>
    
</div>
