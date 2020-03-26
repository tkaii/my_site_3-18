<?php
/*
Template Name: 記事一覧：日付別アーカイブ
*/
?>

<?php get_header(); ?>
<main>
  <section class="blog-intro">
    <p>初めまして。 ブログを見に来てくださり、ありがとうございます。Ai と申します。</p>
    <h2>Welcome to</h2>
    <h1 class="blog-title">My Blog !</h1>
    <p>
      ウェブデザイン・ワードプレスのサイト作成、記事の執筆など、サイト制作のお手伝いをしています。動物、自然、毎日の街・空・景色の中のきれいを見つけるのが大好きな人間です。
    </p>
  </section>
<?php get_template_part('loop'); ?>
<?php get_template_part('main-img'); ?>
</main>
<?php get_footer(); ?>
