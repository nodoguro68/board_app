<?php  

$page_title = '退会ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link__inner">
            <a href="mypage.php" class="return__link">＞マイページへ戻る</a>
        </div>

        <form method="POST" class="form">
            <div class="form__head">
                <h2 class="title form__title">パスワードを確認</h2>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">退会するにはアカウントに登録されたパスワードを入力してください。</label>
                    <input type="password" name="pass" value="" class="form__input" placeholder="パスワード">
                    <span class="err-msg"></span>
                </div>
                <input type="hidden" name="csrf_token" value="">
                <div class="form__foot">
                    <input type="submit" value="退会する" class="btn-submit">
                </div>
            </div>
        </form>
    </div>
</main>

<?php require_once 'templete/footer.php';?>

</body>

</html>