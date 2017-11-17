<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="widget_title">
          <h4><span>Контакты</span></h4>
        </div>
        <div class="widget_content">
          <ul class="contact-details-alt">
            <li><i class="fa fa-map-marker"></i> <p><strong>Адрес</strong>: Riga, Latvia</p></li>
            <li><i class="fa fa-user"></i> <p><strong>Телефон</strong>: (+371) 29793010</p></li>
            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="/contacts/">Vladislavmuz@gmail.com</a></p></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="widget_title">
          <h4><span>Партнёры</span></h4>
        </div>
        <div class="widget_content">
          <ul class="links">
            <li>K-RAUTA<span></span></li>
            <li>DEPO <span></span></li>
            <li>GLASSDEP<span></span></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="widget_title">
          <h4><span>Соц Сети</span></h4>
        </div>
        <div class="widget_content">
          <ul class="tweet_list">
            <li class="tweet_content item">
              <p class="tweet_link">Facebook</p>
            </li>
            <li class="tweet_content item">
              <p class="tweet_link">Instagram</p>
            </li>
            <li class="tweet_content item">
              <p class="tweet_link">Twitter</p>
            </li>
             <li class="tweet_content item">
              <p class="tweet_link">VK</p>
              <span class="time"></span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="widget_title">
          <h4><span>Видео</span></h4>
          <div class="widget_content">
            <ul class="youtube">
              <li class="">
                <p class="">Youtube</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="copyright">&copy; <?= date('Y'); ?> <?= env('HTTP_HOST'); ?> | Powered by  <a href="http://www.webservice.lv/">www.webservice.lv</a></p>
        </div>
        <div class="col-sm-6 ">
          <div class="footer_social">
            <ul class="footbot_social">
              <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>

<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script src="/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/js/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="/js/jquery.smartmenus.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="/js/swipe.js"></script>
<script type="text/javascript" src="/js/jquery-hoverdirection.min.js"></script>
<script type="text/javascript" src="/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/js/jquery-scrolltofixed-min.js"></script>

<script src="/js/main.js"></script>
<!-- WARNING: Wow.js doesn't work in IE 9 or less -->
<!--[if gte IE 9 | !IE ]><!-->
<script type="text/javascript" src="/js/wow.min.js"></script>
<script>
    // WOW Animation
    new WOW().init();
</script>
<![endif]-->

<script>
    /*Portfolio*/
    (function($) {
        "use strict";
        var $container = $('.portfolio'),
                $items = $container.find('.portfolio-item'),
                portfolioLayout = 'fitRows';

        if( $container.hasClass('portfolio-centered') ) {
            portfolioLayout = 'masonry';
        }

        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
            }
        }, refreshWaypoints());

        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);
        }

        $('ul#filter li').on('click', function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector }, refreshWaypoints());
            $('ul#filter li').removeClass('selected');
            $(this).addClass('selected');
            return false;
        });

        function getColumnNumber() {
            var winWidth = $(window).width(),
                    columnNumber = 1;

            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
            return columnNumber;
        }

        function setColumns() {
            var winWidth = $(window).width(),
                    columnNumber = getColumnNumber(),
                    itemWidth = Math.floor(winWidth / columnNumber);

            $container.find('.portfolio-item').each(function() {
                $(this).css( {
                    width : itemWidth + 'px'
                });
            });
        }

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        $container.imagesLoaded(function () {
            setPortfolio();
        });

        $(window).on('resize', function () {
            setPortfolio();
        });
    })(jQuery);
</script>
