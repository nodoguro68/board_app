<?php

$page_title = 'トップページ';

require_once 'templete/head.php';
require_once 'templete/header.php';

?>

<main class="main">
    <div class="container">

        <section class="section">
            <div class="section__header">
                <h2 class="title">投稿一覧</h2>
            </div>

            <div class="section__main">
                <div class="card__inner">
                    <div class="card">
                        <a href="photo_detail.php?post_id=" class="card__date">
                        </a>
                        <a href="photo_detail.php?post_id=" class="card__link">
                            <div class="card__head">
                                <img src="../uploads/" alt="投稿画像" class="card__img">
                            </div>
                            <div class="card__foot">
                                <span class="card__account"></span>
                                <h3 class="card__title"></h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </section>

        <div class="count__inner">
            <span class="count__post">post</span>
        </div>
    </div>
</main>

<?php require_once 'templete/footer.php'; ?>