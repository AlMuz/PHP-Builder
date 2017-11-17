<?php $this->assign('title', env('HTTP_HOST') . ' - Контакты');?>
<?php $this->assign('metadesc', 'Stroitel.lv');?>

<section class="wrapper wow slideInDown" data-wow-duration="1s">
  <section class="page_head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="page_title">
            <h2>Наши контакты</h2>
          </div>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="/">Главная</a>/</li>
              <li>Контакты</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="contact_3">
    <div id="googleMap" style="height:400px;" class="grey-map"></div>
    <div class="container">
      <div class="row sub_content">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
          <div class="dividerHeading text-center">
            <h4><span>Разумные расценки!</span></h4>
          </div>
          <p class="lead">С помощью современных материалов воплотим любую идею или проект в уютный интерьер. Выполним ремонт квартир “под ключ” в Риге и по Латвии. Клиенты могут расчитывать на лучший сервис, а так-же дополнительные услуги такие как перевозка и хранение мебели во время ремонта. Мы стремимся сделать наши услуги экономически выгодными.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

          <?= $this->Form->create() ?>
            <div class="row">
              <div class="form-group">
                <div class="col-lg-4 ">
                  <label>Ваше имя: (обязательно)</label>
                  <br>
                  <input type="text" id="name" name="name" class="form-control" required maxlength="100" data-msg-required="Пожалуйста введите своё имя." value="" placeholder="" >
                </div>
                <div class="col-lg-4 ">
                  <label>Ваш Email: (обязательно)</label>
                  <br>
                  <input type="email" id="email" name="email" class="form-control" required maxlength="100" data-msg-email="Пожалуйста введите правельный email адрес." data-msg-required="Пожалйста введите ваш Email адрес." value="" placeholder="" >
                </div>
                <div class="col-md-4">
                  <label>Телефон:</label>
                  <br>
                  <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Пожалуйста введите ваш номер телефона." value="" placeholder="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Ваше сообщение: (обязательно)</label>
                  <br>
                  <textarea id="message" class="form-control" name="message" required rows="10" cols="50" data-msg-required="Пожалуйста введите ваше сообщение." maxlength="5000" placeholder=""></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $this->Form->button(__('Отправить'),['class' => 'btn btn-default ']) ?>
              </div>
            </div>
					<?= $this->Form->end() ?>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="sidebar">
            <div class="widget_info">
              <div class="dividerHeading">
                <h4><span>Контактная информация</span></h4>
              </div>
              <p>Свзятся с нами Вы можете позвонив по телефону указаный ниже, или отправить нам на почту ваше электронное сообщение, после чего в ближайшее время с Вами свяжутся наши специалисты.</p>
              <ul class="widget_info_contact clearfix">
                <li class="col-sm-4">
                  <i class="fa fa-map-marker"></i><strong>Адрес</strong> <p style="text-align: center;">Riga, Latvia, LV5401</p>
                </li>
                <li class="col-sm-4">
                  <i class="fa fa-envelope"></i> <strong>Email</strong><p style="text-align: center;">Vladislavmuz@gmail.com</p>
                </li>
                <li class="col-sm-4">
                  <i class="fa fa-phone"></i> <strong>Наш телефон</strong><p style="text-align: center;"> (+371) 29793010</p>
                </li>
              </ul>
            </div>
            <div class="widget_social">
              <ul class="widget_social">
                <li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                <li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                <li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<script>
   function myMap() {
     myCenter=new google.maps.LatLng(56.955563, 24.210260); // Here position
     var mapOptions= {
       center:myCenter,
       zoom:12, scrollwheel: true, draggable: true,
       mapTypeId:google.maps.MapTypeId.ROADMAP
     };
     var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
     var marker = new google.maps.Marker({
       position: myCenter,
     });
     marker.setMap(map);
   }
 </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEDcbjRSc3QfcaKrL8NQfXxsLtxHKRnQg&callback=myMap"></script>
