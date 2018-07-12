<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('admin-login.php','_self')</script>";    
} else {
    

?>

<div class="row">
 <div class="col-lg-12">
    <ol class="breadcrumb">
     <li class="active">
        <i class="fa fa-dashboard"></i> View Slide
     </li>
     
    </ol>
 </div>

</div>

<div class="row">
 <div class="col-lg-12">
    <div class="panel panel-default">
     <div class="panel-heading">
        <h3 class="panel-title">
          <i class="fa fa-money fa-fw"></i> View Slides
         </h3>
        </div>
        
        <div class="panel-body">
         <?php
    $get_slider = "SELECT * from slider";
    $run_slider = mysqli_query($con, $get_slider);
while ($row_slider = mysqli_fetch_array($run_slider)) {
    $slider_id = $row_slider['slider_id'];
    $slider_name = $row_slider['slider_name'];
    $slider_image = $row_slider['slider_image'];

         ?>
<div class="col-lg-3 col-md-3">
 <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title" align="center">
        <?php echo $slider_name; ?>
      </h3>
    </div>
     
     <div class="panel-body">
      <img src="slideimage/<?php echo $slider_image; ?>" class="img-responsive">
     </div>
     
     <div class="panel-footer">
      <center>
        <a href="index.php?delete_slide=<?php echo $slider_id; ?>" class="pull-left">
        <i class="fa fa-trash-o"></i> Delete Image 
        </a> 
          
        <a href="index.php?edit_slide=<?php echo $slider_id; ?>" class="pull-right">
        <i class="fa fa-pencil"></i> Edit Image 
        </a> 
          
          <div class="clearfix">
          
          </div>
      </center>
     </div>
     
 </div>            
</div>
            
<?php } ?>            
        
        </div>
     </div>
    </div>
</div>



<?php } ?>