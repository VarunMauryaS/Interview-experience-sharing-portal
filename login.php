<?php
  function get_title() {
    return "User Authetication";
  }
?>

<?php include_once 'include/header.inc.php'; ?>

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1 style="text-align:center">Login</h1>
                </div>
                <div class="panel-body">
                    <form action="include/login.inc.php" method="POST">
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-user" style="width: auto"></i>
                              </span>
                              <input type="text" class="form-control" name="email" placeholder="Email Address" required="required" />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-lock" style="width: auto"></i>
                              </span>
                              <input type="password" class="form-control" name="pwd" placeholder="password" required="required" />
                          </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-success" style="width: 100%">
                          <span class="glyphicon glyphicon-log-in"></span> Login
                      </button>
                    </form>
                </div>

                <!-- social authentication
                <div class="panel-footer">
                  <div>

                    <button class="btn btn-primary" style="width:45%;font-size:15px;font-weight:600;">Facebook</button>
                    <button class="btn btn-danger pull-right" style="width:45%;font-size:15px;font-weight:600;">Google</button>
                  </div>
                </div>

              social authentication ends here -->

            </div>
</div>
<?php include_once 'include/footer.inc.php' ?>
