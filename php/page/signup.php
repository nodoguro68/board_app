<?php  

$page_title = 'ユーザー登録';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">

        <!-- フォーム -->
        <form method="POST" class="form">
            <div class="form__head">
                <h2 class="title form__title">ユーザー登録</h2>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">アカウント名</label>
                    <input type="text" name="username" value="" class="form__input" id="username" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">メールアドレス</label>
                    <input type="text" name="email" value="" class="form__input" id="email" autofocus>
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">パスワード<span class="note">*半角英数字8文字以上で入力してください</span></label>
                    <input type="password" name="pass" value="" class="form__input" id="pass">
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">パスワード（再入力）</label>
                    <input type="password" name="pass_re" value="" class="form__input" id="pass_re">
                    <span class="err-msg">></span>
                </div>
                <input type="hidden" name="csrf_token" value="">
                <div class="form__foot">
                    <input type="submit" value="登録" class="btn-submit">
                </div>
            </div>
        </form>

    </div>
</main>

<?php require_once 'templete/footer.php';?>

</body>

</html>