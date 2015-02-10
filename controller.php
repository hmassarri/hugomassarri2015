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
	$(document).ready(function() {

		//create array
	    var caseList = [
	    'index.php',
	    'link1.php',
	    'link2.php',
	    'link3.php'
		];

		// get current page: just last part - page name and extension
	    current = $(location).attr('pathname').substr($(location).attr('pathname').lastIndexOf("/") + 1);

		//remove prevButton if at the beginning of project list
		if (current == 'link1.php')
		{
			$('#prevButtonRow').remove();

		}

		if (current == 'link3.php')
		{
			$('#nextButtonRow').remove();
		}

		//check if it is an array
	    if($.inArray(current, caseList) !== -1)
	    {
	        index = $.inArray(current, caseList);
	    }

	    //flip through the pages
	    $( '#nextButton' ).click(function() {
		    if(index < caseList.length){
			    next = caseList[index+1];
			    window.location.href = next;
			}
	    });
	    $( '#prevButton' ).click(function() {
		    if(index >= 0) {
				prev = caseList[index-1];
				window.location.href = prev;
			}
	    });
	});
</script>