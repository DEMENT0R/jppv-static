$("#calc-now").click(function() {
	var debug = true;
	// type
	var k1a = 10000;
	var k1b = 50000;
	var k1c = 100000;

	var k1 = 0;

	// learn
	var k2a = 10000;
	var k2b = 30000;
	var k2c = 60000;

	var k2 = 0;

	// staff
	var staff_quantity = $("#ex1SliderVal").text();
	var staff_salary = $("#ex2SliderVal").text();

	// totals
	var total_price = 0;
	var minute_cost = 0;
	var staff_economy = 0;

	// loading staff quantity data
	if ($("#option-1-1").prop("checked")) {
		k1 = k1a;
	}

	if ($("#option-1-2").prop("checked")) {
		k1 = k1b;
	}

	if ($("#option-1-3").prop("checked")) {
		k1 = k1c;
	}

	// loading staff salary data
	if ($("#option-2-1").prop("checked")) {
		k2 = k2a;
	}

	if ($("#option-2-2").prop("checked")) {
		k2 = k2b;
	}

	if ($("#option-2-3").prop("checked")) {
		k2 = k2c;
	}

	// debug
	if (debug){
		debugFunction ();
	}

	function debugFunction () {
		console.log("- = Д Е Б А Г = -");
		console.log("Коэффициент 1 = " + k1);
		console.log("Коэффициент 2 = " + k2);
		console.log("Сотрудники = " + staff_quantity);
		console.log("Зарплата = " + staff_salary);
	}
});