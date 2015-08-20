$(document).ready(function() {

	var weekday = new Array(7);
	weekday[0]=  "Sunday";
	weekday[1] = "Monday";
	weekday[2] = "Tuesday";
	weekday[3] = "Wednesday";
	weekday[4] = "Thursday";
	weekday[5] = "Friday";
	weekday[6] = "Saturday";

	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";

	var eventsData = $.getJSON("events.json", function(events) {
		var firstUpcomingEventSet = false;

		var pastEvents = "";
        var upcomingEventsSpring = "";
        var upcomingEventsSummer = "";
        var upcomingEventsFall = "";
        var upcomingEventsWinter = "";
		var eventSource = $("#event-template").html();
		var eventTemplate = Handlebars.compile(eventSource);
		var currentUTCTime = new Date();
		currentUTCTime.setMinutes(currentUTCTime.getMinutes() - currentUTCTime.getTimezoneOffset());

		$(".past-events-container").hide();

		for (var i in events) {
			var event = events[i];

			var date = new Date(Date.UTC(event.year, event.month-1, event.day, event.hoursAfterMidnight, event.minutes, 0, 0));
			var dateString = weekday[date.getDay()]+", "+month[date.getMonth()]+" "+date.getDate()+", "+date.getFullYear();

			var timeString = "";
			if (date.getMinutes() < 10) {
				timeString = "0"+date.getMinutes();
			} else {
				timeString = date.getMinutes();
			}
			if (date.getUTCHours() > 12) {
				timeString = (date.getUTCHours()-12) + ":" + timeString + "pm";
			} else if (date.getUTCHours() == 12) {
				timeString = date.getUTCHours() + ":" + timeString + "pm";
			} else {
				timeString = date.getUTCHours() + ":" + timeString + "am";
			}

			var location = "";
			if (event.location != event.name) {
				location = event.location
			}
			var eventContext = {
				date: dateString,
				time: timeString,
				eventImageUrl: event.eventImageUrl,
				eventName: event.name,
				locationName: location,
				description: event.description,
				registrationUrl: event.registrationLink,
				soldOut: event.soldOut,
				liveMusicName: event.liveMusicName,
				liveMusicUrl: event.liveMusicUrl,
				foodTruckName: event.foodTruckName,
				foodTruckUrl: event.foodTruckUrl
			}

			if (date < currentUTCTime) {
				pastEvents += eventTemplate(eventContext);
			} else {
				if (!firstUpcomingEventSet) {
					// Set top of page
					$("#name-of-next-event").html(event.name);
					$("#registration-link-of-next-event").attr("href", event.registrationLink);

					// Set timer
					theme.initCountDown(date.getFullYear(), date.getMonth(), date.getDate(), date.getUTCHours());

					// Setting map
					$("#name-of-next-location").html(event.location);
					$("#address-of-next-location").html(event.address);

					var googleUrl = "https://www.google.com/maps/place/";
					googleUrl += event.location.split(' ').join('+');
					googleUrl += "/@" + event.latitude + "," + event.longitude + ",19z";
					$("#google-maps-url-of-next-location").attr("href", googleUrl);

					theme.initGoogleMap(event.latitude, event.longitude);

					// Making sure it won't be set a second time
					firstUpcomingEventSet = true;
				}

				var eventHTML = eventTemplate(eventContext);
				if (getSeason(date.getMonth()) == 'spring') {
					upcomingEventsSpring += eventHTML;
				} else if (getSeason(date.getMonth()) == 'summer') {
					upcomingEventsSummer += eventHTML;
				} else if (getSeason(date.getMonth()) == 'fall') {
					upcomingEventsFall += eventHTML;
				} else {
					upcomingEventsWinter += eventHTML;
				}
			}
		}

		if (getSeason(currentUTCTime.getMonth()) == 'spring') {
			$(".spring .past-events-container").show();
			$(".spring .past-events-container .past-events").html(pastEvents);
		} else if (getSeason(currentUTCTime.getMonth()) == 'summer') {
			$(".summer .past-events-container").show();
			$(".summer .past-events-container .past-events").html(pastEvents);
		} else if (getSeason(currentUTCTime.getMonth()) == 'fall') {
			$(".fall .past-events-container").show();
			$(".fall .past-events-container .past-events").html(pastEvents);
		} else {
			$(".winter .past-events-container").show();
			$(".winter .past-events-container .past-events").html(pastEvents);
		}

		$(".spring .upcoming-events").html(upcomingEventsSpring);
		$(".summer .upcoming-events").html(upcomingEventsSummer);
		$(".fall .upcoming-events").html(upcomingEventsFall);
		$(".winter .upcoming-events").html(upcomingEventsWinter);
	})
	.done(function() {
		console.log( "second success" );
	})
	.fail(function() {
		console.log( "error" );
	})
	.always(function() {
		console.log( "complete" );
	});
});

function getSeason(month) {
	month++; // Since it's passed in as a value from 0 to 11
    switch(month) {
        case 12:
        case 1:
        case 2:
            return 'winter';
        break;
        case 3:
        case 4:
        case 5:
            return 'spring';
        break;
        case 6:
        case 7:
        case 8:
            return 'summer';
        break;
        case 9:
        case 10:
        case 11:
            return 'fall';
        break;
    }
}
