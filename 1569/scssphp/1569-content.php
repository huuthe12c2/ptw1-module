<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
   <div class="type-1569">
    <div class="container">
        <div class="con-wh">
 
                <div class="hover-icon">
                    <img src="images/favoryte.PNG" alt="favoryte" class="img-fluid img-style">
                </div>
         

            <div class="title-favou">
                <a href="#"><h2>My favourite S/S 2020 pieces on sale</h2></a>
            </div>
            <span class="category-link">
                <a href="#">Fashion advice</a>,<a href="#">Shop the look</a>,<a href="#">date-time.....</a>
            </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus minus voluptatem earum, nemo iure laudantium fugit accusamus ea quam minima culpa. Excepturi aspernatur vel explicabo maiores laboriosam officiis eum tempore.</p>
            <div class="read-story">
                <a href="#">Read story <i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

</div>