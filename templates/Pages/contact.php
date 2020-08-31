<?php
//タイトルの変更
$this->assign('title', $catchup['title']);
?>
<!-- //共通ヘッダーを取得 -->
<?= $this->Element('catchupsub'); ?>

<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <div id="uk-contact-form" class="uk-margin-large uk-text-center">
                    <div>
                        <h4 class="uk-heading-divider uk-text-center">お仕事のご依頼・ご相談・見積もりはこちら</h4>
                        <p>仕事のご依頼・ご相談・お見積りなど、お気軽にお問い合わせください。</p>
                        <?= $this->Form->create(null, ['url' => ['controller' => 'Pages', 'action' => 'mail', 'type' => 'post'], 'id' => 'contactForm', 'onsubmit' => 'return confirm("送信します。よろしいですか？);']); ?>

                        <!-- セクション　フォーム -->
                        <table class="uk-table uk-table-divider uk-table-middle">
                            <tbody>
                                <tr>
                                    <td>ご用件<span class="required">*</span></td>
                                    <td><select name="subject" class="uk-select" required="required">
                                            <option value="1">仕事の依頼</option>
                                            <option value="2">お見積りの請求</option>
                                            <option value="3">制作・開発に関する相談</option>
                                            <option value="4">その他</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>貴社名</td>
                                    <div class="input-text-required">
                                        <td><input type="text" name="company" class="uk-input" id="company"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>ご担当者指名<span class="required">*</span></td>
                                    <div class="input-text-required">
                                        <td><input type="text" name="name" required="required" class="uk-input" id="name"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>電話番号（半角）<span class="required">*</span></td>
                                    <div class="input-text-required">
                                        <td><input type="tel" class="uk-input" name="tel" required="required" id="tel" maxlength="15"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>メールアドレス<span class="required">*</span></td>
                                    <div class="input-text-required">
                                        <td><input type="email" class="uk-input" name="email" required="required" id="email"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>お問い合わせ内容<span class="required">*</span></td>
                                    <div class="input textarea required">
                                        <td><textarea class="uk-textarea" name="content" required="required" id="content" rows="7"></textarea></td>
                                    </div>
                                </tr>
                            </tbody>
                        </table>

                        <!-- セクション　個人情報保護方針 -->
                        <div class="uk-margin uk-overflow-auto uk-bordered" style="height:150px;border:1px solid #666;padding:15px;">
                            <p class="uk-text-left">
                                <font size="3"><strong>ハセマシステム　個人情報保護方針</strong></font><br>
                                <br>
                                　当社は、皆様からお預かりする個人情報を適正かつ効果的に活用させていただくことを経営の最重要事項と位置づけております。
                                そのために、個人情報保護のマネジメントシステムを構築し、以下に掲げるとおり方針を定めます。役員および従業員はこの方針に従い、皆様の権利利益の保護のための不断の努力を続けてまいります。
                                <br>
                                <br>
                                <strong>1.個人情報の適切な取得、利用および提供</strong><br>
                                事業遂行のために必要な範囲内で利用目的を明確に定め、個人情報の取得、利用および提供を適切に行います。取得した個人情報は利用目的の範囲内でのみ　利用し、目的外利用を行わないための措置を講じます。なお、個人情報の取扱いの全部または一部を委託する場合には、十分な保護水準を満たした者を選定し、契約等により適切な措置を講じます。<br>
                                <br>
                                <strong>2.個人情報の取扱いに関する法令、国が定める指針その他の規範の遵守</strong><br>
                                取り扱う個人情報について、個人情報の取扱いに関する法令、国が定める指針およびその他の規範を遵守します。そのために、個人情報保護マネジメントシステムを策定し、適切に運用いたします。<br>
                                <br>
                                <strong>3.個人情報の漏えい、滅失またはき損の防止および是正</strong><br>
                                個人情報への不正アクセス、個人情報の紛失、破壊、改ざん、漏洩等のリスクに対して合理的な安全対策および是正措置を講じます。<br>
                                <br>
                                <strong>4.苦情および相談への対応</strong><br>
                                本人からの当該個人情報の開示、訂正、削除、利用停止等の要請および苦情や相談に対して遅滞無く対応いたします。<br>
                                <br>
                                <strong>5.個人情報保護マネジメントシステムの継続的改善</strong><br>
                                個人情報保護マネジメントシステムを継続的に見直し改善いたします。<br>
                                <br>
                                <strong>6.お問い合せ</strong><br>
                                当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                                ハセマシステム<br>
                                代表　長谷川将士<br>
                                <br>
                                個人情報に関するお問い合わせ先<br>
                                電話．092-292-2488
                            </p>
                        </div>

                        <label class="chek uk-text-center">
                            <p class="uk-text-small">このサイトはGoogleのreCAPTCHAによって保護されています。<br>
                                <?= $this->Html->link('プリバリーポリシー', 'https://policies.google.com/privacy', ['target' => '_blank']); ?>
                                と<?= $this->Html->link('利用規約', 'https://policies.google.com/terms', ['target' => '_blank']); ?>をご確認ください。
                            </p>
                            <input type="hidden" name="check" value="0"><input class="uk-checkbox" type="checkbox" name="check" value="1" required="required">個人情報の取扱いについて同意する
                        </label>
                        <div class="text-center" style="padding:15px;">
                            <button type="submit" class="link-button link-button-small">送信</button>
                            <button type="button" class="link-button link-button-small link-button-danger" id="resetFormButton"><i class="uk-icon" uk-icon="icon:refresh; ratio:.8;"></i>リセット</button>
                        </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>