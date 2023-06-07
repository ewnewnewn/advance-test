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
            <div class="contact-firm__content">
                <div class="contact-firm__heading">
                    <h2>お問い合わせ</h2>
                </div>

                <form class="form" action="/contacts" method="post" >
                    @csrf

                    <!--名前-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                        </div>
                        <div class="form__input--value">
                            <input type="text" name="lastname" value="{{$contact['lastname']}}" readonly/>
                            <input type="text" name="firstname" value="{{$contact['firstname']}}"readonly/>
                        </div>
                    </div>

                    <!--性別-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                        </div>
                        <div class="form__input--value">
                            @if($contact['gender']=1)
                                <p>男性</p>
                                <input type="hidden" name="gender" value="1">
                            @elseif($contact['gender']=2)
                                <p>女性</p>
                                <input type="hidden" name="gender" value="2">                        
                            @endif
                        </div>
                    </div>

                    <!--メールアドレス-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                        </div>
                        <div class="form__input--value">
                            <input type="email" name="email" value="{{$contact['email']}}" readonly/>
                        </div>
                    </div>

                    <!--郵便番号-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">郵便番号</span>
                        </div>
                        <div class="form__input--value">
                            <input type="text" name="postcode" value="{{$contact['postcode']}}"readonly/>
                        </div>
                    </div>

                    <!--住所-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">住所</span>
                        </div>
                        <div class="form__input--value">
                            <input type="text" name="address" value="{{$contact['address']}}"readonly/>
                        </div>
                    </div>

                    <!--建物名-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">建物名</span>
                        </div>
                        <div class="form__input--value">
                            <input type="text" name="building_name" value="{{$contact['building_name']}}"readonly/>
                        </div>
                    </div>

                    <!--ご意見-->
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">ご意見</span>
                        </div>
                        <div class="form__input--value">
                            <textarea name="opinion" cols="30" rows="10" readonly>
                                {{$contact['opinion']}}
                            </textarea>
                        </div>
                    </div>

                    <!--確認ボタン-->
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>

                    <!--修正リンク-->
                    <form class="fix" action="" method="post">
                        @csrf
                        <a class="fix__link" href="/contacts">
                            修正する
                        </a>
                    </form>
                </form>
            </div>
        </main>
    </body>
</html>