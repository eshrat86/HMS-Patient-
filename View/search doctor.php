<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search For Doctors</title>
</head>
<body>
	<fieldset>
 <form action="../Control/searchcheck.php?>" method="POST">

      <label for="src">Doctor Name: </label>
      <input type="search" name="src" id="src" value="<?php echo $src;?>">

      <input type="submit" value="Search" class="srcBookBtn">

    </form>
    </fieldset>
</body>
</html>