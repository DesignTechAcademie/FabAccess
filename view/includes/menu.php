<header>
  	<h1>
    	<a href="main_page.html"><img src="view/img/logo.png"></a>
  	</h1>
  	<nav class="sidebar">
    	<ul>
      		<li class="sidebarLi"><a href="#">Dashboard</a></li>
      		<li class="sidebarLi"><a href="#">Gestion membres</a></li>
      		<li class="sidebarLi"><a href="#">Statistiques</a></li>
      		<li class="sidebarLi"><a href="#">Calendrier</a></li>
      		<li class="sidebarLi"><a href="#">Contact</a></li>
    	</ul>
  	</nav>
	<script>
    // $( ".sidebarLi" ).on( "mouseover", function() {
    //   $( this ).css( "background-color", "crimson" );
    // });

    	$(".sidebarLi").hover(
    	function() {
        	$(this).css('background-color', 'crimson')
    	}, function() {
        	$(this).css('background-color', '')
    	});
	</script>
		<p id="copyright">© Groupe Error 404</p>
  	<script>
		$('p').on( 'click', function () {
      		alert("Quelqu'un a cliqué sur un paragraphe!")
    	});
  	</script>

</header>
