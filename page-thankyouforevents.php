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
    <div class="form__inner">
        <h2 class="form__ttl"><span>お問い合わせありがとうございました</span></h2>

        <p class="form__sentxt">この度はお問い合わせいただきありがとうございます。<br>
            3営業日以内に担当者よりご連絡をさせていただきますので、<br>
            今しばらくお待ちくださいますようよろしくお願い申し上げます。 </p>
            <p class="form__sentxt">
            なお、しばらくたっても当社より返信、返答がない場合は、<br>
            迷惑メールフォルダに振り分けになっている可能性もございます。<br>
            お手数ではございますが、一度ご確認いただけましたら幸いです。
        </p>
        <!-- <p class="form__sentxt">株式会社 TWIN PLANET</p> -->
        
        <p class="form__tiktok--wrapper"><a href="https://twinplanet.co.jp/account_lp" class="form__tiktok">TikTok公式MCN</a></p>
        <div class="form__blc">
            <?php the_content(); ?>
        </div>

</section>
<?php get_footer(); 