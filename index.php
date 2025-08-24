<?php

  $result = 3 * 3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2 style="color: red;"><?php echo $result; ?></h2>
</body>
<script>
  alert(<?php echo $result; ?>);
</script>
</html>