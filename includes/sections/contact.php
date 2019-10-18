  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contato</h2>
          <h3 class="section-subheading text-muted">Quer falar conosco? Seja para tirar dúvidas ou tomar um café, estamos sempre dispostos a conversar.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Seu Nome *" required="required" data-validation-required-message="Digite seu nome.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Entre com seu endereço de E-mail.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Seu DDD e Telefone *" required="required" data-validation-required-message="Entre com seu ddd e telefone.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Sua mensagem *" required="required" data-validation-required-message="Digite sua mensagem."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="g-recaptcha mx-auto" style="width: fit-content; padding-bottom: 10px;" data-sitekey="6LfNJL4UAAAAAACYXYivOLQ5Cl78D4OasL286G-B"></div>
                </div>
              </div>
              <div class="clearfix"></div>
	              <?php if(!empty($statusMsg)){ ?>
	    			<p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
				  <?php } ?>
              <div class="col-lg-12 text-center">     	
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>