<?php $this->assign('title', env('HTTP_HOST') . ' - Портфолио');?>
<?php $this->assign('metadesc', 'Stroitel.lv');?>
<?php $request = $this->Url->build(['action' => 'ajaxAction', 'ext' => 'json']); ?>
<section class="wrapper wow slideInDown" data-wow-duration="1s">
  <section class="page_head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="page_title">
            <h2>примеры работ</h2>
          </div>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="/">Главная</a>/</li>
              <li>Портфолио</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
</section>
<div class="container">

  <?php echo $this->Form->select(
      'field',
      $categories,
      ['empty' => 'all','id'=>'selectid','options' => $categories]
  ); ?>
  <div>
      <button id="button" rel="<?= $request ?>">result</button>
      <div>
          <i id="result"></i>
      </div>
  </div>

  <script type="text/javascript">
  $('select').on('change', function() {
    // alert( $("#selectid option:selected").text());
  })

  $(function()
  {
      $('#button').click(function()
      {
         var selectid = $('#selectid').val(); //Получаем текст комментария
          var targeturl = $(this).attr('rel');
          $.ajax({
              type: 'post',
              url: targeturl,
              data: {select: $("#selectid option:selected").text()},
              beforeSend: function(xhr)
              {
                  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
              },
              success: function(response)
              {
                  if (response)
                  {
                    console.log(response.select);
                      $('#result').html(response.select);
                  }
              },
              error: function(e)
              {
                  alert("An error occurred: " + e.responseText.message);
                  console.log(e);
              }
          });
      });
  });
  </script>
</div>
