<?= $this->Element('contact'); ?>

<footer>
    <div class="uk-container">
        <div class="uk-section-small">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-text-center uk-text-left@m">
                        <?= $this->Html->link($this->Html->image('header-logo2-white.svg', ['style' => 'max-width:300px;']), ['controller' => 'Pages', 'action' => 'index'], ['escape' => false]); ?>
                    </div>
                    <p></p>
                </div>
                <div class="uk-width-1-3@m">
                    <b>Page Links</b>
                    <ul class="uk-list uk-light">
                        <li><?= $this->Html->link('ホーム <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['controller' => 'Pages', 'action' => 'index'], ['escape' => false]); ?></li>
                        <li><?= $this->Html->link('Web制作 <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['controller' => 'Pages', 'action' => 'webpage'], ['escape' => false]); ?></li>
                        <li><?= $this->Html->link('システム開発 <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['controller' => 'Pages', 'action' => 'websystem'], ['escape' => false]); ?></li>
                        <li><?= $this->Html->link('お問い合わせ <i class="uk-icon" uk-icon="icon:arrow-right;"></i>', ['controller' => 'Pages', 'action' => 'contact'], ['escape' => false]); ?></li>
                    </ul>
                </div>
                <div class="uk-width-1-3@m">
                    <b>Contact Us</b>
                    <p><b>北九州事業所</b><br />〒803-0833<br />福岡県北九州市小倉北区朝日ヶ丘2-1-403</p>
                    <p><b>福岡営業所</b><br />〒812-0018<br />福岡県福岡市博多区住吉2丁目19-22-108<br />TEL：<?= $this->Html->link('092-292-2488', 'tel:092-292-2488'); ?><br /></p>
                </div>
            </div>
        </div>
        <div class="uk-text-center">
            <p class="uk-margin-remove uk-padding-small">&copy; Copyright 2019 Hasema System All Right Reserved.</p>
        </div>
    </div>
</footer>