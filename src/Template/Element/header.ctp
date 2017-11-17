<header id="header">
  <div id="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 top-info hidden-xs">
          <span><i class="fa fa-phone"></i>Телефон: (+371) 29793010</span>
          <span><i class="fa fa-envelope"></i>Email: Vladislavmuz@gmail.com</span>
        </div>
        <div class="col-sm-4 top-info">
          <ul>
            <li><span class="my-tweet"><i class="fa fa-twitter"></i></span></li>
            <li><span class="my-facebook"><i class="fa fa-facebook"></i></span></li>
            <li><span class="my-skype"><i class="fa fa-skype"></i></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="logo-bar">
    <div class="container">
      <div class="row wow slideInRight" data-wow-duration="1s">
          <!-- Logo / Mobile Menu -->
        <div  class="col-lg-3 col-sm-3 ">
          <div id="logo">
            <h1><a href="/"><img alt="logo" src="/images/logo1.png"/></a></h1>
          </div>
        </div>
        <!-- Navigation
================================================== -->
        <div class="col-lg-9 col-sm-9">
          <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!-- Active class  -->
                <li class="<?php echo (!empty($this->request->here) && ($this->request->here == '/') )?'active' :'inactive' ?>"><a href="/">ГЛАВНАЯ</a></li>
                <li class="<?php echo (!empty($this->request->here) && ($this->request->here == '/services/') )?'active' :'inactive' ?>"><a href="/services/" >УСЛУГИ</a></li>
                <li class="<?php echo (!empty($this->request->here) && ($this->request->here == '/portfolio/') )?'active' :'inactive' ?>"><a href="/portfolio/">ПОРТФОЛИО</a></li>
                <li class="<?php echo (!empty($this->request->here) && ($this->request->here == '/contacts/') )?'active' :'inactive' ?>"><a href="/contacts/">КОНТАКТЫ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
