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
      <caption class="results_caption">Art Work Saved</caption>
      <tr>
        <td class="results_label">Title</td>
        <td class="results_value"><?= safe($title) ?></td>
      </tr>
      <tr>
        <td class="results_label">Description</td>
        <td class="results_value"><?= safe($description) ?></td>
      </tr>
      <tr>
        <td class="results_label">Genre</td>
        <td class="results_value"><?= safe($genre) ?></td>
      </tr>
      <tr>
        <td class="results_label">Subject</td>
        <td class="results_value"><?= safe($subject) ?></td>
      </tr>
      <tr>
        <td class="results_label">Medium</td>
        <td class="results_value"><?= safe($medium) ?></td>
      </tr>
      <tr>
        <td class="results_label">Year</td>
        <td class="results_value"><?= safe($year) ?></td>
      </tr>
      <tr>
        <td class="results_label">Museum</td>
        <td class="results_value"><?= safe($museum) ?></td>
      </tr>
    </table>
<?php } ?>

  </section>
</main>
</body>
</html>
