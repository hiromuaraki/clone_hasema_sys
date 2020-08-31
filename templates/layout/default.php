<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $this->fetch('title') ?> | Hasema System</title>
    <?= $this->Html->meta('icon') ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="HSystem">
    <link rel="apple-touch-icon" href="icons/icon-192x192.png">
    <link rel="manifest" href="manifest.json">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?= $this->Html->css('styles.css?20200514-02'); ?>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script>lazyload()</script>
    
    <?php // Google Analytics ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-50645166-9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-50645166-9');
    </script>

    <?php // og ?>
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $this->Url->build(['controller' => $this->request->getParam('controller'), 'action' => $this->request->getParam('action')]); ?>">
    <meta property="og:title" content="<?= $this->fetch('title') ?> | Hasema System（ハセマシステム）">
    <meta property="og:description" content="Webを活用したホームページ制作・Webサービス・業務システムまで幅広く開発を行っております。">
    <meta property="og:image" content="<?= $this->Url->build($this->Url->image('logo-square.jpg')); ?>">
    <?php /*
    ## service worker
    <script defer src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.2.0/firebase-messaging.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>
    <script defer src="/firebase.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('sw.js')
                    .then((reg) => {
                        console.log('Service worker registered.', reg);
                    });
            })
        }
    </script>
    */ ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Element('offcanvas'); ?>

    <div class="uk-container-expand">
        <?= $this->Element('header'); ?>

        <?= $this->fetch('content'); ?>
    </div>
    
    <?= $this->Element('footer'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit-icons.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <?= $this->Element('script'); ?>
</body>
</html>
