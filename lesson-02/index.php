<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php

function age($birthdate) {
	return strtotime('now') - strtotime($birthdate)/(60*60*24*365);
}
$age =  age('1963-12-01');

if ($age > 21) {
   ?>
   <h2 style="color:green">you are of age!, have fun, but drink responsibly.</h2>

<?php

} else {
	?>
    <h2 style="color:red">Sorry you are too young!, have fun, how about some root beer?</h2>
    
    <?php
	
}



?>

</body>
</html>