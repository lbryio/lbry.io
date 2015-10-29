<form action="/list-subscribe" method="post" novalidate>
  <?php if ($error): ?>
    <div class="notice notice-error spacer1"><?php echo $error ?></div>
  <?php elseif ($success): ?>
    <div class="notice notice-success spacer1"><?php echo $success ?></div>
  <?php endif ?>
  <div class="mail-submit">
    <input type="hidden" name="returnUrl" value="<?php echo $returnUrl ?>"/>
    <input type="hidden" name="listId" value="<?php echo $listId ?>"/>
    <input type="email" value="" name="email" class="required email standard" placeholder="someone@somewhere.com">
    <input type="submit" value="<?php echo isset($submitLabel) ? $submitLabel : 'Subscribe' ?>" name="subscribe" id="mc-embedded-subscribe" class="<?php echo $btnClass ?>">
  </div>
</form>