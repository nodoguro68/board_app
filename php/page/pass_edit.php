<?php  

$page_title = 'パスワード変更ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link__inner">
            <a href="mypage.php" class="return__link">＞マイページへ戻る</a>
        </div>

        <!-- フォーム -->
        <form method="POST" class="form form__pass-edit">
            <div class="form__head">
                <h2 class="title form__title">パスワード変更</h2>
            </div>
            <div class="form__main">
                <div class="form__group">
                    <label class="form__label">現在のパスワード</label>
                    <input type="password" name="current_pass" value="" class="form__input" id="pass">
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">新しいパスワード<span class="note">*半角英数字8文字以上で入力してください</span></label>
                    <input type="password" name="new_pass" value="" class="form__input" id="pass">
                    <span class="err-msg"></span>
                </div>
                <div class="form__group">
                    <label class="form__label">新しいパスワード（確認）</label>
                    <input type="password" name="new_pass_re" value="" class="form__input" id="new_pass_re">
                    <span class="err-msg">></span>
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