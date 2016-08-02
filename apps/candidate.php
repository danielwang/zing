<?php include '../base.php' ?>
<?php startblock('page') ?>
<link href="css/paperless.css" rel="stylesheet" type="text/css" />
<div class="ipad row-gap">
   <div class="candidate-detail row">
      <div class="col-sm-12">
         <div class="row">
            <span class="back col-sm-2"><a href="paperless.php"><i class="fa fa-chevron-left"></i> Back</a></span>
            <span class="name col-sm-8 text-center">Daniel Wang</span>
         </div>
      </div>
      <br clear="both" />    
      <hr>
      <div class="col-sm-2">
         <p class="mute"><i>Swipe left or right</i></p>
         <ul id="tag-list">
            <li>Agility</li>
            <li>growth</li>
            <li>communication</li>
            <li>revenue</li>
            <li>development</li>
            <li>effectiveness</li>
            <li>delivery</li>
            <li>innovation</li>
            <li>negotiation</li>
            <li>problem solving</li>
            <li>quality</li>
            <li>teamwork</li>
            <li>zing</li>
         </ul>
      </div>
      <div class="col-sm-8">
         <h4><i class="fa fa-tags"></i> Keywords</h4>

         <ul id="tag-cloud">
            <li class="tag-cloud tag-cloud-success">Agility <sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">growth<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">communication<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">revenue<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">development<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">effectiveness<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">delivery<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">innovation<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">negotiation<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">problem solving<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">quality<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud tag-cloud-success">teamwork<sup class="fa fa-times"></sup></li>
            <li class="tag-cloud">zing<sup class="fa fa-times"></sup></li>
         </ul>
         <h1> &nbsp;</h1>
         <h4><i class="fa fa-sticky-note"></i> Notes</h4>
         <textarea class="col-sm-12" placeholder="comment..." style="height:100px"></textarea>
         <h1> &nbsp;</h1>
         <p class="text-center">
            <button type="button" class="btn btn-circle btn-success btn-lg"><i class="fa fa-2x fa-smile-o"></i></button> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-circle btn-warning btn-lg"><i class="fa fa-2x fa-question"></i></button> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-circle btn-lg"><i class="fa fa-2x fa-frown-o"></i></button>
         </p>
      </div>
      
   </div>
</div>


<?php endblock() ?>