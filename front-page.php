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
<section class="fv">
    <div class="fv__txtblc">
        <h2 class="fv__txtblc--subttl">TikTok Official MCN<br>アカウント運用代行</h2>
        <p class="fv__txtblc--txt">TikTok公式MCNとは、TikTok（Byte Dance社）と<br>正式な契約を結んだ公認MCN、公式広告代理店です。</p>

        <p class="fv__txtblc--badge">割引 キャンペーン実施中</p>
    </div>
</section>

<?php if( get_field('tiktoker') ): ?>
<section class="fluidtxt">
    <div class="fluidtxt__top">
        <p><?php echo post_custom('tiktoker'); ?></p>
        <p><?php echo post_custom('tiktoker'); ?></p>
    </div>
    <div class="fluidtxt__btm">
        <p><?php echo post_custom('tiktoker'); ?></p>
        <p><?php echo post_custom('tiktoker'); ?></p>
    </div>
</section>
<?php endif; ?>


<section class="tiktok">
    <div class="tiktok__inner">
        <div class="tiktok__inner--r">
            <h2 class="tiktok__inner--rttl">TikTokなら<br><span>TWIN PLANET</span></h2>
            <div class="pc">
                <p class="tiktok__inner--rtxt">SNSの中で最もリーチが獲得しやすいTikTokを活用し、<br>
                    御社のサービスをグロースしませんか？<br>
                    業界17年のTWIN PLANETが保有するコンテンツとデータを元に<br>
                    TikTokアカウントをグロースさせます。</p>
            </div>
            <div class="sp">
                <p class="tiktok__inner--rtxt">SNSの中で最もリーチが獲得しやすい<br>TikTokを活用し、<br>
                    御社のサービスをグロースしませんか？<br>
                    業界17年のTWIN PLANETが<br>保有するコンテンツとデータを元に<br>
                    TikTokアカウントをグロースさせます。</p>
            </div>
        </div>
        <div class="tiktok__inner--l">
            <div class="tiktok__inner--lin">
                <h3 class="tiktok__inner--lttl">TWIN PLANETを選ぶ<br><span>3つのメリット</span></h3>
                <ul class="tiktok__inner--list">
                    <li>❶トップインフルエンサー<br>の起用</li>
                    <li>❷創業17年の歴史と<br>データ分析力</li>
                    <li>❸TikTok公式MCNとしての<br>取り組み</li>
                </ul>
            </div>
        </div>
    </div>

    <a href="#form" class="tiktok__link">無料相談はこちら</a>
</section>


<section class="cando">
    <h2 class="cando__ttl">
        <p class="pc">TWIN PLANETだから<br>できること</p>
        <p class="sp">TWIN PLANET<br>だからできること</p>
    </h2>
    <div class="cando__blc">
        <div class="cando__blcinner">

            <h3 class="cando__subttl">❶ 著名タレント／<br>インフルエンサーの起用</h3>
            <div class="cando__feature"><span>check</span>
                <p>自社所属のトップインフルエンサーMCやコンサルとして起用</p>
            </div>
            <p class="cando__txt">TWIN PLANETでは、影響力のあるインフルエンサーが多数在籍。<br>ジャンルを問わず多くのユーザーにリーチする事が可能です。</p>

            <?php if( get_field('followernum') ): ?>
            <div class="cando__follower">
                <h4 class="cando__follower--ttl">所属者の合計フォロワー数</h4>
                <p class="cando__follower--num"><?php echo post_custom('followernum'); ?></p>
            </div>
            <?php endif; ?>


            <div class="cando__introduce">
                <h3 class="cando__introduce--ttl"><span>著名タレント</span></h3>
                <ul class="cando__introduce--list">
                    <?php if( get_field('famous_introtext01') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext01', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname01');
                                $profileImage = get_field('famous_introimg01');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg01_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext02') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext02', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname02');
                                $profileImage = get_field('famous_introimg02');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg02_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext03') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext03', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname03');
                                $profileImage = get_field('famous_introimg03');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg03_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext04') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext04', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname04');
                                $profileImage = get_field('famous_introimg04');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg04_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext05') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext05', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname05');
                                $profileImage = get_field('famous_introimg05');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg05_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext06') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext06', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname06');
                                $profileImage = get_field('famous_introimg06');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg06_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>
                </ul>

                <h3 class="cando__introduce--ttl"><span>インフルエンサー</span></h3>
                <ul class="cando__introduce--list">
                    <?php if( get_field('famous_introtext07') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext07', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname07');
                                $profileImage = get_field('famous_introimg07');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg07_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext08') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext08', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname08');
                                $profileImage = get_field('famous_introimg08');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg08_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext09') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext09', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname09');
                                $profileImage = get_field('famous_introimg09');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg09_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext10') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext10', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname10');
                                $profileImage = get_field('famous_introimg10');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg10_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext11') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext11', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname11');
                                $profileImage = get_field('famous_introimg11');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg11_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>

                    <?php if( get_field('famous_introtext12') ): ?>
                    <li>
                        <div class="cando__introduce--fukidashi">
                            <p class="cando__introduce--fukidashitxt">
                                <?php echo nl2br(get_post_meta($post->ID, 'famous_introtext12', true)); ?></p>
                            <div class="cando__introduce--fukidashi-arrow">arrow</div>
                        </div>

                        <?php
                                $alt = get_field('famous_introname12');
                                $profileImage = get_field('famous_introimg12');
                                if(!empty($profileImage)){
                                $profileImage['url'];  $size = 'full'; $profileImage['sizes'][ $size ]; $profileImage['width']; $profileImage['height'];
                            ?>

                        <picture>
                            <source srcset="<?php the_field('famous_introimg12_webp'); ?>" type="image/webp">
                            <!-- 上記に当てはまらずWebP対応なら表示 -->
                            <img src="<?php echo esc_url($profileImage['url']); ?>"
                                width="<?php echo esc_attr($profileImage['width']); ?>"
                                height="<?php echo esc_attr($profileImage['height']); ?>" alt="<?php echo $alt; ?>"
                                title="<?php echo $alt; ?>" loading="lazy" />
                        </picture>

                        <p class="cando__introduce--name"><?php echo $alt; ?></p>

                        <?php } ?>

                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <h3 class="cando__subttl">❷ 創業17年の歴史と<br>データ分析力</h3>
            <div class="cando__feature"><span>check</span>
                <p>⽇々の投稿管理／分析で“バズる”データを蓄積</p>
            </div>
            <p class="cando__txt">TWIN 所属タレントやインフルエンサーを伸ばしてきたノウハウを軸に<br>「ロジカルな企画提案」を致します</p>

            <div class="cando__report">
                <div class="pc">
                    <p class="cando__report--txt">
                        レポート内容例<br>
                        ・定量⾯の計測／報告（フォロワー数、再⽣数、いいね数等）<br>
                        ・結果に対する要因分析／考察<br>
                        ・新たな施策のご提案<br>
                        ・トレンド／ナレッジのシェア<br>
                    </p>
                </div>
                <div class="sp">
                    <p class="cando__report--txt">
                        レポート内容例<br>
                        ・定量⾯の計測／報告<br>（フォロワー数、再⽣数、いいね数等）<br>
                        ・結果に対する要因分析／考察<br>
                        ・新たな施策のご提案<br>
                        ・トレンド／ナレッジのシェア<br>
                    </p>
                </div>
            </div>
            
            <div class="cando__data">                
                <ul class="cando__data--list">
                <?php if( get_field('followernum') ): ?>
                    <li class="cando__data--list-num">  
                        <div>
                            <h3 class="cando__data--list-ttl">所属者の合計フォロワー数</h3>
                            <div class="cando__data--list-numblc">
                                <p class="cando__data--list-numtxt"><?php echo post_custom('followernum'); ?></p>
                                <p class="cando__data--list-numtxt2">人</p>
                            </div>
                        </div>

                    </li>
                <?php endif; ?>
                <?php if( get_field('data_sns') ): ?>
                    <li class="cando__data--list-sns">  
                        <div>
                            <h3 class="cando__data--list-ttl">年間 SNS案件数</h3>
                            <div class="cando__data--list-snsblc">
                                <p class="cando__data--list-snstxt"><?php echo post_custom('data_sns'); ?></p>
                                <p class="cando__data--list-snstxt2">件</p>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if( get_field('data_post') ): ?>
                    <li class="cando__data--list-post">  
                        <div>
                            <h3 class="cando__data--list-ttl">年間 投稿数</h3>
                            <div class="cando__data--list-postblc">
                                <p class="cando__data--list-posttxt"><span class="onpu"></span><span><?php echo post_custom('data_post'); ?></span></p>
                                <p class="cando__data--list-posttxt2">本以上</p>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if( get_field('data_hour') ): ?>
                    <li class="cando__data--list-hour">  
                        <div>
                            <h3 class="cando__data--list-ttl">年間 再生時間</h3>
                            <div class="cando__data--list-hourblc">
                            <p class="cando__data--list-hourtxt"><?php echo post_custom('data_hour'); ?></p>
                            <p class="cando__data--list-hourtxt2">時間</p>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                
                </ul>
            </div>

            <h3 class="cando__subttl">❸ TikTok公式MCN<br>としての取り組み</h3>
            <div class="cando__feature"><span>check</span>
                <p>公式MCNとして様々なビックプロジェクトをプロデュース</p>
            </div>

            <div class="cando__case">
                <div class="cando__case--blc case1">
                    <div class="cando__case--ttl">
                        <p class="cando__case--ttl-1">CASE</p>
                        <p class="cando__case--ttl-2">01</p>
                    </div>
                    <p class="cando__case--subttl">番組プロデュース・<br>公式TikTokアカウント運用</p>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/img_case1.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_case1.jpg" width="394px"
                            height="766px" alt="case 1 番組プロデュース" title="case 1 番組プロデュース" loading="lazy"
                            class="cando__case--img01" />
                    </picture>

                    <p class="cando__case--txt1">「日本シン人種図鑑」</p>
                    <p class="cando__case--txt2">テレビ東京<br>毎週日曜日　深夜1時30分～2時00分<br>MC：チョコレートプラネット、あのちゃん</p>
                </div>

                <div class="cando__case--blc">
                    <div class="cando__case--ttl">
                        <p class="cando__case--ttl-1">CASE</p>
                        <p class="cando__case--ttl-2">02</p>
                    </div>
                    <p class="cando__case--subttl">東京ガールズコレクション<br>公式TikTokアンバサダー<br>企画プロデュース</p>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/img_case2.webp"
                            type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_case2.jpg" width="361px"
                            height="768px" alt="case 2 企画プロデュース" title="case 2 企画プロデュース" loading="lazy"
                            class="cando__case--img02" />
                    </picture>

                    <p class="cando__case--txt2">
                        東京ガールズコレクションとTikTokの初コラボレーションをプロデュース。<br>人気クリエイターと東京ガールズコレクション出演者の共演や、オリジナルエフェクトをリリース。</p>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="inquiry">
    <p class="inquiry__ttl">TikTokなら</p>
    <p class="inquiry__tp">TWIN PLANET</p>
    <p class="inquiry__txt">まずはご相談からお受けします！</p>
    <a href="#form" class="tiktok__link">無料相談はこちら</a>
</section>

<section class="whytk">
    <h2 class="whytk__ttl">なぜ<br>TikTokなのか</h2>
    <div class="whytk__blc">
        <div class="whytk__blcinner">
            <h3 class="whytk__subttl">SNSの中で最もリーチが<br>獲得しやすい</h3>
            <div class="whytk__item1">
                <div class="whytk__feature"><span>check</span>
                    <p>フォロワー0でもバズる</p>
                </div>
                <p class="whytk__txt">フォロワー0⼈でも⼀定数のユーザーに必ず動画が届き、反応の良い動画はさらに拡散。</p>        


                <div class="whytk__feature"><span>check</span>
                    <p>おすすめ機能</p>
                </div>
                <p class="whytk__txt">ユーザーの趣味や志向を分析し、関⼼を持ちそうな動画を「おすすめフィード」に表⽰してユーザーの視聴を促進。</p>        

                <div class="whytk__feature"><span>check</span>
                    <p>「きっかけ」を作る</p>
                </div>
                <p class="whytk__txt last">ユーザーの多くは「おすすめフィード」に⾃動的に流れてくる動画を視聴。受動的な視聴態度が、無関⼼層への情報発信のしやすさにつながる。</p>        

            </div>


            <h3 class="whytk__subttl">年齢層のアップと<br>コンテンツの変革</h3>

            <div class="whytk__item2">
                <div class="whytk__item2--blc">
                    <div class="whytk__feature"><span>check</span>
                        <p>年齢層のアップ</p>
                    </div>
                    <div class="whytk__item2--sblc">
                        <div class="whytk__item2--sblc1">
                            <p class="whytk__item2--rttl">TikTokユーザーにおける25-44歳の割合</p>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/377.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/377.png" width="532px" height="87px" alt="37.7%" title="37.7%" loading="lazy" class="whytk__item2--sblc1img" />
                            </picture>
                            <p class="whytk__item2--note">※2021年6月時点</p>
                        </div>
                        <div class="whytk__item2--sblc1">
                            <p class="whytk__item2--rttl">25-44歳女性ユーザーにおける主婦の割合</p>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/245.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/245.png" width="543px" height="78px" alt="37.7%" title="37.7%" loading="lazy" class="whytk__item2--sblc2img" />
                            </picture>
                            <p class="whytk__item2--note">※2021年5月時点</p>
                        </div>
                    </div>
                </div>
                <div class="whytk__item2--blc">
                    <div class="whytk__feature"><span>check</span>
                        <p>コンテンツの変遷</p>
                    </div>
                    <div class="whytk__item2--sblc">
                        <h4 class="whytk__item2--sttl">2019年</h4>
                        <p class="whytk__item2--stxt">
                            <span>自撮り</span>
                            <span>口パク</span>
                            <span>踊り</span><br>
                            <span>女の子</span>
                            <span>イケメン</span>
                        </p>

                        <h4 class="whytk__item2--sttl">2019年後半</h4>
                        <p class="whytk__item2--stxt">
                            <span>お笑い</span>
                            <span>エンタメ</span><br>
                            <span>動物</span>
                            <span>赤ちゃん</span>
                        </p>

                        <h4 class="whytk__item2--sttl">2020年以降</h4>
                        <p class="whytk__item2--stxt last">
                            <span>How To</span>
                            <span>日常</span>
                            <span>生活情報</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section id="form" class="form">
    <div class="form__inner">
        <h2 class="form__ttl"><span>初月お問い合わせ限定で<br>割引キャンペーン実施中</span></h2>
        <h3 class="form__ttl">お問い合わせ／資料ダウンロード</h3>

        <div class="form__blc">
            <?php the_content(); ?>

        </div>

</section>
<?php get_footer(); 

