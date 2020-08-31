    <!-- セクション　ヘッダー -->
    <header class="catchup">
        <div class="catchup-back uk-center-text uk-background-cover" style="position:relative; top:-80px;">
            <div class="catchup-appicon uk-text-center uk-background-cover">
                <div class="uk-container">
                    <div class="catchup-box">
                        <div class="uk-position-relative">
                            <h1 class="index-title">高機能Web開発</h1>
                            <?= $this->Html->image('title-back-min.png', ['alt' => '', 'class' => 'index-title-bg']); ?>
                        </div>
                        <p></p>
                        <!-- ここからスライダー設定 -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><?= $this->Html->image('catchup-device1-min.png', ['class' => 'catchup-display', 'data-uk-scrollspy' => 'cls:uk-animation-fade;']); ?></div>
                                <div class="swiper-slide"><?= $this->Html->image('catchup-device2-min.png', ['class' => 'catchup-display', 'data-uk-scrollspy' => 'cls:uk-animation-fade;']); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- セクション　お知らせ -->
    <section class="uk-section uk-text-center">
        <header class="uk-container">
            <h2 class="heading1" uk-scrollspy="cls: uk-animation-slide-left-small;repeat:true;">お知らせ</h2>
            <section class="uk-grid uk-flex uk-flex-center" uk-grid>
                <article class="uk-width-2-3@m">
                    <table class="uk-table uk-table-divider uk-table-hover uk-text-left uk-scrollspy-inview uk-animation-slide-left-small" uk-scrollspy="cls:uk-animaiton-slide-left-small; repeat:true;">
                        <thead>
                            <tr>
                                <th>日付</th>
                                <th>お知らせ内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //後から修正　動的にデータを取得するように変更する 
                            ?>
                            <tr>
                                <td>2020.03.13</td>
                                <td class="uk-flex uk-flex-middle">補助金を活用したWEB制作について</td>
                            </tr>
                            <tr>
                                <td>2020.03.13</td>
                                <td class="uk-flex uk-flex-middle">令和元年度補正予算補助金の公募要領が公開されました</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>
        </header>
    </section>

    <!-- セクション　サービスブロック -->
    <section class="uk-section uk-text-center">
        <header class="index-service-block">
            <div class="uk-container">
                <article class="uk-section">
                    <h2 class="heading1" uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true">サービス</h2>
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-3@m">
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-border-rounded">
                                <?= $this->Html->image('service-web.svg', ['class' => 'service-icon']); ?>
                                <h3 class="uk-card-title">Webページ制作</h3>
                                <p>ホームページやランディングページの制作はこちら</p>
                                <?= $this->Html->link('Webページ制作について<i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'webpage'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>

                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-border-rounded">
                                <?= $this->Html->image('service-synapse.svg', ['class' => 'service-icon']); ?>
                                <h3 class="uk-card-title">Webサービス開発</h3>
                                <p>ECサイトやマッチングサービスなどの開発はこちら</p>
                                <?= $this->Html->link('システム開発について<i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'websystem'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>
                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xalarge uk-border-rounded">
                                <?= $this->Html->image('service-server.svg', ['class' => 'service-icon']); ?>
                                <h3 class="uk-card-title">システム開発</h3>
                                <p>独自のシステムやその他システム開発はこちら</p>
                                <?= $this->Html->link('システム開発について<i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'websystem'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </header>
    </section>

    <!-- セクション　制作実績 -->
    <main class="uk-section">
        <div class="uk-container">
            <h2 class="uk-text-center heading1">制作実績</h2>
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-1">
                    <ul class="tab-link uk-subnav uk-flex uk-flex-center" uk-switcher="connect: .case-block;">
                        <li class="uk-active"><?= $this->Html->link('Webページ', '#'); ?></li>
                        <li><?= $this->Html->link('Webサービス', '#'); ?></li>
                        <li><?= $this->Html->link('システム開発', '#'); ?></li>
                    </ul>
                </div>
            </div>

            <!-- セクションタブ　Webページ -->
            <ul class="uk-switcher case-block uk-margin">
                <!-- リスト　革修理事業者 -->
                <li>
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-text-center uk-hidden@s">
                                <p class="uk-text-muted uk-margin-remove">革修理事業者</p>
                                <h4 class="uk-margin-remove-top"><?= $this->Html->link('革Doctor.COM', 'https://yahata.kawa-doctor.com', ['target' => '_blank']); ?></h4>
                            </div>
                            <?= $this->Html->link($this->Html->image('h1-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('h1-2-min.png')]), 'https://yahata.kawa-doctor.com', ['target' => '_blank', 'escape' => false]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-visible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small">革修理事業者</p>
                                <h3 class="uk-margin-remove-top"><?= $this->Html->link('革Doctor.COM', 'https://yahata.kawa-doctor.com', ['target' => '_blank']); ?></h3>
                            </div>
                            <p>
                                お客様ご希望のWorkPressにて制作。<br />
                                革製品の修理を行っているため修繕記事をユーザー向けコンテンツとして実装し、
                                記事に設置されたSNSシェアボタンでブログを拡散しやすいツールに。<br />
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">WordPress</li>
                                <li class="pill-badge-list">ブログ</li>
                                <li class="pill-badge-list">メールフォーム</li>
                                <li class="pill-badge-list">写真購入</li>
                                <li class="pill-badge-list">画像編集</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('Web制作について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'webpage'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>
                            </div>
                        </div>
                    </div>

                    <!-- リスト　旭管理サービス株式会社 -->
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-text-center uk-hidden@s">
                                <p class="uk-text-meted uk-margin-remove">ビルメンテナンス・管理</p>
                                <h4 class="uk-margin-remove-top"><?= $this->Html->link('旭管理サービス株式会社', 'https://aks-company.com', ['target' => '_blank']); ?></h4>
                            </div>
                            <?= $this->Html->link($this->Html->image('h2-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('h2-2-min.png')]), 'https://aks-company.com', ['target' => '_blank', 'escape' => false]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-visible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small;">ビルメンテナンス・管理</p>
                                <h3 class="uk-margin-remove-top"><?= $this->Html->link('旭管理サービス株式会社', 'https://aks-company.com', ['target' => '_blank']); ?></h4>
                            </div>
                            <p class="uk-margin-small-top uk-margin-small-bottom">
                                PHPにて独自の実績システムを導入。<br />
                                信頼感のある落ち着いたデザインと、イラスト素材を用いた案内を制作。
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">PHP</li>
                                <li class="pill-badge-list">実績システム</li>
                                <li class="pill-badge-list">メールフォーム</li>
                                <li class="pill-badge-list">写真購入</li>
                                <li class="pill-badge-list">画像編集</li>
                                <li class="pill-badge-list">動画作成</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('Web制作について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'webpage'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- セクションタブ　WEBサービス-->
                <!-- リスト　求人マッチングサイト -->
                <li>
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-text-center uk-hidden@s">
                                <p class="uk-text-muted uk-margin-remove uk-text-small;">求人マッチングサイト</p>
                                <h4 class="uk-margin-remove-top"><?= $this->Html->link('つながるネット', 'http://www.tsunagalu.net', ['target' => '_blank']); ?></h4>
                            </div>
                            <?= $this->Html->link($this->Html->image('h3-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('h3-2-min.png')]), 'http://www.tsunagalu.net', ['target' => '_blank', 'escape' => false]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-visible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small;">求人マッチングサイト</p>
                                <h4 class="uk-margin-remove-top"><?= $this->Html->link('つながるネット', 'http://www.tsunagalu.net', ['target' => '_blank']); ?></h4>
                            </div>
                            <p class="uk-margin-small-top uk-margin-small-bottom">
                                ユーザーによる、管理機能はもちろん、サイト運営者専用の管理画面を設置<br />
                                し、会員管理、ページ管理、お知らせ管理、広告管理等のサイト管理が可能。
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">サイト管理機能</li>
                                <li class="pill-badge-list">会員機能</li>
                                <li class="pill-badge-list">求人管理</li>
                                <li class="pill-badge-list">検索機能</li>
                                <li class="pill-badge-list">メールフォーム</li>
                                <li class="pill-badge-list">写真購入</li>
                                <li class="pill-badge-list">動画編集</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('Web制作について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'webpage'], ['class' => 'link-button link-button-small', 'escape' => false]); ?>
                            </div>
                        </div>
                    </div>
                </li>

                <!--  セクションタブ　システム開発　-->
                <!-- リスト　 人材派遣会社-->
                <li>
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-hidden@m">
                                <p class="uk-text-muted uk-margin-remove">人材派遣会社</p>
                                <h4 class="uk-margin-remove-top">書類管理からシステム管理へ移行し業務を効率化！！</h4>
                            </div>
                            <?= $this->Html->image('6-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('6-2-min.png')]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-visible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small">人材派遣会社</p>
                                <h4 class="uk-margin-remove-top">書類管理からシステム管理へ移行し業務を効率化！</h4>
                            </div>
                            <p>
                                ホームページと連携した派遣管理ステム開発。<br />
                                書類管理からシステム管理へ移行し、管理業務の効率化を実現。<br />
                                社内外で入力が可能になり、営業社員との連携が向上。
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">クラウドシステム</li>
                                <li class="pill-badge-list">□ホームページ連携</li>
                                <li class="pill-badge-list">求人票出力</li>
                                <li class="pill-badge-list">求人管理</li>
                                <li class="pill-badge-list">派遣管理</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('システム開発について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'websystem'], ['escape' => false, 'class' => 'link-button link-button-small']); ?>
                            </div>
                        </div>
                    </div>

                    <!-- リスト　卸販売事業者　 -->
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-hidden@m">
                                <p class="uk-text-muted uk-margin-remove">卸販売事業者</p>
                                <h4 class="uk-margin-remove-top">受発注システムとの連携で業務を効率化！</h4>
                            </div>
                            <?= $this->Html->image('7-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('7-2-min.png')]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-visible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small">卸販売事業者</p>
                                <h4 class="uk-margin-remove-top">受発注システムとの連携で業務を効率化！</h4>
                            </div>
                            <p class="uk-margin-small-top uk-margin-small-bottom">
                                ECサイトと連携した受発注システムを開発。<br />
                                受注管理から発送まで一元管理することにより、業務を効率化。<br />
                                注文メールや発送メール等のメール送信機能を搭載。
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">クラウドシステム</li>
                                <li class="pill-badge-list">□ECサイト</li>
                                <li class="pill-badge-list">□決済機能</li>
                                <li class="pill-badge-list">買い物かご</li>
                                <li class="pill-badge-list">□顧客管理</li>
                                <li class="pill-badge-list">受発注管理</li>
                                <li class="pill-badge-list">領収書出力</li>
                                <li class="pill-badge-list">メール送信</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('システム開発について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'websystem'], ['escape' => false, 'class' => 'link-button link-button-small']); ?>
                            </div>
                        </div>
                    </div>

                    <!-- リスト　保育園 -->
                    <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat:true;">
                        <div class="uk-width-1-2@m case-box-left">
                            <div class="uk-hidden@m">
                                <p class="uk-text-muted uk-margin-remove">保育園</p>
                                <h4 class="uk-margin-remove-top">自動シフト作成で3日かかっていた作業が10分に！</h4>
                            </div>
                            <?= $this->Html->image('9-2-min.png', ['class' => 'achieve-img lazyload', 'data-src' => $this->Url->image('9-2-min.png')]); ?>
                        </div>
                        <div class="uk-width-1-2@m case-box-right">
                            <div class="uk-vsible@m">
                                <p class="uk-text-muted uk-margin-remove uk-text-small">保育園</p>
                                <h4 class="uk-margin-remove-top">自動シフト作成で3日かかっていた作業が10分に！</h4>
                            </div>
                            <p class="uk-margin-small-top uk-margin-small-bottom">
                                3日かかっていたシフト作業業務が、システムの導入により10分に大幅削減！<br />
                                アカウント式なので複数の保育園の管理が可能。<br />
                                独自の管理画面を構築し、使いやすいシステムに。
                            </p>
                            <p class="pill-title">搭載機能</p>
                            <ul class="pill-box">
                                <li class="pill-badge-list">レスポンシブ対応</li>
                                <li class="pill-badge-list">クラウドシステム</li>
                                <li class="pill-badge-list">会員機能</li>
                                <li class="pill-badge-list">□自動シフト作成</li>
                                <li class="pill-badge-list">□保育士管理</li>
                                <li class="pill-badge-list">□園児管理</li>
                            </ul>
                            <div class="uk-text-center">
                                <?= $this->Html->link('システム開発について <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['action' => 'websystem'], ['escape' => false, 'class' => 'link-button link-button-small']); ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- TOPページへ移動 -->
        <div class="uk-text-center"><a href="#" uk-totop uk-scroll></a>TOPへ</div>
    </main>
