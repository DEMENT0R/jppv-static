            <?php
              searchFiles('partials/pages/press-centr', $_GET['query']);

              function searchFiles($dir, $search) {
                $files = glob($dir."/*.php"); // Получаем все php-файлы из директории
                $results = array(); // Создаём массив для результатов поиска
                for ($i = 0; $i < count($files); $i++) {
                  echo "Ищем ".$search." в ";
                  print_r($files[$i]);
                  echo "<br>";
                  /* Перебираем все полученные файлы */
                  $str = strip_tags(file_get_contents($files[$i])); // Помещаем содержимое файлов в переменную, предварительно убрав все html-теги
                  $count = substr_count($str, $search); // Ищем количество вхождений искомой строки в файл
                  if ($count) $results[$files[$i]] = $count; // Если хотя бы 1 вхождение найдено, то добавляем файл с количеством вхождений в массив результатов
                }
                return $results; // Возвращаем результат
              }
              $results = searchFiles("partials/pages/press-centr", "Платформа"); // Ищем файлы в текущей директории, в которых входит строка
              print_r($results); // Выводим массив
            ?>

            <script>
              console.log (<?php print_r($results); ?>);
            </script>

            <hr>
            <div class="block-100"></div>