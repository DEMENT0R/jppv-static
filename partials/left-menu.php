	<!-- Left menu -->
	<div id="left-full-button" onclick="show_send_block ()">
		<a href="#" class="d-none d-md-inline"><img src="/img/icons/red_cross.png" alt="" align="center"> Оставить обращение</a>
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
		<br><br><br>
		<a href="/policy" class="text-white">Политика обработки персональных данных</a>
	</nav>

	<div class="mask-content"></div>

	<script>
		function show_send_block () {
			$('#nav-toggle').click();
		}
	</script>