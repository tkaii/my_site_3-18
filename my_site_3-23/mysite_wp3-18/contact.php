<?php
/*
Template Name: コンタクトページ
*/
?>
<?php get_header(); ?>
  <main>
    <section class="contact-intro">
      <p>ウェブサイトの作成をご予定ですか？</p>
      <h1><small>ご相談ください。</small></h1>
      <p class="form-title-text">下記のフォームよりお気軽にご連絡ください。お待ちしております。</p>
    </section>
    <section class="signup-form">
      <form class="signup-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf2xd5v27dF9en4OiVbSRRdNkMKdd_9yFf3U9yRNbafIy1BWw/formResponse" method="POST">
        <label class="form__label" for="name" >お名前</label>
        <input type="name" id="name" name="entry.2005620554" placeholder="名前(必須)" required>
        <label class="form__label" for="email">メールアドレス</label>
        <input  type="email" id="email" name="entry.1045781291" placeholder="メールアドレス(必須)" required>
        <label class="form__label" for="massage">メッセージ</label>
        <textarea name="entry.839337160" id="massage" placeholder="お問い合わせ内容（必須）" required></textarea>
        <input type="submit" class="btn btn-pink submit" value="送信"></input>
      </form>
    </section>
  </main>
<?php get_footer(); ?>

