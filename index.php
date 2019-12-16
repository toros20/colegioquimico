<?php
    //importamos el head , con los css 
    include('head.php');
?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here 
    <div id="preloader"></div>-->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <?php
            //importamos el header y el menu 
            include('menu.php');
        ?>
    
 <!-- Slider 1 Area Start Here -->
 <div class="slider1-area ">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                     <img src="img/slider/1-1.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-3" />
                     <img src="img/slider/1-2.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-1" />
                    <img src="img/slider/1-3.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-2" />                   
                    <img src="img/slider/2-1.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-3" />
                    <img src="img/slider/2-2.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
                <div id="slider-direction-4" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-4">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
                <div id="slider-direction-5" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-5">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
     
    </div> <!--End Of Wraper-->
</body>
   <!-- Main Body Area End Here -->
   <?php
        //importamos el footer con los js 
        include('footer.php');
    ?>
</html>