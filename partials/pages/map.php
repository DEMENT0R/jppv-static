            <?php 

            include 'partials/pages/map/part-dv.php'; 
            include 'partials/pages/map/part-vl.php'; 
            include 'partials/pages/map/part-amur.php'; 
            include 'partials/pages/map/part-chuk.php'; 
            include 'partials/pages/map/part-eao.php'; 
            include 'partials/pages/map/part-kamch.php'; 
            include 'partials/pages/map/part-khb.php'; 
            include 'partials/pages/map/part-magadan.php'; 
            include 'partials/pages/map/part-saha.php'; 
            include 'partials/pages/map/part-skh.php'; 

            ?>

            <!-- JQuery map buttons events handlers -->
            <script>
              //start screen
              hideAll ();
              $("#map-dv").show();

              //vl
              $("area[href$='#map-vl']").click(function(){
                hideAll ();
                $("#map-vl").show();
              });

              //amur
              $("area[href$='#map-amur']").click(function(){
                hideAll ();
                $("#map-amur").show();
              });

              //chuk
              $("area[href$='#map-chuk']").click(function(){
                hideAll ();
                $("#map-chuk").show();
              });

              //eao
              $("area[href$='#map-eao']").click(function(){
                hideAll ();
                $("#map-eao").show();
              });

              //kamch
              $("area[href$='#map-kamch']").click(function(){
                hideAll ();
                $("#map-kamch").show();
              });

              //khb
              $("area[href$='#map-khb']").click(function(){
                hideAll ();
                $("#map-khb").show();
              });

              //magadan
              $("area[href$='#map-magadan']").click(function(){
                hideAll ();
                $("#map-magadan").show();
              });

              //saha
              $("area[href$='#map-saha']").click(function(){
                hideAll ();
                $("#map-saha").show();
              });

              //skh
              $("area[href$='#map-skh']").click(function(){
                hideAll ();
                $("#map-skh").show();
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