<?php include 'head.php'; ?>
<body>

<nav id="menu">
	<ul>
		<li><a id="link" href="index">index.php</a></li>
		<li><a id="link" href="link1">link1.php</a></li>
		<li><a id="link" href="link2">link2.php</a></li>
	</ul>

	<button id="prevButton">Prev</button>
	<button id="nextButton">Next</button>
</nav>

<script>
	$(document).ready(function() {

	    var caseList = [
	    'index.php',
	    'link1.php',
	    'link2.php',
	    'link3.php'
		];

	    current = $(location).attr('pathname').substr($(location).attr('pathname').lastIndexOf("/")+1); // get current page: just last part - page name and extension

	    if($.inArray(current, caseList) !== -1) { //check if it is in array
	        index = $.inArray(current, caseList);
	    }
	    //navigate thorough pages...
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

</body>
</html>