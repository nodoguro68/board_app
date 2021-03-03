<?php 

$page_title = 'マイページ';

require_once 'templete/head.php';
require_once 'templete/header.php';

?>
    <main class="main">
        <div class="container">

            <section class="section">
                <div class="section__head">
                    <h2 class="title">マイページ</h2>
                    <div class="section__inner">
                        <form method="GET" class="form__sort">
                            <div class="selectbox">
                                <select name="sort" id="" class="select">
                                    <option value="0">日付の新しい順</option>
                                    <option value="1">日付の古い順</option>
                                </select>
                                <input type="submit" value="検索">
                            </div>
                        </form>
                    </div>

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

            <div class="btn__inner">
                <a href="post.php" class="post__link">＋</a>
            </div>
        </div>
    </main>
    
<?php require_once 'templete/footer.php'; ?>
</body>
</html>