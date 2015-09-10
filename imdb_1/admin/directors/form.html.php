<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php htmlout($pageTitle); ?></title> 
</head>

<body>
	<h1><?php htmlout($pageTitle); ?></h1>
	<form action="?<?php htmlout($action); ?>" method="post">

      <div>
        <label for="name">Name: <input type="text" name="name"
id="name" value="<?php htmlout($name); ?>">
		</label> 
	  </div>




	  <div>
        <label for="countryid">Country:</label>
        <select name="countryid" id="countryid">
          <option value="">Select one</option>
          <?php foreach ($countries as $country): ?>
            <option value="<?php htmlout($country['id']); ?>"
              <?php
                if ($country['id'] == $countryid)
                {
                  echo ' selected';
                }
              ?>
              >
              <?php htmlout($country['name']); ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- <div>
        <label for="countryid">Country: <input type="text" name="countryid"
id="countryid" value="<?php htmlout($countryid); ?>">
		</label> 
	  </div> -->





	  <div>
		<input type="hidden" name="id" value="<?php
		  htmlout($id); ?>">
		<input type="submit" value="<?php htmlout($button); ?>">
      </div>
    </form>
  </body>
</html>