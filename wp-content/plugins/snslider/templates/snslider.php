<html>
    <head>
        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <script src="<?php echo $js ?>"></script>
        <link rel="stylesheet" href="<?php echo $css ?>" /> 
        <style>
            .title{
                color: blue;
            }
            .banner .dots li.active {
                background: blue;
            }
            .fases {
                background: -webkit-linear-gradient(#B1B1B1, blue); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(#B1B1B1, blue); /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(#B1B1B1, blue); /* For Firefox 3.6 to 15 */
                background: linear-gradient(#B1B1B1, blue); /* Standard syntax */            
            }
            .links {
                background-color: blue;
            }
        </style>
        <script>
            jQuery( document ).ready(function( $ ) {
                $('.banner').unslider(
                    {
                        speed: 500,               //  The speed to animate each slide (in milliseconds)
                        delay: 3000,              //  The delay between slide animations (in milliseconds)
                        complete: function() {},  //  A function that gets called after every slide animation
                        keys: true,               //  Enable keyboard (left, right) arrow shortcuts
                        dots: true,               //  Display dot navigation
                        fluid: false              //  Support responsive design. May break non-responsive designs
                    }
                );
            }); 

        </script>
    </head>
    <body>
        <div class="banner">
            <ul>
<?php
foreach($slides as $slide){
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
                                verbreden<br>
                                evalueren<br>
                                experimenteren<br>
                                schetsen<br>
                                initi&euml;ren<br>
                                <?php echo $slide['fase'] ?>
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
                        <div class="text">
                            <?php echo $slide['text'] ?>
                        </div>
                        <div class="selects">
                                        Fase Jaar
                        </div>
                </li>
<?php
}
?>
            </ul>
        </div>

    </body>
</html>
