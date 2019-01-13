<html>
 <head>
  <title>Unvalidated Redirects and Forwards</title>
 </head>
 <body>
 <?php 

	$encoded_url = urlencode(base64_encode("http://securitytube.net"));

	echo '<p>Please visit <a href="redirect.php?url='.$encoded_url.'" >SecurityTube.net</a> for fantastic Infosec Videos</p>'; 

?> 
 </body>
</html>

