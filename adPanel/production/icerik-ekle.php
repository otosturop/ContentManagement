<?php 
include 'header.php'; 
include '../neting/baglan.php';
error_reporting(E_ALL ^ E_NOTICE);
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
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
    <head>
      <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    </head>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">

                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Duyuru Ayarları 
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
                   
                   <form action="../neting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Resim Seç <span class="required">*</span>
                        </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="icerik_resimyol">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Duyuru Zaman <span class="required">*</span>
                        </label>         
                              <div class="col-md-3">
                                   <input type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  name="icerik_tarih" value="<?php echo date('Y-m-d') ?>">
                              </div>
                              <div class="col-md-2">
                                   <input type="time" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  name="icerik_saat" value="<?php echo date('H:i:s') ?>">
                              </div>                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Duyuru Ad <span 
                        class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" 
                          name="icerik_ad" placeholder="İçerik Adını Giriniz...">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Duyuru Detay <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="icerik_detay" ></textarea>
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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Duyuru Keyword <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="icerik_keyword" placeholder="Anahtar Kelime Giriniz..." >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Duyuru Durum <span class="required">*</span>
                        </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="heard" class="form-control" required="required" name="icerik_durum" >
                              <option value="1">Aktif</option>
                              <option value="0">Pasif</option>
                          </select>
                        </div>
                      </div>
                                  
                      </div>
                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="icerikKaydet" class="btn btn-success">Kaydet</button>
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