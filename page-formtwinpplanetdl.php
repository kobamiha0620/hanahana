<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Cocoonからのやつ
 * @since Hanahana 1.0
 */

 
get_header(); ?>
<?php if ( have_posts() ) : ?>

<?php endif; ?>
<section id="form" class="form">

    <div class="formnext" id="formnext">
        <p class="formnext__thanks">ありがとうございました。<br>資料のダウンロードはこちら。</p>
        <div class="formnext__btnwrap">
            <a href="https://twinplanet.co.jp/account_lp/wp-content/uploads/2023/01/twinplanet_account.pdf" download=""
                class="tiktok__link">資料ダウンロード</a>
        </div>
    </div>
    <div class="form__inner">

        <h2 class="form__ttl"><span>初月お問い合わせ限定で<br>割引キャンペーン実施中</span></h2>
        <h3 class="form__ttl">< 面談予約はこちら ></h3>
        <!-- Begin TimeRex Widget -->
        <div id="timerex_calendar" data-url="https://timerex.net/s/miharu.irisawa_4a76/79b87abc"></div>

        <script id="timerex_embed" src="https://asset.timerex.net/js/embed.js"></script>

        <script type="text/javascript">
            TimerexCalendar();
        </script>
        <!-- End TimeRex Widget -->

        <div class="form__blc">
            <?php the_content(); ?>

        </div>

</section>
<?php get_footer(); 