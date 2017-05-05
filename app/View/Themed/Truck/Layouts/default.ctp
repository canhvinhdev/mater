<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web giới thiệu ô tô</title>
	<!-- Latest compiled and minified CSS & JS -->

	<?php echo $this->Html->css(array('bootstrap.min','style','detail','font-awesome.min')); ?>
	<?php echo $this->Html->script(array('jquery-3.2.0.min','bootstrap.min')); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head> 
<body id="main-body">
     <!-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/590886d864f23d19a89b04a0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script> -->
        <!--End of Tawk.to Script-->

  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
	<header>
		<?php echo $this->Element('header'); ?>
    </header>
    <?php echo $this->Element('menu'); ?>
    <div id="slider">
    	 <?php echo $this->Element('slide'); ?>	
    </div>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->Element('sideba'); ?>	
    <footer>
    	<?php echo $this->Element('footer'); ?>
    </footer>
    <style type="text/css">
        .hisella-messages { position: fixed; bottom: 0; right: 0; z-index: 999999; }
        .hisella-messages-outer { position: relative; }
        #hisella-minimize { background: #3b5998; font-size: 14px; color: #fff; padding: 3px 10px; position: absolute; top: -34px; left: -1px; border: 1px solid #E9EAED; cursor: pointer; }
        @media screen and (max-width:768px){ #hisella-facebook { opacity:0; } .hisella-messages { bottom: -300px; right: -135px; } }
        </style>
       <!--  <div id='fb-root'></div>
        <script>
        (function($) { $(document).ready(function(){ $( '#hisella-minimize' ).click( function() { if( $( '#hisella-facebook' ).css( 'opacity' ) == 0 ) { $( '#hisella-facebook' ).css( 'opacity', 1 ); $( '.hisella-messages' ).animate( { right: '0' } ).animate( { bottom: '0' } ); } else { $( '.hisella-messages' ).animate( { bottom: '-300px' } ).animate( { right: '-135px' }, 400, function(){ $( '#hisella-facebook' ).css( 'opacity', 0 ) } ); } } ) }); })(jQuery);
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="hisella-messages"><div class="hisella-messages-outer"><div id="hisella-minimize">Facebook chat</div><div id="hisella-facebook" class='fb-page' data-adapt-container-width='true' data-height='300' data-hide-cover='false' data-href='https://www.facebook.com/congnghethongtin2013/' data-show-facepile='true' data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='250'></div></div></div>-->

       <!--Start of Tawk.to Script-->
       
</body>
</html>