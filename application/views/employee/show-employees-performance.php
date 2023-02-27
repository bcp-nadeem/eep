
<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light"><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> Dashboard</a> / Performance /</span> Performance Details</h4>
              <div class="row">
                <div class="col-md-12">

                <?php if($uploaded = $this->session->flashdata('performance_upload_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('performance_not_uploaded')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                <?php if($uploaded = $this->session->flashdata('emp_update_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_not_updated')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                  
                    <?php if($uploaded = $this->session->flashdata('emp_update_score_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_update_score_not')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                   
                      <?php if($uploaded = $this->session->flashdata('signature_upload_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('signature_not_uploaded')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                    
                      <?php if($uploaded = $this->session->flashdata('signature_delete_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('signature_not_uploaded')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                </div>
              </div>
          </div>

          <?php if($empinfo): ?>
                <div class="container-xxl flex-grow-1">
                    <div class="row">
                        <div class="col-xl-12">

                          <?php if($check2->submit_employee_status == 1): ?>
                            <h6 class="text-muted">Your Performance</h6>
                          <?php else: ?>
                            <h6 class="text-muted">
                              Update Performance
                              <a class="" data-bs-toggle="modal" data-bs-target="<?php echo '#editScoreEmp'.$empdata->main_employee_id; ?>" href="javascript:void(0);">
                                  <i class='bx bx-edit me-1' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Click and edit</span>"></i>
                              </a>
                            </h6>
                          <?php endif; ?>

                            
                        
                              <div class="nav-align-top mb-2">
                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="true">
                                      Communication
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-productivity" aria-controls="navs-justified-productivity" aria-selected="false">
                                      Productivity
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality" aria-controls="navs-justified-quality" aria-selected="false">
                                      Quality
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge" aria-controls="navs-justified-knowledge" aria-selected="false">
                                      Knowledge of Job
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-software" aria-controls="navs-justified-software" aria-selected="false">
                                      Knowledge of Software

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-dependability" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                      Reliability & Dependability

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                      Time Management

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                      Adaptability

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-initiative-proactive" aria-controls="navs-justified-initiative-proactive" aria-selected="false">

                                    Initiative & Proactive

                                    </button>
                                    </li>


                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-creativity-problem-solving" aria-controls="navs-justified-creativity-problem-solving" aria-selected="false">

                                    Creativity & Problem Solving

                                    </button>
                                    </li>

                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Proactively asking clarification questions</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_proactively_asking==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Responds to messages/calls within a given time frame</p>
                                                    </td>
                                                    <td>
                                                      <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_responds_to_messages==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Proactively informing about delays or issues</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_proactively_informing==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>4. Level of English in project related communication</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_level_of_english==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>5. Communicates well with the team/client</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_team_client==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>6. Informs the supervisor about leave plans</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->communication_Informs_the_supervisor==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->communication_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" cols="3" rows="3" disabled><?php echo $empinfo->communication_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-productivity" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Speed of modelling</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->productivity_speed_of_modelling==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Absence or minimum redundant work</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->productivity_absence_or_minimum==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Complies with the set timelines and deadlines</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->productivity_timelines_and_deadlines==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->productivity_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="productivity_comments" cols="3" rows="3" placeholder="Please Enter Comments" disabled><?php echo $empinfo->productivity_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-quality" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Attention to details</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->quality_attention_to_details==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Incur minimum volume of mistakes requiring correction</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->quality_mistakes_requiring_correction==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Meets the expectations for the quality of drawings and models</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->quality_meets_the_expectations==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>4. Conducts QA/QC on drawing and model outputs</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->quality_conducts_qa_qc==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>5. Follows the correct workflow set for modelling and drawings</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->quality_follows_the_correct_workflow_set==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <?php  $comm_avg= $empinfo->quality_emp_avg; ?>

                                                        <?php if($comm_avg <= 1): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                        <?php elseif($comm_avg <= 5): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                        <?php else: ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                        <?php endif; ?>
                                                          
                                                        </td>
                                                    </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->quality_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-knowledge" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Understanding of BIM project standards and portfolio</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->knowledge_standards_and_portfolio==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Understanding of BIM project requirements</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->knowledge_bim_project_requirements==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->knowledge_of_the_construction_industry==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                  <td>
                                                      <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                  </td>
                                                  <td>

                                                  <?php  $comm_avg= $empinfo->knowledge_emp_avg; ?>

                                                  <?php if($comm_avg <= 1): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg <= 5): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php else: ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php endif; ?>
                                                    
                                                  </td>
                                              </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="knowledge_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->knowledge_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="tab-pane fade" id="navs-justified-software" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Follows the correct format for Bitrix tasks and leaves</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->software_bitrix_tasks_and_leaves==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Consider the knowledge of the digital tools necessary to carry out production and communication tasks</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->software_digital_tools_production_communication==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->software_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="software_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->software_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-reliability-dependability" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Ability to handle a team</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->dependability_handle_a_team==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Ability to handle a project</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->dependability_handle_a_project==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Ability to finish the tasks with minimum supervision within the set deadlines</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->dependability_the_set_deadlines==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->dependability_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="dependability_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->dependability_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-time-management" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Follows the scheduled work shift</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->time_management_scheduled_work_shift==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Meets the required working hours</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->time_management_required_working_hours==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Uses Bitrix24 to keep internal and external deadlinesclearly with your teammates</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->time_management_deadlinesclearly_with_your_teammates==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->time_management_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->time_management_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="tab-pane fade" id="navs-justified-adaptability" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Ability to learn new project standards in a short amount of time</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->adaptability_short_amount_of_time==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Ability to adjust depending on the project needs</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->adaptability_ability_to_adjust_depending==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Ability to work on multiple projects</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->adaptability_work_on_multiple_projects==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>4. Ability to learn new disciplines, software, and adapt this knowledge to new challenges</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->adaptability_learn_new_disciplines_software==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                  <td>
                                                      <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                  </td>
                                                  <td>

                                                  <?php  $comm_avg= $empinfo->p_adaptability_emp_avg; ?>

                                                  <?php if($comm_avg <= 1): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg <= 5): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php else: ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php endif; ?>
                                                    
                                                  </td>
                                              </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="adaptability_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->adaptability_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="tab-pane fade" id="navs-justified-initiative-proactive" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Ability to learn new project standards in a short amount of time</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->initiative_proactive_ability_to_learn_new_project==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Ability to adjust depending on the project needs</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->initiative_proactive_adjust_depending_on_the_project==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Ability to work on multiple projects</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->initiative_proactive_work_on_multiple_projects==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>4. Ability to learn new disciplines, software, and adapt this knowledge to new challenges</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->initiative_proactive_learn_new_disciplines_software==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                  <td>
                                                      <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                  </td>
                                                  <td>

                                                  <?php  $comm_avg= $empinfo->p_initiative_proactive_emp_avg; ?>

                                                  <?php if($comm_avg <= 1): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                  <?php elseif($comm_avg <= 5): ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php else: ?>
                                                    <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                  <?php endif; ?>
                                                    
                                                  </td>
                                              </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="initiative_proactive_comments" cols="3" rows="3" disabled><?php echo $empinfo->initiative_proactive_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-creativity-problem-solving" role="tabpanel">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>INDICATOR</th>
                                                    <th>ASSESSMENT
                                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                        (Out of 5)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>1. Ability to learn new project standards in a short amount of time</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->creativity_problem_solving_learn_new_project==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>2. Ability to adjust depending on the project needs</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->creativity_problem_solving_depending_project_needs==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>3. Ability to work on multiple projects</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->creativity_problem_solving_work_multiple_projects==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p>4. Ability to learn new disciplines, software, and adapt this knowledge to new challenges</p>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $x = 1;
                                                        while($x <= 5) {
                                                          if($empinfo->creativity_problem_solving_knowledge_to_new_challenges==$x){
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }else{
                                                            echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="remove_bb">
                                                    <td>
                                                        <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                    </td>
                                                    <td>

                                                    <?php  $comm_avg= $empinfo->p_creativity_problem_solving_emp_avg; ?>

                                                    <?php if($comm_avg <= 1): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?><i class='bx bx-tachometer' ></i></button>
                                                    <?php elseif($comm_avg <= 5): ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php else: ?>
                                                      <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                    <?php endif; ?>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4>Comments
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                            </i>
                                                        </h4>
                                                        <textarea class="form-control" name="creativity_problem_solving_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->creativity_problem_solving_comments; ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php else: ?>
                <div class="check-add-performance">
                    <h4>First you add your score!!</h4>
                    <a href="<?php echo base_url('Employee/setEmpPerformance'); ?>">Add Performance</a>
                </div>
              <?php endif; ?>


            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="modal fade" id="<?php echo 'editScoreEmp'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
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
                                    <a href="<?php echo base_url('Employee/displayEmployeeScores/'.$empinfo->main_employee_id); ?>"><button type="button" class="btn btn-info">Go To Edit</button></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

