<?php 

$page_title = 'ログイン';

require_once 'templete/head.php';
require_once 'templete/header.php';

?>

    <main class="main">
        <div class="container">
            
            <!-- フォーム -->
            <form method="POST" class="form">
                <div class="form__header">
                    <h2 class="form__title">ログイン</h2>
                </div>
                <div class="form__main">
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
                        <label class="form__label"><input type="checkbox" class="form__input-checkbox" name="pass_save">次回ログインを省略する</label>
                    </div>
                    <div class="form__foot">
                        <input type="submit" value="ログイン" class="btn-submit">
                    </div>
                </div>
            </form>

        </div>
    </main>

    <?php require_once 'templete/footer.php';?>
    
</body>
</html>