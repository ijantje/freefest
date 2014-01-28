<!DOCTYPE html>
<html>
	<?php
		include('head.php');
	?>
	<body>
	<?php
		include('header.php')
	?>
	<div id="page">
		<?php
			//include('nav.php');
		?>	
		<div id="content">
			
			<div id="page-table">
				<h1>Index</h1>
				<h4>Site Map</h4>
				<h4>Wireframes</h4>
				<h4>Comp</h4>
				<h4>Personas</h4>
				<h4>Project 
			</div> <!-- #page-table -->
		</div>

		<?php
			include("footer.php");
		?>

	</div>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Place this asynchronous JavaScript just before your </body> tag -->
    <script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    </script>
</body>
</html>
