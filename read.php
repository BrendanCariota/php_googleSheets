<?php

include 'sheets.php';

$range = 'Sheet1!A2:F';
$result = $service->spreadsheets_values->get($spreadsheetId, $range);

// Number of rows in google sheet
$numRows = $result->getValues() != null ? count($result->getValues()) : 0;

$resultArray = (array) $result['values'];
$arrayResult = array_column($resultArray, 1, 0);

foreach ($resultArray as $row) {
  echo "<tr>";
    if (isset($id) && $row['id'] == $_GET['id']) {
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
      echo '<td><input type="number" class="form-control" name="score" value="'.$row['score'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row[0] . "</td>";
      echo "<td>" . $row[1] . "</td>";
      echo '<td><a class="btn btn-primary" href="index.php?id=' . $row[0] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row[0] . '" role="button">Delete</a></td>';
    echo "</tr>";
}
?>