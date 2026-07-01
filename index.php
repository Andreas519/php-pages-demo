<?php
$title = "Meine GitHub-Pages-Seite";
$generatedAt = date("d.m.Y H:i:s");
$topics = ["Mathe", "Physik", "Informatik"];
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title) ?></title>
</head>
<body>
  <h1><?= htmlspecialchars($title) ?></h1>

  <p>Diese Seite wurde automatisch mit PHP erzeugt.</p>
  <p>Generiert am: <?= htmlspecialchars($generatedAt) ?></p>

  <h2>Fächer</h2>
  <ul>
    <?php foreach ($topics as $topic): ?>
      <li><?= htmlspecialchars($topic) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>