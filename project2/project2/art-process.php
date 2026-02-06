<?php
include 'data.inc.php';

function safe($v) {
  return htmlspecialchars((string)$v);
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Chapter 12</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

<?php include 'header.inc.php'; ?>

<main>
  <section class="results">

<?php

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
  echo '<p class="results__caption">No form data ... <a href="ch12-proj2.php">go to form</a> and enter data</p>';
}

else if (trim($_POST['title'] ?? '') === '') {
  echo '<p class="results__caption">Title is required ... <a href="ch12-proj2.php">go to form</a> and enter data</p>';
}

else {
  $title = $_POST['title'] ?? '';
  $description = $_POST['description'] ?? '';
  $genre = $_POST['genre'] ?? '';
  $subject = $_POST['subject'] ?? '';
  $medium = $_POST['medium'] ?? '';
  $year = $_POST['year'] ?? '';
  $museum = $_POST['museum'] ?? '';
?>
    <table>
      <caption class="results__caption">Art Work Saved</caption>
      <tr>
        <td class="results__label">Title</td>
        <td class="results__value"><?= safe($title) ?></td>
      </tr>
      <tr>
        <td class="results__label">Description</td>
        <td class="results__value"><?= safe($description) ?></td>
      </tr>
      <tr>
        <td class="results__label">Genre</td>
        <td class="results__value"><?= safe($genre) ?></td>
      </tr>
      <tr>
        <td class="results__label">Subject</td>
        <td class="results__value"><?= safe($subject) ?></td>
      </tr>
      <tr>
        <td class="results__label">Medium</td>
        <td class="results__value"><?= safe($medium) ?></td>
      </tr>
      <tr>
        <td class="results__label">Year</td>
        <td class="results__value"><?= safe($year) ?></td>
      </tr>
      <tr>
        <td class="results__label">Museum</td>
        <td class="results__value"><?= safe($museum) ?></td>
      </tr>
    </table>
<?php } ?>

  </section>
</main>
</body>
</html>
