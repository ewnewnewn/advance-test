<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>

            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <!--名前-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="firstname"required/>
                            <input type="text" name="lastname" required/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__input--sample">
                        <label>例)山田</label>
                        <label>例)太郎</label>
                    </div>
                </div>

                <!--性別-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="radio" name="gender" value="1" checked required/>男性
                            <input type="radio" name="gender" value="2" required/>女性
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <!--メールアドレス-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" required/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__input--sample">
                        <label>例)test@email.com</label>
                    </div>
                </div>

                <!--郵便番号-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="postcode" pattern="\d{3}-?\d{4}" required/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__input--sample">
                        <label>例)123-4567</label>
                    </div>
                </div>


                <!--住所-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" required/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                    <div class="form__input--sample">
                        <label>例)東京都渋谷区千駄ヶ谷1-2-3</label>
                    </div>
                </div>

                <!--建物名-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building_name"/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>  
                    <div class="form__input--sample">
                        <label>例)千駄ヶ谷マンション101</label>
                    </div>
                </div>

                <!--ご意見-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="opinion" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <!--確認ボタン-->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>

            </form>
        </div>
    </main>

    <script>

    </script>
</body>
</html>