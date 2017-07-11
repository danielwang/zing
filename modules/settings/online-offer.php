<?php include '../../base2.php';?>
<?php startblock('page')?>
<ol class="breadcrumb">
    <li>
        <a href="#">
            <i class="pu-icon pu-icon-settings"></i>
            System Settings</a>
    </li>
    <li>
      <a href="#">Jobs</a>
    </li>
    <li>
        <a href="#">Recruitment Processes</a>
    </li>
    <li>
        <a href="#">Graduate</a>
    </li>
    <li>
        <a href="#">Application statuses</a>
    </li>
    <li class="active">Online offer</li>
</ol>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
     <div class="pu-accordion" id="pu-accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pu-accordion" href="#pu-collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            General settings
                        </a>
                    </h4>

                </div>
                <div id="pu-collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body"><?php include ("${resURL}components/_form-horizontal.html");?></div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#pu-accordion" href="#pu-collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </a>
                    </h4>

                </div>
                <div id="pu-collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#pu-accordion" href="#pu-collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </a>
                    </h4>

                </div>
                <div id="pu-collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
<?php endblock()?>
