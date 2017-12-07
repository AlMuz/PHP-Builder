<?php $this->assign('title', env('HTTP_HOST'));?>
<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- All required Style Sheets -->

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('admin.css') ?>
    <?= $this->Html->css('message.css') ?>

    <!-- My function -->
    <?= $this->Html->script('functions'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  </head>
  <body>
    <div id="wrapper">
      <!-- Nav bar  -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">На главную страницу</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="/admin/main/index">На главную страницу админ панели</a></li>
            <li><a href="/admin/Contacts/index">Форма контактирования</a></li>
            <li><a href="/admin/admin/logout">Выйти из аккаунта</a></li>
          </ul>
        </div>
      </nav>
      <!-- Main content -->
      <div id="page-wrapper">
        <?= $this->Flash->render(); ?>
        <?= $this->fetch('content') ?>
      </div>
    </div>
  </body>
</html>
