<body>
  <div class="container-fluid">
    <?php include 'header.php'; ?>

    <?php include 'partials/left-menu.php'; ?>

    <div class="jppv-content">
    	<?php 
    		//echo "ROUTE = ".$_GET['_route'];
    		// echo "REQUEST_URI = ".$_SERVER['REQUEST_URI'];
    		 
    		if ($_GET['_route'] == "") {
    			include 'partials/pages/main-page.php';
    		}
            if ($_GET['_route'] == "platforma") {
                include 'partials/pages/platforma/platforma.php';
            }
    		if ($_GET['_route'] == "investoru") {
    			include 'partials/pages/investoru/investoru.php';
    		}
    		if ($_GET['_route'] == "press-centr") {
    			include 'partials/pages/press-centr/press-centr.php';
    		}
    		if ($_GET['_route'] == "contacts") {
    			include 'partials/pages/contacts.php';
    		}

    	 ?>

		<?php 
			//include 'partials/pages/platforma/main-page.php'; 
		?>
    </div>

</body>