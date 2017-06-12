<?php include 'header.php';
      include '../neting/baglan.php'; 
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $slidersor = $db->prepare("select * from slider where slider_ad LIKE '%$aranan%' order by
  slider_durum DESC, slider_sira ASC limit 25 ");
  $slidersor->execute();
  $say = $slidersor->rowcount();
}else
{
  $slidersor =$db->prepare("select * from slider order by  slider_durum DESC, slider_sira ASC limit 25");
  $slidersor->execute();
  $say = $slidersor->rowcount();
}

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                  
            </div>
          <div class="col-md-12" >
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form action="" method="POST">
                    <div class="input-group">
                      <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelimeniz...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="Submit" name="arama">Ara!</button>
                      </span>
                    </div>
                  </form>
                </div>
            </div>
          </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_content">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div align="left" class="col-md-6" ><h2>Slider İşlemleri<small>

                    <?php
                      echo $say . " kayıt listelendi...";
                        if($_GET['durum']=='ok')
                        { ?>
                            <b style="color: green;"> İşlem Başarılı.. </b>
                      <?php } elseif($_GET['durum']=='no')
                      { ?>      
                            <b style="color: red;"> İşlem Yapılamadı!! </b>
                      <?php } ?>

                   </small> </h2></div>
                    <div align="right" class="col-md-6" >
                    <a href="slider-ekle.php"><button class="btn btn-danger" ><i class="fa fa-plus"></i>Yeni Ekle</button></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                          <!-- tablo başlangıç -->
                      <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Slider Resim</th>
                            <th class="column-title text-center">Slider Ad </th>
                            <th class="column-title text-center">Slider Sıra </th>
                            <th class="column-title text-center">Slider Durum </th>
                            <th  width="80" class="column-title"></th>
                            <th  width="80" class="column-title"></th>
                         
                           </tr>
                        </thead>

                        <tbody>

                        <?php
                            
                            while($slidercek =$slidersor->fetch(PDO::FETCH_ASSOC)){
                            
                        ?>

                          <tr class="even pointer">
                            
                            <td class=" "><img width="200" height="100" src="../../<?php echo $slidercek['slider_resimyol']; ?>"></td>
                            <td class="text-center"><?php echo $slidercek['slider_ad']; ?></td>
                            <td class="text-center"><?php echo $slidercek['slider_sira']; ?></td>
                            <td class="text-center"><?php 
                            if($slidercek['slider_durum']=="1")
                            {
                              echo "AKTİF";
                            }else  
                            {
                              echo "PASİF";
                            } 

                            ?>  </td>
                            <td class="text-center"><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"> <button style="width: 80px;" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i>Düzenle</button></a></td>
                            <td class=" "><a href="../neting/islem.php?slidersil=ok&slider_id=<?php echo $slidercek['slider_id']; ?>"> <button style="width: 80px;" class="btn btn-danger btn-xs" ><i class="fa fa-pencil"></i>Sil</button></a></td>
                          </tr>

                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                              <!-- tablo bitiş -->
                  </div>
                </div>
                </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include'footer.php'; ?>
      