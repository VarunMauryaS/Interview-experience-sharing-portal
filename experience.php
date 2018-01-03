<?php
function get_title() {
  return "experience view";
}
?>

<?php
  include_once 'include/header.inc.php';
  include_once 'include/db.inc.php';
?>

<?php
$id = $_GET['post_id'];
$sql = "SELECT * FROM experience where post_id='$id'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div class=\"container\">
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">
                <strong>".$row['post_title']."</strong>
                <span class=\"label label-warning pull-right\">".$row['post_company']."</span>
                <h5>
                  <strong>Author :</strong> <span class=\"label label-danger\"> ".$row['post_user']."</span>
                  <span class=\"pull-right\"><strong>Date :</strong> <span class=\"label label-danger\">21 april ,2017</span></span>
                </h5>
              </div>
              <div class=\"panel-body\">".$row['post_detail']."</div>
              <div class=\"panel-footer\">
                <span title=\"Upvote\" style=\"padding-right:15px;font-size: 1.5em;\" class=\"glyphicon glyphicon-thumbs-up\"></span>
                <span title=\"Downvote\" style=\"padding-right:15px;font-size: 1.5em;\" class=\"glyphicon glyphicon-thumbs-down\"></span>
                <hr>
                <div class=\"card my-4\">
                  <div class=\"card-body\">
                    <form>
                      <div class=\"form-group\">
                        <textarea class=\"form-control\" rows=\"2\" placeholder=\"Comment here\"></textarea>
                      </div>
                      <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                    </form>
                  </div>
                </div>
                <br/>
                <div>
                  <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                  <strong>myusername</strong> <span class=\"text-muted\">commented 5 days ago</span>
                  </div>
                  <div class=\"panel-body\">
                  Panel content
                  </div><!-- /panel-body -->
                </div>
              </div>
            </div>
          </div>";
}
?>



<?php include_once 'include/footer.inc.php' ?>
