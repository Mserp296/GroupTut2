<?php
include 'data.inc.php';

/**
 * Builds option tags from a string array
 */
function makeOptions(array $items): string {
  $out = "";
  foreach ($items as $item) {
    $safe = htmlspecialchars($item);
    $out .= "<option value=\"$safe\">$safe</option>\n";
  }
  return $out;
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
<form class="form" id="mainForm" method="POST" action="art-process.php">
   <fieldset class="form_panel">
      <legend class="form_heading">Edit Art Work Details</legend>

        <p class="form_row">
           <label>Title</label><br/>
           <input type="text" name="title" class="form_input form_input-large" required />
       </p>

       <p class="form_row">
           <label>Description</label><br/>
           <input type="text" name="description" class="form_input form_input-large" />
       </p>

       <p class="form_row">
           <label>Genre</label><br/>
           <select name="genre" class="form_input form_select">
              <option value="">Choose genre</option>
              <?= makeOptions($genres) ?>
           </select>
       </p>

       <p class="form_row">
           <label>Subject</label><br/>
           <select name="subject" class="form_input form_select">
              <option value="">Choose subject</option>
              <?= makeOptions($subjects) ?>
           </select>
       </p>

       <p class="form_row">
           <label>Medium</label><br/>
           <input type="text" name="medium" class="form_input form_input-medium" />
       </p>

       <p class="form_row">
           <label>Year</label><br/>
           <input type="text" name="year" class="form_input form_input-small" />
       </p>

       <p class="form_row">
           <label>Museum</label><br/>
           <input type="text" name="museum" class="form_input form_input-medium" />
       </p>

       <div class="form_box">
          <input type="submit" class="form_btn" value="Submit">
          <input type="reset" value="Clear Form" class="form_btn">
       </div>
   </fieldset>
</form>
</main>
</body>
</html>
