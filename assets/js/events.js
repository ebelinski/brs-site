$(document).ready(function() {

	var eventsData = $.getJSON("events.json", function(events) {
		var firstUpcomingEventSet = false;

		var pastEvents = "";
        var upcomingEvents = "";
		var eventSource = $("#event-template").html();
		var eventTemplate = Handlebars.compile(eventSource);

		for (var i in events) {
			var eventContext = {
				breweryName: events[i].location
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
