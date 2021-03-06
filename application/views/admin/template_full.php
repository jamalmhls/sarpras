<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <title><?php echo $title; ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link rel="icon" type="image/png" href="<?php echo base_url('assets/logo/logo.png');?>">
   <link href="<?php echo base_url('assets/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/assets/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/assets/bootstrap/css/bootstrap-fileupload.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/css/style-default.css'); ?>" rel="stylesheet" id="style_color"/>
   <link href="<?php echo base_url('assets/assets/chosen-bootstrap/chosen/chosen.css'); ?>" rel="stylesheet" type="text/css" media="screen"/>
   <link rel="stylesheet" type="text/css" href="<?php  echo base_url('assets/assets/bootstrap-datepicker/css/datepicker.css'); ?>" />
<style>
  .fullrow{
    width:100%;
  }
  .spanfull{
    width:98%;
  }
  .img4{
     width:50px;
     height:50px;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    }
    .img4:hover {
      transition: all 0.5s;
      -o-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -webkit-transition: all 0.5s;
      transform: scale(10);
      -moz-transform: scale(10);
      -o-transform: scale(10);
      -webkit-transform: scale(10);
      box-shadow: 2px 2px 6px rgba(0,0,0,0.5);
    }
  #main-content2 {
      width: 140%;
      margin-left: 148px;
      min-height: 1000px;
      background: #fff;
      margin-bottom: 40px !important;
  }
   #header .brand {
       margin-top: 0px !important;
       padding: 18px 20px;
       width: 900px;
   }
   .modal{position:fixed;top:10%;left:50%;z-index:1050;width:757px;margin-left:-382px;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.3);*border:1px solid #999;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;outline:0;-webkit-box-shadow:0 3px 7px rgba(0,0,0,0.3);-moz-box-shadow:0 3px 7px rgba(0,0,0,0.3);box-shadow:0 3px 7px rgba(0,0,0,0.3);-webkit-background-clip:padding-box;-moz-background-clip:padding-box;background-clip:padding-box}
</style>
</head>
<body class="fixed-top">
   <?php include "head.php"; ?>
   <div id="container">
      <?php include $menu; ?>
      <?php include $content; ?>
   </div>
   <div id="footer">
       2020 &copy; SMK Walisongo Pecangaan.
   </div>
   <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/chart-master/Chart.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/common-scripts.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/easy-pie-chart.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/home-page-calender.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/home-chartjs.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/uniform/jquery.uniform.min.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/data-tables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/assets/data-tables/DT_bootstrap.js'); ?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/js/dynamic-table.js'); ?>" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js');?>"></script>
   <script src="<?php echo base_url('assets/assets/fancybox/source/jquery.fancybox.pack.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/form-component.js'); ?>"></script>
   <script src="<?php echo base_url('js/jquery-1.8.2.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/uniform/jquery.uniform.min.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/clockface/js/clockface.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/jquery-tags-input/jquery.tagsinput.min.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-daterangepicker/date.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/assets/bootstrap-inputmask/bootstrap-inputmask.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/form-component.js'); ?>"></script>
   <script type="application/javascript">
        function isNumberKeyTrue(evt)
           {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 65)
               return false;         
             return true;
           }
      </script>
</body>
</html>