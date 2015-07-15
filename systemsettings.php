<?php include 'base.php' ?>
<?php startblock('page') ?>
<style>
#featureGrid_table tr td:first-child, #featureGrid_table tr td:last-child{
    display: none;
}
#systemsettings .label{   
    border-radius: 0;
    color: #ffffff;
    float: right;
    font-size: 12px;
    margin: 3px;
    padding: 5px 8px;
    font-weight: normal;
}
#systemsettings  .table {
    overflow: hidden;
}
#systemsettings table label{ display: inline;}
#systemsettings h5{
    color:#0093ca
}

#systemsettings .edit-mode, #systemsettings .editable:hover{
    background-color: #ffff99;; 
    border: 1px dotted #999;
}
#systemsettings .table thead th {
    vertical-align: middle;
}

#systemsettings #autosuggestion{
    box-shadow: 1px 3px 5px #898989;
}

.chosen-container{width:520px !important;}
#systemsettings .chosen-container-multi .chosen-choices li.search-choice {
    background-clip: padding-box;
    background-color: @blue;
    background-image: none;
    border: 0 none;
    border-radius: 0;
    box-shadow: none;
    color: #fff;
    cursor: default;
    line-height: 13px;
    margin: 3px 0 3px 5px;
    padding: 6px 20px 6px 8px;
    position: relative;
}

#systemsettings .chosen-container .chosen-results li.highlighted {
    background-color: #aaa;
    background-image: none;
    color: #fff;
}
</style>    
<div id="systemsettings">
            <div class="row">
                <!-- left==================================================-->

                  <div class="col-md-2">

                   

                  </div>

                  <!--  right 

                     ================================================== -->
                <div class="col-md-8">
                    <!-- conents==================================================-->

                     <div style="margin: 25px 0;" class="row">

                        <div id="chosenForm" style="width: 520px; position: relative; margin: 0px auto;">

                          <select class="form-control chosen-select" name="tags" multiple="multiple" data-placeholder="Search for features">

                                  <option value="blue"><i class="fa fa-tag"></i> backgroundchecking</option>

                                  <option value="green"><i class="fa fa-tag"></i> base</option>

                                  <option value="orange"><i class="fa fa-tag"></i> bookings</option>

                                  <option value="red"><i class="fa fa-tag"></i> bulkactivities</option>

                           </select>

                           <input id="searchbox1" type="text" style="display: none; width: 500px; padding-top: 8px; padding-bottom: 8px;" placeholder="Search for system settings, eg backgroundchecking" />

                           <div id="autosuggestion" style="text-align: left;">

                           </div>

                        <!-- / autosuggestion --></div>
            </div>
            <div class="tabbable" id="tabs-458048">
                <ul class="nav nav-tabs">
                    <li class="active"> <a href="#panel-420130" data-toggle="tab"><i class="fa fa-cogs"></i> Feature settings</a>
                    </li>
                    <li> <a href="#panel-455050" data-toggle="tab"><i class="fa fa-language"></i> Language items (12)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-420130">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="20%">Tags</th>
                                    <th width="60%">Features</th>
                                    <th width="20%">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Background checking</h5>
                                        <p>Activates the background checking module</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Remove background check assessments</h5>
                                        <p>Enables clients to set a permission around whether a provider can delete
                                            background checks or not</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-off gray fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                        <span
                                        class="label label-default">conmunications</span>
                                    </td>
                                    <td>
                                         <h5>View background check results</h5>
                                        <p>Activates the link to view a background check report via the applicant
                                            card</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Cost centre</h5>
                                        <p>Turns the cost centre field on when performing a background check</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Additional report recipients</h5>
                                        <p>Activates the 'additional report recipient' field when you move an applciant's
                                            status into 'background checking' ... <i class="fa fa-info-circle" title="Activates the 'additional report recipient' field when you move an applciant's status into 'background checking'. From this page, you can select the checks to be complete and add an additional recipient to have access to the report summary via the applicant card. Please note, this user does not receive any background checking emails - it simply gives them access to the report on the app card."></i>
                                        </p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Restrict background check results to requester</h5>
                                        <p>Activate to only allow the person who initiated the background check to
                                            view the result details of a background check.</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Link expiry days</h5>
                                        <p>When a background check is requested we are provided with a link for an
                                            applicant to complete a check. The value of this feature is the number
                                            of days this link is available to use</p>
                                    </td>
                                    <td>
                                        <input type="text" value="7" size="1" />
                                        <label label-default="label-default" for="ctl00_Main_lFMID_1194On">Days</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                        <span
                                        class="label label-default">conmunications</span>
                                    </td>
                                    <td>
                                         <h5>Invitations</h5>
                                        <p>Turns on sending of invitations for background checking module. This allows
                                            users to send a link in the emails as a merge field.</p>
                                    </td>
                                    <td> <i class="fa fa-toggle-on green fa-2x"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> mandatory </span>
                                    </td>
                                    <td>
                                         <h5>Report link expiry days</h5>
                                        <p>Hides the link to the background check report stored against the applicant
                                            card after the number of days set in this feature has expired.</p>
                                    </td>
                                    <td>
                                        <input type="text" value="45" />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                         <h5><a href="ss-subpage.html">Background check packages</a></h5> 
                                    </td>
                                    <td> <a href="ss-subpage.html"><h4>4</h4></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                         <h5><a href="ss-subpage.html">Applicant strengths</a></h5> 
                                    </td>
                                    <td> <a href="ss-subpage.html"><h4>4</h4></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ***************************************************************************************************************************************-
                    -->
                    <div class="tab-pane" id="panel-455050">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tags</th>
                                    <th>Key</th>
                                    <th>Default</th>
                                    <th>English Override</th>
                                    <th>
                                        <select id="lang">
                                            <option selected="selected">Chinese</option>
                                            <option>Thai</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
                                    </td>
                                    <td>BACKGROUND_CHECK_COMPLETE_CONFIRMATION</td>
                                    <td>Thank you. You have successfully completed the online probity form. You
                                        will be contacted shortly regarding your application.</td>
                                    <td class="editable"
                                    contenteditable="true">Thank you. You have successfully completed the online probity form. We
                                        will send you an email shortly.</td>
                                    <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
 <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
                                    </td>
                                    <td>BACKGROUND_CHECK_INVITE_TEXT</td>
                                    <td>Congratulations! You have been invited to undertake a Probity check. Click
                                        Begin to launch the online form. Once you have completed this form, you
                                        will be asked to print, sign and fax the form to FirstAdvantage.</td>
                                    <td
                                    class="editable" contenteditable="true"></td>
                                        <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
 <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                                        </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
                                    </td>
                                    <td>BACKGROUND_CHECK_LINK</td>
                                    <td>Background check</td>
                                    <td class="editable" contenteditable="true"></td>
                                    <td class="editable" contenteditable="true"> <span class="zh">并为您的网上</span>
 <span class="th hide">ารโดยผู้ให้บริ</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
                                    </td>
                                    <td>BACKGROUNDCHECK_NOT_AVAILABLE</td>
                                    <td>The background check request for this applicant has failed to be processed.
                                        We were unable to contact the background check provider. This message will
                                        be logged as a note in the applicant history and the background check request
                                        record has been deleted. Please contact PageUp People Support</td>
                                    <td class="editable"
                                    contenteditable="true"></td>
                                    <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
 <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> ApplicationStatusType </span> 
                                    </td>
                                    <td>STATUS_BACKGROUNDCHECK</td>
                                    <td>Background check</td>
                                    <td class="editable" contenteditable="true"></td>
                                    <td class="editable" contenteditable="true"> <span class="zh">目前正在处理</span>
 <span class="th hide">กำลังดำเนินการ</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="label label-warning">backgroundchecking</span>
 <span class="label label-default"> Contingent </span> 
                                    </td>
                                    <td>EXISTING_BACKGROUND_CHECKS</td>
                                    <td>Existing Background Checks</td>
                                    <td class="editable" contenteditable="true"></td>
                                    <td class="editable" contenteditable="true"> <span class="zh">的网上廉洁</span>
 <span class="th hide">ห้บริการบุ</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination" style="margin: 25px 0; text-align: center;">
                            <ul>
                                <li> <a href="#">Prev</a>
                                </li>
                                <li> <a href="#">1</a>
                                </li>
                                <li> <a href="#">2</a>
                                </li>
                                <li> <a href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***************************************************************************************************************************************-
            -->
        </div>
    </div>
</div>
<?php endblock() ?>
