<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <main>
    <main>
        <div class="contact-firm__content">
            <div class="contact-firm__heading">
                <h2>お問い合わせ</h2>
            </div>

            <form action="" class="form">

                <!--名前-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__input--value">
                        <label>山田　太郎</label>
                    </div>
                </div>

                <!--性別-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                    </div>
                    <div class="form__input--value">
                        <label>男性</label>
                    </div>
                </div>

                <!--メールアドレス-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__input--value">
                        <label>test@example.com</label>
                    </div>
                </div>

                <!--郵便番号-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                    </div>
                    <div class="form__input--value">
                        <label>123-4567</label>
                    </div>
                </div>

                <!--住所-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                    </div>
                    <div class="form__input--value">
                        <label>東京都渋谷区千駄ヶ谷1-2-3</label>
                    </div>
                </div>

                <!--建物名-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__input--value">
                        <label>千駄ヶ谷マンション101</label>
                    </div>
                </div>

                <!--ご意見-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                    </div>
                    <div class="form__input--value">
                        <label>
                            いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。
                        </label>
                    </div>
                </div>

                <!--確認ボタン-->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>

                <!--修正リンク-->
                <a class="fix__link" href="/">
                    修正する
                </a>

            </form>
        </div>
  </main>
</body>
</html>