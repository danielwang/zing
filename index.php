<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>


    <div class="container">
      <div id="dockbody">
        <div class="row row-gap">
            

          <div id="middleColumn" class="col-lg-6">
               <?php include '_partials/journal.php';?>
               <?php include '_partials/timeline.php';?>
          </div>
          <div class="col-lg-3">
                  <article>
                  <img src="side.png"/>
                              <img src="side2.png"/>
                </article>
                          <article>
                          <span class="nav-header">Internal vacancies</span>               
                 <ul>
                   <li><a href="#">System operator</a> - Melbourne</li>
                  <li><a href="#">Team lead</a> - Perth</li>
                  <li><a href="#">Project manager</a> - Sydney</li>
                 </ul>
               </article>
               <h5>Weekly ranking</h5>  
                <ol id="ranking">
                     <li><img class="avatar" src="img/avatar2.jpg"> 30 </li>
                     <li><img class="avatar" src="img/avatar3.jpg"> 11 </li>
                     <li><img class="avatar" src="img/avatar4.jpg"> 10 </li>
                     <li><img class="avatar" src="img/avatar1.png"> 8 </li>
                     <li><img class="avatar" src="img/avatar6.jpg"> 5 </li>
                </ol>     
            </div>
          <div class="col-lg-3">            
           <!--   old widgets goes here -->
           <img style="margin-top:22px; max-width: none;" src="img/widgets.png" />
          </div>

        </div>
      </div>
    </div>        
<?php include '_partials/foot.html';?>  