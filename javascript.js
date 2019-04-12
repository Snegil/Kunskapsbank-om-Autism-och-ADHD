function FastToggle(ID) {
	var x = document.getElementById(ID);
	if (x.style.display === "none") {
	x.style.display = "inline-block";
	} else {
		x.style.display = "none";
	}
} 
function toggle_visibility(id) {
   var e = document.getElementById(id);
   e.slideToggle('fast');
}
$(".faded").each(function(i) {
    $(this).delay(i * 300).css('opacity',0).animate({'opacity': 1}, 500);
});