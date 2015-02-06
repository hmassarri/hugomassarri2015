<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="lib/classie.js"></script>
		<script>
			var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;


			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'menuCloseButton' );
			};

			function disableOther( button ) {
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}

			//menuCloseButton function
			var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuCloseButton = document.getElementById( 'menuCloseButton' ),
				body = document.body;


			menuCloseButton.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'menuCloseButton' ) {
					classie.toggle( menuCloseButton, 'disabled' );
				}
			}
		</script>