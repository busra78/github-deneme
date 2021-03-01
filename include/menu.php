<?php if ($settingsprint['ayar_harita']==1) { ?>
  <div id="wrapper" class="container">
  <?php } else { ?>
    <div id="wrapper">
    <?php } ?>
    <div class="header"><!-- Header Section -->
      <div class="pre-header"><!-- Pre-header -->
        <div class="container">
          <div class="row">
            <div class="pull-left pre-address-b hidden-xs"><p><i class="fa fa-star"></i> EMLAK GAYRİMENKUL  </p></div>
            <div class="pull-right">
             <div class="pull-left">
               <ul class="pre-link-box">
                 <?php 
                 $socialfo=$db->prepare("SELECT * from sosyal");
                 $socialfo->execute();
                 while($socialprint=$socialfo->fetch(PDO::FETCH_ASSOC)) { ?>
                  <li>
                    <a target="_blank" href="<?php echo $socialprint['sosyal_link']; ?>"><i class="fa <?php echo $socialprint['sosyal_icon']; ?>"></i></a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="pull-right">

             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="main-header"><!-- Main-header -->
      <div class="container">
        <div class="row">
          <div class="pull-left">
            <div class="logo" >
              <a href="index.php"><img src="trex/<?php echo $settingsprint['ayar_logo']; ?>"  class="img-responsive" alt="<?php echo $settingsprint['ayar_firmaadi']; ?>"></a>
            </div>
          </div>
          <div class="pull-right">
            <div class="pull-left">
              <nav class="nav">
                <ul id="navigate" class="sf-menu navigate">

                 <?php
                            // ALT MENU DÜZENİ YAPILMIŞTIR!!!!!
                 if ($dilwrite['dil_id']==1) {
                  $menulist = $db->prepare( "SELECT * from omenu where omenu_ust=0 order by omenu_sira ASC" );
                } elseif ($dilwrite['dil_id']==2) {
                  $menulist = $db->prepare( "SELECT * from omenu2 where omenu_ust=0 order by omenu_sira ASC" );
                } elseif ($dilwrite['dil_id']==3) {
                  $menulist = $db->prepare( "SELECT * from omenu3 where omenu_ust=0 order by omenu_sira ASC" );
                } 
                $menulist->execute();

                foreach ( $menulist as $row )
                {
                  $ust       = $row[ 'omenu_id' ];
                  $ustdurum  = $row[ 'omenu_durum' ];
                  if ($dilwrite['dil_id']==1) {
                    $menuliste = $db->prepare( "SELECT * from omenu where omenu_ust=$ust order by omenu_sira ASC" );
                  } elseif ($dilwrite['dil_id']==2) {
                    $menuliste = $db->prepare( "SELECT * from omenu2 where omenu_ust=$ust order by omenu_sira ASC" );
                  } elseif ($dilwrite['dil_id']==3) {
                    $menuliste = $db->prepare( "SELECT * from omenu3 where omenu_ust=$ust order by omenu_sira ASC" );
                  } 
                  $menuliste->execute();
                  ?>
                  <!--sarkan menu-->
                  <?php if ( $ustdurum <= 0 )
                  {
                    ?> <li> <?php
                  }
                  else
                    { ?>
                      <li class="parent-menu"> <?php } ?> <a style="color:#FFFFCC " href="<?php echo $row[ 'omenu_link' ]; ?>"><?php echo $row[ 'omenu_ad' ]; ?></a>

                        <?php if ( $ustdurum <= 0 )
                        {

                        } else
                        {
                          ?>
                          <ul class="dropdown"> <?php
                        } ?>


                        <?php foreach ( $menuliste as $key ) { ?>

                          <li><a href="<?php echo $key[ 'omenu_link' ]; ?>"><?php echo $key[ 'omenu_ad' ]; ?></a></li>

                        <?php }
                        if ( $ustdurum <= 0 )
                        {

                        } else
                        {
                          ?> </ul> <?php
                        } ?>

                      </li>
                    <?php } ?>


                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
