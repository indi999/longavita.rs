<?php 
   $page = 'Cenovnik';
   $admin = 0;
   $usluge= array(

		      1 => array(
		          	     'service'=>'Testiranje BICOM aparatom',
		                 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 5000),

		      2 => array(
		          	     'service'=>'Kontrolno testiranje BICOM',
                         'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_1.png',
		                 'price'=> 3000,),

		      3 => array(
		          	     'service'=>'Test intoler. BICOM aparatom',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_3.png',
		                 'price'=> 4000),

		      4 => array(
		          	     'service'=>'Tretman BICOM',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 2000),

		      5 => array(
		          	     'service'=>'Tretman BICOM indikacioni',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 1800),

		      6 => array(
		          	     'service'=>'BICOM čip',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 600),

		      7 => array(
		          	     'service'=>'Tretman odvik. od pušenja',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 2500),

		      8 => array(
		          	     'service'=>'Tretman mršavljenja',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 1500),

		      9 => array(
		          	     'service'=>'Anti stres tretman',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 1500),

		      10 => array(
		          	     'service'=>'Testiranje donetih uzoraka',
		          	     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar sapien ut dolor malesuada, at volutpat quam gravida. Phasellus sollicitudin ut purus sit amet pulvinar. Ut scelerisque, arcu eu elementum tempor, nisl turpis dapibus orci, id ultricies neque tortor et ligula. Nunc nulla lectus, auctor at tempor sit amet, porta a nulla. Nam eget interdum arcu. Nam a pretium nisl. Nam aliquet sem in tincidunt vestibulum. Proin ex mauris, semper vel dui non, rutrum vestibulum lacus. Aliquam sagittis sem sed ante imperdiet accumsan. Nullam vestibulum posuere urna, sed aliquet eros efficitur id. In vehicula metus euismod, imperdiet lorem sit amet, lacinia nisl.',
		                 'picture' => 'img/photo/sites/1_biorezonantna_diagnostika/sta_podrazumeva_bicom_pregled/sta_podrazumeva_bicom_preged_2.png',
		                 'price'=> 500)

);

// Header 
include('inc/header.php'); ?>


 <div class="small-12 columns">
    <div class="image-wrapper overlay-fade-in-new-background">     
      <img src="img/photo/sites/promocije/promocije.png" />     
      <div class="image-overlay-content">
        <h1><u>CENOVNIK<u></h1>
      </div>   
    </div>  
  </div>

  <div class="raw" >
	  <div class="large-12 text-center columns">
	    <h2 style="color: #1C5437;margin-bottom: 4rem"><u>CENOVNIK</u></h2>
	  </div>
 </div>


<!-- Content -->
<div class="row">
    <div class="small-12 columns">
    <div class="background_img">

        <h4 class="usluge">USLUGE:</h4>
        <dl class="cenovnik" data-accordion>

	    <?php foreach($usluge as $id => $usluga) {
	    echo ' 

            <dd class="element">
            <div class="row e">
	                <div class="small-offset-1 small-8 columns">
	                    <h5 id="text">'. $usluga['service'] .'</h5>
	                </div>     
                    <div class="small-2 columns end">
                        <h5 id="price"> CENA: '. $usluga['price'] .' '. 'RSD</h5>
                    </div>
            </div>          
            </dd> '
        ; }  ?> 
        </dl>

    </div>
    </div>
</div>

<br /><br />

<!-- Footer --> 
<?php include('inc/footer.php'); ?>    