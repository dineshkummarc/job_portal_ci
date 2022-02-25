



<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header bg-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center index-head">

            <h1>Be Your Own<strong> BOSS</strong></h1>
            <p><a class="btn btn-success btn-lg" href="register-company.php" role="button">Post A Agulia</a> <a
                        class="btn btn-danger btn-lg" href="login-candidates.php" role="button">Find Jobs</a></p>
          </div>
        </div>
      </div>
    </section>

    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class=" latest-job margin-bottom-20">
            <?php
        //  $sql = "SELECT * FROM job_post Order By Rand() Limit 12";
       //   $result = $conn->query($sql);
          if(false && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
              $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
              $result1 = $conn->query($sql1);
              if($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) 
                {
             ?>
            <div class="attachment-block col-md-12">
              <div class="attachment">
                <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a> <span class="attachment-heading">$<?php echo $row['maximumsalary']; ?>/Month</span></h4>
                <div class="attachment-text">
                    <div class="job_meta"><p>Posted By:</p> <strong><?php echo $row1['companyname']; ?></strong>
                        <p>Location:</p> <strong><?php echo $row1['city']; ?> </strong>
                        <p>Experience:</p> <strong><?php echo $row['experience']; ?> Years</strong>

                    </div>
                </div>
              </div>
            </div>
          <?php
              }
            }
            }
          }
          ?>

          </div>
            <div class="col-md-12 text-center">
                <p class="load_more"><a href="jobs.php" class="btn btn-primary">Load More</a></p>
            </div>
        </div>
      </div>
    </section>

    <section id="statistics" class="content-header">
      <div class="container">
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box link_box">
            <div class="inner">
             <?php
                      // $sql = "SELECT * FROM job_post";
                      // $result = $conn->query($sql);
                      if(false && $result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Job Offers</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box link_box">
            <div class="inner">
                  <?php
                      // $sql = "SELECT * FROM company WHERE active='1'";
                      // $result = $conn->query($sql);
                      if(false && $result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Registered Company</p>
            </div>
            <div class="icon">
                <i class="ion ion-briefcase"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box link_box">
            <div class="inner">
             <?php
                      // $sql = "SELECT * FROM users WHERE resume!=''";
                      // $result = $conn->query($sql);
                      if(false && $result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>CV'S/Resume</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box link_box">
            <div class="inner">
               <?php
                      // $sql = "SELECT * FROM users WHERE active='1'";
                      // $result = $conn->query($sql);
                      if(false && $result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Daily Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </div>
    </section>


  </div>
  <!-- /.content-wrapper -->





<?= $this->endSection(); ?>