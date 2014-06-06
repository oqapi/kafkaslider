<html>
    <head>
        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <script src="<?php echo $js ?>"></script>
        <link rel="stylesheet" href="<?php echo $css ?>" /> 
<!--        <link rel="stylesheet" href="<?php echo $stylecss ?>" />  -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo $modernizr ?>"></script> 
        <noscript><link rel="stylesheet" type="text/css" href="<?php echo $nojscss ?>" /></noscript>     
        <script type="text/javascript" src="<?php echo $snsliderjs ?>"></script> 
        <style>
            .title{
                color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .banner .dots li.active {
                background: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .fases {
                background: -webkit-linear-gradient(#B1B1B1, <?php echo get_option('snslider_base_color', '#81CFF4'); ?>); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(#B1B1B1, <?php echo get_option('snslider_base_color', '#81CFF4'); ?>); /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(#B1B1B1, <?php echo get_option('snslider_base_color', '#81CFF4'); ?>); /* For Firefox 3.6 to 15 */
                background: linear-gradient(#B1B1B1, <?php echo get_option('snslider_base_color', '#81CFF4'); ?>); /* Standard syntax */            
            }
            .links {
                background-color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .fases div .selected{
                color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .selects select{
                color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .selects {
                background-color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;

            }
            .nice_select {
                color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .nice_select .dropdown li a {
                color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>;
            }
            .nice_select:after {
                border-color: <?php echo get_option('snslider_base_color', '#81CFF4'); ?>
                transparent;
                }
        </style>
        <script></script>
    </head>
    <body>
        <div class="banner">
            <ul>
<?php
$years = array();
foreach ($slides as $slide) {
    if (!in_array($slide['jaar'], $years)) {
        $years[] = $slide['jaar'];
    }
}
sort($years);

foreach($slides as $slide){
    if ($_GET['jaar'] && ($_GET['jaar'] != $slide['jaar'])){
        continue;
    }
?>
                <li class="item">
                        <div class="header" style="background: url(<?php echo $slide['thumbnail'] ?>) no-repeat; background-size: 100%;">
                            <div class="title">
                                <?php echo $slide['title'] ?>
                            </div>
                            <div class="quotedivider">
                            </div>
                            <div class="quote">
                                <?php echo $slide['quote'] ?>
                            </div>
                        </div>
                        <div class="fase">
                            <div class="fases">
                                <div class="divider"></div> 
                                <div class="verbreden">verbreden</div>
                                <div class="evalueren">evalueren</div>
                                <div class="experimenteren">experimenteren</div>
                                <div class="adopteren">adopteren</div>
                                <div class="schetsen">schetsen</div>
                                <div class="initieren selected">initi&euml;ren</div>
                            </div> 
                            <div class="links">
                                <div><a href="#">BLOG</a></div>
                                <div><a href="#">NIEUWS</a></div>
                                <div><a href="#">HET TEAM</a></div>
                            </div>
                        </div> 
                        <div class="headertitle">
                            <div class="jaar">START: <span class="value"><?php echo $slide['jaar'] ?></span> </div>
                            <div class="trekker">TREKKER: <span class="value"><?php echo $slide['trekker'] ?></span> </div>
                            <div class="opdrachtgever">OPDRACHTGEVER: <span class="value"><?php echo $slide['opdrachtgever'] ?></span> </div>
                        </div>
                        <div class="fase_verbreden text">
                            <?php echo $slide['fase_verbreden'] ?>
                        </div>
                        <div class="fase_evalueren text">
                            <?php echo $slide['fase_evalueren'] ?>
                        </div>
                        <div class="fase_experimenteren text">
                            <?php echo $slide['fase_experimenteren'] ?>
                        </div>
                        <div class="fase_adopteren text">
                            <?php echo $slide['fase_adopteren'] ?>
                        </div>
                        <div class="fase_schetsen text">
                            <?php echo $slide['fase_schetsen'] ?>
                        </div>
                        <div class="fase_initieren text">
                            <?php echo $slide['fase_initieren'] ?>
                        </div>
                        <div class="selects">
                            <div id="dd2" class="select_jaar nice_select" tabindex="1"><span class="select_jaar_span">Jaar (alle)</span>
                                <ul class="dropdown">
                                    <?php foreach ($years as $year){ ?>
                                    <li><a class="filter_year" href="#"><?php echo $year ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="dd1" class="select_fase nice_select" tabindex="1"><span class="select_fase_span">Fase (alle)</span>
                                <ul class="dropdown">
                                    <li class="verbreden"><a href="#">verbreden</a></li>
                                    <li class="evalueren"><a href="#">evalueren</a></li>
                                    <li class="experimenteren"><a href="#">experimenteren</a></li>
                                    <li class="adopteren"><a href="#">adopteren</a></li>
                                    <li class="schetsen"><a href="#">schetsen</a></li>
                                    <li class="initieren"><a href="#">initi&euml;ren</a></li>
                                </ul>
                            </div>

                        </div>
                </li>
<?php
}
?>
            </ul>
            <a href="#" class="unslider-arrow prev"></a>
            <a href="#" class="unslider-arrow next"></a>  
        </div>

    </body>
</html>
