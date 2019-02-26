      <div class="block-100"></div>
      <div id="" class="row">
    			<!-- <div class="decoy">Пресс-центр</div> -->
          <div class="col-md-1" style="height: 90vh;"></div>
          <div class="col-md-2">
            <div class="block-100"></div>
            <p class="mt-3 text-breadcrumbs"><a href="/">Главная</a> / <a href="/press-centr">Пресс-центр</a></p>
            <div class="block-230"></div>
            <div class="block-230"></div>
            <div class="block-230"></div>
            <p>
              <a href="/press-centr" class="left-nav-link">Пресс-релизы</a><br>
              <a href="/press-centr" class="left-nav-link">Реализуемы проекты</a><br>
            </p>
          </div>
          <div class="col-12 col-md-1 pl-0">
            <div class="block-100"></div>
            <p class="mt-3"><a class="button-back" onclick="javascript:history.back(); return false;" href="#"><img src="img/icons/arrow-back.svg" alt=""> Назад</a></p>
          </div>
          <?php 
            
            if ($_GET['date'] == "") {
              include 'partials/pages/press-centr/_list.php'; 
            } else {
              echo "<div class='col-12 col-md-6 pl-0'><div class='block-100'></div>";
              include 'partials/pages/press-centr/' . $_GET['date'] . '.php'; 
              echo "<div class='block-100'></div></div>";
            }
          ?>

      </div>