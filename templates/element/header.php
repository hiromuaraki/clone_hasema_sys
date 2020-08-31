<header style="position:relative;z-index:1;">
    <div class="uk-container">
        <div class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <?= $this->Html->link($this->Html->image('header-logo2.png', ['class' => 'header-logo', 'alt' => 'logo']), ['controller' => 'Pages', 'action' => 'index'], ['escape' => false]); ?>
            </div>
            <div class="uk-navbar-center"></div>
            <nav class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="<?= $this->request->getParam('action') === 'index' ? 'uk-active' : '' ; ?>"><?= $this->Html->link('ホーム', ['controller' => 'Pages', 'action' => 'index']); ?></li>
                    <li class="<?= $this->request->getParam('action') === 'webpage' ? 'uk-active' : '' ; ?>"><?= $this->Html->link('Web制作', ['controller' => 'Pages', 'action' => 'webpage']); ?></li>
                    <li class="<?= $this->request->getParam('action') === 'websystem' ? 'uk-active' : '' ; ?>"><?= $this->Html->link('システム開発', ['controller' => 'Pages', 'action' => 'websystem']); ?></li>
                    <li class="<?= $this->request->getParam('action') === 'contact' ? 'uk-active' : '' ; ?>"><?= $this->Html->link('お問い合わせ', ['controller' => 'Pages', 'action' => 'contact']); ?></li>
                </ul>
                <?= $this->Html->link('', '#offcanvas-nav', ['uk-navbar-toggle-icon' => '', 'uk-toggle' => '', 'class' => 'uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon uk-text-white']); ?>
            </nav>
        </div>
    </div>
</header>