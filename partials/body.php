<body>
  <div class="container-fluid">
    <?php include 'header.php'; ?>

    <?php include 'partials/left-menu.php'; ?>

    <div class="jppv-content">
    	<?php 
    		//echo "ROUTE = ".$_GET['_route'];
    		// echo "REQUEST_URI = ".$_SERVER['REQUEST_URI'];
    		
            // MAIN PAGES
    		if ($_GET['_route'] == "") {
    			include 'partials/pages/main-page.php';
    		} else {
                include 'partials/pages/' . $_GET['_route'] . '.php';
            }

            /*
            if ($_GET['_route'] == "platforma") {
                include 'partials/pages/platforma.php';
            }
    		if ($_GET['_route'] == "investoru") {
    			include 'partials/pages/investoru.php';
    		}
    		if ($_GET['_route'] == "press-centr") {
    			include 'partials/pages/press-centr.php';
    		}
    		if ($_GET['_route'] == "contacts") {
    			include 'partials/pages/contacts.php';
    		}

            // MISC PAGES
            if ($_GET['_route'] == "policy") {
                include 'partials/pages/policy.php';
            }
            */

    	 ?>

		<?php 
			//include 'partials/pages/platforma/main-page.php'; 
		?>
    </div>

</body>