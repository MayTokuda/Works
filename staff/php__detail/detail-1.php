<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="../style.css">
        <title>テラノデザイン工房 | スタッフ１</title>
    </head>

    <body>
        <!-- ヘッダー -->
        <header class="header">
            <div class="header__inner">
                <div class="header__item">
                    <h1 class="site-title"><a href="#"><img src="../img/logo.png" alt=""></a></h1>
                    <div class="header__link visible-pc"><a href="index.php">スタッフ紹介</a></div>
                </div>
                <!-- パンくず -->
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__item"><a href="#">HOME</a></li>
                        <li class="breadcrumb__item"><a href="../index.php">スタッフ紹介</a></li>
                        <li class="breadcrumb__item"><span aria-current="location">名前が入ります（職種が入ります）</span></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div id="detail-page" class="container detail-page">
            <main class="main">
                <div class="staff__box">
                    <h2 class="page-title">名前が入ります（職種が入ります）</h2>

                    <img class="staff__img" src="../img/staff-1.png" alt="">
                    <time class="staff__date">2022年3月1日（火）</time>
                    <ul class="staff__sns">
                        <a class="staff__sns__link" href="twitter://”">T</a>
                        <a class="staff__sns__link" href="fb://">F</a>
                    </ul>
                    <!-- 記事 -->
                    <ul class="article__list">
                        <!-- 画像が右もしくは画像なしの場合 -->
                        <li class="article__item">
                            <h4 class="article__title">毎日がワクワクの連続です</h4>
                            <img class="article__img__right" src="../img/article-img.jpg" alt="" oncontextmenu="return false;">
                            <p class="article__text visible-pc">インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビュー
                            </p>
                            <p class="article__text visible-sp">インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                            </p>
                        </li>
                        <!-- 画像が左の場合 -->
                        <li class="article__item">
                            <h4 class="article__title">専門性を身に付けて仕事の幅を広げる</h4>
                            <img class="article__img__left" src="../img/article-img.jpg" alt="" oncontextmenu="return false;">
                            <p class="article__text visible-pc">インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビュー<br>
                                <br>
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストテキストインタビューテキストインタビューテキストインタビュー
                            </p>
                            <p class="article__text visible-sp">インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                                インタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキストインタビューテキスト
                            </p>  
                        </li>
                        <div class="continue">●<br>●<br>●</div>
                        
                    </ul>
                </div>
                <!-- 一覧へのリンク -->
                <a class="staff-list__more-btn" href="../list.php">スタッフ一覧へ戻る<span class="arrow-right icon more-btn__icon"></span></a>

                <!-- ページネーション -->
                <ul class="pagination">
                    <li class="pagination__item">
                        <a class="pagination__link back" href="#"><span class="pagination-left icon"></span>前へ</a>
                    </li>
                    <li class="pagination__item">
                        <a class="pagination__link next" href="#">次へ<span class="pagination-right icon"></span></a>
                    </li>
                </ul>

            </main>

            <aside class="interview visible-pc">
                <!-- インタビュー -->
                <h3 class="interview__title">インタビュー</h3>
                <div class="interview__list">
                    <a class="interview__item" href="#">
                        <img  class="interview__img" src="../img/staff-2.png" alt="" >
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img  class="interview__img" src="../img/staff-3.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-4.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-5.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-6.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-7.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-8.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-9.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-10.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                    <a class="interview__item" href="#">
                        <img class="interview__img" src="../img/staff-11.png" alt="">
                        <div class="interview__detail">
                            <h5 class="interview__name">名前が入ります（職種が入ります）</h5>
                            <time class="interview__date">2022年3月1日（火）</time>
                        </div>
                    </a>
                </div>
            </aside>

        </div>

        <!-- aside -->
        <?php include "../php__aside.php" ?>

        <!-- フッター -->
        <?php include "../footer.php" ?>
        
    </body>
</html>