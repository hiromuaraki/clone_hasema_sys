<?php 
    $this->assign('title', $catchup['title'] . '｜Hasema System');
?>

<?= $this->Element('catchupsub'); ?>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m uk-first-column">
				<h4 class="uk-heading-divider uk-text-center">お問い合わせありがとうございます。</h4>
				<div class="uk-margin-large-bottom uk-text-center">
					<p>お問い合わせの内容によって返答の時間が異なる場合がありますので、予めご了承ください。<br />後日、担当者よりご連絡いたします。</p>
				</div>
				<div class="uk-text-center">
					<?= $this->Html->link('ホームへ戻る', ['action' => 'index'], ['class' => 'link-button link-button-small']); ?>
				</div>
            </div>
        </div>
    </div>
</div>