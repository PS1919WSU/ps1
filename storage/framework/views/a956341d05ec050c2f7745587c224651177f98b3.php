<?php $__env->startSection('user'); ?>

<?php 
foreach ($test as $test) {
    echo $test->firstname;
}
?>
<button type="submit" name="submit" onclick="window.location.href = 'logoff';">Log Off</button><br>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<!-- Dropdown -->
<div align="left">
     
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>



<div class="dropdown">
  <button class="dropbtn">Semantic Type</button>
  <div class="dropdown-content">
    <a href="#">Disorder</a>
    <a href="#">Object</a>
    <a href="#">Substance</a>
	<a href="#">Disease</a>
  </div>
</div>



	  
	  </div>




<center>
<h3>Enter you text below</h3>
<textarea rows="16" cols="80">
Write something here.... 
</textarea>

<form action="/upload" method="post" enctype="multipart/form-data">
 <?php echo e(csrf_field()); ?>

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Submit" name="submit">
</form>
<center>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\blog\ps1919\resources\views/welcome1.blade.php ENDPATH**/ ?>