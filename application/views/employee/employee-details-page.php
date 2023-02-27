
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> Dashboard</a> / </span> Profile Details</h4>
              <div class="row">
                <div class="col-md-12">
                  <?php if($uploaded = $this->session->flashdata('self_emp_update_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('self_emp_not_updated')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card mb-2">
                    <div class="card-body">
                        <span class="emp_edit_btn">
                            <a data-bs-toggle="modal" data-bs-target="<?php echo '#empEdit'.$empdata->main_employee_id; ?>" href="javascript:void(0);">
                              <i class='bx bx-edit'></i>
                            </a>
                        </span>
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded img-d-emp"
                          /> 
                        <div class="emp_info">
                            <div>
                                <h3><?php echo $empdata->employee_first_name; ?> <?php echo $empdata->employee_last_name; ?></h3>
                            </div>
                            <div id="emp-d-dd">
                                <span><i class='bx bxs-briefcase-alt-2'></i> <?php echo $empdata->department_name; ?></span> / <span><?php echo $empdata->employee_designation; ?></span></span>
                            </div>
                            
                            <?php if($empinfo): ?>
                                <div class="emp-d-avg-btn">
                                  <?php $main_avg = $empinfo->main_emp_avg; ?>
                                  <?php if($main_avg <= 1): ?>
                                    <span class="badge bg-label-danger me-1">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                    <span class="badge bg-label-danger me-1">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                    <span class="badge bg-label-warning me-1">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                    <span class="badge bg-label-success me-1">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg <= 5): ?>
                                    <span class="badge bg-label-success me-1">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php else: ?>
                                    <span class="badge bg-label-success me-1">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php endif; ?>

                                  <span class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                      <div class="dropdown-menu" style="">
                                          <a class="dropdown-item" href="<?php echo base_url('Admin/printEmpDetails/'.$empdata->main_employee_id); ?>"><i class='bx bx-printer'></i> Print</a>
                                          <?php if($signature_img!==0): ?>
                                            <div class="signature_img_sec">
                                                <!-- <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="<?php //echo '#updateSignature'.$empdata->main_employee_id; ?>" href="javascript:void(0);"><i class="bx bx-edit"></i> Edit Signature</a> -->
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="<?php echo '#deleteSignature'.$empdata->main_employee_id; ?>" href="javascript:void(0);"><i class='bx bxs-trash' ></i> Delete Signature</a>
                                            </div>
                                          <?php else: ?>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="<?php echo '#addSignature'.$empdata->main_employee_id; ?>" href="javascript:void(0);"><i class='bx bx-pencil'></i> Add Signature</a>
                                          <?php endif; ?>
                                      </div>
                                  </span>
                                </div>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label"><b>E-mail:</b> </label>
                            <span><?php echo $empdata->employee_email; ?></span>
                           
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label"><b>Phone Number:</b> </label>
                            <span><?php echo $empdata->employee_number; ?></span>                          
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"><b>Address:</b> </label>
                            <span><?php echo $empdata->employee_address; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label"><b>City:</b></label>
                            <span><?php echo $empdata->employee_city; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country"><b>Country:</b></label>
                            <span><?php echo $empdata->employee_country; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label"><b>Date Of Joining:</b> </label>
                            <span><?php echo $empdata->employee_doj; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label"><b>Date Of Termination:</b></label>
                            <span><?php echo $empdata->employee_dot; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label"><b>Status:</b> </label>
                          
                                <?php if(($empdata->employee_status)=='1'): ?>
                                    <span class="badge bg-label-success me-1">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-label-danger">Deactivate</span>
                                <?php endif; ?>  
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
</div>


<!-- Edit Employee Details -->

<form action="<?php echo base_url('Employee/UpdateEmpData'); ?>" method="POST" enctype="multipart/form-data">
<div class="card-body">
    <div class="row gy-3">
        <div class="col-lg-4 col-md-6">
            <div class="modal fade" id="<?php echo 'empEdit'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Update Profile Information?</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                    <div class="card mb-2">
                    <input type="hidden" name="main_employee_id" value="<?php echo $empdata->main_employee_id; ?>">
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="holder">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded"
                            height="100"
                            width="100"
                            id="imgPreview"
                            value="<?php echo base_url($empdata->employee_image); ?>"
                          /> 
                        </div>
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                              name="employee_image"
                            />
                            <input type="hidden" name="old_emp_img" value="<?php echo ($empdata->employee_image); ?>">
                          </label>
                          <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Image Resolution: 225px * 225px. Max size of 800K </p>
                        </div>
                      </div>
                    </div>

                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="employee_first_name"
                              placeholder="John"
                              value="<?php echo $empdata->employee_first_name; ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="employee_last_name" id="lastName"  value="<?php echo $empdata->employee_last_name; ?>" placeholder="Doe" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail <span>*</span></label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="employee_email"
                              placeholder="john.doe@example.com"
                              value="<?php echo $empdata->employee_email; ?>"
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Phone Number</label>
                            <div class="form-group md-group show-label">
                              <input class="form-control" name="employee_number" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="<?php echo $empdata->employee_number; ?>" required data-parsley-trigger="keyup">
                            </div>
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="employee_address" value="<?php echo $empdata->employee_address; ?>" placeholder="Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">City</label>
                            <input class="form-control" type="text" id="city" name="employee_city" value="<?php echo $empdata->employee_city; ?>" placeholder="City" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <div class="form-group md-group show-label">
                            <label class="form-label" for="country">Country</label>
                                <select name="employee_country" id="address-country"  class="select2 form-select form-control">
                                  <option value="" selected><?php echo $empdata->employee_country; ?></option>
                                </select>
                              </div>
                              <input type="hidden" name="old_country" value="<?php echo $empdata->employee_country; ?>">
                          </div>
                          <input type="hidden" name="old_department" value="<?php echo $empdata->employee_department; ?>">
                          <input type="hidden" name="old_designation" value="<?php echo $empdata->employee_designation; ?>">
                        </div>
                    </div>
                  </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</form>

<!-- End Edit Employee Details -->

<!-- Edit Employee Details -->

<form action="<?php echo base_url('Admin/'); ?>" method="POST" enctype="multipart/form-data">
  <div class="card-body">
      <div class="row gy-3">
          <div class="col-lg-4 col-md-6">
              <div class="modal fade" id="<?php echo 'empScoreEdit'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Are you sure you want to update the score?</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <div class="modal-footer footer-flex">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                          </button>
                          <a href="<?php echo base_url('Admin/showEmployeeScores/'.$empinfo->main_employee_id); ?>"><button type="button" class="btn btn-info">Go To Edit</button></a>
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</form>

<!-- Start Add Signature -->

<form action="<?php echo base_url('Admin/uploadManagerSignature'); ?>" method="POST" enctype="multipart/form-data">
  <div class="card-body">
      <div class="row gy-3">
          <div class="col-lg-4 col-md-6">
              <div class="modal fade" id="<?php echo 'addSignature'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Please upload you signature!!</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <div class="card-body">
                        <div class="align-items-start align-items-sm-center gap-2">
                          <input type="hidden" name="employee_id" value="<?php echo $empdata->main_employee_id; ?>">
                          <div>
                              <input class="form-control" type="file" name="p_signature_img" id="formFile" required data-parsley-trigger="keyup">
                          </div>
                          <br>
                          <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Image Resolution: 225px * 225px. Max size of 800K </p>
                        </div>
                      </div>
                      <div class="modal-footer footer-flex">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                          </button>
                          <button type="submit" class="btn btn-success">Upload Signature</button>
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</form>

<!-- End Signature -->

<!-- Start Edit Signature -->

<form action="<?php echo base_url('Admin/updateManagerSignature'); ?>" method="POST" enctype="multipart/form-data">
  <div class="card-body">
      <div class="row gy-3">
          <div class="col-lg-4 col-md-6">
              <div class="modal fade" id="<?php echo 'updateSignature'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Update you signature!!</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <div class="card-body">
                        <div class="align-items-start align-items-sm-center gap-2">
                          <input type="hidden" name="employee_id" value="<?php echo $empdata->main_employee_id; ?>">
                          <div>
                              <input class="form-control" type="file" name="p_signature_img" required>
                          </div>
                          <br>
                          <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Image Resolution: 225px * 225px. Max size of 800K </p>
                        </div>
                      </div>
                      <div class="modal-footer footer-flex">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                          </button>
                          <button type="submit" class="btn btn-success">Update Signature</button>
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</form>

<!-- End Edit Signature -->

<!-- Start Delete Signature -->

<form action="<?php echo base_url('Admin/deleteManagerSignature'); ?>" method="POST" enctype="multipart/form-data">
  <div class="card-body">
      <div class="row gy-3">
          <div class="col-lg-4 col-md-6">
              <div class="modal fade" id="<?php echo 'deleteSignature'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Delete Signature?</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <input type="hidden" name="employee_id" value="<?php echo $empdata->main_employee_id; ?>">
                      <div class="modal-footer footer-flex">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                          </button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</form>

<!-- End Delete Signature -->