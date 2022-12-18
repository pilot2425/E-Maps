var cars = new Array();
var chargers = new Array();
cars["Aston Martin"] = new Array("Rapid E");
cars["Audi"] = new Array("A3", "e-tron", "Q5", "Q7 e-tron Quattro");
cars["BMW"] = new Array("225xe", "330e", "530e", "740e", "745e", "i3", "i8", "X1", "X5");
cars["Chevrolet"] = new Array("Bolt", "Malibu", "Volt");
cars["Citroen"] = new Array("Berlingo Electric", "C-Zero", "C5 Aircross Hybrid", "E-Mehari");
cars["DS"] = new Array("DS 7 Crossback", "DS 9", "DS3 Crossback");
cars["Fiat"] = new Array("500 Hybrid", "Ducato", "Panda");
cars["Ford"] = new Array("Explorer", "Focus electric", "Kuga", "Mustang Mach-E", "Puma", "Transit");
cars["Honda"] = new Array("E", "Jazz");
cars["Hyundai"] = new Array("Ioniq", "Kona EV", "Nexo");
cars["Jaguar"] = new Array("i-Pace");
cars["Kia"] = new Array("e-Niro", "e-Soul", "Niro PHEV", "Optima", "Soul EV");
cars["Land Rover"] = new Array("Range Rover", "Range Rover Sport");
cars["Mazda"] = new Array("MX-30");
cars["Mercedes-Benz"] = new Array("Clase B ED", "Clase C", "Clase E", "Clase S", "EQC 400", "eVito", "GLC", "GLE 500", "SLS AMG Electric Drive");
cars["Mini"] = new Array("Cooper SE", "Countryman");
cars["Mitsubishi"] = new Array("Outlander PHEV");
cars["Nissan"] = new Array("e-NV200", "Leaf");
cars["Opel"] = new Array("Ampera", "Ampera-e", "Corsa-e", "Grandland X", "Vivaro-e");
cars["Peugeot"] = new Array("3008", "508", "e-208", "e-2008", "iOn", "Partner Electric");
cars["Polestar"] = new Array("Polestar 1", "Polestar 2");
cars["Porsche"] = new Array("919 Hybrid", "Cayenne", "Cayenne Coupe", "Mission E Cross Turismo", "Panamera 4 E-Hybrid", "Taycan");
cars["Renault"] = new Array("Captur ENERGY dCi 90", "Fluence", "Kangoo ZE", "Twingo ZE", "Twizy", "Zoe");
cars["Seat"] = new Array("el-Born", "Mii Electric", "Tarraco");
cars["Skoda"] = new Array("Citigo iV", "Superb iV");
cars["Smart"] = new Array("EQ Fortwo", "Forfour ED", "Fortwo ED");
cars["Subaru"] = new Array("Forester", "Impreza");
cars["Tesla Motors"] = new Array("Model S", "Model 3","Model X", "Model Y", "Roadster", "Cybertruck");
cars["Toyota"] = new Array("Camry", "Prius Hybrid");
cars["Volkswagen"] = new Array("e-Golf", "e-up", "Golf GTE", "ID.3", "Passat GTE", "XL1");
cars["Volvo"] = new Array("S60", "S90", "V60 Plug-in Hybrid", "V90", "XC40", "XC60", "XC90 T8 Twin Engine");

chargers["Tipo 1"] = new Array()
chargers["Tipo 2"] = new Array()
chargers["Tipo 3"] = new Array()
chargers["CCS"] = new Array()
chargers["ChaDeMo"] = new Array()
chargers["V2G"] = new Array()


jQuery(document).ready(function ($) {

	$('span.text select').change(function () {
		$(this).siblings('.value').text($(this).find('option[value="' + $(this).val() + '"]').text());
	});

	for (make in cars) {
		$('#formmake').append('<option value="' + make + '">' + make + '</option>');
	}

	for (type in chargers) {
		$('#formcharger').append('<option value="' + type + '">' + type + '</option>');
	}

	$('#formmake').change(function () {
		var val = $(this).val();
		$('#formmodel').html('<option value="">Select Model</option>');
		for (i in cars[val]) {
			$('#formmodel').append('<option value="' + cars[val][i] + '">' + cars[val][i] + '</option>');
		}
		$('#formmodel').append('<option value="Other">- Other -</option>');
	});

	$('#formmake, span.text select').each(function () {
		var def = $(this).siblings('.value').text();
		$(this).find('option[value=' + def + ']').attr('selected', 'selected');
		$(this).change();
	});




});
