            <?php 

            include 'partials/pages/map/part-dv.php'; 
            include 'partials/pages/map/part-vl.php'; 

            ?>

            <!-- JQuery map buttons events handlers -->
            <script>
              //hide all
              $("#map-vl").hide();

              $("#map-dv-btn").click(function(){
                $("#map-dv").hide();
                $("#map-vl").show();
              });
            </script>