let originInputMain = localStorage.getItem('origin');
let destinationInputMain = localStorage.getItem('destination');
let waypointCountMain = 3;

GenerateMap(originInputMain, destinationInputMain, waypointCountMain);

function GenerateMapCall (originInputMain, destinationInputMain){
	GenerateMap(originInputMain, destinationInputMain, 3);
}

function GenerateMap(originInput, destinationInput, waypointCountInput) {
	if (waypointCountInput > 25) {
		waypointCountInput = 25;
	}

	let map = new google.maps.Map(document.getElementById("map"), {
		center: new google.maps.LatLng(40, -3),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	});

	let directionsService = new google.maps.DirectionsService();
	let initialResponse;

	directionsService.route(
		{
			origin: originInput,
			destination: destinationInput,
			travelMode: "DRIVING",
			optimizeWaypoints: true,
			provideRouteAlternatives: false,
		},
		(response, status) => {
			if (status === "OK") {
				new google.maps.DirectionsRenderer({
					suppressMarkers: false,
					directions: response,
					map: map,
				});
				initialResponse = response;
				postRoute();
			}
		}
	)

	function postRoute() {
		function generateRandomWaypoints(response, numWaypoints) {
			let res = [];
			let segmentLength

			if (response.routes[0].overview_path.length <= numWaypoints) {
				segmentLength = 1;
			} else {
				segmentLength = response.routes[0].overview_path.length / (numWaypoints + 1);
			}

			for (var i = 0; i < numWaypoints; i++) {
				let position = Math.floor(0 + ((i + 1) * segmentLength));
				res.push([response.routes[0].overview_path[position].lat(), response.routes[0].overview_path[position].lng()]);
			}

			return res;
		};

		let waypointsArr = generateRandomWaypoints(initialResponse, waypointCountInput);
		let waypointsForm = [];

		waypointsArr.forEach(element => {
			let tempArr = new Array();

			tempArr["location"] = `${element[0]},${element[1]}`;
			tempArr["stopover"] = true;

			waypointsForm.push(tempArr);
		});

		directionsService.route(
			{
				origin: originInput,
				destination: destinationInput,
				waypoints: waypointsForm,
				travelMode: "DRIVING",
				optimizeWaypoints: true,
				provideRouteAlternatives: false,
			},
			(response, status) => {
				if (status === "OK") {
					new google.maps.DirectionsRenderer({
						suppressMarkers: false,
						directions: response,
						map: map,
					});
				}
			}
		)
	}
}
