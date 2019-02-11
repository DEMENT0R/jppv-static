      <div id="" class="row">
          <div class="col-md-1" style="height: 90vh;"></div>
          <div class="col-md-2">
            <div class="block-100"></div>
            <p class="mt-3 gray-text">Гланая / Платформа</p>
            <div class="block-230"></div>
            <div class="block-230"></div>
            <div class="block-100"></div>
            <p>
              <a href="#" class="" id="link-platforma">Платформа</a><br>
              <a href="#" class="" id="link-tasks">Цели и задачи</a><br>
              <a href="#" class="" id="link-actions">Направление деятельности</a><br>
              <a href="#" class="" id="link-leaders">Руководство</a><br>
              <a href="#" class="" id="link-bank">JBIK Bank</a>
            </p>
            <script>
            	// First run
              $( document ).ready(function() {
                hide_all ();
                $( "#block-platforma" ).show();
              });


      				$( "#link-platforma" ).click(function() {
      					hide_all ();
      					$( "#block-platforma" ).show();
      				});
      				$( "#link-tasks" ).click(function() {
      					hide_all ();
      					$( "#block-tasks" ).show();
      				});
      				$( "#link-actions" ).click(function() {
      					hide_all ();
      					$( "#block-actions" ).show();
      				});
      				$( "#link-leaders" ).click(function() {
      					hide_all ();
      					$( "#block-leaders" ).show();
      				});
      				$( "#link-bank" ).click(function() {
      					hide_all ();
      					$( "#block-bank" ).show();
      				});
                  	
      				function hide_all () {
      					$( "#block-platforma" ).hide();
      					$( "#block-tasks" ).hide();
      					$( "#block-actions" ).hide();
      					$( "#block-leaders" ).hide();
      					$( "#block-bank" ).hide();
      				}
            </script>
          </div>
          <div class="col-12 col-md-1 pl-0">
            <div class="block-100"></div>
            <p class="mt-3">Назад</p>
          </div>
          <div class="col-12 col-md-6 pl-0">
            <div class="block-100"></div>
            <div id="block-platforma">
				<?php include 'partials/pages/platforma/part-platforma.php'; ?>
            </div>
            <div id="block-tasks">
				<?php include 'partials/pages/platforma/part-tasks.php'; ?>
            </div>
            <div id="block-actions">
				<?php include 'partials/pages/platforma/part-actions.php'; ?>
            </div>
            <div id="block-leaders">
				<?php include 'partials/pages/platforma/part-leaders.php'; ?>
            </div>
            <div id="block-bank">
				<?php include 'partials/pages/platforma/part-bank.php'; ?>
            </div>
          </div>
      </div>