<a name="footer"></a> 
<div class="border">

    <div class="row"><br />
        <div class="large-12 text-center columns">
           <h2 style="color: #1C5437">KONTAKTIRAJTE NAS</h2>
        </div>
    </div> 
    <br /><br />

    <!-- Contact -->
    <div class="row">
            <div class="large-4 text-center columns">
                <i class="fa fa-mobile fa-2x"><h5>+381 69 11 22 358</h5></i>
            </div>
            <div class="large-4 text-center columns">
                <i class="fa fa-envelope fa-2x"><h5>longavita.srbija@gmail.com</h5></i> 
            </div>
            <div class="large-4 text-center columns">
                <i class="fa fa-map-marker fa-2x">
                <h5>Ul. Majakovskog 34,Lokal L4
                <br/>18000 Niš, Srbija</h5></i>   
            </div>
    </div><!-- End of Contact -->

<!-- Lokacija -->
  
  <!--Tab Layout Content--> 
   <div class="tabs-content">      
        <div class="content active" id="panel-details"></div>

        <div class="content" id="map">
          <!-- <p>Mapa: ul Heroja Maričića, 36000 Kraljevo, R. Srbija</p> -->
          <div id="map-canvas" style="width: 100%; height: 480px;"></div>
        </div>

</div> <!-- end of green border -->


     <dl class="tabs" data-tab>
        <dd class="active"><a href="#panel-details">Zatvori Mapu</a></dd>
        <dd id= "mapTab" class="map_tab" ><a href="#map"  onclick="loadScript();">Mapa</a></dd>
     </dl>
         
</div><!-- end off class border

<!-- Footer contact -->
   
    <footer class="footer">
      <div class="row">
        <div class="small-12 medium-6 large-5 columns">
          <p class="logo text-left"><img src="img/logo/logo_sivi.svg" width="400"/></p> 

          <p class="footer-links">                               
            <a href="biorezonantna_dioagnostika.php">Biotezonantna dijagnostika</a>
            <a href="biorezonantna_terapija.php">Biorezonantna terapija</a>
            <a href="primena.php">Primena</a><br />
            <a href="bicom_aparat.php">BICOM Aparat</a>
            <a href="bicom_cip.php">BICOM Čip</a>
          </p>
          <?php $t=time(); ?>
          <p class="copywrite">Copywrite LONGAVITA © <?php echo(date("Y",$t)); ?> Developed by <a href="http://redshell.rs/">'Red Shell'</a></p> 
        </div>
        <div class="small-12 medium-6 large-4 columns">
          <ul class="contact">
            <br /><br />
            <li>
              <p><i class="fi-clock"></i>Radno vreme od ponedeljka do petka<br />od 08:00 do 20:00h i <br />subota od 08:00 do 17:00</p>
            </li>
          </ul>
        </div>
        <div class="small-12 medium-12 large-3 columns">
          <p class="about">Bicom centar LONGAVITA<p>
          <p class="about subheader">Spremni da odgovorimo na<br />mnoga vaša pitanja i dileme.</p>
          <ul class="inline-list social">
            <a href="https://www.facebook.com/LongaVitaCentar/?fref=ts"><i class="fi-social-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UCszBREelgeP9XDO_VNdXoGw"><i class="fi-social-youtube"></i></a>
            <a href="https://rs.linkedin.com/in/aleksandra-petkovic-874a198a"><i class="fi-social-linkedin"></i></a>
            <a href="https://www.instagram.com/longa_vita/"><i class="fi-social-instagram"></i></a>
          </ul>
        </div>
      </div>  
    </footer>
           



           </div>
          </section>
          <a class="exit-off-canvas"></a>
          </div>
        </div>


      </div>
  </div>

          
   <!-- Arrow Return to Top -->
   <div class="show-for-medium-up">
   <a href="javascript:" id="return-to-top"><img  id="arrow" src="img/icons/arrow.svg"/></a> 
   </div>

    


    <script src="js/vendor/jquery.js"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.interchange.js"></script> 
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/app.js"></script>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script>
      $(function() {
        $( '#dl-menu' ).dlmenu();
      });
    </script>
    <script >//animate open/close
      $(".accordion dd").on("click", "a:eq(0)", function (event) {
          var dd_parent = $(this).parent();

          if(dd_parent.hasClass('active')) {
              $(".accordion dd div.content:visible").slideToggle("normal");
          } else {
            $(".accordion dd div.content:visible").slideToggle("normal");
            $(this).parent().find(".content").slideToggle("normal");
          }
        //return false;
      });
    </script>
   
    <!-- Google maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
  </body>
</html>
