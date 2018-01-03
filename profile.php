<?php
  function get_title() {
    return "User : ".$_SESSION['user_id'];
  }
?>

<?php
  include_once 'include/header.inc.php';
  include_once 'include/db.inc.php';
?>

<style media="screen">
  body{
    background: #f1f3fa;
  }
  .profile {
    margin: 20px 0;
  }
  .profile-sidebar{
    padding: 20px 0 10px 0;
    background: #fff;
  }
  .profile-userpic{
    float: none;
    margin: 0 auto;
    width: 50%;
    height:50%;
  }
  .profile-user-title {
    text-align: center;
    margin-top: 20px;
  }
  .profile-user-name {
    color: #5a73a1;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 7px;
  }
  .profile-user-job{
    text-transform: uppercase;
    color: #5babd1;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .profile-user-study{
    color: #566573;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .profile-user-buttons{
    text-align: center;
    margin-top: 10px;
  }
  .btn {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    padding: 6px 15px;
    margin: 5px;
  }
  .btn:last-child {
    margin-right: 0;
  }

  .profile-user-menu {
    margin-top: 10px;
  }



</style>

<div class="container">
  <div class="row profile">
    <div class="col-md-4">
      <div class="profile-sidebar">
        <div class="profile-userpic">
          <img src="http://guarddome.com/assets/images/profile-img.jpg" alt="" class="img-responsive img-circle">
        </div>
        <div class="profile-user-title">
          <div class="profile-user-name">
            <?php echo $_SESSION['user_name']; ?>
          </div>
          <div class="profile-user-job">
            Student
          </div>
          <div class="profile-user-study">
            <h5><?php echo "year : ".$_SESSION['user_year']; ?></h5>
            <h5>Computer Science and Engineering</h5>
            <h5>Motilal Nehru National institute of technology,Allahabad</h5>
          </div>
          <div class="profile-user-buttons">
            <button class="btn btn-success btn-sm">Follow</button>
            <button class="btn btn-danger btn-sm">Message</button>
          </div>
          <div class="profile-user-menu">
            <ul class="nav">
              <li><a href="<?php echo "mainto:".$_SESSION['user_email']?>"><?php echo $_SESSION['user_email']; ?></a></li>
              <li><a href="https://www.linkedin.com/in/varunmaurya37/">LinkedIn profile</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">

      <?php
      $user = $_SESSION['user_id'];
      $sql = "SELECT * FROM experience WHERE post_user='$user'";
      $result = $conn->query($sql);
      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<div class=\"panel panel-default\">
                  <div class=\"panel-heading\"><a href=\"experience.php?post_id=".$row['post_id']."\">".$row['post_title']."</a>
                  <div class=\"pull-right\">
                  <span class=\"label label-danger\">".$row['post_company']."</span>&nbsp;
                  <span class=\"label label-success\">".$row['post_date']."</span>
                  </div>
                  </div>
                </div>";
        }
      }
      else {
        echo "<h2 class=\"text-success\">No experience found.</h2>
        <p class=\"text-primary\"><span class=\"glyphicon glyphicon-info-sign\"></span> If you have gotten any intership/placement please share your experience with us.</p>
        <h2 class=\"text-danger\">Best of luck for your upcoming interviews.</h2>";
      }
      ?>

    </div>

    </div>
  </div>
</div>



<?php include_once 'include/footer.inc.php' ?>
