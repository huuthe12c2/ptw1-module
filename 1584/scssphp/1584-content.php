<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1584">
    <div class="container mg-screen">
        <div class="row img-sp">
            <div class="col-md-6 col-sm-12 img-title1">
                <img src="images/kevin-laminto.jpg" alt="kevin" class="img-fluid kevin">
                <br>
                <i class="infor-img">Lorem ipsum dolor amet</i>
            </div>
            <div class="col-md-6 col-sm-12 img-title2">
                <img src="images/daily-case.jpg" alt="daily" class="img-fluid daily">
                <br>
                <i class="infor-img">Ipsum lorem dolor amet</i>
            </div>
        </div>
        <div class="row tick-sp">
            <div class="col-md-4  elemen-container">
                    <ul>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Auctor iaculis leo</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla  tincidunt</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla cidunt tincidunt</span>
                        </li>
                        <li>
                           <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                    </ul>
            </div>
            <div class="col-md-4">
                <div class="elemen-container">
                    <ul>
                        <li>
                           <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                           <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                           <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="elemen-container">
                    <ul>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                        <li>
                            <span  class="fa fa-check" aria-hidden="true"></span>
                            <span class="item-text">Nulla tincidunt tincidunt</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
