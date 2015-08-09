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
        var upcomingEvents = "";
		var eventSource = $("#event-template").html();
		var eventTemplate = Handlebars.compile(eventSource);

		for (var i in events) {
			var event = events[i];

			var date = new Date(Date.UTC(event.year, event.month-1, event.day, event.hoursAfterMidnight, 0, 0, 0));
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

			var eventContext = {
				date: dateString,
				time: timeString,
				eventImageUrl: event.eventImageUrl,
				breweryName: event.location,
				description: event.description,
				registrationUrl: event.registrationLink
			}

			// console.log(event.location+"...");
			var currentUTCTime = new Date();
			// console.log("currentUTCTime is "+currentUTCTime.toString());
			currentUTCTime.setMinutes(currentUTCTime.getMinutes() - currentUTCTime.getTimezoneOffset());
			// console.log("currentUTCTime is "+currentUTCTime.toString());
			// console.log("event time is     "+date.toString());
			if (date < currentUTCTime) {
				pastEvents += eventTemplate(eventContext);
			} else {
				if (!firstUpcomingEventSet) {
					// TODO: Set timer and map
					firstUpcomingEventSet = true;
				}
				upcomingEvents += eventTemplate(eventContext);
			}
		}

		$("#past-events").html(pastEvents);
		$("#upcoming-events").html(upcomingEvents);
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
