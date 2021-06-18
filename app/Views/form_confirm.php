<?php helper('form'); ?>
<div class="outer-frame">
  <div class="title">
    <h1>CodeIgniter お問い合わせ（確認）</h1>
  </div>
  <div class="contact-wrapper">
    <table>
      <tr class="contact-item">
        <th class="contact-item-ravel">名前</th>
        <td><?= $name ?></td>
      </tr>
      <tr class="contact-item">
        <th class="contact-item-ravel">メールアドレス</th>
        <td><?= $email ?></td>
      </tr>
      <tr class="contact-item">
        <th class="contact-item-ravel">コメント</th>
        <td><?= $comment ?></td>
      </tr>
      <tr class="contact-item btn-wrapper">
        <td>
        <?= form_open('form'); ?>
          <?= form_hidden('name', $name); ?>
          <?= form_hidden('email', $email); ?>
          <?= form_hidden('comment', $comment); ?>
          <input class="contact-btn" type="submit" value="戻る" />
          <?= form_close(); ?>
        </td>
        <td>
          <?= form_open('form/send'); ?>
          <?= form_hidden('name', $name); ?>
          <?= form_hidden('email', $email); ?>
          <?= form_hidden('comment', $comment); ?>
          <input class="contact-btn" type="submit" value="送信" />
          <?= form_close(); ?>
        </td>
      </tr>
    </table>
  </div>
</div>



