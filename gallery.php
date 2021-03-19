<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/common/favicon.ico">
    <link rel="apple-touch-icon" href="./images/common/apple-touch-icon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MaedaDesignRoom">
    <meta property="og:url" content="https://nukedasou.maeda-design-room.net/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="たぬきぎゃらりぃ｜前田デザイン室">
    <meta property="og:description" content="これは社会実験だ。現状からぬけだしたい人たちによる、等身大のさらけ出しがここに。" />
    <meta property="og:image" content="https://nukedasou.maeda-design-room.net/images/common/ogp.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description"
        content="これは社会実験だ。現状からぬけだしたい人たちによる、等身大のさらけ出しがここに。オンラインコミュニティ前田デザイン室のメンバーたちによる、１年間のリアルな「ぬけだし」の記録。">
    <title>たぬきぎゃらりぃ｜前田デザイン室</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link href="path/to/lightbox.css" rel="stylesheet" /> -->
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500;700;800&family=Noto+Sans+JP:wght@500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- htmlspecialchars -->
    <?php
    function h($s)
    {
        return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }
  ?>

    <!-- Start Header -->
    <header class="l-header p-header">
        <div class="l-flex l-container">
            <h1 class="p-header__logo"><a href="#"><span class="screen-reader-txt">ぬけだ荘</span><img
                        src="images/common/nukedasou-logo.png" alt="ぬけだ荘"></a></h1>
            <p class="p-header__maede"><a href="https://whats.maeda-design-room.net/" target="_blank"
                    rel="noopener noreferrer"><img src="images/common/maede_logo2.png" alt="前田デザイン室"></a></p>
            <nav class="p-header__nav">
                <ul class="l-flex">
                    <li class="p-heder__menu"><a href="#what">はじめに</a></li>
                    <li class="p-heder__menu"><a href="#greeting">管理人あいさつ</a></li>
                    <li class="p-heder__menu"><a href="#residentList">住人名簿</a></li>
                    <li class="p-heder__menu"><a href="#activityReport">活動報告</a></li>
                    <li class="p-heder__menu">
                        <a href="https://whats.maeda-design-room.net/" target="_blank" rel="noopener noreferrer"><span
                                class="screen-reader-txt">前田デザイン室</span><img src="images/common/maede_logo2.png"
                                alt="前田デザイン室CAMPFIREページへ"></a>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- https://lokeshdhakar.com/projects/lightbox2/ -->
    <!-- Start Main -->
    <main class="l-main">
        <section class="p-archive" id="archive">
            <div class="l-container">
                <h2 class="c-title">たぬきぎゃらりい</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- 最終的にcsvでバナー管理できるようにしたい -->
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202008.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202009.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202012.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202008.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202009.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202012.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202008.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202009.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202012.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202008.jpg" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <img src="images/banner/drink202009.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <footer class="l-footer">
        <p class="p-footer__logo"><img src="images/common/maede_logo.png" alt="前田デザイン室"></p>
        <p class="p-footer__address"><small>&copy; 2020 前田デザイン室</small></p>
    </footer>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/inview.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--<script src="path/to/lightbox.js"></script> -->
    <script src="js/swiper.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>