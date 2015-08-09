$(document).ready(function(){

	// For expanding the events view to show everything
    $(".toggle-expand-events").click(function() {
	    $(".schedule-content").toggleClass("tab-content-limited", 500, "easeOutSine");

        if ($(".toggle-expand-events").html() === "Show More") {
	        $(".toggle-expand-events").html("Show Less");
        } else {
	        $(".toggle-expand-events").html("Show More");
        }
    });

    // For showing past events
	$(".past-events").hide();

    $(".toggle-past-events").click(function(){
        $(".past-events").toggle();

        if ($(".toggle-past-events").html() === "Show Past Events") {
	        $(".toggle-past-events").html("Hide Past Events");
        } else {
	        $(".toggle-past-events").html("Show Past Events");
        }
    });
});
