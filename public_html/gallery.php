<?php 
   $page = 'Galerija';
   $admin = 0;

// Header 
include('inc/header.php'); ?>

<div class="row">
	<div class="text-center columns">
      <h2 style="color:#54b953"><u>Galerija Longa vita</u></h2>
    </div>
</div><br /><br />

<div class="row"><hr />
	<ul class="clearing-thumbs small-block-grid-2 medium-block-grid-4 large-block-grid-6" data-clearing>
	<?php  
	$num = 1; 
    while($num <= 96) {
	  echo"<li><a class='th'  href='img/gallery/" . $num . "h.JPG'>
		   <img data-caption='Galerija Longa Vita' class='transparent' src='img/gallery/" . $num . "h.JPG'>
	       </a></li>";
	  $num++ ; 
    } 
	?>
    </ul>
</div><br /><br />




</div>
<hr />
<!-- Footer --> 
<?php include('inc/footer.php'); ?>  
