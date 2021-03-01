
<div class="slider slider-home"><!-- Slider Section -->
    <div class="flexslider slider-loading falsenav">
        <ul class="slides">
          <?php 
          $slider=$db->prepare("SELECT * from slayt order by slayt_sira ASC");
          $slider->execute(array(0));
          while($sliderprint=$slider->fetch(PDO::FETCH_ASSOC)) { 
             ?>
             <li>
                <div class="slider-textbox clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="slider-bar pull-left"><?php 
                            if ($dilwrite['dil_id']==1) {
                                echo $sliderprint['slayt_baslik'];
                            } elseif ($dilwrite['dil_id']==2) {
                                echo $sliderprint['slayt_baslik2'];
                            } elseif ($dilwrite['dil_id']==3) {
                                echo $sliderprint['slayt_baslik3'];
                            }  ?></div>
                            <div class="slider-triangle pull-left"></div>
                        </div>
                    </div>
                    <div class="container hidden-xs">
                        <div class="row">
                            <div class="slider-bar-under pull-left"><?php 
                            if ($dilwrite['dil_id']==1) {
                                echo $sliderprint['slayt_aciklama'];
                            } elseif ($dilwrite['dil_id']==2) {
                                echo $sliderprint['slayt_aciklama2'];
                            } elseif ($dilwrite['dil_id']==3) {
                                echo $sliderprint['slayt_aciklama3'];
                            } 
                            ?></div>
                            <div class="slider-triangle-under pull-left"></div>
                        </div>
                    </div>
                </div>
                <img alt="Slider 1" class="img-responsive" src="trex/<?php echo $sliderprint['slayt_resim']; ?>" />
            </li>
        <?php } ?>
    </ul>
</div>

</div>
