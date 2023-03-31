<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
          </main>




    <footer id="footer" class="footer footer-container nwa" itemscope itemtype="https://schema.org/WPFooter">

      <div id="footer-in" class="footer-in wrap cf">
    <p class="inquiry__ttl">TikTokなら</p>
    <p class="inquiry__tp">TWIN PLANET</p>
<p class="footer__copy"><small>Copyright© 2022 TWIN PLANET Co., LTD.</small></p>
      </div>

    </footer>


    <?php if (!is_amp()) {
      //再利用用にフッターコードを取得
      //wp_footer()関数では、一度しか出力が行われないようなので事前にグローバル変数に格納しておく
      global $_WP_FOOTER;
      ob_start();
      wp_footer();
      $f = ob_get_clean();
      echo $f;
      $_WP_FOOTER = $f;
    } ?>

<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/js/today.js"></script>


</body>

</html>
