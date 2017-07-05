<?php include '../../base-app.php';?>
<?php startblock('page');?>
<h2>Create an idea</h2>
<hr>
<div class="row">
  <div class="col-sm-8">
    <div class="pu-box">
        <form data-toggle="validator" role="form" lpformnum="4" novalidate="true">
              <div class="form-group has-feedback">
                  <label for="title" class="control-label required">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Fresh flags for applications" required="">
              </div>
              <div class="form-group">
                  <label for="bio" class="control-label required">Description</label>
                  <textarea id="text" class="form-control" data-error="Can't be blank" required=""></textarea>
                  <h6 class="pull-right" id="count_message"></h6>
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label for="bio" class="control-label">Content</label>
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#1b">Page 1</a>
                  </li>
                  <li>
                    <a href="#2b">Page 2</a>
                  </li>
                  <li>
                    <a href="#3b">Page 3</a>
                  </li>
                  <li>
                    <a href="#4b" class="ghost-tab"><i class="fa fa-plus"></i> </a>
                  </li>
                </ul>
                <div class="tab-content clearfix">
                  <div class="tab-pane active" id="1b">
                    <script type="text/javascript" src="https://ui.pageuppeople.com/libs/scribble/scribble.js" charset="UTF-8" async></script>
                    <textarea style="visibility: hidden;" pageup-scribble>Hello from Scribble!</textarea>
                  </div>
                  <div class="tab-pane" id="2b">
                    <p>De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
                  </div>
                  <div class="tab-pane" id="3b">
                    <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
          </form>
          <div class="form-group text-right">
               <a href="list" class="btn btn-link pull-left">Cancel</a>
    			     <button type="submit" class="btn btn-success">Preview</button>
               <a href="list" class="btn btn-primary">Save</a>
          </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title yellow"><i class="fa fa-magic"></i> Tips </h4>
      </div>
      <div class="panel-body">
        <h6>Rule 1</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h6>Rule 2</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

      </div>
    </div>
  </div>
</div>

<style>
.ghost-tab{
  border-style: dashed;
  border-width: 2px;
  margin-top: -1px;
  margin-bottom: -1px;
  border-bottom: 0;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover{
  border-color: #ddd;
}
.tab-content{
  1px solid #ddd;
}
</style>

<script>
$(document).ready(function() {
  var text_max = 200;
  $('#count_message').html(text_max + ' remaining');
  $('#text').keyup(function() {
    var text_length = $('#text').val().length;
    var text_remaining = text_max - text_length;
    $('#count_message').html(text_remaining + ' remaining');
  });
});
</script>
<?php endblock()?>
