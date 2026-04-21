<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
$priority_url = get_theme_mod('atomama_priority_cta_url', '/yoyakunori-kouryaku/');
?>
<main class="site-container">
  <section class="hero section">
    <span class="hero__badge">スマホで最短チェック</span>
    <h1 class="hero__title">USJをもっと快適に。<br>まずは「よやくのり攻略」へ。</h1>
    <p class="hero__lead">迷いやすい情報を整理し、最優先で行動すべき導線を先頭に配置しました。初めての方でも迷わず準備できます。</p>
    <div class="button-row">
      <a class="button button--accent" href="<?php echo esc_url($priority_url); ?>">最優先：よやくのり攻略を見る</a>
      <a class="button button--line" href="#cta-secondary">次に読むべき記事を見る</a>
    </div>
  </section>

  <section class="section section-card cta-priority" aria-label="最重要導線">
    <h2 class="cta-priority__title">最重要導線：よやくのり攻略</h2>
    <p class="cta-priority__text">待ち時間を減らして満足度を上げるための要点を、初心者向けに3ステップで解説しています。迷ったらまずここから。</p>
    <a class="button button--accent" href="<?php echo esc_url($priority_url); ?>">3ステップを今すぐ確認する</a>
  </section>

  <section id="cta-secondary" class="section section-card">
    <h2>目的別にすぐ進める導線</h2>
    <div class="grid">
      <article class="info-item">
        <h3>はじめての人へ</h3>
        <p>当日の動き方と持ち物だけを先に確認できる導線です。</p>
      </article>
      <article class="info-item">
        <h3>混雑回避したい人へ</h3>
        <p>時間帯別の回り方をコンパクトに確認できます。</p>
      </article>
      <article class="info-item">
        <h3>子連れで行く人へ</h3>
        <p>休憩ポイント・優先して取るべき予約を先頭にまとめています。</p>
      </article>
    </div>
  </section>

  <section class="section section-card">
    <h2>今後の拡張を前提にした構成</h2>
    <p>記事一覧・カテゴリ・プロフィールは固定ページとして追加し、同じカード部品を流用できる設計です。管理画面では「固定ページ追加」だけで増やせます。</p>
  </section>

  <footer class="footer-nav">
    <?php
    wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container' => false,
        'fallback_cb' => false,
    ]);
    ?>
    <p>© <?php echo esc_html(date('Y')); ?> Atomama USJ Guide</p>
  </footer>
</main>
<?php
get_footer();
