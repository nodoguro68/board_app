<?php  

// 認証キーを送信

$page_title = 'パスワード再発行認証キー入力ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">

        <!-- フォーム -->
        <form method="POST" class="form">
            <div class="form__head">
                <h2 class="title form__title">パスワード再発行</h2>
                <p class="form__description">ご指定のメールアドレスお送りした【パスワード再発行認証】メール内にある「認証キー」をご入力ください。</p>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">認証キー</label>
                    <input type="text" name="token" value="" class="form__input" id="token">
                    <span class="err-msg"></span>
                </div>
                <input type="hidden" name="csrf_token" value="">
                <div class="form__foot">
                    <input type="submit" value="再発行する" class="btn-submit">
                </div>
            </div>
        </form>

    </div>
</main>

<?php require_once 'templete/footer.php';?>