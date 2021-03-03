<?php  

$page_title = '退会説明ページ';

require_once 'templete/head.php';
require_once 'templete/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link__inner">
            <a href="mypage.php" class="return__link">＞マイページへ戻る</a>
        </div>

        <section class="section">
            <div class="section__head">
                <h2 class="title">退会ページ</h2>
            </div>

            <div class="section__main">
                <p>退会処理の説明</p>
            </div>
        </section>

        <div class="link__inner">
            <a href="signout.php" class="return__link">退会する</a>
        </div>
    </div>
</main>

<?php require_once 'templete/footer.php';?>