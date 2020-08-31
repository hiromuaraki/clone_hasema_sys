<script>
    // let keyList = ['Web制作', 'Webシステム', 'PWA'];
    <?php empty($keyList)? $keyList=json_encode(['Web制作', 'システム開発']) : ''; ?>
    let keyList = <?= $keyList ?>;//グローバル変数
    //letはスコープをブロックとして使う
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        effect: 'fade',
        speed: 800,
        autoplay: {
            delay: 6000
        },


        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + keyList[index] + '</span>';
            },
        },
        thumbs: {
            swiper: textSwiper
        }
    });
    var textSwiper = new Swiper('.swiper-text', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        // If we need pagination
        //サムネイルスライダーの設定
        pagination: {
            //el:ページネーションのセレクタ名
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<a href="#" class="' + className + '">' + keyList[index] + '</a>';
            },
        },
    });
</script>

<?php // reCAPTCHA ?>
<script src="https://www.google.com/recaptcha/api.js?render=6LeUn-gUAAAAAI4YY83IQcCXcmMj62v4ekUavTGo"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LeUn-gUAAAAAI4YY83IQcCXcmMj62v4ekUavTGo', {action: 'homepage'}).then(function(token) {});
});
</script>