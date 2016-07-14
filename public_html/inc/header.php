<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LongaVita | <?php echo $page; ?> </title>
    <link rel="shortcut icon" href="img/favicon.png" />
    
    <!-- CSS Links -->
    <link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link href="font/foundation-icon/foundation-icons.css" rel="stylesheet">
    <link href="font/foundation-icon/foundation-icons.svg" rel="stylesheet">   

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/app.css" />
    
    <script src="js/vendor/modernizr.js"></script>
 
</head>
<body>

<!--Menu Desc top screen -->

<div class="show-for-large-up">
<div class="fixed">
   <?php $screen='large'; ?>

     <!-- Top Menu 1 -->
   
     <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name">
              <h1><a href="#"></a></h1>
            </li>  
          </ul>

          <section class="top-bar-section">

          <!-- Left Nav Section icons -->
            <ul class="left">
              <li ><a href="https://www.facebook.com/LongaVitaCentar/?fref=ts"><i class="fa fa-facebook fa-1x"></i></a></li>
              <li ><a href="https://www.youtube.com/channel/UCszBREelgeP9XDO_VNdXoGw"><i class="fa fa-youtube-play fa-1x"></i></a></li>
              <li ><a href="https://rs.linkedin.com/in/aleksandra-petkovic-874a198a"><i class="fa fa-linkedin fa-1x"></i></a></li>
              <li ><a href="https://www.instagram.com/longa_vita/"><i class="fa fa-instagram fa-1x"></i></a></li>
              <li ><a class="show-for-xlarge-up" ><i class="fa fa-mobile fa-2x"></i> +381 69 11 22 358</a></li>
              <li ><a><i class="fa fa-envelope fa-lx"></i> longavita.srbija@gmail.com</a></li>
            </ul>

          <!-- Right Nav Section Options -->
            <ul class="right">
              <li <?php if($page =='Dobro Došli') { echo 'class="active" '; } ?> ><a href="index.php">Naslovna</a></li>
              <li <?php if($page =='O Nama') { echo 'class="active" '; } ?> ><a href="o_nama.php">O Nama</a></li>
              <li <?php if($page =='Izjave Klijenata') { echo 'class="active" '; } ?>  ><a href="izjave_klijenata.php">Izjava klijenata</a></li>
              <li <?php if($page =='Promocije') { echo 'class="active" '; } ?> ><a href="promocije.php">Promocije</a></li>
              <li <?php if($page =='galerija') { echo 'class="active" '; } ?> ><a href="gallery.php">Galerija</a></li>
              <li <?php if($page =='Cenovnik') { echo 'class="active" '; } ?> ><a href="cenovnik.php">Cenovnik</a></li>
              <li <?php if($page =='kontakt') { echo 'class="active" '; } ?> ><a href="#footer">Kontakt</a></li>
              <!-- Admin opcija u meniju -->
              
            </ul>
          </section>
        </nav>
         

    <!-- Top Bar 2 -->
    <div class="row menu_2">
        <div class="large-3 xlarge-3 columns">
          <h1 class="name"><img  src="img/logo/logolg.svg" width="300px"></h1>     
        </div>

        <div class="large-9 xlarge-8 medium-centar columns">
              <ul class="right button-group even-5">

                <li class="dropdown">
                  <a href="biorezonantna_dioagnostika.php" class="button secondary">Biorezonantna<br />dijagnostika</a>  
                  <div class="dropdown-content" >
                    <a href="biorezonantna_dioagnostika.php"><h5>Biorezonantna dijagnostika </h5></a>
                    <a href="bb_metoda.php"> - BICOM Biorezonantna metoda </a>
                    <a href="kome_se_preporucuje.php"> - Kome se preporučuje </a>
                    <a href="bicom_pregled.php"> - Šta podrazumeva BICOM pregled </a>
                  </div>
                </li>

                <li class="dropdown">
                  <a href="biorezonantna_terapija.php" class="button secondary">Biorezonantna<br />terapija<br /></a>  
                  <div class="dropdown-content" >
                    <a href="biorezonantna_terapija.php"><h5>Biorezonantna terapija</h5></a>
                    <a href="pb_terapije.php"> - Principi biorezonantne terapije </a>
                    <a href="bicom_terapija.php"> - BICOM terapija </a>
                  </div>
                </li>

                <li class="dropdown">
                  <a href="primena.php" class="button secondary">Primena<br /><w>.</w></a>  
                  <div class="dropdown-content dropdown-content1" >

                    <a href="primena.php"><h5> Terapijske Indikacije </h5></a>

                     <div class="medium-6 columns">
                      <a href="1_testiranje_i_lecenje_alergija.php"> - Testiranje i lečenje<br /><w>...</w>alergija </a>
                      <a href="2_test_in_na_hranu.php"> - Test intolerancije na hranu </a>
                      <a href="3_lecenje_kandide.php"> - Lečenje kandide </a>
                      <a href="4_jacanje_imuniteta.php"> - Jačanje imuniteta </a>
                      <a href="5_regulisanje_metabolizma.php"> - Regulisanje metabolizma </a>
                      <a href="6_oslobadjanje_od_toksina.php"> - Oslobađanje od toksina </a>
                     </div>
                     <div class="medium-5 columns end">
                      <a href="7_oslobadjanje_od_stresa.php"> - Oslobađanje od<br /><w>...</w>stresa</a>
                      <a href="8_neurodermitis.php"> - Neurodermatitis </a>
                      <a href="9_hronicne_bolesti.php"> - Hronične bolesti </a>
                      <a href="10_polenska_kijavica.php"> - Polenska kijavica </a>
                      <a href="11_lecenje_gojaznosti.php"> - Lečenje gojaznosti</a>
                      <a href="12_nutrionisticko_savetovanje.php"> - Nutricionističko <br /><w>...</w>savetovanje </a>
                     </div>

                  </div>
                </li>

                <li class="dropdown">
                  <a href="bicom_aparat.php" class="button secondary">BICOM<br />aparat</a>  
                  <div class="dropdown-content" >
                    <a href="bicom_aparat.php"><h5> BICOM aparat </h5></a>
                    <a href="o_aparatu.php"> - O aparatu </a>
                    <a href="bicom_alergo_test.php"> - BICOM alergo test </a>
                  </div>
                </li>

                <li>
                  <a href="bicom_cip.php" class="button secondary">BICOM čip<w>.</w></a>  
                  <div class="dropdown-content" ></div>
                </li>

              </ul>
          </div>
      </div>

</div>
</div>



<!-- Menu Mobile -->

<div class="hide-for-large-up" >
<?php $screen='mobile'; ?>

        <!-- Navigation Bar (Mobile) =============================== -->

        <header class="">

          <a href="index.php" class="logo">
            <img src="img/logo/logolg.svg" alt="Site Name" />
          </a>
          
          <div class="toggle-nav">
            <span class="fa fa-bars"></span>
          </div>
<!--
          <div class="toggle-search">
            <span class="fa fa-mobile"></span>
          </div>
-->
          <nav class="mobile-nav">

                  <!--REPLACE WITH PHP MENU SCRIPT-->
                  <!-- <? //wp_nav_menu(array('theme_location'=>'primary','container'=>'navigation'));?>-->
                  <ul>
                    <li class="menu-item-has-children"><a href="biorezonantna_dioagnostika.php">Biorezonantna dijagnostika</a>
                      <ul>
                        <li><a href="bb_metoda.php">- BICOM Biorezonantna metoda</a></li>
                        <li><a href="kome_se_preporucuje.php">- Kome se preporučuje</a></li>
                        <li><a href="bicom_pregled.php">- Šta podrazumeva BICOM pregled</a></li>
                      </ul>
                    </li>

                  <li class="menu-item-has-children"><a href="biorezonantna_terapija.php">Biorezonantna terapija</a>
                    <ul>
                      <li><a href="pb_terapije.php">- Principi biorezonantne terapije</a></li>
                      <li><a href="bicom_terapija.php">- BICOM terapija</a></li>
                    </ul>
                  </li>

                  <li class="menu-item-has-children"><a href="primena.php">Primena</a>
                    <ul>
                      <li><a href="1_testiranje_i_lecenje_alergija.php">- Testiranje i lečenje alergija</a></li>
                      <li><a href="2_test_in_na_hranu.php">- Test intolerancije na hranu</a></li>
					            <li><a href="3_lecenje_kandide.php">- Lećenje kandide</a></li>
                      <li><a href="4_jacanje_imuniteta.php">- Jačanje imuniteta</a></li>
                      <li><a href="5_regulisanje_metabolizma.php">- Regulisanje metabolizma</a></li>
                      <li><a href="6_oslobadjanje_od_toksina.php">- Oslobađanje od toksina</a></li>
                      <li><a href="7_oslobadjanje_od_stresa.php">- Oslobađanje od stresa</a></li>
                      <li><a href="8_neurodermitis.php">- Neurodermatitis</a></li>
                      <li><a href="9_hronicne_bolesti.php">- Hronične bolesti</a></li>
                      <li><a href="10_polenska_kijavica.php">- Polenska kijavica</a></li>
                      <li><a href="11_lecenje_gojaznosti.php">- Lečenje gojaznosti</a></li>
                      <li><a href="12_nutrionisticko_savetovanje.php">- Nutricionističko savetovanje</a></li>
                    </ul>
                  </li>

                  <li class="menu-item-has-children"><a href="bicom_aparat.php">BICOM aparat</a>
                    <ul>
                      <li><a href="o_aparatu.php">- O aparatu</a></li>
                      <li><a href="bicom_alergo_test.php">- BICOM alergo test</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="bicom_cip.php">BICOM čip</a></li>
				  
                  <li class="menu-item"><a href="index.php">Naslovna</a></li>
                  <li class="menu-item"><a href="o_nama.php">O Nama</a></li>
                  <li class="menu-item"><a href="izjave_klijenata.php">Izjava klijenata</a></li>
                  <li class="menu-item"><a href="promocije.php">Promocije</a></li>
                  <li class="menu-item"><a href="gallery.php">Galerija</a></li>
                  <li class="menu-item"><a href="cenovnik.php">Cenovnik</a></li>
                  <li class="menu-item"><a href="#footer">Kontakt</a></li>

                </ul>
                <!--END REPLACE WITH PHP MENU SCRIPT-->
            
          </nav>

        <div class="mobile-search">
          <div class="row">
            <div class="medium-12 columns">
              <form class="btn-field" method="" action="">
                <input type="text" placeholder="Search Site" />
                <input class="btn-red icon" type="submit" value="Search" />
              </form>

            </div>
          </div>
        </div>

        </header>

        <div class="mobile_sociale">
          <ul class="small-block-grid-4">
            <li><a href='https://www.youtube.com/channel/UCszBREelgeP9XDO_VNdXoGw'><i class="fa fa-youtube-play fa-2x"></i></a></li>
            <li><a href='https://www.facebook.com/LongaVitaCentar/?fref=ts'><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href='https://rs.linkedin.com/in/aleksandra-petkovic-874a198a'><i class="fa fa-linkedin fa-2x"></i></a></li>
            <li><a href='https://www.instagram.com/longa_vita/'><i class="fa fa-instagram fa-2x"></i></a></li>
          </ul>            
        </div>

</div>

<?php if ($screen=='large') { 
         echo"<div class='content1'>";
     } elseif ($screen=='mobile') {
         echo"<div class='content2'>";
     } 
?>
