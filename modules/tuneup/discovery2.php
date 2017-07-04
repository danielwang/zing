<?php include '../../base.php';?>
<?php startblock('page');?>
<div class="modal fade in" id="ideaModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-right: 15px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times-circle" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">New Report Builder</h4>
            </div>
            <div class="modal-body">
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo ($resURL)?>img/report0.png" alt="...">
                      <!-- <div class="carousel-caption">
                        <h5>Report Builder main page</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam</p>
                      </div> -->
                    </div>
                    <div class="item">
                    <img src="<?php echo ($resURL)?>img/report2.png" alt="...">
                      <!-- <div class="carousel-caption">
                        <h5>Permission Settings</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam</p>
                      </div> -->
                    </div>
                    <div class="item">
                      <img src="<?php echo ($resURL)?>img/report1.png" alt="...">
                      <!-- <div class="carousel-caption">
                        <h3>Indicators</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam</p>
                      </div> -->
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
            </div>
            <div class="modal-footer text-left">
              <div class="form-group">
                  <label class="control-label">How do you think this idea?</label>
                  <div class="text-center">
                    <div class="pu-buckets btn-group" data-toggle="buttons">
                      <label class="btn bucket-green" data-toggle="tooltip" data-placement="bottom" title="Great idea, I may use it!">
                        <input type="radio" id="bucket1" name="bucket" value="1">
                        <i class="fa fa-3x fa-smile-o" aria-hidden="true"></i>
                      </label>
                      <label class="btn bucket-orange" data-toggle="tooltip" data-placement="bottom" title="Not sure">
                        <input type="radio" id="bucket2" name="bucket" value="2">
                        <i class="fa fa-3x fa-meh-o" aria-hidden="true"></i>
                      </label>
                      <label class="btn bucket-red" data-toggle="tooltip" data-placement="bottom" title="Not useful at all">
                        <input type="radio" id="bucket3" name="bucket" value="3">
                        <i class="fa fa-3x fa-frown-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label">Feedback:</label>
                  <textarea class="form-control"></textarea>
              </div>

              <div class="form-group">
                <div class="row">
                    <div class="col-sm-8">
                      <div class="checkbox checkbox-info">
                          <input type="checkbox" checked="" id="checkbox8">
                          <label for="checkbox8">
                              It's OK to contact me.
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4 text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.carousel-inner .item{
  text-align: center;
}
.carousel-inner img{
    max-width: 570px;
    max-height: 320px;
    margin: 0 auto;
}
.carousel-control.right {
    right: 0;
    left: auto;
}

.carousel-control.left {
    left:0;
    right:auto;
}
.pu-buckets.btn-group .btn{
  border:1px solid #eee;
}
</style>
<?php endblock()?>
