var n = 1;
$(document).ready(function() {
	$("#login").click(function() {
		if (n == 1) {
			$("#welcome").hide();
			n = 2;
		}else if (n == 2) {
			$("#welcome").show();
			n = 1;
		}
	});
});