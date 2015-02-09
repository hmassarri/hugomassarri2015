<script>
	//Lets rock
	$(document).ready(function() {
		$('#showSidebar').click( function() {
			$('body').toggleClass("sidebar-push-toleft");
			$('#sidebar').toggleClass("sidebar-open");
			$(this).toggleClass("active");
		});
		$('#menuCloseButton').click( function () {
			$(this).toggleClass("active");
			$('body').toggleClass("sidebar-push-toleft");
			$('#sidebar').toggleClass("sidebar-open");
			$('#showSidebar').toggleClass("active");
		});
		$('#sidebar a').click(function() {
			$('body').toggleClass("sidebar-push-toleft", 10000);
			$('#sidebar').toggleClass("sidebar-open", 10000);
			$(this).window.location.href = $('this').href();
		});
	});
</script>


<script>
	$(document).ready(function () {
		$('#prevButton').click(function() {
			parent.history.back();
			return false;
		});
	});
	// You'll need to write a switch statement for the next button
	// You'll need to determine what the url is and based on that where to go forward
</script>