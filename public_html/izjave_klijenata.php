<?php 
   $page = 'Izjave Klijenata';
   $admin = 0;
  
   $klijenti= array(

   	          1 => array('img'=> 'img/photo/sites/izjave_klijenata/1_tatjana.png',
   	          	         'name'=>'Tatjana Radenković',
                         'txt'=> 'U proteklih devet godina imala sam velike promene i velike zdravstvene probleme. Problemi su bili na koži u vidu rana koje su krvarile, vlažile, svrbele i bolele. Lečila sam se na svim državnim i privatnim klinikama, koristila čajeve, meleme, međutim, nije bilo pomoći dok nisam posetila Bicom centar Longa vita gde su mi ustanovili alergiju prvenstveno na pšenicu, što znači našli su uzrok, pa onda i na sve ostale žitarice koje sadrže gluten. Onog trenutka kada sam isključila iz ishrane namirnice na koje sam bila alergična i nakon terapije na aparatu Bicom, vizuelni boljitak se video odmah posle prve nedelje a posle druge moje fizičko i psihičko stanje je bilo mnogo bolje.'),

              2 => array('img' => 'img/photo/sites/izjave_klijenata/2_nikola.png',
              	         'name' =>'Nikola Marinčić',
                         'txt' => 'Pre otprilike pet godina javila mi se alergija u vidu crvenila na koži a posle toga se javio i bol u sinusima. Lekari su mi govorili da ni alergija ni sinusni bol neće moći trajno da se izleče. Čuo sam za kliniku Longa vita, došao sam i uradili su mi dijagnostiku a posle dva meseca redovne terapije izgubile su se alergije na prašinu, gluten, pšenično brašno, pšenicu, polen i nestao je bol u sinusima. Savetujeme svima koji imaju zdravstvene probleme koje sam imao i ja da dodju u Bicom centar Longa vita i da krenu sa terapijom. '),     

              3 => array('img' => 'img/photo/sites/izjave_klijenata/3_tijana.png',
              	         'name' =>'Tijana Stanković',
                         'txt' => 'Nekoliko godina sam patila od hroničnog alergijskog rinitisa a zapušen nos mi je stvarao mnoge probleme. Lekari su mi prepisivali lek Claritine, ali nakon što bih prestala da ih pijem tegobe bi se odmah vratile. Imala sam česte glavobolje koje su me ometale pri redovnim školskim aktivnostima a kao aktivnoj sportistkinji dešavalo mi se da na treningu nemam dovoljno vazduha i da se osećam umornom. Na pregledu u Bicom centru Longa vita ustanovili su koja hrana mi ne odgovara i stvara svakodnevne probleme. Najveći problem je bilo kravlje mleko koje sam izbacila iz ishrane a terapije na Bicom aparatu su doprinele da se moje tegobe potpuno izgube. '),

              4 => array('img' => 'img/photo/sites/izjave_klijenata/4_zoran.png',
              	         'name' => 'Zoran Radenković',
                         'txt' => 'Novembra meseca 2013. godine preživeo sam infarkt miokarda nakon čega su mi ugrađena dva stenta. Za vreme bolničkog i kućnog lečenja koje je trajalo nekoliko meseci, imao sam puno vremena za razmišljanje i shvatio značaj preventivne brige o zdravlju na koju često zaboravljamo. Iz tog razloga redovno odlazim na terapije u Bicom centar Longa vita koji se brine o mojim metaboličkim procesima, imunitetu i opštem stanju mog organizma. Pored toga imaju odlične programe za oslobađanje od stresa, napetosti i nervoze koji su mi dragoceni.'), 

              5 => array('img' => 'img/photo/sites/izjave_klijenata/5_marija.jpg',
                         'name' => 'Marija Mladenović', 
                         'txt' => 'Dijagnostikovana mi je autoimuna bolest tačnije lupus mekih tkiva. Bila sam u jako lošem i teškom fizičkom i psihičkom stanju. Pored zvanične medicine, odlučila sam se i za alternativni vid lečenja kvantnom medicinom. Dolaskom u Bicom centar Longa vita i nakon samo tri terapije moje zdravstvno stanje je znatno poboljšano. Temperature koje su bile konstantne su nestale a bolovi u zglobovima su se potpuno izgubili. Što se i vidi po mom osmehu. ')
   );

// Header 
include('inc/header.php'); ?>


<!-- SLIDER -->

  <div class="small-12 columns">
    <div class="image-wrapper overlay-fade-in-new-background">     
      <img src="img/photo/sites/izjave_klijenata/slide_klijenata.jpg" />     
      <div class="image-overlay-content">
        <h1><u>IZJAVE KLIJENATA<u></h1>
      </div>   
    </div>  
  </div><hr />    
<br /><br />
<!-- Content -->
<div class='background_img_big'>                 
<?php 
foreach($klijenti as $id => $klijent) {
	    echo " 
		    <div class='row'>
			  	<div class='small-12 large-3 columns'>
				  <img src='". $klijent['img'] ."' width='200'>
		        </div>   
			  	<div class='text-justify small-12 large-9 columns' class='background_img_litle'>
			  	  <h3 style='color:#1c5437'>". $klijent['name'] ."</h3><br />
				  <h5 >". $klijent['txt'] ."</h5>
		        </div>
		    <hr /></div>		
		<br />";
} 
?>

</div>

</div>
<!-- Footer --> 
<?php include('inc/footer.php'); ?>    