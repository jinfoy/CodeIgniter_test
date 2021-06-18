
<div class="outer-frame">
  <div class="title">
    <h1>CodeIgniter お問い合わせ</h1>
  </div>
  <div class="contact-wrapper">
    <?= form_open('form/confirm'); ?>
    <table>
      <tr class="contact-item">
        <th class="contact-item-ravel">名前</th>
        <td>
          <input class="contact-item-input" type="text" name="name" value="" size="30" />
          <?php if (!empty($errors['name'])) : ?>
          <div class="alert alert-danger">
            <p><?= $errors['name'] ?></p>
          </div>
          <?php endif ?>
        </td>
      </tr>
      <tr class="contact-item">
        <th class="contact-item-ravel">メールアドレス</th>
        <td>
          <input class="contact-item-input" type="text" name="email" value="" size="30" />
          <?php if (!empty($errors['email'])) : ?>
          <div class="alert alert-danger">
            <p><?= $errors['email'] ?></p>
          </div>
          <?php endif ?>
        </td>
      </tr>
      <tr class="contact-item">
        <th class="contact-item-ravel">コメント</th>
        <td>
          <textarea class="contact-item-textarea" name="comment" rows="4" cols="30"></textarea>
          <?php if (!empty($errors['comment'])) : ?>
          <div class="alert alert-danger">
            <p><?= $errors['comment'] ?></p>
          </div>
          <?php endif ?>
        </td>
      </tr>
      <tr class="contact-item btn-wrapper">
        <td>
          <input class="contact-btn" type="submit" value="確認" />
        </td>
      </tr>
    </table>
    <?= form_close(); ?>
  </div>
</div>
