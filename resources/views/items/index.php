<html>
  <body>
    <h1>Bucket List</h1>
    <ul>
    <?php foreach ($items as $item): ?>
      <li><?php echo $item->name; ?></li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>