<!DOCTYPE html>
<html lang="en">
  <?= $this->element('head') ?>
<body>
  <?= $this->element('header') ?>
  <?= $this->Flash->render() ?>
  <div>
      <?= $this->fetch('content') ?>
  </div>
  <?= $this->element('footer') ?>
</body>
</html>
