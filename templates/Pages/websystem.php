<?php
$this->assign('title', $catchup['title']);
?>
<?= $this->Element('catchupsub'); ?>

<div class="uk-section uk-text-center">
    <div class="card-block uk-container uk-text-center">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">こんな問題を抱えていませんか？</h2>
        <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" uk-grid uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('excel-icon.svg', ['class' => 'product-icon', 'style' => 'width:100px', 'escape' => false]); ?>
                <h4 class="uk-margin"><b>エクセルでの管理が限界</b></h4>
                <p>データが多くなりすぎて動作が重くなったり、煩雑になってきている。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('automation-icon.svg', ['class' => 'product-icon', 'style' => 'width:100px', 'escape' => false]); ?>
                <h4 class="uk-margin"><b>作業を自動化したい</b></h4>
                <p>毎月決まった作業があり、なんだかんだ時間を取られてしまう。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('documents-icon.svg', ['class' => 'product-icon', 'style' => 'width:100px', 'escape' => false]); ?>
                <h4 class="uk-margin"><b>書類の作成が大変</b></h4>
                <p>見積書や契約書などの作成に時間を取られたり、書類が多くて手に負えない。</p>
            </div>
            <div class="uk-width-1-4@m">
                <?= $this->Html->image('optimization-icon.svg', ['class' => 'product-icon', 'style' => 'width:100px', 'escape' => false]); ?>
                <h4 class="uk-margin"><b>自社システムが欲しい</b></h4>
                <p>自社の業務内容に特化したシステムを開発したい。</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-text-center">
    <div class="card-block uk-container uk-text-center">
        <h2 class="heading1" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">開発の流れ</h2>
        <div class="uk-grid uk-flex uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small; repeat: true;">
                    <span>Step.1</span>
                    <div>
                        <h3>打ち合わせ・ヒアリング</h3>
                        <p>システム開発で必要となる情報のヒアリングを行い、システム開発の目的や必要性、問題を解決するために必要な情報を収集します。</p>
                        <div class="step-subbox">
                            <b><i class="uk-icon" uk-icon="icon:info; ratio:.9;"></i>補足事項</b>
                            <div class="step-subbox-body">
                                <ul>
                                    <li>インターネット経由のビデオ会議も可能ですので、お気軽にお申し付けください。</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                    <span>Step.2</span>
                    <div>
                        <h3>企画・提案</h3>
                        <p>ご提供いただいた情報をもとに開発するシステムの企画を行い、目的を達成するための開発提案を行います。</p>
                    </div>
                </div>

                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                    <span>Step.3</span>
                    <h3>ご契約</h3>
                    <p>
                        提案書の作成が終わりましたら、ご提案させていただくため御社へお伺い致します。<br />
                        ご提案内容に承諾をいただけましたら、お申込書にご記入いただきます。
                    </p>
                    <di class="step-subbox">
                        <b><i class="uk-icon uk-text-warning" uk-icon="icon:warning; ratio:.9;"></i>遠方のお客様</b>
                        <div class="step-subbox-body">
                            <ul>
                                <li>対面でのお打ち合わせが困難な場合は、インターネット経由のWeb会議でご提案させていただきます。</li>
                                <li>ご提案内容に承諾をいただけましたら、お申込書を郵送致しますのでご記入の上、ご返送をお願い致します。</li>
                            </ul>
                        </div>
                    </di>
                </div>

                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                    <span>Step.4</span>
                    <h3>制作・開発</h3>
                    <p>システム設計書をもとにコーディングを開始致します。</p>
                </div>

                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                    <span>Step.5</span>
                    <h3>事前確認・テスト</h3>
                    <p>納品前に一つひとつの動作やエラーなど、システムがしっかりと機能するかテストを行います。</p>
                </div>

                <div class="step-box" uk-scrollspy="cls:uk-animation-slide-left-small;repeat: ture;">
                    <span>Step.6</span>
                    <h3>納品・研修</h3>
                    <p>PCへのインストールや操作説明など、担当者がシステムを扱えるようにサポート致します。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-text-center heading1">制作実績</h2>
        <div class="case-block">
            <dvv class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-hidden@m">
                        <p class="uk-text-muted uk-margin-remove">人材派遣会社</p>
                        <h4 class="uk-margin-remove-top">>書類管理からシステム管理へ移行し業務を効率化！</h4>
                    </div>
                    <?= $this->Html->image('6-2.png', ['class' => 'achieve-img']); ?>
                </div>
                <div class="uk-width-1-2@m case-box-right">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-text-small">人材派遣会社</p>
                        <h4 class="uk-margin-remove-top">書類管理からシステム管理へ移行し業務を効率化！</h4>
                    </div>
                    <p class="uk-margin-small-top uk-margin-small-bottom">
                        ホームページと連携した派遣管理システムを開発。<br />
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
                </div>
            </dvv>

            <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-hidden@m">
                        <p class="uk-text-muted uk-margin-remove">卸販売事業者</p>
                        <h4 class="uk-margin-remove-top">受発注システムとの連携で業務を効率化！</h4>
                    </div>
                    <?= $this->Html->image('7-2.png', ['class' => 'achieve-img']); ?>
                </div>
                <div class="uk-width-1-2@m case-box-right">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-text-small">卸晩梅事業者</p>
                        <h4 class="uk-margin-remove-top">受発注システムとの連携で業務を効率化！</h4>
                    </div>
                    <p class="uk-margin-small-top uk-margin-small-bottom">
                        ECサイトと連携した受発注システムを開発。<br />
                        受注管理から発送まで一元で管理することにより、業務を効率化。<br />
                        注文メールや発送メール等のメール送信機能を搭載。
                    </p>
                    <p class="pill-title">搭載機能</p>
                    <ul class="pill-box">
                        <li class="pill-badge-list">レスポンシブ対応</li>
                        <li class="pill-badge-list">クラウドシステム</li>
                        <li class="pill-badge-list">ECサイト</li>
                        <li class="pill-badge-list">□決済機能</li>
                        <li class="pill-badge-list">□買い物かご</li>
                        <li class="pill-badge-list">□顧客管理</li>
                        <li class="pill-badge-list">受発注管理</li>
                        <li class="pill-badge-list">領収書出力</li>
                        <li class="pill-badge-list">メール送信</li>
                    </ul>
                </div>
            </div>

            <div class="uk-grid" uk-grid data-uk-scrollspy="cls:uk-animation-slide-left-small;repeat: true;">
                <div class="uk-width-1-2@m case-box-left">
                    <div class="uk-hidden@m">
                        <p class="uk-text-muted uk-margin-remove">保育園</p>
                        <h4 class="uk-margin-remove-top">自動シフト作成で3日かかっていた作業が10分に！</h4>
                    </div>
                    <?= $this->Html->image('9-2.png', ['class' => 'achieve-img']); ?>
                </div>
                <div class="uk-width-1-2@m case-box-right">
                    <div class="uk-visible@m">
                        <p class="uk-text-muted uk-margin-remove uk-text-small">保育園</p>
                        <h4 class="uk-margin-remove-top">自動シフト作成で3日かかっていた作業が10分に！</h4>
                    </div>
                    <p class="uk-margin-small-top uk-margin-small-bottom">
                        3日かかっていたシフト作成業務が、システムの導入により10分に大幅削減！<br />
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
                </div>
            </div>
        </div>
    </div>
</div>