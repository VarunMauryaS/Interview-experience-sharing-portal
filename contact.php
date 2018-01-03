<?php
  function get_title() {
    return "Contact Us";
  }
 ?>

<?php include_once 'include/header.inc.php'; ?>

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1 style="text-align:center">Contact Us</h1>
                    <p style="text-align:center"><span class="glyphicon glyphicon-info-sign"></span> Feel free to ask any query.</p>
                </div>
                <div class="panel-body">
                    <form action="include/contact.inc.php" method="POST">
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-user" style="width: auto"></i>
                              </span>
                              <input type="text" class="form-control" name="name" placeholder="Name" required="required" />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-envelope" style="width: auto"></i>
                              </span>
                              <input type="text" class="form-control" name="email" placeholder="Email Address" required="required" />
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="message" placeholder="Message" rows="6" required="required"></textarea>
                          </div>
                      </div>

                      <button type="submit" name="submit" class="btn btn-success" style="width: 100%">
                          <span class="glyphicon glyphicon-send"></span> Send
                      </button>
                    </form>
                </div>
            </div>
        </div>


<?php include_once 'include/footer.inc.php' ?>
