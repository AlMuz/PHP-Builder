<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
      <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta(
      'description',
      $this->fetch('metadesc')
  );?>

  <?= $this->Html->meta('icon') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>

  <?= $this->fetch('script') ?>

  <!-- CSS FILES -->
  <?= $this->Html->css('bootstrap.min.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('fractionslider.css') ?>
  <?= $this->Html->css('animate.css') ?>
  <?= $this->Html->css('style-fraction.css') ?>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
