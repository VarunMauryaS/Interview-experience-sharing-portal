<?php
function get_title() {
  return "Home";
}
?>

<?php
  include_once 'include/header.inc.php';
  include_once 'include/db.inc.php';
?>

<div class="container">
  <h2 class="text-success">Some Experiences </h2>
  <p class="text-primary"><span class="glyphicon glyphicon-info-sign"></span> Here are listed all the interviews submitted by students</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.</th>
        <th>Title</th>
        <th>Company Name</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM experience";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['post_id']."</td>";
        echo "<td><a href=\"experience.php?post_id=".$row['post_id']."\">".$row['post_title']."</td>";
        echo "<td>".$row['post_company']."</td>";
        echo "<td>".$row['post_date']."</td>";
        echo "</tr>";
      }
    }
    ?>
    </tbody>
  </table>
</div>

<?php include_once 'include/footer.inc.php' ?>
