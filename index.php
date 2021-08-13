
<?php get_header(); ?>
    <?php if ( is_home() ): ?>
    <!-- メインビジュアル -->
    <section class="kv">
        <div class="container">
            <h2 class="kv__heading">TOEFL対策はEngress</h2>
            <div class="kv__description">
                日本人へのTOEFL指導歴豊かな講師陣の<br>
                コーチング型TOEFLスクール
            </div>
            <a href="<?php echo home_url(); ?>/contact/" class="kv__document">資料請求</a><br>
            <a href="<?php echo home_url(); ?>/contact/" class="kv__contact">お問い合わせ</a>
        </div>
    </section>

    <!-- 悩み -->
    <section class="problem">
        <div class="container">
            <h2 class="problem__heading heading">TOEFL学習でこんな悩みありませんか？</h2>
            <ul class="problem__list">
                <li>
                    勉強の習慣が<br>
                    身についていない
                </li>
                <li>
                    勉強しているはず<br>
                    なのに点数が伸びない
                </li>
                <li>
                    正しい勉強方法が<br>
                    わからない
                </li>
            </ul>
            <div class="problem__card">
                <div class="problem__card--content">
                    <h2 class="problem__card--title">
                        Engressは<br>
                        <span>TOEFLに特化したスクール</span>です
                    </h2>
                    <p class="problem__card--text">
                        完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
                        TOEFLの苦手分野を克服します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 強み -->
    <section class="strong">
        <div class="container">
            <h2 class="strong__heading heading">TOEFL対策に特化したEngress3つの強み</h2>
            <div class="strong__card">
                <div class="strong__card--textarea">
                    <p class="strong__card--topic">特徴1</p>
                    <h3 class="strong__card--title">
                        TOEFLに最適化された<br>
                        無駄のないカリキュラム
                    </h3>
                    <p class="strong__card--text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。
                        そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature01.jpg" alt="パソコン" class="strong__card--image">
            </div>
            <div class="strong__card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature02.jpg" alt="講師" class="strong__card--image">
                <div class="strong__card--textarea">
                    <p class="strong__card--topic">特徴2</p>
                    <h3 class="strong__card--title">
                        日本人指導歴10年以上の
                        経験豊富な講師陣
                    </h3>
                    <p class="strong__card--text">
                        Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。
                        また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                    </p>
                </div>
            </div>
            <div class="strong__card">
                <div class="strong__card--textarea">
                    <p class="strong__card--topic">特徴3</p>
                    <h3 class="strong__card--title">
                        平均3ヶ月でTOEFL iBT20点アップ
                    </h3>
                    <p class="strong__card--text">
                        Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、
                        平均3ヶ月でTOEFLスコアを20点アップさせています。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature03.jpg" alt="成績アップ" class="strong__card--image">
            </div>
            <div class="strong__plan">
                <h3 class="strong__plan--title">
                    Engressの料金プランはこちら
                </h3>
                <a href="" class="strong__plan--value">料金を見てみる</a>
            </div>
        </div>
    </section>

    <section class="example">
        <div class="container">
            <h2 class="example__heading heading">
                TOEFL成功事例
            </h2>
            <ul class="example__list">
                <li class="example__card">
                    <p class="example__card--text">
                        TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avater1.png" alt="avater1" class="example__card--image">
                    <div class="example__card--detail">
                        <p class="example__card--work">会社員</p>
                        <p class="example__card--name">T.Fujiyamaさん</p>
                    </div>
                    <p class="example__card--description">3ヶ月でTOEFL80→108点</p>
                </li>
                <li class="example__card">
                    <p class="example__card--text">
                        半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avater2.png" alt="avater2" class="example__card--image">
                    <div class="example__card--detail">
                        <p class="example__card--work">大学生</p>
                        <p class="example__card--name">Y.Takiyamaさん</p>
                    </div>
                    <p class="example__card--description">6ヶ月でTOEFL40→100点</p>
                </li>
                <li class="example__card">
                    <p class="example__card--text">
                        早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avater3.png" alt="avater3" class="example__card--image">
                    <div class="example__card--detail">
                        <p class="example__card--work">高校生</p>
                        <p class="example__card--name">M.Yamadaさん</p>
                    </div>
                    <p class="example__card--description">5ヶ月でTOEFL68→109点</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="flow">
        <div class="container">
            <h2 class="flow-heading heading">ご利用の流れ</h2>
            <ul class="flow__list">
                <li class="flow__list--item">
                    <p class="flow__list--number">01</p>
                    <p class="flow__list--title">お問い合わせ</p>
                    <span class="flow__list--bar"></span>
                    <p class="flow__list--text">まずはフォームまたはお電話からお申し込みください。</p>
                </li>
                <li class="flow__list--item">
                    <p class="flow__list--number">02</p>
                    <p class="flow__list--title">ヒアリング</p>
                    <span class="flow__list--bar"></span>
                    <p class="flow__list--text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                </li>
                <li class="flow__list--item">
                    <p class="flow__list--number">03</p>
                    <p class="flow__list--title">学習プランのご提供</p>
                    <span class="flow__list--bar"></span>
                    <p class="flow__list--text">目標達成のために最適な学習プランをご提案致します。</p>
                </li>
                <li class="flow__list--item">
                    <p class="flow__list--number">04</p>
                    <p class="flow__list--title">ご入会</p>
                    <span class="flow__list--bar"></span>
                    <p class="flow__list--text">お申込み完了後、レッスンがスタートします。</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="question">
        <div class="container">
            <h2 class="question__heading heading">よくある質問</h2>
            <ul class="question__list">
                <li class="question__list--item">
                    <div class="question__list--content">
                        <p>Engressはサラリーマンでも学習を続けられるでしょうか？</p>
                        <img class="question__puras" src="<?php echo get_template_directory_uri(); ?>/assets/images/puras.png" alt="">
                        <img class="question__mainas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainas.png" alt="">
                    </div>
                </li>
                <div class="question__answer">
                    <p>
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </p>
                </div>
                <li class="question__list--item">
                    <div class="question__list--content">
                        <p>教材はオリジナルのものを使用しているのでしょうか？</p>
                        <img class="question__puras" src="<?php echo get_template_directory_uri(); ?>/assets/images/puras.png" alt="">
                        <img class="question__mainas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainas.png" alt="">
                    </div>
                </li>
                <div class="question__answer">
                    <p>
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </p>
                </div>
                <li class="question__list--item">
                    <div class="question__list--content">
                        <p>講師に日本人はいますか？</p>
                        <img class="question__puras" src="<?php echo get_template_directory_uri(); ?>/assets/images/puras.png" alt="">
                        <img class="question__mainas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainas.png" alt="">
                    </div>
                </li>
                <div class="question__answer">
                    <p>
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </p>
                </div>
                <li class="question__list--item">
                    <div class="question__list--content">
                        <p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
                        <img class="question__puras" src="<?php echo get_template_directory_uri(); ?>/assets/images/puras.png" alt="">
                        <img class="question__mainas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainas.png" alt="">
                    </div>
                </li>
                <div class="question__answer">
                    <p>
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </p>
                </div>
            </ul>
        </div>
    </section>

    <section class="info">
        <div class="container">
            <div class="blog">
                <h3 class="info__heading">ブログ</h3>
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) :
                    ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="news">
                <h3 class="info__heading">お知らせ</h3>
                <ul class="news__list">
                    <?php $args = array(
                        'numberposts' => 3,    //表示する記事の数の指定
                        'post_type' => 'notices'   //投稿タイプの指定
                    );
                    $posts = get_posts( $args );
                    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                        <li class="news__list--item">
                            <p class="news__list--date">
                                <?php the_time('Y-m-d'); ?>
                            </p>
                            <a class="news__list--text" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <?php else : ?> 
                        <li>記事はまだありません。</li>
                    <?php endif;
                    wp_reset_postdata(); //クエリのリセット
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="bill">
        <div class="container">
            <h2 class="bill__heading heading">まずは無料で資料請求から</h2>
            <a href="<?php echo home_url(); ?>/contact/" class="bill__document">資料請求</a>
            <a href="<?php echo home_url(); ?>/contact/" class="bill__contact">お問い合わせ</a>
        </div>
    </section>
    
    <div class="form">
        お電話でのお問い合わせはこちら
        <span class="form__number">0123-456-7890</span>
        <span class="form__date">平日  08:00~20:00</span>
    </div>
    <?php endif; ?>

<?php get_footer(); ?>