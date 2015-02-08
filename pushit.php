<script>
	//Lets rock
	$(document).ready(function() {
		$('#showSidebar').click( function() {
			$(this).toggleClass("active");
			$('body').toggleClass("sidebar-push-toleft");
			$('#sidebar').toggleClass("sidebar-open");
		});
		$('#menuCloseButton').click( function () {

			$(this).toggleClass("active");
			$('body').toggleClass("sidebar-push-toleft");
			$('#sidebar').toggleClass("sidebar-open");
		});
		$('#sidebar a').click(function() {
			$('body').toggleClass("sidebar-push-toleft", 10000);
			$('#sidebar').toggleClass("sidebar-open", 10000);
			$(this).window.location.href = $('this').href();
		});
	});
</script>
