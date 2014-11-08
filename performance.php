<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>
      <div id="learning" class="container">
            <a href="#devPlanBox" role="link" data-toggle="modal"><img style="max-width: none;" src="performance.png" /></a>
      </div>

      <!-- *******************  detailbox1 lightbox  **********************-->
      <div id="devPlanBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="left: 5%; margin-left: 0px; width: 90%; height: 600px">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Add learning activities on your development plan</h5>
         </div>
         <div class="modal-body">
            <?php include 'iframe-ldog.html';?>					
            
         </div>
         <div class="modal-footer"> 
            <button class="btn" style="background:#0D6083; color:#fff">Done</button>
         </div>
      </div>
   </body>
</html>

