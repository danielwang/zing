<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>
<div id="learning" class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="row">
            <!-- left==================================================-->

            
            <div class="col-md-9">
               <!-- Filtering Menu
                  ================================================== -->
               <div style="margin: 25px 0;" class="row">
                  <div class="col-md-8" id="search">
                     <div class="tabbable tabs-below" id="tabs-892550">
                        <div class="tab-content" style="background: #fff; padding: 10px;">
                           <div class="tab-pane active" id="panel-282702">
                              
                              <!-- ********** advanced search *****************-->                                      
                              <p><input id="searchbox" type="text" style="width: 80%; padding-top: 8px; padding-bottom: 8px;" placeholder="What would you like to learn?"/>
                              <button>Search</button>
                              </p>
                           
                              <div id="autosuggestion">
                                 <!-- search results segment -->
                                 <div class="media">
                                    <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object featured" alt="" /></a>
                                    <div
                                       class="media-body">
                                       <h5 class="media-heading">
                                          Nested media heading 
                                       </h5>
                                       Cras sit amet nibh libero, in gravida <span class="tag-cloud tag-cloud-success">client delivery</span>
                                    </div>
                                 </div>
                                 <!-- search results segment -->
                                 <div class="media">
                                    <div class="media-body">
                                       <h5 class="media-heading">
                                          Nested media heading
                                       </h5>
                                       in gravida nulla. Nulla vel metus scelerisque. <span class="tag-cloud tag-cloud-success">communication</span>
                                    </div>
                                 </div>
                                 <!-- search results segment -->
                                 <div class="media">
                                    <a href="#" class="pull-left"><img src="img/avatar3.png" class="featured" /></a>
                                    <div
                                       class="media-body">
                                       <h5 class="media-heading">
                                          Nested media heading
                                       </h5>
                                       Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                    </div>
                                 </div>
                                 <!-- search results segment -->
                                 <div class="media">
                                    <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object featured" alt="" /></a>
                                    <div
                                       class="media-body">
                                       <h5 class="media-heading">
                                          Nested media heading
                                       </h5>
                                       Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                    </div>
                                 </div>
                                 <p id="add-msg">could not find any, would you like to creat your own?
                                    <button class="btn btn-danger"><i class="fa fa-plus-circle"></i> Add</button>
                                 </p>
                              </div>
                              <!-- / autosuggestion -->
                           </div>
                           <div class="tab-pane" id="panel-284950">
                              <p><span>Current role: </span>
                                 <input type="text" style="width: 180px;" /> <a href="cp.html" class="btn btn-danger">Explore</a>
                              </p>
                           </div>
                        </div>
                        <ul class="nav nav-tabs">
                           <li class="active"> <a href="#panel-282702" data-toggle="tab"><i class="fa fa-lg fa-search"></i> Search</a>
                           </li>
                           <li> <a href="#panel-284950" data-toggle="tab"><i class="fa fa-lg fa-sitemap fa-rotate-180"></i> Explore your next role</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- dimonds -->
                     <div class="col-xs-4 text-center">
                        <div class="pu-square red-bg small" style="margin-top:0">
                           <i class="fa fa-leaf"></i>   
                        </div>
                        <span>Library</span> 
                     </div>
                     <div class="col-xs-4 text-center">
                        <a href="mylearning.php"><div class="pu-square green-bg small" style="margin-top:0">
                           <i class="fa fa-user"></i>   
                        </div></a>
                        <span>MyLearning</span> 
                     </div>
                     <div class="col-xs-4 text-center">
                        <div class="pu-square orange-bg small" style="margin-top:0">
                           <i class="fa fa-plus"></i>   
                        </div>
                        <span>Create</span> 
                     </div>
                  </div>
               </div>
               <!-- END filtering menu -->
               <?php include '_partials/learning_cards.html';?>
            </div>
            <!-- right==================================================-->
            <div id="filter" class="col-md-3 box">
               <h5><i class="fa fa-filter"></i> Refin Search</h5>
               <ul>
                  <li data-filter="*"> All </li>
                  <li data-filter=".reco"> Recommendations </li>
                  <li data-filter=".cat1"> E-Learning </li>
                  <li data-filter=".cat2">On-the-Job Activities </li>
                  <li data-filter=".cat3">Training </li>
               </ul>
               <ul>                       
                  <li class="heading">Level:</li>
                  <li>Level 1</li>
                  <li>Level 2</li>
                  <li>Level 3</li>
                  <li>Level 4</li>
               </ul>
                <span class="heading">Competency:</span>   
                <ul class="competency">
                  <li class="heading">group 1:</li>
                  <li value="36">Agility (4)</li>
                  <li value="37">Analysis (5)</li>
                  <li value="38">Building Rapport (6)</li>
                  <li value="39">Building Relationships (4)</li>
                  <li value="40">Business Acumen (8)</li>
                  <li value="57">Business Management</li>
                  <li value="58">Change Leadership</li>
                  <li value="43">Client Centric</li>
                  <li value="52">Commitment To Learning</li>
                  <li value="65">Communication</li>
                  <li value="41">Communication (Verbal)</li>
                  <li value="42">Communication (Written/Visual)</li>
                  <li value="59">Conflict Resolution</li>
                  <li value="67">Consulting</li>
                  <li value="44">Decision Making</li>
                  <li value="45">Delegation</li>
                  <li class="heading">group 2:</li>
                  <li value="68">Engineering Innovation</li>
                  <li value="46">Influencing</li>
                  <li value="47">Initiative</li>
                  <li value="48">Innovation</li>
                  <li value="49">Judgement</li>
                  <li value="51">Leadership (Strategic)</li>
                  <li value="50">Leading Teams</li>
                  <li value="60">Negotiation</li>
                  <li value="53">Planning &amp; Organising</li>
                  <li value="61">Problem Solving</li>
                  <li value="62">Project Management</li>
                  <li value="54">Quality Orientation</li>
                  <li value="55">Results Focus</li>
                  <li value="63">Sales Focus</li>
                  <li value="64">Teamwork</li>
                  <li value="66">Technical Merit</li>
                  <li value="56">Tenacity</li>
               </ul>
               <p><i class="fa fa-money fa-lg"></i> Cost: <input type="range" name="points" min="100" max="1000"></p>
            </div>
         </div>
      </div>
   </div>
</div> 
<?php include '_partials/foot.html';?>