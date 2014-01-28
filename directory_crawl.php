<!DOCTYPE html>
<html>
	<?php
		include('head.php');
	?>	
<body>
	<div id="page">
		<?php
			include('headerandnav.php');
		?>	
		<div id="content">
			<div id="page-table">
				<h1>Home Page</h1>
				<?php 
function find_all_files($dir) 
{ 
    $root = scandir($dir); 
    foreach($root as $value) 
    { 
        if($value === '.' || $value === '..' || substr($value, 0, 4) === '.git' || substr($value,0,2)==='._' ) {continue;} 
        if(is_file("$dir/$value")) {$result[]=substr($dir,16)."/".$value; continue;} 
        foreach(find_all_files("$dir/$value") as $value) 
        { 
            $result[]=$value; 
        } 
    } 
    return $result; 
} 
$files=find_all_files('../toughmudder2');
foreach ($files as $key => $value) {
	echo "<p>$value</p>";
}
//print_r($files);

?>
				</div> <!-- #page-table -->
		</div>

		<?php
			include("footer.php");
		?>

	</div>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
</body>
</html>

