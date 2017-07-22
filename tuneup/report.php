<?php include '../base-app.php';?>
<?php startblock('page-body');?>
<a href="list" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back </a>
<div class="row">
  <div class="col-sm-10 col-sm-offset-1">
    <h2>New look and feel of Report Builder <span class="label label-info">LIVE</span></h2>
    <p class="gray"><i class="fa fa-calendar"></i> 36 days since launched. &nbsp; &nbsp; &nbsp; <i class="fa fa-user"></i> Created by Daniel Wang</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam?
    <br />Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet ....</p>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="row">
      <div class="col-sm-4">
         <div class="col-sm-6">
           <div class="pu-circle pu-circle-md p65 pu-circle-green">
          <span>65%</span>
          <div class="slice">
            <div class="bar"></div>
            <div class="fill"></div>
          </div>
        </div>
         </div>
         <div class="col-sm-6">
           <h1 class="green">1545</h1>
           <h6>Votes</h6>
         </div>
      </div>
      <div class="col-sm-4">
        <div class="col-sm-6">
        <div class="pu-circle pu-circle-md p15 pu-circle-orange">
            <span>15%</span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <h1 class="orange">876</h1>
          <h6>Votes</h6>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="col-sm-6">
          <div class="pu-circle pu-circle-md p20 pu-circle-red">
            <span>20%</span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <h1 class="red">176</h1>
          <h6>Votes</h6>
        </div>
      </div>
    </div>
    <hr style="margin-top:20px; margin-bottom:30px">
  </div>
</div>

<div class="row">
  <div class="col-sm-10 col-sm-offset-1">
  <!-- *******************
       Filters
   ********************* -->
    <ul class="nav nav-pills pu-buckets">
          <li class="bucket-green active">
            <a href="#">
              <h3>87</h3>
              <p>Comments</p>
              <span class="icon">
                <i class="fa fa-smile-o" aria-hidden="true"></i>
              </span>
            </a>
          </li>
          <li class="bucket-orange">
            <a href="#">
              <h3>12</h3>
              <p>Comments</p>
              <span class="icon">
                <i class="fa fa-meh-o" aria-hidden="true"></i>
              </span>
            </a>
          </li>
          <li class="bucket-red">
            <a href="#">
              <h3>53</h3>
              <p>Comments</p>
              <span class="icon">
                <i class="fa fa-frown-o" aria-hidden="true"></i>
              </span>
            </a>
          </li>
        </ul>
<!-- *******************
     feedback
 ********************* -->
    <div class="tab-content clearfix">
      <div class="tab-pane active" id="1b">
        <div class="pu-comments pu-scroll-vertical" style="height: 300px">
            <?php for ($x = 0; $x <= 5; $x++) {?>
              <div class="pu-comment">
                <div class="pu-comment-text">
                  <span class="pu-comment-username">
                      Maria Gonzales <small class="gray">- NAB</small>
                      <span class="timestamp pull-right">8:03 PM Today</span>
                  </span>
                  <!-- /.username -->
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </div>
                <!-- /.pu-comment-text -->
              </div>
              <div class="pu-comment">
                <div class="pu-comment-text">
                  <span class="pu-comment-username">
                      Luna Stark <small class="gray">- Telstra</small>
                      <span class="timestamp pull-right">8:03 PM Today</span>
                  </span>
                  <!-- /.username -->
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet ....
                </div>
                <!-- /.pu-comment-text -->
              </div>
              <div class="pu-comment">
                <div class="pu-comment-text">
                  <span class="pu-comment-username">
                      Daniel Wang <small class="gray">- University of Chicago</small>
                      <span class="timestamp pull-right">8:03 PM Today</span>
                  </span>
                  <!-- /.username -->
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </div>
                <!-- /.pu-comment-text -->
              </div>
            <?php } ?>
        </div>
      </div>
      <div class="tab-pane" id="2b">
        <p>De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
      </div>
      <div class="tab-pane" id="3b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
</div>
<style>
  th{
    font-weight: 700 !important;
  }
  .pu-comments .pu-comment-text {
    margin-left: 0;
  }
  hr {
      border: 0;
      border-top: 1px solid #ddd;
      margin: 20px 0;
  }
</style>

<script>
</script>
<?php endblock()?>
