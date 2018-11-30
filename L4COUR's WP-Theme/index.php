<?php get_header(); ?>

<body class="home">

        <!-- MAIN -->
		<div id="main">

			<div class="wrapper cf">





<

			<div class="home-featured">
		<!--	<h1 class="main_headline">Projects</h1><br><br> -->
				<ul id="filter-buttons">
				   <li><a href="#" data-filter="*" class="selected">all</a></li>
                   <li><a href="#" data-filter=".composition">composition</a></li> <!-- Hvis det er et soundscape er navnet: .soundscapes -->
                   <li><a href="#" data-filter=".installation">installation</a></li>
                   <li><a href="#" data-filter=".software">software</a></li>
				   <li><a href="#" data-filter=".written">written</a></li>
                   <li><a href="#" data-filter=".talk">talk / interview</a></li>
				</ul>


                    <div id="filter-container" class="cf">







               	<!-- ---------------------Filter container------------------------- -->

    				</div>

				</div><!-- ENDS Filter container -->

			</div><!-- ENDS featured -->

		</div><!-- ENDS WRAPPER -->
      </div><!-- ENDS MAIN -->


    <script>
  document.getElementById('hamburgler').addEventListener('click', checkNav);
  window.addEventListener("keyup", function(e) {
    if (e.keyCode == 27) closeNav();
  }, false);

  function checkNav() {
    if (document.body.classList.contains('hamburgler-active')) {
      closeNav();
    } else {
      openNav();
    }
  }

  function closeNav() {
    document.body.classList.remove('hamburgler-active');
  }

  function openNav() {
    document.body.classList.add('hamburgler-active');
  }
</script>

	</body>

<?php
  get_footer();

 ?>
