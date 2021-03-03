<?php 

$page_title = '投稿詳細ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';

?>

    <main class="main">
        <div class="container">
            <div class="link__inner">
                <a href="index.php?" class="return__link">＞戻る</a>
            </div>

            <!-- 自分の投稿 -->
            <form method="POST" class="form form__post" enctype="multipart/form-data">
                <div class="form__header">
                    <h2 class="title form__title">新規投稿</h2>
                </div>
                <div class="form__main">
                    <div class="err-msg__area">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__group-img">
                        <label class="form__label">画像を選択</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input type="file" name="post" class="img-file" id="imgFile">
                        <img src="" class="preview" id="preview" alt="プレビュー画像">
                    </div>
                    <div class="form__group">
                        <textarea name="comment" id="comment" class="comment" placeholder="コメントを入力"></textarea>
                        <span class="err-msg"></span>
                    </div>
                    <div class="counter__area">
                        <span class="count" id="counter">0</span>/200
                    </div>
                </div>
                <div class="form__foot">
                    <!-- 編集か削除 -->
                    <input type="submit" name="post" value="投稿" class="btn-submit">
                </div>
            </form>

            <!-- 自分以外のユーザーの投稿 -->
            <div class="post__inner">
                <div class="post__head">
                    <span class="post__date"></span>
                    <span class="post__account-name"></span>
                </div>
                <div class="post__main">
                    <img src="../uploads/" alt="投稿画像" class="photo-img">
                </div>
                <div class="post__foot">
                    <span class="post__comment"></span>
                </div>
            </div>
            
        </div>
    </main>

    <?php require_once 'templete/footer.php'; ?>

</body>
</html>