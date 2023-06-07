<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
    <!--ヘッダー-->
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>管理システム</h2>
        </div>
    </div>
    <!--検索条件-->
    <div class="search-condition__content">
        <!--1行目-->
        <div class="search-condition__man">
            <div class="search-condition__name">
                <span class="search-condition__namelabel--item">お名前</span>
                <input class="search-condition__nameinput" type="text" name="name"/>
            </div>
            <div class="search-condition__gender">
                <span class="search-condition__genderlabel--item">性別</span>
                <input type="radio" name="gender" class="search-condition__genderradio" checked>全て
                <input type="radio" name="gender" class="search-condition__genderradio">男性
                <input type="radio" name="gender" class="search-condition__genderradio">女性                
            </div>
        </div>
        <!--2行目-->
        <div class="search-condition__day">
            <div class="search-condition__day--title">
                <span class="search-condition__daylabel--item">登録日</span>
                
                <div class="search-condition__day"--input>
                    <input class="search-condition__startinput" type="date" name="start"/>
                    <label>～</label>
                    <input class="search-condition__finishinput" type="date" name="finish"/>
                </div>
            </div>
        </div>
        <!--3行目-->
        <div class="search-condition__email">
            <div class="search-condition__email--content">
                <span class="search-condition__emaillabel--item">メールアドレス</span>
                <input class="search-condition__startinput" type="email" name="email"/>
            </div>
        </div>
        <!--検索ボタン-->
        <div class="search-condition__button">
            <button class="search-condition__button-submit" type="submit">検索</button>
        </div>
        <!--リセットリンク-->
        <a class="fix__link" href="/">リセット</a>
    </div>
    <!--検索結果-->
    <div class="search-results__content">
    <table>
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->fullname}}</td>
            <td>{{$contact->gender}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->opinion}}</td>
            <td>
                <form class="delete-form">
                    <div class="delete-form__button">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>