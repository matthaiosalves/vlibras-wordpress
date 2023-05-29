<?php
/*
Plugin Name: VLibras 
Description: O plugin VLibras é uma solução personalizada que permite adicionar a funcionalidade do VLibras ao seu site WordPress. Com o VLibras, você pode oferecer acessibilidade para pessoas com deficiência auditiva, proporcionando uma experiência de navegação inclusiva e acessível.
Version: 1.0
WordPress Version: 6.2.2
Author: Matheus Alves
Author URI: https://www.linkedin.com/in/matheusalveso/
Credits: https://www.gov.br/governodigital/pt-br/vlibras/
*/

function my_plugin_add_vlibras_to_footer()
{
  if (is_plugin_active('vlibras-wordpress/vlibras-wordpress.php')) {
    echo '
      <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget("https://vlibras.gov.br/app").init();
      </script>';
  }
}
add_action('wp_footer', 'my_plugin_add_vlibras_to_footer', 9999);
