<!DOCTYPE html>
<html>
  <head>
    <title>Not found 404!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap -->
    <?php echo $this->Html->css("/css/bootstrap.min");?>
    <?php echo $this->Html->script('/js/bootstrap.min');?>
    <?php echo $this->Html->script('http://code.jquery.com/jquery.js');?>
    <style>
      h2, .h2{
        font-weight: bold;
      }
      .col-md-6{
        text-align: center;
      }
    </style>
  </head>

  <body>
  <div class="container">
    <div class="row">
        <br />
        <br />
        <br />
        <br />
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Page Not Found</h2>
            <img type="magin-left:30px;" src="/img/error-404.jpg" alt="Not found 404" title="Not found 404"  class="img-rounded"/>
        </div>
        <div class="col-md-6">
            <a href="/" title="Home">Về Trang Chủ</a>
        </div>
    </div>
  </div>

    
  </body>
</html>