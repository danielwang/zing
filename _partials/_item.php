<div class="item box row">
  <!-- rate item mode -->
  <div class="rate-mode">
    <h4>Increase revenues for existing customers by 15%  <span class="status">Current</span></h4>
    <div class="dropdown pull-right"><a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-2x fa-ellipsis-h gray"></i></a>
      <ul class="dropdown-menu" aria-labelledby="dLabel">
        <li><a class="edit-btn" href="#"><i class="fa fa-fw fa-pencil"></i>&nbsp;Edit</a></li>
        <li><a href="#"><i class="fa fa-fw fa-trash-o"></i>&nbsp;Remove</a></li>
      </ul>
    </div>
    <hr>
    <div class="col-sm-1">
        <ul class="item-nav">
          <li title="Details" class="active" data-toggle="tooltip" data-placement="right" data-attr="details-panel"><i class="fa fa-fw fa-lg fa-info-circle"></i></li>
          <li title="Progress note" data-toggle="tooltip" data-placement="right" data-attr="progress-note-panel"><i class="fa fa-fw fa-lg fa-pencil-square-o"></i><span>5</span></li>
          <li title="Development activities" data-toggle="tooltip" data-placement="right"><i class="fa fa-fw fa-lg fa-graduation-cap"></i><span>3</span></li>
          <li title="Goal Align" data-toggle="tooltip" data-placement="right"><i class="fa fa-fw fa-lg fa-bullseye"></i></li>
          <!-- <li title=""><i class="fa fa-fw fa-lg fa-money"></i> &nbsp;Bonus</li> -->
          <!-- <li title=""><i class="fa fa-fw fa-lg fa-paperclip"></i> &nbsp;Attachment (1)</li> -->
          <li title="History" data-toggle="tooltip" data-placement="right"><i class="fa fa-fw fa-lg fa-history"></i></li>
          <li title="External Feedback" data-toggle="tooltip" data-placement="right"><i class="fa fa-fw fa-lg fa-comments-o"></i><span>2</span></li>
        </ul>  
    </div>
    <div class="col-sm-11 left-border panel-container">
      <div class="details-panel">
        <!-- details panel-->
        <div class="row">
          <div class="col-sm-8">
            <!-- measure -->
            <div class="measure">
              <p>The following expectations for the review period are below:</p>
              <ul>
                <li>Proposal phase completed by mid-year</li>
                <li>Ready to act on plan by end of year</li>
                <li>Project plan attached to objective</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
            </div>        
          </div>
          <div class="item-side col-sm-4">
            <!-- weighting-->
            <div class="col-sm-6 text-center">
              <div class="c100 orange small p25">
                <span>25%</span>
                <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
              </div>    
            </div>
            <h6>Weighting</h6>
            </div>
             <!-- target date -->
            <div class="col-sm-6 text-center">
              <div class="target-date">
                <div class="month">June</div>
                <div class="day">30</div>
                <div class="year">2016</div>
              </div>
              <h6>Target date</h6>
            </div>
            <div class="col-sm-12">&nbsp;</div> 
            <!-- set status -->
            <div class="col-sm-12 text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Current</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Completed</a>
                  <a class="dropdown-item" href="#">Cancelled</a>
                  <a class="dropdown-item" href="#">No longer achievable</a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <hr>
        <!-- comments rating-->
        <div class="row">
           <!-- manager comments-->
            <span class="col-sm-2 text-center"><p><img class="avatar" src="img/emp/emp9.png" /></p>Simon Cariss</span>
            <span class="col-sm-7">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
            </span>
            <span class="col-sm-3">
              <div class="well">
                <span class="rating">
                  <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                </span>
              </div>
            </span>
            <span class="clearfix"></span>
            <!-- employee comments-->
            <span class="col-sm-2 text-center"><p><img class="avatar" src="img/emp/emp.jpg" /></p> Daniel Wang</span>
            <span class="col-sm-7"><textarea class="col-sm-12"></textarea> <a href="#">Link journal entries</a></span>
            <span class="col-sm-3">
              <div class="well">
                <span class="rating">
                  <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                </span>
              </div>
            </span>           
        </div>        
      </div>
      <!-- progress note panel-->
      <div class="progress-note-panel hidden">
           <?php include '_partials/_feeds.php';?>
      </div>
    </div>
    

  </div>
  <!-- end rate item mode -->
  <!-- edit item mode -->
  <div class="edit-mode hidden">
      <form class="form-horizontal" method="get">
         <!-- item title -->
          <div class="form-group"><label class="col-sm-3 control-label">Title<sup>*</sup></label>
              <div class="col-sm-9"><input type="text" class="form-control" id="title" value="Increase revenues for existing customers by 15%"></div>
          </div>
          <!-- item measure -->
          <div class="form-group"><label class="col-sm-3 control-label">Measure <sup>*</sup></label>

              <div class="col-sm-9"><textarea class="form-control"></textarea></div>

          </div>
          <!-- item status -->
          <div class="form-group"><label class="col-sm-3 control-label">Status</label>

              <div class="col-sm-9">
                <select id="type">
                      <option>Select</option>
                      <option>Current</option>
                      <option>Completed</option>
                      <option>Cancelled</option>
                      <option>No longer achievable </option>
                  </select>
            </div>
          </div>
          <!-- item weighting -->
          <div class="form-group"> <label class="col-sm-3 control-label">Weighting</label> 
            <div class="col-sm-3">
              <div class="input-group">  <input type="text" placeholder="Amount" id="exampleInputAmount" class="form-control"> <div class="input-group-addon">%</div> 
              </div> 
            </div>
          </div> 
          <!-- item Target Date -->
          <div class="form-group"> <label class="col-sm-3 control-label">Target Date</label> 
            <div class="col-sm-3">
              <div class="input-group date">
                <input type="text" class="form-control">
                <span class="input-group-addon">
                  <i class="fa fa-calendar">
                  </i>
                </span>
              </div>  
            </div>
          </div>
          <!-- item Bonus-->
          <div class="form-group">
             <label class="col-sm-3 control-label">Bonus</label>
             <div class="col-sm-9">
                <div class="row">
                   <div class="col-md-3"><input type="text" placeholder="Weighting" class="form-control"></div>
                   <div class="col-md-6"><input type="text" placeholder="Oppurtunity" class="form-control"></div>
                </div>
             </div>
          </div>
          <!-- item Bonus-->
          <div class="form-group">
             <label class="col-sm-3 control-label">Target type</label>
             <div class="col-sm-9">
                <div class="row">
                  <div class="col-md-3">
                      <select>
                        <option>Select</option>
                        <option>Text</option>
                        <option>Date</option>
                        <option>%</option>
                        <option>$</option>
                    </select>
                  </div>
                  <div class="col-md-3"><input type="text" placeholder="Min" class="form-control"></div>
                  <div class="col-md-3"><input type="text" placeholder="Par" class="form-control"></div>
                  <div class="col-md-3"><input type="text" placeholder="Max" class="form-control"></div>
                </div>
             </div>
          </div>
          <!-- Development activities -->
          <div class="form-group"><label class="col-sm-3 control-label">Development activities</label>

              <div class="col-sm-9"><button><i class="fa fa-plus-circle"></i>&nbsp;Add</button></div>

          </div>
          <!-- attachment -->
          <div class="form-group"><label class="col-sm-3 control-label">Attachment</label>

              <div class="col-sm-9"><button><i class="fa fa-plus-circle"></i>&nbsp;Add</button></div>

          </div>
          <!-- Goal align -->
          <div class="form-group"><label class="col-sm-3 control-label">Goal align</label>

              <div class="col-sm-9"><button><i class="fa fa-plus-circle"></i>&nbsp;Add</button></div>

          </div>
          <div class="form-group">
              <div class="col-sm-4 col-sm-offset-3">
                  <button class="done btn btn-primary" type="submit">Done</button>
              </div>
          </div>

      </form>  
  </div>
  <!-- end edit item mode -->  
</div>


<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('.done, .edit-btn').click(function(){
    $('.edit-mode').toggleClass('hidden');
    $('.rate-mode').toggleClass('hidden');
  });
  $('.item-nav li').click(function (e) {
    $(".item-nav li").removeClass("active");
    $(this).addClass('active');
    var panel = $(this).attr('data-attr');
    $('.panel-container > div').addClass('hidden');
    $('.' + panel).removeClass('hidden');
  });
  $('.item h4').click(function(){
    $(this).parentsUntil("item").toggleClass('collaps');
  });
})
</script>