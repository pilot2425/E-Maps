const weatherIcons = [
    "<i class=" + '"' + "fa-solid fa-cloud-bolt weather_icon" + '"' + "></i>",            // Storm
    "<i class=" + '"' + "fa-solid fa-cloud-rain weather_icon" + '"' + "></i>",            // Light rain
    "<i class=" + '"' + "fa-solid fa-cloud-showers-heavy weather_icon" + '"' + "></i>",   // Heavy rain
    "<i class=" + '"' + "fa-solid fa-cloud weather_icon" + '"' + "></i>",                 // Cloudy
    "<i class=" + '"' + "fa-solid fa-cloud-sun-rain weather_icon" + '"' + "></i>",        // Rain with sun
    "<i class=" + '"' + "fa-solid fa-smog weather_icon" + '"' + "></i>",                  // Smog
    "<i class=" + '"' + "fa-solid fa-snowflake weather_icon" + '"' + "></i>",             // Snow
    "<i class=" + '"' + "fa-solid fa-sun weather_icon" + '"' + "></i>",                   // Sunny
];
const weights = [3, 35, 25, 70, 15, 6, 1, 75];
let randomTemp = randInterval(10, 25);
let timer = 3670, hours, minutes, seconds;

document.getElementById("wheather-icon").innerHTML = weatherIcons[7];
document.getElementById("temperature").innerHTML = randomTemp + " ºC";

const interval = setInterval(function() {
    if (randInterval(0, 4) > 3){
        let randomWeather = randInterval(1, 230);
        let position = 0;
        let acummulatedWeight = 0;

        while (acummulatedWeight < randomWeather){
            position++;
            acummulatedWeight += weights[position];
        }

        document.getElementById("wheather-icon").innerHTML = weatherIcons[position];
    } else {
        // console.log("Stay-Weather");
    }

    if (randInterval(0, 4) > 3){
        let increment = 0;
        
        if (randInterval(0,1) == 0) {
            increment = -1;
        } else {
            increment = 1;
        }

        if ((randomTemp < -5 && increment == -1) || (randomTemp > 35 && increment == 1)) {
            increment *= -1;
        } else {
            randomTemp += (randInterval(0,10) * 0.02) * increment;
        }

        document.getElementById("temperature").innerHTML = Math.round(randomTemp * 10) / 10 + " ºC";
    } else {
        // console.log("Stay-Temp");
    }

	let tempTimer = timer;
    hours = parseInt(timer / 3600, 10);
	tempTimer = timer - hours * 3600
    minutes = parseInt(tempTimer / 60, 10);
    seconds = parseInt(tempTimer % 60, 10);
    
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
			
    document.getElementById("timer").innerHTML = hours + ":" + minutes + ":" + seconds;
    
    if (--timer < 0) {
        timer = 0;
    }

	return;
}, 1000);


function randInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}



