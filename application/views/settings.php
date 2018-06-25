<!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row profile-page">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    
                    
                    <div class="row">
                        <div class="col-md-3">
                          <h4 class="card-title">Company Info: </h4>
                            <p>
                              <?php if(isset($_SESSION['success'])){?>
                                    <div class="alert alert-success">
                                        <?php echo $_SESSION['success'];?>
                                    </div>
                              <?php }?>
                            </p>
                        </div>
                        <div class="col-md-2">
                            
                        <!--Modal Company Info Starts Here-->
                        
                            <div class="col-md-4 grid-margin stretch-card">
                                  <div class="modal fade" id="company-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 id="exampleModalLabel-4">Edit Company Information</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo base_url();?>settings_contra/company_edit" method="POST">
                                            <div class="form-group">
                                              <label for="companyname" class="col-form-label">Company name: </label>
                                              <input name="companyname" type="text" class="form-control" id="companyname" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="streetaddress" class="col-form-label">Street Address: </label>
                                              <input name="streetaddress" type="text" class="form-control" id="streetaddress" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="buildingaddress" class="col-form-label">Building: </label>
                                              <input name="buildingaddress" type="text" class="form-control" id="buildingaddress" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="unit" class="col-form-label">Unit: </label>
                                              <input name="unit" type="text" class="form-control" id="unit" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="country" class="col-form-label">Country: </label>
                                              <input name="country" type="text" class="form-control" id="country" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="postalcode" class="col-form-label">Postal Code: </label>
                                              <input name="postalcode" type="text" class="form-control" id="postalcode" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="companyemail" class="col-form-label">Email: </label>
                                              <input name="companyemail" type="text" class="form-control" id="companyemail" required="">
                                            </div>
                                            <div class="form-group">
                                              <label for="website" class="col-form-label">Website: </label>
                                              <input name="website" type="text" class="form-control" id="website" required="">
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <a href="#"><i class="ti-pencil-alt" data-toggle="modal" data-target="#company-info" 
                                                 data-company="<?php echo $general->companyname;?>" 
                                                 data-street="<?php echo $general->streetaddress;?>" 
                                                 data-buildingaddress="<?php echo $general->buildingaddress;?>" 
                                                 data-unit="<?php echo $general->unit;?>" 
                                                 data-country="<?php echo $general->country;?>" 
                                                 data-postalcode="<?php echo $general->postalcode;?>" 
                                                 data-compemail="<?php echo $general->companyemail;?>" 
                                                 data-website="<?php echo $general->website;?>"></i></a>        
                               </div>
                            </div>
                          </div>
                    
                        <!--Modal Company Info Ends Here-->
                        
                    <!--Company Details Start Here-->  
                    
                        <div class="row">
                            <div class="col-md-4">
                                <address>
                                    <p class="font-weight-bold"><?php echo $general->companyname;?></p>
                                    <p><?php echo $general->streetaddress."&nbsp;,".$general->buildingaddress;?></p>
                                    <p><?php echo "Unit #".$general->unit;?></p>
                                    <p><?php echo $general->country."&nbsp;".$general->postalcode;?></p>
                                </address>
                            </div>
                            <div class="col-md-4">
                                <address class="text-primary">
                                    <p class="font-weight-bold">E-mail</p>
                                    <p class="mb-2"><?php echo $general->companyemail;?></p>
                                    <p class="font-weight-bold">Website</p>
                                    <p><?php echo $general->website?></p>
                                </address>
                            </div> 
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Upload Company Logo</h4>
                                        <input type="file" class="dropify" data-default-file="<?php echo base_url();?>assets/images/file-icons/64/001-interface-1.png" />
                                    </div>
                                </div>
                            </div>
                        </div>   
                  <!--Company Details End Here-->
                  
                  <div class="profile-body">
                    <ul class="nav tab-switch" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Cart</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Q-Management</a>
                      </li>
                    </ul>
                      
                    <div class="row"> <!--Start of Row-->
                        
                      <div class="col-md-9"> <!--Start of Form Row-->
                        <div class="tab-content tab-body" id="profile-log-switch">
                            
                          <!--Start of Tab Section-->
                          <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                            
                          <!--Form Content Goes Here-->
                              <div class="col-12 grid-margin">
                                 <form class="form-sample" action="" method="POST">
                                     
                                    <div class="row">
                                        <div class="col-md-11">
                                            <p class="card-description">
                                                <strong>
                                                General info
                                                </strong>
                                            </p>             
                                        </div>
                                        <div class="col-md-1">
                                            
                                            
                                            <!--Modal General Info Starts Here-->
                        
                                            <div class="col-md-4 grid-margin stretch-card">
                                                  <div class="modal fade" id="general-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 id="exampleModalLabel-4">Edit Cart Information</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form action="" method="POST">
                                                            <div class="form-group">
                                                              <label for="apptitle" class="col-form-label">App title: </label>
                                                              <input name="apptitle" type="text" class="form-control" id="apptitle">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="receipt_start" class="col-form-label">Receipt Starting No: </label>
                                                              <input name="receipt_start" type="text" class="form-control" id="receipt_start">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="language" class="col-form-label">Default Language: </label>
                                                              <select name="language" type="text" id="language" class="form-control">
                                                                <option>English</option>
                                                                <option>Chinese</option>
                                                                <option>Malay</option>
                                                                <option>Tamil</option>
                                                              </select>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="currency_symbol" class="col-form-label">Currency Symbol: </label>
                                                              <input name="currency_symbol" type="text" class="form-control" id="currency_symbol">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="streetaddress" class="col-form-label">Street Address: </label>
                                                              <input name="streetaddress" type="text" class="form-control" id="streetaddress">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="buildingaddress" class="col-form-label">Building: </label>
                                                              <input name="buildingaddress" type="text" class="form-control" id="buildingaddress">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="unit" class="col-form-label">Unit: </label>
                                                              <input name="unit" type="text" class="form-control" id="unit">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="town" class="col-form-label">Town: </label>
                                                              <input name="town" type="text" class="form-control" id="town">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="country" class="col-form-label">Country: </label>
                                                              <input name="country" type="text" class="form-control" id="country">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="postalcode" class="col-form-label">Postalcode: </label>
                                                              <input name="postalcode" type="text" class="form-control" id="postalcode">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="header_message" class="col-form-label">Header Message: </label>
                                                              <input name="header_message" type="text" class="form-control" id="header_message">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="footer_message" class="col-form-label">Footer Message: </label>
                                                              <input name="footer_message" type="text" class="form-control" id="footer_message">
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" name="submit" class="btn btn-success">Save Changes</button>
                                                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <a href="#"><i class="ti-pencil-alt" data-toggle="modal" data-target="#general-info" 
                                                                 data-apptitle="<?php echo $cartoptions->apptitle;?>" 
                                                                 data-receipt_start="<?php echo $cartoptions->receipt_start;?>" 
                                                                 data-currency_symbol="<?php echo $cartoptions->currency_symbol;?>"
                                                                 data-town="<?php echo $cartoptions->town;?>" 
                                                                 data-street="<?php echo $cartoptions->streetaddress;?>" 
                                                                 data-buildingaddress="<?php echo $cartoptions->building;?>" 
                                                                 data-unit="<?php echo $cartoptions->unit;?>" 
                                                                 data-country="<?php echo $cartoptions->country;?>" 
                                                                 data-postalcode="<?php echo $cartoptions->postalcode;?>" 
                                                                 data-header_message="<?php echo $cartoptions->header_message;?>" 
                                                                 data-footer_message="<?php echo $cartoptions->footer_message;?>"></i></a>        
                                            </div> 
                                            <!--Modal General Info Ends Here-->
                                        </div>
                                    </div>                
                                        
                                     
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                           <label style="font-size:0.9rem;" class="col-sm-12 col-form-label">
                                               <strong>App title: </strong>
                                                   <?php echo $cartoptions->apptitle;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label">
                                             <strong>Receipt Starting No: </strong>
                                                 <?php echo $cartoptions->receipt_start;?></label>
                                     </div>
                                   </div>
                                  </div>     
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label">
                                             <strong>Default Language: </strong>
                                                 <?php echo $cartoptions->language;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label">
                                             <strong>Currency Symbol: </strong>
                                                 <?php echo $cartoptions->currency_symbol;?></label>
                                       </div>
                                     </div>
                                   </div>
                                     <p class="card-description">
                                         <strong>
                                             Address On Receipt
                                         </strong>
                                     </p>
                                     </strong>
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Building: </strong>
                                             <?php echo $cartoptions->building;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Unit: </strong>
                                             <?php echo $cartoptions->unit;?></label>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Street: </strong>
                                             <?php echo $cartoptions->streetaddress;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Postcode: </strong>
                                             <?php echo $cartoptions->postalcode;?></label>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Town: </strong>
                                             <?php echo $cartoptions->town;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Country: </strong>
                                             <?php echo $cartoptions->country;?></label>
                                       </div>
                                     </div>
                                   </div>
				<div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Header Greetings: </strong>
                                             <?php echo $cartoptions->header_message;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Footer Message: </strong>
                                             <?php echo $cartoptions->footer_message;?></label>
                                       </div>
                                     </div>
                                   </div>
                             </div>
                          </div> 
                        <!--End of Tab Section 1-->
                           
                           
                        <!--Start of Tab Section 2--> 
                          <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                            
                            
                            <!--Q-Section Starts Here-->
                            
                            <div class="col-12 grid-margin">
                                <div class="row">
                                        <div class="col-md-11">
                                            <p class="card-description">
                                                <strong>
                                                    Set Missed & Overtime
                                                </strong>
                                            </p>            
                                        </div>
                                        <div class="col-md-1">
                                            <!--Modal General Info Starts Here-->
                        
                                            <div class="col-md-4 grid-margin stretch-card">
                                                  <div class="modal fade" id="qms-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 id="exampleModalLabel-4">Edit Cart Information</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form action="" method="POST">
                                                            <div class="form-group">
                                                              <label for="missed_timeout" class="col-form-label">Missed Timeout: </label>
                                                              <input name="missed_timeout" type="text" class="form-control" id="missed_timeout">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="overtime_timeout" class="col-form-label">Overtime Timeout: </label>
                                                              <input name="overtime_timeout" type="text" class="form-control" id="overtime_timeout">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="appointment_timeout" class="col-form-label">Appointment Timeout: </label>
                                                              <input name="appointment_timeout" type="text" class="form-control" id="appointment_timeout">
                                                            </div>
                                                            <!--<div class="form-group">
                                                              <label for="footer_message" class="col-form-label">Footer Message: </label>
                                                              <input name="footer_message" type="text" class="form-control" id="footer_message">
                                                            </div>-->
                                                            <div class="modal-footer">
                                                              <button type="button" name="submit" class="btn btn-success">Save Changes</button>
                                                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <a href="#"><i class="ti-pencil-alt" data-toggle="modal" data-target="#qms-info" 
                                                                 data-missed_timeout="<?php echo $qmsoptions->settings_missed;?>" 
                                                                 data-overtime_timeout="<?php echo $qmsoptions->settings_overtime;?>" 
                                                                 data-appointment_timeout="<?php echo $qmsoptions->settings_appoint_timeout;?>"></i></a>        
                                            </div> 
                                            <!--Modal General Info Ends Here-->        
                                        </div>
                                    </div>
                                     
                                     
                                   <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Missed (In Seconds): </strong>
                                             <?php echo $qmsoptions->settings_missed;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Overtime (In Seconds): </strong>
                                             <?php echo $qmsoptions->settings_overtime;?></label>
                                       </div>
                                     </div>
                                     <div class="col-md-6">
                                       <div class="form-group row">
                                         <label style="font-size:0.9rem;" class="col-sm-12 col-form-label"><strong>Appointment Timeout (In Minutes): </strong>
                                             <?php echo $qmsoptions->settings_appoint_timeout;?></label>
                                       </div>
                                     </div>  
                                   </div>
                                </form>
                             </div>

                            <!--Q-Section Starts Here-->
                            
                          </div>
                         </div><!--End of Tab Section 2-->
                       </div>
                      
                    <!--Start of Staffs Section-->    
                      <div class="col-md-3">
                        <h5 class="my-4">Pending Approval</h5>
                        <div class="new-accounts">
                          <ul class="chats">
                            <li class="chat-persons">
                              <a href="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Marina Michel</p>
                                    <p class="u-designation">Business Development</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Reject</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Approve</span>
                                    </span>
                                  </div>
                                </a>
                            </li>
                            <li class="chat-persons">
                              <a href="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Stella Johnson</p>
                                    <p class="u-designation">SEO Expert</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Reject</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Approve</span>
                                    </span>
                                  </div>
                                </a>
                            </li>
                            <li class="chat-persons">
                              <a href="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Peter Joo</p>
                                    <p class="u-designation">UI/UX designer</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Reject</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Approve</span>
                                    </span>
                                  </div>
                                </a>
                            </li>
                          </ul>
                        </div>
                      </div><!--End of Who to follow-->
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->