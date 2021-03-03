<?php  



$page_title = 'プロフィール編集';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">

        <!-- フォーム -->
        <form method="POST" class="form">
            <div class="form__head">
                <h2 class="title form__title">プロフィール編集</h2>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">ユーザーネーム</label>
                    <input type="text" name="user_name" value="" class="form__input" id="user_name" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">アカウント名</label>
                    <input type="text" name="account_name" value="" class="form__input" id="account_name" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">誕生日</label>
                    <input type="date" name="birthday" value="" class="form__input" id="birthday" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">年齢</label>
                    <input type="number" name="age" value="" class="form__input" id="age" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">電話番号</label>
                    <input type="text" name="tel" value="" class="form__input" id="tel" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">メールアドレス</label>
                    <input type="text" name="email" value="" class="form__input" id="email" autofocus>
                    <span class="err-msg"></span>
                </div>
                <input type="hidden" name="csrf_token" value="">
                <div class="form__foot">
                    <input type="submit" value="変更" class="btn-submit">
                </div>
            </div>
        </form>

    </div>
</main>

<?php require_once 'templete/footer.php';?>

</body>
</html>