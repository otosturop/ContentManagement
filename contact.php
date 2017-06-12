<?php include 'header.php'; ?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bize Ulaşın</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Bize ulaşmak için aşağıda yer alan iletişim formunu eksiksiz doldurunuz.</p>
							
<form id="contact-form" method="post" action="adPanel/neting/mail.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Adınız *</label>
                    <input id="form_name" type="text" name="Adi" class="form-control" placeholder="Lütfen adınızı yazın *" required="required" data-error="Adınız gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Soyadınız *</label>
                    <input id="form_lastname" type="text" name="Soyadi" class="form-control" placeholder="Lütfen soyadınızı yazın *" required="required" data-error="Soyadınız gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">E-Posta Adresiniz *</label>
                    <input id="form_email" type="email" name="EPosta" class="form-control" placeholder="Lütfen E-Posta adresinizi yazın *" required="required" data-error="Geçerli bir E-Posta gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Telefon Numaranız</label>
                    <input id="form_phone" type="tel" name="Telefon" class="form-control" placeholder="Lütfen telefon numaranızı yazın">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mesajınız *</label>
                    <textarea id="form_message" name="Mesaj" class="form-control" placeholder="Lütfen mesajınızı yazın *" rows="4" required="required" data-error="Lütfen mesajınızı yazın."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" name="mesaj_gonder" value="Mesajı Gönder">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted"><strong>*</strong> Bu alanlar gereklidir.</p>
            </div>
		<div class="col-md-6">
			 		<?php
                        if($_GET['durum']=='ok')
                        { ?>
                            <b style="color: green;"> Mesajınız Gönderilmiştir.. </b>
                     <?php } elseif($_GET['durum']=='no')
                      { ?>
                            <b style="color: red;"> Mesaj Gönderilemedi!! </b>
                     <?php } ?>
		</div>

        </div>
    </div>

</form>
							

							

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Adres & İletişim</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo $ayarcek['ayar_adres']; ?> <br/>
								<?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?> <br/>
								</li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo $ayarcek['ayar_tel']; ?></li>
								<li><i class="fa fa-envelope"></i> <strong>Mail Adresi:</strong> <a href="mailto:<?php echo $ayarcek['ayar_mail']; ?> <br/>"><?php echo $ayarcek['ayar_mail']; ?> <br/></a></li>
							</ul>

							<h4 class="pt-xl mb-none">Çalışma Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Haftaiçi: <?php echo $ayarcek['ayar_mesai']; ?> <br/></li>
								<li><i class="fa fa-clock-o"></i> Haftasonu: <?php echo $ayarcek['ayar_mesai']; ?></li>
								
							</ul>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1579906.8914562261!2d31.14326219671637!3d39.3391213834523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1492875532223" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</div>
			</div>

			<?php include 'footer.php'; ?>