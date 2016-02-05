$(document).ready(function() {

$("#success").hide();

$("#gameform").on("submit", function(e) {
    e.preventDefault();

	$.ajax({
		url:  "enter.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
            $("#games").hide();
            $("#success").show();
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }
    });

});

});
