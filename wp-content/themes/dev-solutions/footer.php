
                  <div class="svg-border-angled text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor"><polygon points="0,100 100,0 100,100"></polygon></svg>
                  </div>
              </section><!-- /#global-content -->
          </main>
      </div><!-- /#layoutDefault_content -->
        <footer id="main-footer" class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">Dev Solutions</div>
                        <div class="mb-3">Contruimos tu sitio web profesional</div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-github"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Landing</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Sections</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                    <li><a href="javascript:void(0);">Changelog</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Changelog</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Theme Customizer</a></li>
                                    <li><a href="javascript:void(0);">UI Kit</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Components</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Layouts</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Code Samples</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Products</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Affiliates</a></li>
                                    <li><a href="javascript:void(0);">Updates</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Terms and Conditions</a></li>
                                    <li><a href="javascript:void(0);">License</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row align-items-center">
                    <div class="col-md-6 small"><?php _e('Todos los Derechos Reservados '); ?>&copy; Dev Solutions <?php echo date('Y'); ?></div>
                    <div class="col-md-6 text-md-right small">
                        <a href="javascript:void(0);"><?php _e('Políticas de privacidad'); ?></a>
                        &middot;
                        <a href="javascript:void(0);"><?php _e('Términos y condiciones'); ?></a>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
	</div><!-- /#layoutDefault-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init({
          disable: 'mobile',
          duration: 600,
          once: true
      });
  </script>
    <?php wp_footer(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones al final del footer. |
         I call the script to load and execute all the functions of the footer-->
</body>
</html>
