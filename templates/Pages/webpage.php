<!-- <header class="catchup">
    <div class="catchup-back uk-center-text uk-background-cover" style="position:relative; top:-80px;">
        <div class="catchup-appicon uk-text-center uk-background-cover">
            <div class="uk-container">
                <div class="catchup-box">
                    <section class="uk-position-relative">
                        <h1 class="catchup-title">WEB制作</h2>
                    </section>
                </div>
            </div>
        </div>
    </div>
</header> -->
<!-- TOP -->
<?php
$this->assign('title', $catchup['title']);
?>
<?= $this->Element('catchupsub'); ?>

<!-- セクション　記事 -->
<section class="uk-section uk-text-center">
    <section class="card-block uk-container uk-text-center">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">成果の出るWebサイトを目指して</h2>
        <div class="uk-grid" uk-grid uk-scrollspy="cls:uk-animation-slide-left-small; repaet:true;">
            <div class="uk-width-2-5@m">
                <?= $this->Html->image('PDCA.png', ['class' => 'img-60 img-80@s']); ?>
            </div>
            <section class="uk-width-3-5@m uk-text-left uk-flex uk-flex-middle">
                <article>
                    <h4 class="heading2">ITパートナーしてのサポート</h4>
                    <p>
                        ホームページやWEBページを制作した時点では、まだ誰も（GoogleやYahoo！も）その存在を知りま<br />せん。
                        成果の出るWebサイトを目指すためには、まず知ってもらうことから始まります。
                    </p>
                    <p>
                        私たちは、マーケティング・データ収集・分析・改善を繰り返し、Webサイトに成果が出るまで<br />
                        ITパートなとしてサポート致します。
                    </p>
                </article>
            </section>
        </div>

        <section class="uk-grid uk-flex uk-flex-center uk-margin-large-top" uk-grid uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('marketing.svg', ['class' => 'product-icon', 'style' => 'width:100px;']); ?>
                <h4 class="uk-margin"><b>Webマーケティング</b></h4>
                <p>Websサービスを展開するにあた<br />り、Web上の市場を開拓するために<br />様々な戦略を実施します。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('collection.svg', ['class' => 'product-icon', 'style' => 'width:100px;']); ?>
                <h4 class="uk-margin"><b>データ収集</b></h4>
                <p>Webマーケティングを実施する上で得<br />られた様々なデータを収集します。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('analysis.svg', ['class' => 'product-icon', 'style' => 'width:100px;']); ?>
                <h4 class="uk-margin"><b>データ分析</b></h4>
                <p>収集したデータを分析して効果を測定<br />し、効果的な戦略を導き出します。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('improvement.svg', ['class' => 'product-icon', 'style' => 'width:100px;']); ?>
                <h4 class="uk-margin"><b>サービス改善</b></h4>
                <p>分析から得た戦略をもとにWebサイ<br />ト・サービスを改善してきます。</p>
            </div>
        </section>
    </section>
</section>

<section class="uk-section uk-text-center">
    <div class="uk-container">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">欲しいところに、欲しい機能を</h2>
        <section class="service-block">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;" uk-grid>
                <div class="uk-width-1-6@m width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">会員管理</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-users.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">管理機能</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-schedule.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">買い物かご</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-cart.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">多言語対応</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-language.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">自動計算</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-math.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-flex uk-flex-center" data-uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;" uk-grid>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">決済</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-payment.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">ブログ</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-blog.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">マッチング</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-matching.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">書類印刷</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-print.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-width-1-3">
                    <h5 class="uk-margin-small uk-text-bold">etc...</h5>
                    <div class="uk-transition-toggle display-inline-block">
                        <?= $this->Html->image('service-customization.svg', ['class' => 'function-img uk-transition-scale-up uk-transition-opaque']); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="uk-section uk-text-center ">
    <div class="step-block uk-container uk-text-center">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">制作の流れ</h2>
        <div class="uk-grid uk-flex uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">
                    <span>Step.1</span>
                    <article>
                        <h3>打ち合わせ（ヒアリング）</h3>
                        <p>
                            制作予定のホームページ、Webサービスについての詳細やご要望をヒアリングさせていただきます。<br />
                            その後、運営の方向性や目標を設定し、成果を出すために必要な項目を明確にしていきます。
                        </p>
                        <div class="step-subbox">
                            <b><i class="uk-icon" uk-icon="icon:info; rate:.9;"></i>補足事項</b>
                            <div class="step-subbox-body">
                                <ul>
                                    <li>対面でのお打ち合わせが困難な場合は、ヒアリングシートをご用意しておりますので、<?= $this->Html->link('こちらからダウンロード', $this->Url->build('img/hearing_sheet.pdf', ['target' => '_blank'])); ?>してご記入ください。</li>
                                    <li>インターネット経由のビデオ会議も可能ですので、お気軽にお申し付けください。</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">
                    <article>
                        <span>Step.2</span>
                        <h3>企画・提案</h3>
                        <p>
                            ご提供いただいた情報とWebページの設計書をまとめ、制作<i class="uk-icon" uk-icon="icon:triangle-right;"></i> 公開<i class="uk-icon" uk-icon="icon:triangle-right;"></i> 運営までの一連の流れを作成致します。
                        </p>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat:true;">
                    <article>
                        <span>Step.3</span>
                        <h3>提案・契約</h3>
                        <p>
                            提案書の作成が終わりましたら、ご提案させていただくため御社へお伺い致します。
                            ご提案内容に承諾をいただけましたら、お申込書にご記入いただきます。
                        </p>
                        <div class="step-subbox">
                            <b><i class="uk-icon uk-text-warning" uk-icon="icon:warning; rate:.9;"></i>遠方のお客様</b>
                        </div>
                        <div class="step-subbox-body">
                            <ul class="uk-margin-small">
                                <li>対面でのお打ち合わせが困難な場合は、インターネット経由のWeb会議でご提案させていただきます。</li>
                                <li>ご提案内容に承諾をいただけましたら、お申込書を郵送致しますのでご記入の上、ご返送をお願い致します。</li>
                            </ul>
                        </div>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                    <article>
                        <span>Step.4</span>
                        <h3>制作・開発</h3>
                        <p>
                            Webページ設計書をもとにコーディングを開始致します。
                        </p>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                    <article>
                        <span>Step.5</span>
                        <h3>事前確認・テスト</h3>
                        <p>
                            納品前にテストサーバーにてホームページ内容や動作の確認を行い、サイト公開の準備に入ります。
                        </p>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                    <article>
                        <span>Step.6</span>
                        <h3>納品・公開</h3>
                        <p>
                            サーバーへのアップロードが完了すると納品完了となります。<br />
                            納品後、1ヶ月間の修正期間がございますのでお申し付けください（3箇所まで）。
                        </p>
                    </article>
                </section>

                <section class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                    <article>
                        <span>Step.7</span>
                        <h3>サイト運営</h3>
                        <p>
                            ここからがホームページ、Webサービスの始まりです。<br />
                            私たちと一緒にWebサイトを成長させていきましょう。
                        </p>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>

<main class="uk-section uk-text-center">
    <div class="card-block uk-container uk-text-center uk-margin-large-bottom">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">制作比較表</h2>
    </div>

    <div class="card-block card-padding-remove@s uk-container uk-text-center uk-margin-xlarge-bottom">
        <div class="uk-grid" uk-grid uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-body uk-border-rounded uk-position-relative">
                    <span class="card-badge"><i class="uk-icon" uk-icon="icon:cog;ratio:2;"></i></span>
                    <p class="uk-card-title">制作内容</p>

                    <div class="uk-overflow-auto">
                        <table class="management-plan-table uk-table uk-table-small uk-table-divider uk-table-hover uk-table-hover-default uk-background-default">
                            <thead class="uk-background-muted">
                                <tr>
                                    <th></th>
                                    <th>ホームページ</th>
                                    <th>ECサイト</th>
                                    <th>Webサービス</th>
                                </tr>
                            </thead>
                            <tbody class="uk-text-left">
                                <tr>
                                    <td>料金</td>
                                    <td>30万円〜</td>
                                    <td>75万円〜</td>
                                    <td>100万円〜</td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>制作関連</b></td>
                                </tr>
                                <tr>
                                    <td>CakePHP
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>WordPress
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>写真・画像素材取得代行
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>画像素材の作成・編集
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>写真撮影
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>デザイン</b></td>
                                </tr>
                                <tr>
                                    <td>オリジナルデザイン
                                    </td>
                                    <td>6P</td>
                                    <td>12P</td>
                                    <td>12P</td>
                                </tr>
                                <tr>
                                    <td>ページの追加（1P）</td>
                                    <td>10,000円</td>
                                    <td>6,000円</td>
                                    <td>3,000円</td>
                                </tr>
                                <tr>
                                    <td>内容修正
                                    </td>
                                    <td>3箇所無料</td>
                                    <td>3箇所無料</td>
                                    <td>5箇所無料</td>
                                </tr>
                                <tr>
                                    <td>レスポンシブ対応
                                    </td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>機能</b></td>
                                </tr>
                                <tr>
                                    <td>メールフォーム</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>独自フォーム</td>
                                    <td><i class="uk-icon uk-text-muted" uk-icon="icon:minus;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>PWA化</td>
                                    <td><i class="uk-icon uk-text-muted" uk-icon="icon:minus;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>SEO対策</b></td>
                                </tr>
                                <tr>
                                    <td>内部SEO対策</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>表示の高速化</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>キーワード調査</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio:1.7;"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="card-block card-padding-remove@s uk-container uk-text-center">
        <div class="uk-grid" uk-grid uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-body uk-border-rounded uk-position-relative">
                    <span class="card-badge">+</span>
                    <p class="uk-card-title">管理プラン</p>

                    <div class="uk-overflow-auto">
                        <table class="management-plan-table uk-table uk-table-small uk-table-divider uk-table-hover uk-table-hover-default uk-background-default">
                            <thead class="uk-background-muted">
                                <tr>
                                    <th></th>
                                    <th>基本プラン</th>
                                    <th>ITサポート</th>
                                    <th>ITプロ</th>
                                </tr>
                            </thead>
                            <tbody class="uk-text-left">
                                <tr>
                                    <td>料金</td>
                                    <td>5,000円</td>
                                    <td>15,000円</td>
                                    <td>30,000円</td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>メンテナス</b></td>
                                </tr>
                                <tr>
                                    <td>サーバー管理</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check;ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>ドメイン管理</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>メールアドレス管理</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>SSL対応</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>バックアップ</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>ITパートナー</b></td>
                                </tr>
                                <tr>
                                    <td>メールサポート</td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>電話サポート</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>ITサポート</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>戦略会議（予約制）</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td>年１回まで</td>
                                    <td>年３回まで</td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>Webマーケティング</b></td>
                                </tr>
                                <tr>
                                    <td>PPC広告サポート</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>SEO対策</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>MEO対策</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>SNS活用サポート</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>データ収集</b></td>
                                </tr>
                                <tr>
                                    <td>アクセス解析ツール</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>広告媒体アクセス解析ツール</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr>
                                    <td>解析レポートの作成</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                                <tr class="uk-background-muted">
                                    <td colspan="4"><b>サービス改善</b></td>
                                </tr>
                                <tr>
                                    <td>ページコンテンツの追加（１P）</td>
                                    <td>10,000円</td>
                                    <td>6,000円</td>
                                    <td>3,000円</td>
                                </tr>
                                <tr>
                                    <td>ページコンテンツの変更（１箇所）</td>
                                    <td>10,000円</td>
                                    <td>6,000円</td>
                                    <td>3,000円</td>
                                </tr>
                                <tr>
                                    <td>ページデザインの変更</td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon" uk-icon="icon:minus; ratio: 1.7;"></i></td>
                                    <td><i class="uk-icon uk-text-success" uk-icon="icon:check; ratio: 1.7;"></i></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="uk-section">
    <header class="uk-container">
        <h2 class="uk-text-center heading1">制作実績</h2>
        <div class="case-block">
            <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-text-center uk-hidden@s">
                        <p class="uk-text-muted uk-margin-remove">革修理事業者</p>
                        <h4 class="uk-margin-remove-top"><?= $this->Html->link('https://yahata.kawa-doctor.com', ['target' => '_blank']); ?>革Doctor.COM</h4>
                    </div>
                    <?= $this->Html->link($this->Html->image('h1-2.png', ['class' => 'achieve-img']), 'https://yahata.kawa-doctor.com', ['target' => '_blank', 'escape' => false]); ?>
                </div>
                <div class="uk-width-1-2@m case-box-right">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-text-small">革修理事業者</p>
                        <h3 class="uk-margin-remove-top"><?= $this->Html->link('革Doctor.COM', 'https://yahata.kawa-doctor.com', ['target' => '_blank']); ?></h3>
                    </div>
                    <p class="uk-margin-small-top uk-margin-small-bottom">
                        お客様ご希望のWordPressにて制作。<br />
                        革製品の修理を行っているため修繕記事をユーザー向けコンテンツとして実装し、記<br />
                        事に設置されたSNSシェアボタンでブログを拡散しやすいツールに。
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
                        <?= $this->Html->link('サイトを見る <i class="uk-icon" uk-icon="icon:link;"></i>', 'https://yahata.kawa-doctor.com', ['class' => 'link-button link-button-small', 'target' => '_blank', 'escape' => false]); ?>
                    </div>
                </div>
            </div>

            <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-text-center uk-hidden@s">
                        <p class="uk-text-muted uk-margin-remove">ビルメンテナンス・管理</p>
                        <h4 class="uk-margin-remove-top"><?= $this->Html->link('旭管理サービス株式会社', 'https://aks-company.com', ['target' => '_blank']); ?></h4>
                    </div>
                    <?= $this->Html->link($this->Html->image('h2-2.png', ['class' => 'achieve-img']), 'https://aks-company.com', ['target' => '_blank', 'escape' => false]); ?>
                </div>
                <div class="uk-width-1-2@m case-box-right">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-tect-small">ビルメンテナンス・管理</p>
                        <h3 class="uk-margin-remove-top"><?= $this->Html->link('旭管理サービス株式会社', 'https://aks-company.com', ['target' => '_blank', 'escape' => false]); ?></h3>
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
                        <?= $this->Html->link('サイトを見る <i class="uk-icon" uk-icon="icon:link;"></i>', 'https://aks-company.com', ['class' => 'link-button link-button-small', 'target' => '_blank', 'escape' => false]); ?>
                    </div>
                </div>
            </div>

            <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-text-center uk-hidden@s">
                        <p class="uk-text-muted uk-margin-remove">求人マッチングサイト</p>
                        <h4 class="uk-margin-remove-top"><?= $this->Html->link('つながるネット', 'http://www.tsunagalu.net', ['target' => '_blank']); ?></h4>
                    </div>
                    <?= $this->Html->link($this->Html->image('h3-2.png', ['class' => 'achieve-img']), 'http://www.tsunagalu.net', ['target' => '_blank', 'escape' => false]); ?>
                </div>
                <div class="uk-width-1-2@m case-box-rigth">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-text-small">求人マッチングサイト</p>
                        <h3 class="uk-margin-small-top uk-margin-small-bottom"><?= $this->Html->link('つながるネット', 'http://www.tsunagalu.net', ['target' => '_blank', 'escape' => false]); ?></h3>
                    </div>
                    <p>
                        ユーザーによる、求人の管理機能はもちろん、サイト運営者専用の管理画面を設置<br />
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
                        <li class="pill-badge-list">画像編集</li>
                    </ul>
                    <div class="uk-text-center">
                        <?= $this->Html->link('サイトを見る <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', 'http://www.tsunagalu.net', ['class' => 'link-button link-button-small',  'taget' => '_blank', 'escape' => false]); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
</section>