<?php

declare(strict_types=1);
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Mailer;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    /**
     * ホーム画面のタイトル設定
     */
    public function index()
    {
        //後で処理を書く
    }

    /**
     * WEB制作のタイトルを設定
     */
    public function webpage()
    {
        $catchup = [
            'title' => 'WEB制作',
            'image' => '/hasema_system/img/contact-back2.jpg'
        ];
        $this->set(compact('catchup'));
    }
    /**
     * システム開発のタイトルを設定
     */
    public function websystem()
    {
        $catchup = [
            'title' => 'システム開発',
            'image' => '/hasema_system/img/contact-back2.jpg'
        ];
        $this->set(compact('catchup'));
    }

    private function getSubjectList()
    {
        return [
            '1' => '仕事の依頼',
            '2' => 'お見積りの請求',
            '3' => '制作・開発に関する相談',
            '4' => 'その他'
        ];
    }

    /**
     * お問い合わせ画面のタイトル・画像パスをセット
     */
    public function contact()
    {
        $catchup = [
            'title' => 'お問い合わせ',
            'image' => '/hasema_system/img/contact-back2.jpg'
        ];

        $this->set(compact('catchup'));
    }

    /**
     * フォームデータを管理者へ送信
     */
    public function mail()
    {
        //自動のレンダリングを許可しない
        $this->autoRender = false;

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            //差出人名、差し出し元メールアドレス設定
            $mail_name = 'Hasema System（ハセマシステム）';
            $mail_form = 'hp-support@hasema-system.com';

            $mail_to = 'shinji06011@gmail.com';

            //ご用件リスト未入力チェック
            $subjectList = $this->getSubjectList();
            $subject = $subjectList !== null ? $subjectList[$data['subject']] : '不正入力です。';

            //フォームデータ項目をvarへセット
            $var = [
                'subject' => $subject,
                'company' => h($data['company']),
                'name' => h($data['name']),
                'tel' => h($data['tel']),
                'email' => h($data['email']),
                'content' => h($data['content'])
            ];

            //メールレイアウトの設定
            $mail_layout = 'default';

            //メールの送信ロジック
            $mailer = new Mailer('default');
            $mailer
                ->setTransport('default')
                ->setFrom([$mail_form => $mail_name])
                ->setTo($mail_to)
                ->setSubject($subject)
                ->setViewVars($var)
                ->viewBuilder()->setTemplate('default')->setLayout($mail_layout);

            //->送信実行
            $mailer->send();
            $this->redirect(['controller' => 'Pages', 'action' => 'mail_success']);
        }
    }

    public function mailSuccess()
    {
        $catchup = [
            'title' => 'お問い合わせ完了',
            'image' => '/img/contact-back2.jpg',
        ];

        $this->set(compact('catchup'));
    }
}
