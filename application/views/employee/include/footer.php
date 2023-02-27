
    <script src="<?php echo base_url('assets_admin/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/dashboards-analytics.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/parsley.js'); ?>"></script>
    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Performance', 'Company'],
          ['Communication', <?php echo $check2->communication_emp_avg; ?>],
          ['Productivity', <?php echo $check2->productivity_emp_avg; ?>],
          ['Quality', <?php echo $check2->quality_emp_avg; ?>],
          ['Knowledge of Job', <?php echo $check2->knowledge_emp_avg; ?>],
          ['Knowledge of Software', <?php echo $check2->software_emp_avg; ?>],
          ['Reliability & Dependability', <?php echo $check2->dependability_emp_avg; ?>],
          ['Time Management', <?php echo $check2->time_management_emp_avg; ?>],
          ['Adaptability', <?php echo $check2->p_adaptability_emp_avg; ?>],
          ['Initiative & Proactive', <?php echo $check2->p_initiative_proactive_emp_avg; ?>],
          ['Creativity & Problem Solving', <?php echo $check2->p_creativity_problem_solving_emp_avg; ?>],
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


    <script>
      $(document).ready(() => {
          $("#upload").change(function () {
              const file = this.files[0];
              if (file) {
                  let reader = new FileReader();
                  reader.onload = function (event) {
                      $("#imgPreview")
                        .attr("src", event.target.result);
                  };
                  reader.readAsDataURL(file);
              }
          });
      });
  </script>

  <script>
    $(document).ready(function () {

      // start communication

      $(".communication_checkSelect1").attr('disabled', true);
      $(".communication_checkSelect2").attr('disabled', true);
      $(".communication_checkSelect3").attr('disabled', true);
      $(".communication_checkSelect4").attr('disabled', true);
      $(".communication_checkSelect5").attr('disabled', true);

      $(".checkSelect_communication").change(function() {

        if ($(this).val() == "1") {

          $('.communication_checkSelect2').prop('checked', false);
          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);
          
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', true);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });
      
      // end communication

      // start productivity

      $(".productivity_checkSelect1").attr('disabled', true);
      $(".productivity_checkSelect2").attr('disabled', true);
      $(".productivity_checkSelect3").attr('disabled', true);
      $(".productivity_checkSelect4").attr('disabled', true);
      $(".productivity_checkSelect5").attr('disabled', true);

      $(".checkSelect_productivity").change(function() {

        if ($(this).val() == "1") {

          $('.productivity_checkSelect2').prop('checked', false);
          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);
          
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', true);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // start quality

      $(".quality_checkSelect1").attr('disabled', true);
      $(".quality_checkSelect2").attr('disabled', true);
      $(".quality_checkSelect3").attr('disabled', true);
      $(".quality_checkSelect4").attr('disabled', true);
      $(".quality_checkSelect5").attr('disabled', true);

      $(".checkSelect_quality").change(function() {

        if ($(this).val() == "1") {

          $('.quality_checkSelect2').prop('checked', false);
          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);
          
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', true);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });


      // end quality


      // start Knowledge of Job

      $(".knowledge_checkSelect1").attr('disabled', true);
      $(".knowledge_checkSelect2").attr('disabled', true);
      $(".knowledge_checkSelect3").attr('disabled', true);
      $(".knowledge_checkSelect4").attr('disabled', true);
      $(".knowledge_checkSelect5").attr('disabled', true);

      $(".checkSelect_knowledge").change(function() {

        if ($(this).val() == "1") {

          $('.knowledge_checkSelect2').prop('checked', false);
          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);
          
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', true);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end knowlege of job

      // start Knowledge of Software

      $(".software_checkSelect1").attr('disabled', true);
      $(".software_checkSelect2").attr('disabled', true);
      $(".software_checkSelect3").attr('disabled', true);
      $(".software_checkSelect4").attr('disabled', true);
      $(".software_checkSelect5").attr('disabled', true);

      $(".checkSelect_software").change(function() {

        if ($(this).val() == "1") {

          $('.software_checkSelect2').prop('checked', false);
          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);
          
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', true);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Knowledge of Software

      // start Reliability & Dependability

      $(".reliability_dependability_checkSelect1").attr('disabled', true);
      $(".reliability_dependability_checkSelect2").attr('disabled', true);
      $(".reliability_dependability_checkSelect3").attr('disabled', true);
      $(".reliability_dependability_checkSelect4").attr('disabled', true);
      $(".reliability_dependability_checkSelect5").attr('disabled', true);

      $(".checkSelect_reliability_dependability").change(function() {

        if ($(this).val() == "1") {

          $('.reliability_dependability_checkSelect2').prop('checked', false);
          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);
          
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', true);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Reliability & Dependability

      // start Time Management

      $(".time_management_checkSelect1").attr('disabled', true);
      $(".time_management_checkSelect2").attr('disabled', true);
      $(".time_management_checkSelect3").attr('disabled', true);
      $(".time_management_checkSelect4").attr('disabled', true);
      $(".time_management_checkSelect5").attr('disabled', true);

      $(".checkSelect_time_management").change(function() {

        if ($(this).val() == "1") {

          $('.time_management_checkSelect2').prop('checked', false);
          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);
          
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', true);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Time Management

      // start Adaptability

      
      $(".adaptability_checkSelect1").attr('disabled', true);
      $(".adaptability_checkSelect2").attr('disabled', true);
      $(".adaptability_checkSelect3").attr('disabled', true);
      $(".adaptability_checkSelect4").attr('disabled', true);
      $(".adaptability_checkSelect5").attr('disabled', true);

      $(".checkSelect_adaptability").change(function() {

        if ($(this).val() == "1") {

          $('.adaptability_checkSelect2').prop('checked', false);
          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);
          
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', true);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    // end Adaptability

    // start Initiative & Proactive

      $(".initiative_proactive_checkSelect1").attr('disabled', true);
      $(".initiative_proactive_checkSelect2").attr('disabled', true);
      $(".initiative_proactive_checkSelect3").attr('disabled', true);
      $(".initiative_proactive_checkSelect4").attr('disabled', true);
      $(".initiative_proactive_checkSelect5").attr('disabled', true);

      $(".checkSelect_initiative_proactive").change(function() {

        if ($(this).val() == "1") {

          $('.initiative_proactive_checkSelect2').prop('checked', false);
          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);
          
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', true);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Initiative & Proactive

      // start Creativity & Problem Solving

      $(".creativity_problem_solving_checkSelect1").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

      $(".checkSelect_creativity_problem_solving").change(function() {

        if ($(this).val() == "1") {

          $('.creativity_problem_solving_checkSelect2').prop('checked', false);
          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);
          
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    });
  </script>
</body>
</html>