<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>
      <div id="learning" class="container-fluid">
         <div class="row-fluid">
            <div class="span12">
               <div class="row-fluid">
                  <!--  left
                     ================================================== -->
                  <div class="span2">
                     <ul class="nav nav-list well">
                        <li><button href="#myModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add your own </button></li>
                        <!-- <li class="nav-header active">
                           <a href="#">Learning Library</a> 
                           </li> -->
                        <li class="nav-header">
                           Working on ...
                        </li>
                        <li>
                            <span class="badge badge-success">3</span><a href="#">In progress </a> 
                        </li>
                        </li>
                        <li>
                            <span class="badge badge-success">9</span><a href="#">Completed</a>
                        </li>
                        <li>
                            <span class="badge badge-success">1</span><a href="#">Pending approval</a>
                        </li>
                        <li>
                            <span class="badge badge-success">2</span> <a href="#">Expired</a> 
                        </li>
                        <li class="divider">
                        </li>
                        <li class="nav-header">
                           <i class="fa fa-sitemap"></i> <a href="#">Library Management </a>			
                        </li>
                        <li>
                           <p>CareerPath is an experimental search engine based on employment data from around the world</p>
                        <li>
                     </ul>
                  </div>
                  <!--  right 
                     ================================================== -->
                  <div class="span10">
                     <!-- Filtering Menu
                        ================================================== -->
                     <div style="margin:25px 0" class="row-fluid">
                     <div class="span6" id="search">
                           <div class="tabbable tabs-below" id="tabs-892550">
                              
                              <div class="tab-content" style="background:#fff; padding:10px">
                                 <div class="tab-pane active" id="panel-282702">

                                       <input id="searchbox" type="text" style="width: 80%; padding-top: 8px; padding-bottom: 8px;" placeholder="What would you like to learn?"/>
                                       <div id="autosuggestion">
                                          <!--   search results segment -->
                                          <div class="media">
                                             <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object" alt='' /></a>
                                             <div class="media-body">
                                                <h5 class="media-heading">
                                                   Nested media heading 
                                                </h5>
                                                Cras sit amet nibh libero, in gravida <span class="tag-cloud tag-cloud-success">client delivery</span>
                                             </div>
                                          </div>
                                          <!--   search results segment -->
                                          <div class="media">
                                             <div class="media-body">
                                                <h5 class="media-heading">
                                                   Nested media heading
                                                </h5>
                                                in gravida nulla. Nulla vel metus scelerisque.  <span class="tag-cloud tag-cloud-success">communication</span>
                                             </div>
                                          </div>
                                          <!--   search results segment -->
                                          <div class="media">
                                             <a href="#" class="pull-left"><img src="img/avatar3.png"></a>
                                             <div class="media-body">
                                                <h5 class="media-heading">
                                                   Nested media heading
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                             </div>
                                          </div>
                                          <!--   search results segment -->
                                          <div class="media">
                                             <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object" alt='' /></a>
                                             <div class="media-body">
                                                <h5 class="media-heading">
                                                   Nested media heading
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                             </div>
                                          </div>
                                          <p id="add-msg">could not find any, would you like to creat your own? <button class="btn btn-danger"><i class="fa fa-plus-circle"></i> Add </button></p>
                                       </div>
                                       <!-- / autosuggestion -->
                                    </div>
                                   

                                 <div class="tab-pane" id="panel-284950">
                                    <p><span>Current role: </span><input type="text" style="width:180px" /> <a href="cp.html" class="btn btn-danger">Explore</a></p>
                                 </div>
                              </div>
                              <ul class="nav nav-tabs">
                                 <li class="active">
                                    <a href="#panel-282702" data-toggle="tab"><i class="fa fa-lg fa-search"></i> Search</a>
                                 </li>
                                 <li>
                                    <a href="#panel-284950" data-toggle="tab"><i class="fa fa-lg fa-sitemap fa-rotate-180"></i> Explore your next role</a>
                                 </li>
                              </ul>
                           </div>

                        </div>

                        <div id="filter" class="span6">
                           <ul>
                              <li><i class="fa fa-filter" style="font-size:18px; color:#666" ></i> </li>
                              <li><a href="" data-filter="*" class="badge"> All </a></li>
                              <li><a href="" data-filter=".reco"  class="badge"> Recommendations</a></li>
                              <li><a href="" data-filter=".cat1"  class="badge"> E-Learning</a></li>
                              <li><a href="" data-filter=".cat2"  class="badge">On-the-Job Activities</a></li>
                              <li><a href="" data-filter=".cat3"  class="badge">Training</a></li>
                           </ul>
                        </div>                        
                     </div>
                     <!-- END filtering menu -->
                     <!-- MASONRY ITEMS START
                        ================================================== -->
                     <div id="Lcontent">
                        <!-- box 1 -->
                        <div class="item reco cat2 cat3">
                           <div class="boxcontainer">
                              <span class="rec">Recommended</span>
                              <span class="cost"><b class="badge bg-success">$399</b></span>
                              <p><i>Recommended because you have also read The Mythical Man Month</i>
                              <p>
                                 <img src="img/rails4_xlargecover.jpg" alt="">
                              <h5><a href="#detailbox1" data-toggle="modal">1001 Ways To Take Initiative At Work</a></h5>
                              <p>
                                 1001 Ways To Take Initiative At Work, Bob Nelson (Workman Publishing, 1999)
                              </p>
                           </div>
                           <div class="card-footer">
                              <button class="btn" type="button"><i class="fa fa-plus"></i> Add</button>
                              <button class="btn" type="button"><i class="fa fa-share-alt"></i> Share</button>
                           </div>
                        </div>
                        <!-- box 2 -->
                        <div class="item reco cat1">
                           <div class="boxcontainer">
                              <span class="rec">Recommended</span>
                              <span class="cost"><i class="fa fa-2x fa-money"></i></span>
                              <p><i>Recommended because you are a product manager</i>
                              <p>
                                 <img src="http://www.craigielawfirm.com/wp-content/uploads/sites/5/2014/03/start-up-of-you-211x300.jpg" alt="">
                              <h5><a href="singleproject.html">Analytic Trouble Shooting</a></h5>
                              <p>
                                 This is an External Training Course - discussion & approval from your manager is required for this development activity.
                              </p>
                           </div>
                           <div class="card-footer">
                              <button class="btn" type="button"><i class="fa fa-plus"></i> Add</button> 
                           </div>
                        </div>
                        <!-- box 3 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <span><i class="fa fa-smile-o"></i> 255 <i class="fa fa-frown-o"></i> 23</span>
                              <img src="http://www.pageuppeople.com/wp-content/uploads/2014/05/simplescreens_applicanttracking-300x236.png" alt="">
                              <h5><a href="singleproject.html">Customer Feedback</a></h5>
                              <p>
                                 Seek feedback from your customers regarding what is working well for them and what could be improved. Are they satisfied with the level of service that you are providing? Take ownership to resolve issues to the satisfaction of the customer and the business.
                              </p>
                           </div>
                           <div class="card-footer">
                              <button type="button" class="btn"><i class="fa fa-plus"></i> Add</button>
                           </div>
                        </div>
                        <!-- box 6 -->
                        <div class="item cat2">
                           <div class="boxcontainer">
                              <span><i class="fa fa-smile-o"></i> 166<i class="fa fa-frown-o"></i> 45</span>
                              <iframe src="http://player.vimeo.com/video/99311260" width="260" height="152" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                              <h5><a href="singleproject.html">Cultural Understanding</a></h5>
                              <p>
                                 This is an On-the-Job activity - Discuss with your manager how best to approach this competency.Do you have the opportunity to work in a multi-cultural environment? Seek to understand and appreciate different cultural values and thinking styles. Try to understand these alternative points of view.
                              </p>
                           </div>
                        </div>
                        <!-- box 7 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <span><i class="fa fa-smile-o"></i> 9</span>
                              <img alt="" src="http://lorempixel.com/270/100/sports/1" />
                              <h5><a href="singleproject.html">Change and Innovation</a></h5>
                              <p>
                                 This is an E-Learning Activity -  discussion & approval from your manager is required for this development activity. Facilitate and Capitalise on Change and Innovation, Insight International Consultancy <a href="#" class="label"><i class="fa fa-link"></i> www.insightinternational.com.au</a>
                              </p>
                           </div>
                        </div>
                        <!-- box 8 -->
                        <div class="item cat1">
                           <div class="boxcontainer">
                              <span><i class="fa fa-frown-o"></i> 3</span>
                              <img class="user" src="img/avatar1.png" />
                              <h5><a href="singleproject.html">Add Value to your Role</a></h5>
                              <p>
                                 Consider your role from the perspective of the business and organisation. Can you anticipate needs? How could you add more value in your role? Act on ideas or put forward a proposal to management/the Board. 
                              </p>
                           </div>
                        </div>
                        <!-- box 9 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <span><i class="fa fa-smile-o"></i> 25 <i class="fa fa-frown-o"></i> 1</span>
                              <img alt="" src="http://lorempixel.com/270/150/sports/3" />
                              <h5><a href="singleproject.html">Managing Distractions </a></h5>
                              <p>
                                 Maintain a positive temperament when faced with interruptions. Think about the last time you were interrupted and your reaction, and consider a more productive response. Can you schedule flexible time into your diary to take into account interruptions? 
                              </p>
                           </div>
                        </div>
                        <!-- box 4 -->
                        <div class="item largeItem cat1">
                           <div class="boxcontainer">
                              <iframe width="530" height="315" src="http://www.youtube.com/embed/0Kgt20E3AYY" frameborder="0"></iframe>
                              <h5><a href="singleproject.html">Zing</a></h5>
                              <p>
                                 water fountain
                              </p>
                           </div>
                        </div>
                        <!-- box 10 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <img src="https://cdn3.iconfinder.com/data/icons/brands-applications/512/PDF-128.png" alt="">
                              <h5><a href="singleproject.html">Explore Alternative Product Offerings</a></h5>
                              <p>
                                 Explore alternative product/service offerings to meet a more diverse range of customer needs. Seek feedback on these ideas from target customer groups. 
                              </p>
                           </div>
                        </div>
                        <!-- box 11 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <img alt="" src="http://lorempixel.com/270/120/sports/2" />
                              <h5><a href="singleproject.html">Improving Performance </a></h5>
                              <p>
                                 Generate at least 2 ideas to improve performance in your part of the business. Identify obstacles and develop strategies to overcome them before you put these ideas forward to your Manager/the team.
                              </p>
                           </div>
                        </div>
                        <!-- box 12 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <h5><a href="singleproject.html">Marketing Knowledge </a></h5>
                              <p>
                                 I would like to go to ATC next year
                              </p>
                           </div>
                        </div>
                        <!-- box 5 -->
                        <div class="item cat2">
                           <div class="boxcontainer">
                              <span><i class="fa fa-smile-o"></i> 6 <i class="fa fa-frown-o"></i> 5</span>
                              <img class="user" src="img/avatar1.png" />							
                              <h5><a href="singleproject.html">Judgement Observations </a></h5>
                              <p>
                                 Observe people who are particularly good judging situations and making decisions. What information do they use and offer in this process? Could you benefit from using this information in making future judgements?
                              </p>
                           </div>
                        </div>
                        <!-- box 13 -->
                        <div class="item cat2 cat1">
                           <div class="boxcontainer">
                              <h5><a href="singleproject.html">Identify quality issues before they escalate </a></h5>
                              <p>
                                 Identify quality issues before they escalate. Encourage the early detection of quality related issue by: Setting aside time in each team meeting to discuss quality related issues and work standards Building a safe and open atmosphere where team members can freely express their concerns about quality related issues. Listen attentively and formulate an immediate action plan to prevent the issue from escalating Measuring customer satisfaction and requesting feedback (eg. conduct regular reviews) Recognising and responding to customer complaints
                              </p>
                           </div>
                           <div class="card-footer">
                              <button type="button" class="btn"><i class="fa fa-plus"></i> Add</button> 
                           </div>
                        </div>
                        <!-- box 14 -->
                        <div class="item cat1 cat2">
                           <div class="boxcontainer">
                              <img src="img/temp/masonry/14.jpg" alt="">
                              <h5><a href="singleproject.html">Managing Relationships</a></h5>
                              <p>
                                 Observe people who are particularly good judging situations and making decisions. What information do they use and offer in this process? Could you benefit from using this information in making futurjudgements?
                              </p>
                           </div>
                           <div class="card-footer">
                              <button type="button" class="btn"><i class="fa fa-plus"></i> Add</button> 
                           </div>
                        </div>
                        <!-- box 15 -->
                        <div class="item cat2 cat3">
                           <div class="boxcontainer">
                              <img src="img/temp/masonry/15.jpg" alt="">
                              <h5><a href="singleproject.html">Engaging your Colleagues</a></h5>
                              <p>
                                 Ensure that you are visible to your colleagues and demonstrate an interest in their activities, problems, and results.
                              </p>
                           </div>
                           <div class="card-footer">
                              <button type="button" class="btn"><i class="fa fa-plus"></i> Add</button> 
                           </div>
                        </div>
                        <!-- next box etc -->
                     </div>
                     <!-- MASONRY ITEMS END -->	
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- *******************  create lightbox  **********************-->
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Create you own learning activities</h5>
         </div>
         <div class="modal-body">
            <!-- *******************  ***********************************-->
            <form class="form-horizontal">
               <div class="control-group">
                  <label class="control-label" for="">Title</label>
                  <div class="controls">
                     <input type="text" id="title" >
                  </div>
                  <!-- end of search suggestions -->
                  <div id="autosuggestion2"  class="controls" style="display: none;">
                     <!--   search results segment -->
                     <h5>Similar items exist in the library: </h5>
                     <blockquote>
                        <p>
                           <a href="#">Web directions South </a>
                        </p>
                        <small> some description goes here </small>
                     </blockquote>
                     <blockquote>
                        <p>
                           <a href="#">Web directions Code</a>
                        </p>
                        <small>some description goes here </small>
                     </blockquote>
                  </div>
                  <!-- end of search suggestions -->
               </div>
               <div class="control-group">
                  <label class="control-label" for="">Overview</label>
                  <div class="controls">
                     <textarea rows="5"></textarea>
                  </div>
               </div>
               <div class="control-group">
                  <label class="control-label" for="">Video</label>
                  <div class="controls">
                     <input type="text">
                  </div>
               </div>
               <div class="control-group">
                  <label class="control-label" for="">URL</label>
                  <div class="controls">
                     <input type="text">
                  </div>
               </div>
               <div class="control-group">
                  <label class="control-label" for="">Upload</label>
                  <div class="controls">
                     <input type="text">
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button class="btn" style="background:#0D6083; color:#fff">Create</button>
         </div>
      </div>
      <!-- *******************  detailbox1 lightbox  **********************-->
      <div id="detailbox1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">1001 Ways To Take Initiative At Work</h5>
         </div>
         <div class="modal-body row-fluid">
            <div class="span7">
               <img class="pull-left" alt="" style="width:150px; margin-right:20px" src="img/rails4_xlargecover.jpg?1378493037" />
               <p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque. 
               </p>
               <p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque. Cras sit amet nibh libero, in gravida nulla.
               </p>
            </div>
            <div class="span4">
               <ul class="item-des">
                  <li><i class="fa fa-lg fa-heart"></i>33</li>
                  <li><i class="fa fa-lg fa-clock-o"></i>12 Aug 2014</li>
                  <li><i class="fa fa-lg fa-comments-o"></i>15</li>
                  <li><i class="fa fa-lg fa-dollar"></i>399</li>
                  <li><i class="fa fa-lg fa-tags"></i> communication </li>
               </ul>
            </div>
            <!-- *******************  ***********************************-->							
            
         </div>
         <div class="modal-footer">
            <span style="float:left">Share: <i class="fa fa-lg fa-linkedin-square"></i> <i class="fa fa-lg fa-facebook-square"></i> <i class="fa fa-l fa-twitter-square"></i></span>
            <button class="btn" style="background:#0D6083; color:#fff">Add to plan</button>
         </div>
      </div>
      <!-- *******************  ***********************************-->	
      <script src="js/isotope.pkgd.js"></script>
      <script src="js/learning.js"></script>
<?php include '_partials/foot.html';?>  

