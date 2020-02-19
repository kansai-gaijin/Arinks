<?php if( !$logged_in ) : ?>

<section id="free-entry">
  <div class="free-entry-title">
    <div class="wrapper">
      <h2>無料ユーザー登録<br/>お申込み</h2>
    </div>
  </div>
  <div class="free-entry-form">
    <div class="wrapper">
      <form>
        <div class="form-block">
          <label>お名前 (半角英字) :</label>
          <div class="row">
            <div class="col-6">
              <input type="text" placeholder="名字　例：SATO" />
            </div>
            <div class="col-6">
              <input type="text" placeholder="名前　例：TARO" />
            </div>
          </div>
        </div>

        <div class="form-block">
          <label>メールアドレス：</label>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <input type="text" placeholder="例：tarou@example.com" />
            </div>
          </div>
        </div>

        <div class="form-block">
          <label>お電話番号：</label>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <input type="text" placeholder="例：08012341234" />
            </div>
          </div>
        </div>

        <div class="form-block">
          <label>ユーザー名：</label>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <input type="text" placeholder="例：englishstudent" />
            </div>
          </div>
        </div>

        <p class="button-wrapper">
          <button type="submit">無料ユーザー登録を申し込む</button>
        </p>
      </form>
      <p class="form-privacy">
        ※「<a href="http://eikaiwa.com/law/">利用契約</a>」及び「<a href="http://eikaiwa.com/privacy/">プライバシーポリシー</a>」の同意にお進み下さい。
      <p>
    </div>
  </div>
</section>

<?php endif; ?>