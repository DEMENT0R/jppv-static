      <div class="block-100"></div>
      <div id="" class="row">
    			<!-- <div class="decoy">Пресс-центр</div> -->
          <div class="col-md-1" style="height: 90vh;"></div>
          <div class="col-md-2">
            <div class="block-100"></div>
          </div>
          <div class="col-12 col-md-1 pl-0">
            <div class="block-100"></div>
            <p class="mt-3"><a class="button-back" onclick="javascript:history.back(); return false;" href="#"><img src="img/icons/arrow-back.svg" alt=""> Назад</a></p>
          </div>

          <div class="col-md-6">
            <div class="block-100"></div>
            <h1>Результаты поиска</h1>
            <h3>Запрос: <?php echo $_GET['query']; ?></h3>
            <div class="block-100"></div>

            <h2>Раздел с упоминаниями ключевого слова</h2>
            <hr>
            <h2>Статья с упоминаниями ключевого слова</h2>
            <hr>
            <div class="block-100"></div>
          </div>

      <?php
        searchFiles('partials/pages', $_GET['query']);

        function searchFiles($dir, $search) {
          $files = glob($dir."/*.php"); // Получаем все php-файлы из директории
          $results = array(); // Создаём массив для результатов поиска
          for ($i = 0; $i < count($files); $i++) {
            print_r($files[$i]);
            echo "<br>";
            /* Перебираем все полученные файлы */
            $str = strip_tags(file_get_contents($files[$i])); // Помещаем содержимое файлов в переменную, предварительно убрав все html-теги
            $count = substr_count($str, $search); // Ищем количество вхождений искомой строки в файл
            if ($count) $results[$files[$i]] = $count; // Если хотя бы 1 вхождение найдено, то добавляем файл с количеством вхождений в массив результатов
          }
          return $results; // Возвращаем результат
        }
        $results = searchFiles(".", $search); // Ищем файлы в текущей директории, в которых входит строка "ABC"
        var_dump($results); // Выводим массив
      ?>

      <script>
        console.log (<?php print_r($results); ?>);
      </script>

      </div>