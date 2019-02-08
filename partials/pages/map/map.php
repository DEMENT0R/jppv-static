            <?php 

            include 'partials/pages/map/part-dv.php'; 
            include 'partials/pages/map/part-vl.php'; 

            ?>

            <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
            <script>
              window.onload = function () {
                  var ImageMap = function (map, img) {
                          var n,
                              areas = map.getElementsByTagName('area'),
                              len = areas.length,
                              coords = [],
                              previousWidth = 128;
                          for (n = 0; n < len; n++) {
                              coords[n] = areas[n].coords.split(',');
                          }
                          this.resize = function () {
                              var n, m, clen,
                                  x = img.offsetWidth / previousWidth;
                              for (n = 0; n < len; n++) {
                                  clen = coords[n].length;
                                  for (m = 0; m < clen; m++) {
                                      coords[n][m] *= x;
                                  }
                                  areas[n].coords = coords[n].join(',');
                              }
                              previousWidth = document.body.clientWidth;
                              return true;
                          };
                          window.onresize = this.resize;
                      },
                      imageMap = new ImageMap(document.getElementById('map_ID'), document.getElementById('img_ID'));
                  imageMap.resize();
                  return;
              };



            </script>

            <!-- JQuery map buttons events handlers -->
            <script>
              //hide all
              $("#map-vl").hide();

              $("#map-dv-btn").click(function(){
                $("#map-dv").hide();
                $("#map-vl").show();
              });
            </script>