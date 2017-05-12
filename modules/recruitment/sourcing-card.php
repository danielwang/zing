<?php $breadcrumb = true; include '../../base.php'; ?>
<?php startblock('page')?>
<div class="page-header">
  <h1>Sourcing Channels</h1>
</div>
<div class="row">
  <div class="col-sm-2"> <!-- required for floating -->
   <!-- Nav tabs -->
   <ul class="nav nav-tabs tabs-left">
     <li class="active">
       <span class="pu-toggle-btn pu-toggle-btn-green">
            <label>
                <input type="checkbox" checked>
                <span></span>
            </label>
       </span>
       <a href="#home" data-toggle="tab">Career Website</a>
     </li>
     <li><a href="#profile" data-toggle="tab">Profile</a></li>
     <li><a href="#messages" data-toggle="tab">Messages</a></li>
     <li><a href="#settings" data-toggle="tab">Settings</a></li>
   </ul>
 </div>

 <div class="col-sm-10">
   <!-- Tab panes -->
   <div class="tab-content">
     <div class="tab-pane active" id="home">
       <div class="row">
         <div class="col-sm-8">
           <?php include ("${resURL}components/_form.html");?>
         </div>
         <div class="col-sm-4">
           <button class="btn btn-default">Apply job template</button>
           <?php include ("${resURL}components/_filters.html");?>
         </div>
       </div>
     </div>
     <div class="tab-pane" id="profile">Profile Tab.</div>
     <div class="tab-pane" id="messages">Messages Tab.</div>
     <div class="tab-pane" id="settings">Settings Tab.</div>
   </div>
 </div>

</div>
      <!-- /tabs -->
<?php endblock()?>
<style>
/* custom inclusion of right, left and below tabs */
.tabs-left, .tabs-right {
  border-bottom: none;
  padding-top: 2px;
}
.tabs-left {
  border-right: 1px solid #ddd;
}
.tabs-right {
  border-left: 1px solid #ddd;
}
.tabs-left>li, .tabs-right>li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left>li {
  margin-right: -1px;
}
.tabs-right>li {
  margin-left: -1px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:hover,
.tabs-left>li.active>a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
}

.tabs-right>li.active>a,
.tabs-right>li.active>a:hover,
.tabs-right>li.active>a:focus {
  border-bottom: 1px solid #ddd;
  border-left-color: transparent;
}
.tabs-left>li>a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display:block;
}
.tabs-right>li>a {
  border-radius: 0 4px 4px 0;
  margin-right: 0;
}
</style>
