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
		<div id="content">
			
			<div id="page-table">
				<?php
					function get_tag( $attr, $value, $html ) {
       					$attr = preg_quote($attr);
        				$value = preg_quote($value);
      					$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'".*?>(.*?)<\/div>/si';
	    
	     				preg_match($tag_regex,
	        			$html,
	        			$matches);
	       				return $matches[1];
	   				}	
	   				
					if(isset($_GET['page'])){
					echo "<p>".$_GET["page"]."</p>";
					$file = file_get_contents($_GET['page']);
					$extract = get_tag('id', 'leftcontent', $file);
    				echo $extract;					

					}
					else {
						echo "<p>Nothing to report.</p>";
					}
				?>
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