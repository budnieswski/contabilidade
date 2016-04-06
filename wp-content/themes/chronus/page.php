<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>#</title>
  
  <?php wp_head(); ?>
</head>
<body>
<?php echo "<pre>";
print_r($post);
echo "</pre>"; ?>
<?php the_content() ?>  
</body>

<?php wp_footer(); ?>
</html>

