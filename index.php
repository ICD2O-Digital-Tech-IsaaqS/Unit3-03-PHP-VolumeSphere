<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Volume of a Sphere, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (11)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (11)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (11)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (11)/site.webmanifest">
  <title>Sphere Volume Calculator (PHP)</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <h1>Sphere Volume Calculator</h1>

  <!-- Form to submit radius -->
  <form method="POST" action="">
    <input type="number" name="radius" placeholder="Enter radius" min="0" step="any" required>
    <br>
    <button type="submit">Calculate Volume</button>
  </form>

  <div id="result">
    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get radius from form
        $radius = floatval($_POST["radius"]);

        if ($radius < 0) {
            echo "Please enter a non-negative number.";
        } else {
            // Calculate the volume of the sphere
            $volume = (4 / 3) * pi() * pow($radius, 3);
            // Round to 2 decimal places
            $volume = round($volume, 2);
            echo "Volume of the sphere: $volume";
        }
    }
    ?>
  </div>
  <img src="images/Sphere.png" alt="Sphere">

</body>
</html>