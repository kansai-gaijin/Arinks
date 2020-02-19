<section id="teacher-shokai">
<div class="row">
  <div class="col-sm-12 col-md-7">
    <div class="kyoshi-image">
      <figure>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(  ) ,  'full' ); ?>" alt=""/>
      </figure>
    </div>
  </div>
  <div class="col-sm-12 col-md-5">
    <table>
      <tbody>
        <tr>
          <th>
            性別
          </th>
          <td>
            女性
          </td>
        </tr>
        <tr>
          <th>
            年齢
          </th>
          <td>
            23歳
          </td>
        </tr>
        <tr>
          <th>
            講師歴
          </th>
          <td>
            11年 9ヶ月 
          </td>
        </tr>
        <tr>
          <th>
            得意教科
          </th>
          <td>
            発音<br/>
            ボキャブラリー<br/>
            文法／語法<br/>
            日常英会話<br/>
            ビジネス英語
          </td>
        </tr>
        <tr>
          <th>
            対応レベル
          </th>
          <td>
            お子様向け<br/>
            初心者・初級者向け<br/>
            初中級者向け<br/>
            上級者向け
          </td>
        </tr>
        <tr>
          <th>
            日本語レベル
          </th>
          <td>
            話せない
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<section class="page-section">
  <div class="wrapper">
    <div class="section-header">
      <h3 class="section-title">
        <strong>自己紹介</strong>
      </h3>
    </div>
    <div class="section-body slim">
        <p>Hi! My name is Maria Santiago. You can call me Mary. I am a graduate of Bachelor of Elementary Education major in Reading. I have completed my academic units for Master of Arts in Education major in English. With my skills and experiences as a teacher for 10 years, I can assure you that I can provide an adequate English Training. Together we will conquer all your fears and difficulties in learning English. I know you can do it. So book your lessons with me and see you in my class.</p>
        <p>
        京従ぽむ反都趣連サクラ特性ワミス防校37区ら町質ア頭様でってま自佐きけぼ集豊かのラ抗56校ロ市百べぴ景写るせ賛問よろ田信れトちず明都ヘルセ作宜尋よ。演せき作捜ホ戒国ふをかわ橋念トネエヒ地6学クまう権怪モ書冬イ写2章政せぐらみ実幕ま航生ラスシハ歴終国す売由メクサ大嗣坪扇ッへゅみ。
        </p>
    </div>
  </div>
</section>
<?php if( is_user_logged_in(  )):?>
<section class="page-section">
  <div class="wrapper">
    <div class="section-header">
      <h3 class="section-title">
        <strong>レッスンスケジュール</strong>
      </h3>
    </div>
    <div class="section-body slim">
        <p style="text-align:center;">スケジュールはまだ登録されていません。</p>
    </div>
  </div>
</section>
<?php endif; ?>
</section>



<section id="teacher-footer">
<p class="button-wrapper">
    <a class="button type-2" href="<?php get_site_url(); ?>/teacher">
      教師一覧に戻る
    </a>
  </p>
  <section class="banner-section">
      <a href="<?php get_site_url(); ?>/account/" class="banner">
        <figure>
          <img src="<?php get_site_url(); ?>/wp-content/uploads/2020/02/arinks-signup-banner.jpg" alt="ARINKSで学んで見ませんか？">
        </figure>
      </a>
  </section>
</section>