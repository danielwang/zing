<header id="top" class="navbar navbar-static-top bs-docs-nav navbar-fixed-top" role="banner">
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php"><img width="80" src="img/pu-logo.png"/></a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon glyphicon-th-list icon-white"></i>&nbsp;&nbsp;PU Modules <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="live" href="dock.php">ES Dock</a>
                                </li>
                                <li><a class="live" href="home.php">My Home</a>
                                </li>
                                <li><a class="live" href="orgchart.php">Org Chart</a>
                                </li>
                                <li><a class="live" href="dashboard.php">Recruitment</a>
                                </li>
                                <li><a class="live" href="performance.php">Performance</a>
                                </li>
                                <li><a class="live" href="learning.php">Learning</a>
                                </li>
                                <li><a class="live" href="journal.php">Journal</a>
                                </li>
                                <li><a class="manager-only hide" href="#">Succession</a>
                                </li>
                                <li class="divider"></li>
                                <li><a class="live manager-only hide" href="systemsettings.php">System settings</a>
                                </li>
                            </ul>
                    </li>
                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-puzzle-piece fa-lg"></i>&nbsp; Design Patterns <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="live" href="bulk-progress.php">Bulk Process</a>
                            </li>
                            <li><a class="live" href="orgchart-small.php">Org Chart</a><li>
                            <li><a class="live" href="360review.php">Circle UI</a></li>
                            <li><a class="live" href="social-feed.php">Timeline</a></li>
                            <li><a class="live" href="paperless.php">Paper less interview</a></li>
                            <li><a class="live" href="paper-performance.php">Paper Performance</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="glyphicon glyphicon-plus-sign icon-white"></i>&nbsp;Create</a>
                        <ul
                        class="dropdown-menu">
                            <li><a  class="live"  href="create-activity.php">Learning activity</a>
                            </li>
                            <li><a href="#">Performance review</a>
                            </li>
                            <li><a href="#">360 review</a>
                            </li>
                            <li><a href="#">Succession plan</a>
                            </li>
                            </ul>
                    </li>
                    <li class="manager-only hide">
                        <a target="_black" href="map"><i class="fa fa-lg fa-globe"></i> Map  <span class="new">new</span></a>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#myModal" role="link" data-toggle="modal" id="addJournal"><i class="glyphicon glyphicon-edit icon-white"></i> journal</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle head-button-link"><span class="notice-new">3</span><i class="fa fa-bell"></i></a> 
                            <?php include '_notification.html' ?>
                        </li>
                        <li class="dropdown loginAs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><img src="img/emp/emp.jpg" class="img-responsive" /> Daniel <b class="caret"></b></a>
                            <ul
                            class="dropdown-menu">
                                <li><a href="#">Profile</a>
                                </li>
                                <li><a href="#">Journal</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a>
                                </li>
                            </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li id="user-setting" class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#_"><i class="fa fa-cog"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                         <li>User Type :</li>
                         <li class="manager"><a data-attr="manager" href="#"> Manager</a> </li>
                         <li class="employee"><a data-attr="employee" href="#"> Employee</a> </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </div>
</div>
</header>