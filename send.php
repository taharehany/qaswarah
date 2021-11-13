<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/favicon.png">
   <title>قسورة</title>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="main-wrapper">
      <!--header-->
      <header>
         <!--navbar desktop-->
         <nav class="navbar main-nav navbar-expand-lg">
            <div class="container"><a class="navbar-brand" href="index.html"> <img class="white" src="images/white-logo.png" alt=""><img class="colored" src="images/logo.png" alt=""></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="hamburger-menu"><span></span><span></span><span></span></div>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#about">من نحن</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#services">خدماتنا</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#clients">عملائنا</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#contact">تواصل معنا</a></li>
                     <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">اللغة</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                           <li><a class="dropdown-item" href="https://qaswarahagency.com/">الإنجليزية</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!--navbar desktop-->
         <!--side menu in mobile only-->
         <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
            <div class="offcanvas-header">
               <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="navbar">
                  <div class="collapsed navbar-collapse" id="navbarNavSide">
                     <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#clients">عملائنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://qaswarahagency.com/#contact">تواصل معنا</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">اللغة</a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                              <li><a class="dropdown-item" href="https://qaswarahagency.com/">الإنجليزية</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!--side menu in mobile only-->
      </header>
      <!--header-->
      <style>
      body {
         text-align: center;
         height: auto;
      }
      header .navbar .navbar-nav .nav-link {
          /* color: #222; */
      }
      header .navbar .navbar-nav .nav-link:hover {
          /* color: #000; */
      }
      header .navbar {
        box-shadow: 0 4px 10px 0 rgb(115 115 115 / 5%), 0 7px 10px -5px rgb(126 126 126 / 5%);
        background-color: #34508a;
      }
      header .navbar .navbar-collapse {
        justify-content: flex-start;
      }
      /* header .navbar .colored {
          display: block;
      }
      header .navbar .white {
          display: none;
      } */

      .main {
         height: 50vh;
         display: flex;
         align-items: center;
         justify-content: center
      }

      h3 {
         line-height: 2;
         text-align: center;
         direction: rtl;
         padding-top: 50px;
      }

      /* footer {
         position: absolute;
         height: auto;
         width: 100%;
         bottom: 0;
      } */

      </style>
      <!-- /menubar -->
      <main class="main">
         <div class="container">
            <h3> <?php
                    $email= "qaswarahagency@gmail.com";
                    if (!empty($_POST)){
                        if(empty($_POST['name']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['message'])){
                            echo("تأكد من ملئ جميع الحقول!");
                        }
                        else{
                            $message  = "name :\n{$_POST["name"]}\n";
                            $message .= "number :\n{$_POST["phone"]}\n";
                            $message .= "email :\n{$_POST["email"]}\n";
                            $message .= "message :\n{$_POST["message"]}\n";
                            $message .= "IP :\n{$_SERVER['REMOTE_ADDR']}\n";
                            $message = stripslashes($message);
                            $message = wordwrap($message, 70);
                            mail($email,"Qaswarah",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");
                            echo("تم إرسال رسالتك بنجاح وسيتم التواصل معك في أقرب وقت، شكرا لك :(");
                        }
                    }
                ?> </h3>
         </div>
      </main>
      <!--footer part-->
      <footer>
         <div class="container">
            <div class="footer-content">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="footer-box">
                        <h3>من نحن</h3>
                        <div class="about">
                           <p>نحن فريق تسويق رقمي متميز وبخبرة مع أكثر من 40 شركة في مصر والخليج العربي بإستهداف لغالبية دول العالم العربي والغربي وفي الكثير من المجالات والصناعات المختلفة. بإستهداف
                              لغالبية دول العالم العربي والغربي وفي الكثير من المجالات والصناعات المختلفة. مثل تأجير السيارات - بيع المنتجات (قطاعي وبالجملة) - المجال الطبي (عيادات أسنان والقلب
                              وغيرها) - منتجات غذائية ديكور وتصميم داخلي - خرسانات مطبوعة - برامج وتطبيقات - العقارات والكثير من المجالات الأخرى.</p>
                        </div>
                        <div class="social-media">
                           <ul>
                              <li> <a href="https://www.facebook.com/QaswarahAgency" target="_blank"><i class="bi bi-facebook"> </i></a></li>
                              <li> <a href="https://www.linkedin.com/company/qaswarah-agency/" target="_blank"><i class="bi bi-linkedin"> </i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="footer-box">
                        <h3>خريطة الموقع</h3>
                        <div class="main">
                           <ul>
                              <li><a href="#about">من نحن</a></li>
                              <li><a href="#services">خدماتنا</a></li>
                              <li><a href="#clients">عملائنا</a></li>
                              <li><a href="#contact">تواصل معنا</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="footer-box">
                        <h3>معلومات التواصل</h3>
                        <div class="contact">
                           <ul>
                              <li> <i class="bi bi-envelope"> </i><a href="mailto:contact@qaswarahagency.com	">contact@qaswarahagency.com </a></li>
                              <li> <i class="bi bi-telephone"></i><a href="tel:+201098644314" dir="ltr">+201098644314</a></li>
                              <li><i class="bi bi-pin-map"></i><span>مصر، القاهرة</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="copy-text">
               <p>جميع الحقوق محفوظة &copy;<a href="https://qaswarahagency.com/">قسورة للتسويق الإلكتروني.</a></p>
            </div>
         </div>
      </footer>
      <!--footer part-->
   </div>
   <!--scripts-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/fancybox.umd.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/script.js"></script>
   <!-- GetButton.io widget-->
   <script type="text/javascript">
   (function() {
      var options = {
         facebook: "115106460341639", // Facebook page ID
         whatsapp: "+201098644314", // WhatsApp number
         call_to_action: "contact", // Call to action
         button_color: "#FF6550", // Color of button
         position: "left", // Position may be 'right' or 'left'
         order: "facebook,whatsapp", // Order of buttons
      };
      var proto = document.location.protocol,
         host = "getbutton.io",
         url = proto + "//static." + host;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url + '/widget-send-button/js/init.js';
      s.onload = function() {
         WhWidgetSendButton.init(host, proto, options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
   })();
   </script>
   <!-- /GetButton.io widget-->
</body>

</html>
