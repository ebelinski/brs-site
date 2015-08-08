$(document).ready(function() {

	var eventsData = $.getJSON("events.json", function(events) {
		var firstUpcomingEventSet = false;

		var pastEvents = "";
        var upcomingEvents = "";
		var eventSource = $("#event-template").html();
		var eventTemplate = Handlebars.compile(eventSource);

		for (var i in events) {
			var event = events[i]
			var eventContext = {
				eventImageUrl: event.eventImageUrl,
				breweryName: event.location,
				description: event.description,
				registrationUrl: event.registrationLink
			}
			upcomingEvents += eventTemplate(eventContext);
		}

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
