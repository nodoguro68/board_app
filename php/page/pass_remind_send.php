<?php  

// メールアドレスを送信
// メールが送られてくる 認証キー


$page_title = 'パスワード再発行ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link__inner">
            <a href="mypage.php" class="return__link">＞マイページへ戻る</a>
        </div>

        <!-- フォーム -->
        <form method="POST" class="form">
            <div class="form__head">
                <h2 class="title form__title">パスワード再発行</h2>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">メールアドレス</label>
                    <input type="text" name="email" value="" class="form__input" id="email" autofocus>
                    <span class="err-msg"></span>
                </div>
                <input type="hidden" name="csrf_token" value="">
                <div class="form__foot">
                    <input type="submit" value="送信" class="btn-submit">
                </div>
            </div>
        </form>

    </div>
</main>

<?php require_once 'templete/footer.php';?>

</body>

</html>