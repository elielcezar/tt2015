<!DOCTYPE html>
<html>
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
 
       <meta name="description" content="O Tribaltech Festival é um dos mais conceituados eventos de música, tecnologia, arte e comportamento do Brasil, realizado anualmente em Curitiba/PR, recebe público de todo o país, além da América Latina." />
        <meta name="keywords" content="rave, rave Curitiba, rave música eletrônica, música eletrônica, festival música, festival música eletrônica, rave Brasil 2015, música electronica em Curitiba, tribaltech, tribaltech reborn, tribaltech line up, tribaltech ingressos, festa música eletrônica Curitiba, festa música eletrônica" />
        <meta property="og:title" content="TRIBALTECH 2015 EVOLUTION"/>
        <meta property="og:description" content="SAVE THE DATE | 10 E 11 OUTUBRO 2015 | Tribaltech Evolution"/>
        <meta property="og:image" content="http://tribaltech.art.br/mg/img-fb.jpg"/>    
        <meta property="og:type" content="website" /> 
        <link rel="image_src" href="http://tribaltech.art.br/img/img-fb.png" />
        <link rel="shortcut icon" href="imgs/favicon.png">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $styles; ?>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php print base_path() . path_to_theme() .'/' ?>css/simpletextrotator.css">
<!--[if lt IE 7]>
  <link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
  <![endif]-->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<link rel="shortcut icon" href="<?php print base_path() . path_to_theme() .'/' ?>img/favicon.png">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=315569751886817";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<?php print $scripts; ?>


<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
_fbq.push(['addPixelId', '875744465828824']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=875744465828824&amp;ev=PixelInitialized" /></noscript>


<!-- Código do Google para tag de remarketing -->
<!--
As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 965318133;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/965318133/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50867931-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
