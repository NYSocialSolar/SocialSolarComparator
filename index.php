<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SocialSolar</title>
  <meta name="description" content="SocialSolar">
  <meta name="author" content="NYSocialSolar">
</head>

<body>
  <h1>Social Solar Comparator</h1>
  <?php	
		try
			{$database = new PDO('mysql:host=localhost:8889;dbname=SocialSolar;charset=utf8', 'root', 'root');}
		catch(Exception $e)
			{die('Error : '.$e->getMessage());}
	?>
</body>
</html>