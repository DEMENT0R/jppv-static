	<!-- Left menu -->
	<div id="left-full-button" onclick="show_send_block ()">
		<a href="#" class="d-none d-md-inline"><img src="/img/icons/red-cross.svg" alt="" align="center"> Оставить обращение</a>
	</div>

	<input type="checkbox" id="nav-toggle" hidden>
	<nav class="left-nav">
		<label for="nav-toggle" class="nav-toggle" onclick></label>
		<h4 class="pt-5">Оставить обращение</h4>
		<ul class="mx-auto">
			<li class="text-white">Представьтесь, пожалуйста:</li>
			<li><input type="text" placeholder="ФИО" class="text-white"></li>
			<li><input type="text" placeholder="Телефон" class="text-white"></li>
			<li><input type="text" placeholder="Email" class="text-white"></li>
			<li><input type="text" placeholder="Комментарий" class="text-white"></li>
			<br><br>
			<a href="#" class="next-button">Отправить</a>
		</ul>

		<form action="send.php" method="post">
			<input class="text-white" type="text" name="name" placeholder="ФИО" required>
			<input class="text-white" type="text" name="phone" placeholder="Телефон" required>
			<input class="text-white" type="text" name="email" placeholder="Укажите e-mail" required>
			<input class="text-white" type="text" name="other" placeholder="Комментарий" required>
			<input class="text-white next-button" type="submit" value="Отправить" style="border: none;">
		</form>
		<br><br><br>
		<a href="/policy" class="text-white">Политика обработки персональных данных</a>
	</nav>

	<div class="mask-content"></div>

	<script>
		function show_send_block () {
			$('#nav-toggle').click();
		}
	</script>