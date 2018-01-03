<?php
  function get_title() {
    return "Add your own experience.";
  }
?>

<?php include_once 'include/header.inc.php'; ?>


<div class="container">
            <br />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1 style="text-align:center">Add Experience</h1>
                </div>
                <div class="panel-body">
                    <form action="include/add.inc.php" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Title" required="required" />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Company Name" required="required" />
                      </div>
                      <div class="form-group">
                        <textarea name="detail" rows="11" class="form-control" placeholder="Write here your experience"></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn btn-success pull-right" >
                          <span class="glyphicon glyphicon-plus"></span> Submit Experience
                      </button>
                    </form>
                </div>
            </div>
        </div>


<?php include_once 'include/footer.inc.php' ?>
