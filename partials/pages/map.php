            <?php 

            include 'partials/pages/map/part-dv.php'; 
            include 'partials/pages/map/part-vl.php'; 
            include 'partials/pages/map/part-amur.php'; 
            include 'partials/pages/map/part-chuk.php'; 
            include 'partials/pages/map/part-eao.php'; 

            ?>

            <!-- JQuery map buttons events handlers -->
            <script>
              //start screen
              hideAll ();
              $("#map-dv").show();

              //VL
              $("area[href$='#map-vl']").click(function(){
                hideAll ();
                $("#map-vl").show();
              });

              //Amursk
              $("area[href$='#map-amur']").click(function(){
                hideAll ();
                $("#map-amur").show();
              });

              //Chukotka
              $("area[href$='#map-chuk']").click(function(){
                hideAll ();
                $("#map-chuk").show();
              });

              //EAO
              $("area[href$='#map-eao']").click(function(){
                hideAll ();
                $("#map-eao").show();
              });

              function hideAll () {
                $("#map-dv").hide();
                $("#map-vl").hide();
                $("#map-amur").hide();
                $("#map-chuk").hide();
                $("#map-eao").hide();
                $("#map-kamch").hide();
                $("#map-khb").hide();
                $("#map-magadan").hide();
                $("#map-saha").hide();
                $("#map-skh").hide();
              }

            </script>

            <!-- Map Resizer -->
            <script type="text/javascript" src="js/imageMapResizer.min.js"></script>
            <script type="text/javascript">

              $('map').imageMapResize();

            </script>