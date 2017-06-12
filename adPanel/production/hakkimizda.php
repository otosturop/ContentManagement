<?php 
include 'header.php'; 
include '../neting/baglan.php';
$hakkimizdasor =$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek =$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
error_reporting(E_ALL ^ E_NOTICE);
?>

  <head>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  </head>
              <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımızda</h3>
              </div>
          <!--   Arama Çubuğu
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div>
           --> 
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">

                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hakkımızda Sayfa Düzenleme 
                    <small>
                      <?php
                        if($_GET['durum']=='ok')
                        { ?>
                            <b style="color: green;"> Güncelleme Başarılı.. </b>
                      <?php } elseif($_GET['durum']=='no')
                      { ?>
                            <b style="color: red;"> Güncelleme Yapılamadı!! </b>
                      <?php } ?>
                    </small> </h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                   
                   <form action="../neting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımızda Başlık <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>" name="hakkimizda_baslik">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımızda İçerik <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="hakkimizda_icerik" ><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></textarea>
                        </div>
                      </div>

            <script type="text/javascript">
              
                CKEDITOR.replace( 'editor1',
                {
                  filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                  filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                  filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                  filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                  filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                  filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                  forsePasteAsPlainText: true
                }
                  );
            </script>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımızda Video <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?>" name="hakkimizda_video">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hkkımızda Vizyon <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?>" name="hakkimizda_vizyon">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımızda Misyon <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>" name="hakkimizda_misyon">
                          </div>
                      </div>
                      <div align="right" class="col-md-8 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="HakkimizdaKaydet" class="btn btn-success">Güncelle</button>
                      </div>

                  </form>
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




