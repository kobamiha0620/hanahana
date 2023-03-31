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
        <h2 class="form__ttl"><span>展示会限定プランを<br>ご用意しています</span></h2>
        <h3 class="form__ttl">お問い合わせ／資料ダウンロード</h3>
        <div class="form__blc">
            <?php the_content(); ?>

        </div>

</section>
<?php get_footer(); 