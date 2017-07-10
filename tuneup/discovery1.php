<?php include '../base.php';?>
<?php startblock('page');?>
<div class="modal fade in" id="ideaModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-right: 15px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times-circle" aria-hidden="true"></span>
                </button>
        <h4 class="modal-title" id="myModalLabel">We love your feedback!</h4>
      </div>
      <div class="modal-body pu-scroll-vertical" style="height:540px">
        <!-- <h5>We’d love your feedback on great new functionality that PageUp is thinking about!.</h5> -->
        <div class="text-right">
          <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-default">New ideas</button>
            <button type="button" class="btn btn-info">Reviewed</button>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="discovery2"> <img width="150" alt="64x64" class="thumbnail media-object" src="<?php echo ($resURL)?>img/report0.png"> </a> </div>
          <div class="media-body">
            <div class="col-sm-10"><a href="discovery2" class="media-heading visited">New look and feel Report Builder</a>
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
            </div>
            <div class="col-sm-2 text-center">
              <i class="fa fa-2x fa-smile-o green"></i>
            </div>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img width="150" alt="64x64" class="thumbnail media-object" src="<?php echo ($resURL)?>img/ios7.png"> </a> </div>
          <div class="media-body">
            <div class="col-sm-10"><a href="#" class="visited media-heading">Everyday Learning Concept</a>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
              felis in faucibus.</p>
            </div>
            <div class="col-sm-2 text-center">
              <i class="fa fa-2x fa-meh-o orange"></i>
            </div>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img width="150" alt="64x64" class="thumbnail media-object" src="<?php echo ($resURL)?>img/placeholder_video.png"> </a> </div>
          <div class="media-body">
            <div class="col-sm-10"><a href="#" class="media-heading">Configurable applicant flags</a>
              <p>Tired of the same old applicant flags? Create your own?</p>
            </div>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img width="150" alt="64x64" class="thumbnail media-object" src="http://styleguide.pageuppeople.com/images/image-placeholder.png"> </a> </div>
          <div class="media-body">
            <div class="col-sm-10"><a href="#" class="media-heading">Blah blah blah blah</a>
              <p>Tired of the same old applicant flags? Create your own?</p>
            </div>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img width="150" alt="64x64" class="thumbnail media-object" src="http://styleguide.pageuppeople.com/images/image-placeholder.png"> </a> </div>
          <div class="media-body">
            <div class="col-sm-10"><a href="#" class="media-heading">Blah blah blah blah</a>
              <p>Tired of the same old applicant flags? Create your own?</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">

            </div> -->
    </div>
  </div>
</div>
<?php endblock()?>
