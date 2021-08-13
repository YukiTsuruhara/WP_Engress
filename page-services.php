<?php
/*
Template Name: サービステンプレート
*/
?>
<?php get_header(); ?>

    <div class="section subkv">
            <h2 class="sheading">コース・料金</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="money">
        <div class="container">
            <h3 class="sheading">
                料金体系
            </h3>
            <div class="money__card">
                <div class="money__card--join">
                    入会金　39.980円
                </div>
                <span>＋</span>
                <div class="money__card--join">
                    月額費用
                </div>
            </div>
            <p class="money__description">
                Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。
                おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
            </p>
            <h3 class="money__table sheading">
                料金表
            </h3>
            <div class="money__contents">
                <div class="money__plan">
                    <div>
                        <p class="money__plan--title">基礎プラン</p>
                    </div>
                    <div class="money__plan--details">
                        <p class="money__plan--price">59,000円~</p>
                        <p class="money__plan--month">*月額（税抜価格）</p>
                        <ul class="money__plan--list">
                            <li>✔︎ カリキュラム作成</li>
                            <li>✔︎ TOEFL学習サポート</li>
                            <li>✔︎ 週一回のビデオMTG</li>
                        </ul>
                    </div>
                </div>
                <div class="money__plan">
                    <p class="money__plan--title">演習プラン</p>
                    <div class="money__plan--details">
                        <p class="money__plan--price">75,000円~</p>
                        <p class="money__plan--month">*月額（税抜価格）</p>
                        <ul class="money__plan--list">
                            <li>✔︎ カリキュラム作成</li>
                            <li>✔︎ TOEFL学習サポート</li>
                            <li>✔︎ 週一回のビデオMTG</li>
                            <li>✔︎ 月二回の模試（解説付き）</li>
                        </ul>
                    </div>
                </div>
                <div class="money__plan recommend">
                    <p class="money__plan--title money__plan--recommend">おすすめ<br><br>志望校対策プラン</p>
                    <div class="money__plan--details">
                        <p class="money__plan--price money__plan--yellow">95,000円~</p>
                        <p class="money__plan--month">*月額（税抜価格）</p>
                        <ul class="money__plan--list">
                            <li>✔︎ カリキュラム作成</li>
                            <li>✔︎ TOEFL学習サポート</li>
                            <li>✔︎ 週一回のビデオMTG</li>
                            <li>✔︎ 月二回の模試（解説付き）</li>
                            <li>✔︎ 週一の英語面接対策</li>
                        </ul>
                    </div>
                </div>
                <div class="money__plan">
                    <p class="money__plan--title">フレックスプラン</p>
                    <div class="money__plan--details">
                        <p class="money__plan--price">60,000円~</p>
                        <p class="money__plan--month">*月額（税抜価格）</p>
                        <ul class="money__plan--list">
                            <li>＊別途ご相談ください</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<?php get_footer(); ?>