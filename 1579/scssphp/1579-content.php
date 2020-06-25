<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1579">
  <div class="container mg-screen">
     <div class="title-top">
       <h5><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.saepe ducimus nostrum.t, consectetur adipisicing elit. Corporis</i></h5>
   </div>
   <div class="information">
       <div class="row col-infor">
           <div class="col-md-6 col-sm-12 content">
               <p class="text-column">
                <span class="drop-text">
                    <span class="drop-text-one">L</span>
                </span>
                   orem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, accusamus, natus maxime itaque delectus eum labore nobis expedita ratione Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero saepe cupiditate eius in veniam vitae nostrum voluptatum enim ipsam, amet veritatis iste magni commodi sit facere modi odit, quas.
                   saepe ducimus nostrum eaque voluptas sunt fugiat omnis distinctio aliquam maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   Fuga iure dolores eaque autem enim itaque eum, sunt optio sint repellat quisquam repudiandae odit distinctio incidunt, delectus ipsa velit nihil amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut sint tempore veniam nulla, atque, rem. Ab dicta, dolor aperiam magnam totam eos ullam molestias labore, pariatur sequi veritatis est?
                  
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt natus illum quasi non laudantium veritatis. Quo officia sunt dolores quasi ipsa magni vitae. Magnam autem fugiat maxime nisi quo ut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam explicabo nemo dignissimos cumque, cum doloribus iusto officia maiores modi esse a officiis deserunt dolorem nihil id repudiandae nesciunt assumenda voluptatibus.
               </p>
           </div>
           <div class="col-md-6 img-content">
               <img src="images/laure-choutte.jpg" alt="laure" class="img-fluid laure-choutte">
           </div>
       </div>
   </div>
   </div>
</div>
