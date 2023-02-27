<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-6 mb-4 order-0">
                
                <?php if(($check)==1): ?>
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                            <div class="card-body">
                                <h6 class="card-title text-success">Hi <?php echo $empinfo->employee_first_name; ?>! 🎉</h6>
                                <h2 class="card-title text-primary welcome-bimcap-head">Welcome to BIMCAP Employee Evalution Portal</h2>
                                <p class="mb-4">
                                   Did you see your performance score?
                                </p>
                                <a href="<?php echo base_url('employee/show-employees-performance'); ?>" class="btn btn-sm btn-outline-primary">See Performance</a>
                            </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="<?php echo base_url('assets_admin/img/illustrations/man-with-laptop-light.png'); ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                            </div>
                        </div>
                    </div>

                    <?php if(($check2->communication_emp_avg > 1) && ($check2->productivity_emp_avg > 1) && ($check2->quality_emp_avg > 1) && ($check2->knowledge_emp_avg > 1) && ($check2->software_emp_avg > 1) && ($check2->dependability_emp_avg > 1) && ($check2->time_management_emp_avg > 1) && ($check2->p_adaptability_emp_avg > 1) && ($check2->p_creativity_problem_solving_emp_avg > 1) && ($check2->p_initiative_proactive_emp_avg > 1)): ?>
                    <?php else: ?>
                        <div class="py-3 mb-1">
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <strong>Note:</strong> Your performance score is incomplete; please finish the process.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    

                    <?php if(($check2->communication_emp_avg > 1) && ($check2->productivity_emp_avg > 1) && ($check2->quality_emp_avg > 1) && ($check2->knowledge_emp_avg > 1) && ($check2->software_emp_avg > 1) && ($check2->dependability_emp_avg > 1) && ($check2->time_management_emp_avg > 1) && ($check2->p_adaptability_emp_avg > 1) && ($check2->p_creativity_problem_solving_emp_avg > 1) && ($check2->p_initiative_proactive_emp_avg > 1)): ?>
                            <?php if($check2->submit_employee_status == 1): ?>
                            <?php if($uploaded = $this->session->flashdata('emp_submit_score_success')): ?>
                              <div class="py-3 mb-1">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong><?php echo $uploaded; ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="py-3 mb-1">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong>Note:</strong> Is your performance scoring task done? If yes, then update it. &nbsp;&nbsp;<a href="<?php echo base_url('employee/check-update'); ?>"><button type="button" class="btn btn-xs btn-success">update now</button></a>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if(($check2->submit_employee_status) == 1 && ($check2->submit_manager_status) == 2 ): ?>
                        <br>
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-9">
                                <div class="card-body">
                                    <h6 class="card-title text-primary"><strong>Your performance evaluate by:</strong> <a href="#"><?php echo $check2->manager_name; ?></a></h6>
                                    <p class="mb-4">
                                    Please consider your scoring.
                                    </p>
                                    <a href="#" class="btn btn-sm btn-outline-success">Accept</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Reject</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Request for revaluation</a>
                                </div>
                                </div>
                                <div class="col-sm-3 text-center text-sm-left">
                               
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>


                <?php else: ?>
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                            <div class="card-body">
                                <h6 class="card-title text-success">Congratulations <?php echo $empinfo->employee_first_name; ?>! 🎉</h6>
                                <h2 class="card-title text-primary welcome-bimcap-head">Welcome to BIMCAP Employee Evalution Portal</h2>
                                <p class="mb-4">
                                    Would you like to fill in your performance score?
                                </p>

                                <a href="<?php echo base_url('employee/set-employees-performance'); ?>" class="btn btn-sm btn-outline-primary">Add Performance</a>
                            </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="<?php echo base_url('assets_admin/img/illustrations/man-with-laptop-light.png'); ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                </div>
                <div class="col-lg-6 col-md-4 order-1">
                  <div class="row">
                  <?php if(($check)==1): ?>
                    <div class="col-lg-12 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                                <?php $main_avg = $check2->main_emp_avg; ?>
                                  <?php if($main_avg <= 1): ?>
                                    <div class="alert alert-danger" role="alert"><strong>Your Performance Average:</strong> Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                    <div class="alert alert-danger" role="alert"><strong>Your Performance Average:</strong> Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                    <div class="alert alert-warning" role="alert"><strong>Your Performance Average:</strong> Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                    <div class="alert alert-success" role="alert"><strong>Your Performance Average:</strong> Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php elseif($main_avg <= 5): ?>
                                    <div class="alert alert-success" role="alert"><strong>Your Performance Average:</strong> Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php else: ?>
                                    <div class="alert alert-success" role="alert"><strong>Your Performance Average:</strong> Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></div>
                                  <?php endif; ?>
                            <div id="piechart_3d" style="width:100%; height: 500px;"></div>
                        </div>
                      </div>
                    </div>
                    <?php else: ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>