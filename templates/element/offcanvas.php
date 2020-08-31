<div id="offcanvas-nav" data-uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
        <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
        <h5 style="margin:5px 0;"><b>ページ案内</b></h5>
        <ul class="uk-nav uk-nav-default">
            <li class="<?= $this->request->getParam('action') === 'index' ? 'uk-active' : ''; ?>">
                <?= $this->Html->link('ホーム', ['controller' => 'Pages', 'action' => 'index']); ?>
            </li>
            <li class="<?= $this->request->getParam('action') === 'webpage' ? 'uk-active' : ''; ?>">
                <?= $this->Html->link('Webページ制作', ['controller' => 'Pages', 'action' => 'webpage']); ?>
            </li>
            <li class="<?= $this->request->getParam('action') === 'websystem' ? 'uk-active' : ''; ?>">
                <?= $this->Html->link('システム開発', ['controller' => 'Pages', 'action' => 'websystem']); ?>
            </li>
            <li class="<?= $this->request->getParam('action') === 'contact' ? 'uk-active' : ''; ?>">
                <?= $this->Html->link('お問い合わせ', ['controller' => 'Pages', 'action' => 'contact']); ?>
            </li>
        </ul>
        <h5 style="margin:5px 0;margin-top:30px;"><b>ハセマシステム</b></h5>
        <p style="margin:5px 0;"><b>お問い合わせ</b><br />TEL：<?= $this->Html->link('092-292-2488', 'tel:092-292-2488', ['style' => 'color:#666;']); ?><br />営業時間：平日／10:00 ~ 19:00</p>
        <p><b>北九州事業所</b><br />〒803-0833<br />福岡県北九州市小倉北区朝日ヶ丘2-1-403</p>
        <p><b>福岡営業所</b><br />〒812-0018<br />福岡県福岡市博多区住吉2丁目19-22-108</p>
    </div>
</div>