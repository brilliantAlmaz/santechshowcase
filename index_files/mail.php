<?php

//Template Name: Страница благодарности 
?>

<?php



session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);


$message = "<div>Пользователь <strong>" . $_POST['client_name'] . "</strong> оставил заявку.</div> <div> <br>Он оставил контактные данные: </div>";
if ($_POST['phone']) {
   $message = $message . "<div>Телефон: <strong>" . $_POST['phone'] . "</strong></div>";
}
if ($_POST['email']) {
   $message = $message . "<div>Почту: <strong>" . $_POST['email'] . "</strong></div>";
}

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'botmailerbrilliantalmaz';
$mail->Password = 'joxxdvqrgtflrtaa';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->setFrom('botmailerbrilliantalmaz@yandex.ru', 'Рассылка Сантехника');
$mail->CharSet = "utf-8";
$mail->addAddress("тут ваша почта. Обязательно укажите");

$mail->isHTML(true);
$mail->Subject = '=?UTF-8?B?' . base64_encode('Новая заявка на сайте') . '?=';
$mail->Body = $message;

$mail->send();

?>


<!DOCTYPE html>
<html lang="ru-RU">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="title" content="Главная">
   <meta name="description">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Главная | ООО Родник</title>

   <!-- Шрифты -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
   <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Mulish:ital,wght@0,200..1000;1,200..1000&amp;display=swap"
      rel="stylesheet">
   <script src="./index_files/jquery-1.9.1.min.js" type="text/javascript"></script>
   <style>
   :root {
      /* <!-- Цвета --> */
      --white:
         rgb(250, 250, 250);
      --dark:
         rgb(51, 51, 51);
      --black:
         rgb(30, 30, 30);
      --active:
         rgb(53, 121, 244);

      --font-family: "Mulish", sans-serif;
      --second-family: "Montserrat", sans-serif;
      --third-family: "Manrope", sans-serif;
   }
   </style>

   <meta name="robots" content="max-image-preview:large">


   <link rel="stylesheet" id="fancybox-css-css" href="./index_files/fancybox.css" type="text/css" media="all">
   <link rel="stylesheet" id="swiper-css" href="./index_files/swiper-bundle.min.css" type="text/css" media="all">
   <link rel="stylesheet" id="custom-css" href="./index_files/custom.css" type="text/css" media="all">
   <link rel="stylesheet" id="mediacss-css" href="./index_files/media.css" type="text/css" media="all">
   <link rel="stylesheet" id="animatecss-css" href="./index_files/animate.css" type="text/css" media="all">
   <script type="text/javascript" src="./index_files/wow.min.js?ver=6.6.2" id="wow-js-js"></script>
   <script type="text/javascript" src="./index_files/fancybox.umd.js" id="wow-js-js"></script>
   <script type="text/javascript" src="./index_files/swiper-bundle.min.js" id="wow-js-js"></script>
</head>

<body>
   <div class="wrapper" style="opacity: 1;">
      <header class="header">
         <div class="container">
            <div class="header__body">
               <div>
                  <a href="#" class="header__logo">
                     <img src="./index_files/dshhpshhshhshhshhshhshhshhshhshhshhshhshhshhshhshhshhshhshhshh.png" alt="">
                  </a>
               </div>
               <div>
                  <div class="header__menu">
                     <ul id="menu-header_menu-1" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-456">
                           <a href="#" aria-current="page">Главная</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458"><a
                              href="#art">Статьи</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a
                              href="#services">Услуги</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460"><a
                              href="#about">О
                              нас</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a
                              href="#popup" data-fancybox="">Контакты</a></li>
                     </ul>
                  </div>
                  <div class="header__btn-wrapper attract">
                     <div class="attract-box">
                        <div class="attract-text">!</div>
                     </div>
                     <a href="#popup" data-fancybox="" data-link="popup" class="btn header__btn  ">Оставить заявку</a>
                  </div>
                  <div class="burger__cont attract">
                     <div class="attract-box">
                        <div class="attract-text">!</div>
                     </div>
                     <div class="burger"><span></span></div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="header__bottom">
         <div class="container">
            <div class="header__body">
               <div class="header__title">
                  <img src="./index_files/location.png" alt="">
                  <span>Иркутск</span>
               </div>
               <div class="header__content">
                  <a href="mailto:santeh38@yandex.ru" class="header__mail">santeh38@yandex.ru</a>

                  <a href="tel:+73952628226" class="header__phone">
                     <img src="./index_files/phone.png" alt="">
                     <span>+7 (3952) 62-82-26</span>
                  </a>
                  <a href="tel:+79501326991" class="header__phone">
                     <img src="./index_files/phone.png" alt="">
                     <span>+7 (950) 132-69-91</span>
                  </a>

                  <div class="header__social">


                     <ul class="soc">
                        <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                           <img src="./index_files/tg.png" alt="">
                        </a>
                        <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                           <img src="./index_files/wa.png" alt="">
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- noindex -->
      <div class="header__menu-mob">
         <div class="header__bottom">
            <div class="container">
               <div class="header__body">
                  <div class="header__title">
                     <img src="./index_files/location.png" alt="">
                     <span>Москва</span>
                  </div>
                  <div class="header__content">
                     <a href="mailto:santeh38@yandex.ru" class="header__mail">santeh38@yandex.ru</a>

                     <a href="tel:+73952628226" class="header__phone">
                        <img src="./index_files/phone.png" alt="">
                        <span>+7 (3952) 62-82-26</span>
                     </a>
                     <a href="tel:+79501326991" class="header__phone">
                        <img src="./index_files/phone.png" alt="">
                        <span>+7 (950) 132-69-91</span>
                     </a>

                     <div class="header__social">


                        <ul class="soc">
                           <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                              <img src="./index_files/tg.png" alt="">
                           </a>
                           <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                              <img src="./index_files/wa.png" alt="">
                           </a>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="header__menu">
               <ul id="menu-header_menu-1" class="menu">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-456">
                     <a href="#" aria-current="page">Главная</a>
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458"><a
                        href="#art">Статьи</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a
                        href="#services">Услуги</a>
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460"><a href="#about">О
                        нас</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a href="#popup"
                        data-fancybox="">Контакты</a></li>
               </ul>
            </div>

            <div class="header__btn-wrapper attract">
               <div class="attract-box">
                  <div class="attract-text">!</div>
               </div>
               <a href="#popup" data-fancybox="" data-link="popup" class="btn header__btn  ">Оставить
                  заяку</a>
            </div>
         </div>
      </div>

      <main id="content">
         <div class="container">
            <h1 style="color:var(--primary); font-weight: 700; font-size: 3rem; font-family:var(--font-family);">Спасибо
               что
               оставили заявку!</h1>
            <p>Мы скоро с Вами свяжемся.</p>
            <a href="/" class="btn" style="margin-top: 0.15rem;display: block;"> На главную</a>
         </div>
      </main>
      <footer class="footer">
         <div class="container">
            <div class="header__body footer__body">
               <a href="#" class="header__logo">
                  <img src="./index_files/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafuter.png" alt="">
               </a>
               <div>
                  <div class="header__menu">
                     <ul id="menu-header_menu-1" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-456">
                           <a href="#" aria-current="page">Главная</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458"><a
                              href="#art">Статьи</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a
                              href="#services">Услуги</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460"><a
                              href="#about">О
                              нас</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a
                              href="#popup" data-fancybox="">Контакты</a></li>
                     </ul>
                  </div>
                  <div class="header__social">


                     <ul class="soc">
                        <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                           <img src="./index_files/tg.png" alt="">
                        </a>
                        <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                           <img src="./index_files/wa.png" alt="">
                        </a>
                     </ul>
                  </div>

               </div>
            </div>


         </div>
      </footer>
      <div class="modal" id="popup" style="display:none">
         <div class="inner-container">
            <h2 class="title modal__title ">Оставьте заявку и мы с вами свяжемся</h2>
            <div class="desc modal__desc ">Так же можете посмотреть нас в соц сетях</div>

            <form action="./index_files/mail.php" method="post">
               <div class="form__body">
                  <div class="form__item">
                     <div class="form__item-name">Введите ваше имя</div>
                     <input type="text" class="form__input" name="client_name" placeholder="Введите ваше имя"
                        required="">
                  </div>


                  <div class="form__item">
                     <div class="form__item-name">Введите вашу почту</div>
                     <input type="text" class="form__input" name="email" placeholder="Введите вашу почту">
                  </div>
                  <div class="form__item">
                     <div class="form__item-name">Введите номер телефона</div>
                     <input type="text" class="form__input" name="phone" placeholder="+ 7(_____) _____ ___ ___"
                        required="">
                  </div>
                  <input type="hidden" name="more_info" class="input-more-info">
                  <input type="hidden" name="page_info" value="ID страницы: 265. Название страницы «Главная»">
               </div>
               <button class="btn blue no-outline form__main-btn" type="submit">Получить консультацию</button>
               <p class="forms__text">Нажимая кнопку вы соглашаетесь <br>
                  с политикой конфиденциальности</p>
               <input type="hidden" id="ct_bot_detector_event_token_8290" name="ct_bot_detector_event_token"
                  value="3c98e7b014e9a6851813cf0cae0b5c161d5f8fb3cccae3c25b3556122cf8e358"><input type="hidden"
                  id="apbct_visible_fields_0" name="apbct_visible_fields"
                  value="eyIwIjp7InZpc2libGVfZmllbGRzIjoiY2xpZW50X25hbWUgZW1haWwgcGhvbmUiLCJ2aXNpYmxlX2ZpZWxkc19jb3VudCI6MywiaW52aXNpYmxlX2ZpZWxkcyI6Im1vcmVfaW5mbyBwYWdlX2luZm8gY3RfYm90X2RldGVjdG9yX2V2ZW50X3Rva2VuIGN0X25vX2Nvb2tpZV9oaWRkZW5fZmllbGQiLCJpbnZpc2libGVfZmllbGRzX2NvdW50Ijo0fX0="><input
                  name="ct_no_cookie_hidden_field"
                  value="_ct_no_cookie_data_eyJjdF9tb3VzZV9tb3ZlZCI6dHJ1ZSwiY3RfaGFzX3Njcm9sbGVkIjp0cnVlLCJjdF9jaGVja2VkX2VtYWlscyI6IjAiLCJjdF9oYXNfa2V5X3VwIjoidHJ1ZSIsImN0X2Nvb2tpZXNfdHlwZSI6Im5vbmUiLCJhcGJjdF9oZWFkbGVzcyI6ImZhbHNlIiwiY3RfcHNfdGltZXN0YW1wIjoiMTczMTUxMTg3NiIsImFwYmN0X3BhZ2VfaGl0cyI6MTY2LCJhcGJjdF92aXNpYmxlX2ZpZWxkcyI6IjAiLCJjdF9oYXNfaW5wdXRfZm9jdXNlZCI6InRydWUiLCJjdF9ma3BfdGltZXN0YW1wIjoiMTczMTUxMTg5NiIsImN0X3BvaW50ZXJfZGF0YSI6IiU1QiU1QjU5MyUyQzMzMiUyQzI4ODElNUQlMkMlNUI2ODQlMkM0MTIlMkMzMDA4JTVEJTJDJTVCMTE0NSUyQzU5OCUyQzMxNTglNUQlMkMlNUI5NzglMkMxMDAwJTJDMzMwOCU1RCUyQyU1QjkyNiUyQzg2MiUyQzM0NzQlNUQlMkMlNUI5MzAlMkM4NzMlMkMzODUyJTVEJTJDJTVCOTI2JTJDOTMwJTJDMzkwNiU1RCUyQyU1Qjk0MSUyQzEzMDElMkM0MDczJTVEJTJDJTVCOTQwJTJDMTMwMSUyQzUzMjMlNUQlMkMlNUI3MDglMkMxMjM2JTJDNTQzMiU1RCUyQyU1QjQ3NiUyQzExODglMkM1NTU2JTVEJTJDJTVCNDc2JTJDMTE4NCUyQzU4MDUlNUQlMkMlNUI0NzMlMkMxMTAwJTJDNTg3MiU1RCUyQyU1QjQ2MCUyQzg5MiUyQzYwMDYlNUQlMkMlNUI0NTQlMkM3NDglMkM2MTU1JTVEJTJDJTVCNDQ0JTJDNTg4JTJDNjMwNSU1RCUyQyU1QjQzNyUyQzUyNSUyQzY3MjklNUQlMkMlNUI0MzglMkM1NzAlMkM2NzcxJTVEJTJDJTVCNDQ1JTJDNzg5JTJDNjkwNCU1RCUyQyU1QjQ0NSUyQzc5MiUyQzc2MDIlNUQlMkMlNUI0NDUlMkM4MDIlMkM3NjUzJTVEJTJDJTVCNDU2JTJDMTAwNCUyQzc4MDMlNUQlMkMlNUI0NjAlMkMxMjE3JTJDODI2OCU1RCUyQyU1QjQ1MyUyQzE0NDElMkM4NDA0JTVEJTJDJTVCNDU0JTJDMTUwNCUyQzkzMTMlNUQlMkMlNUI0NDQlMkMxNzcwJTJDOTQ2OSU1RCUyQyU1QjQ0MSUyQzE3OTMlMkM5OTc0JTVEJTJDJTVCNDM3JTJDMTc5MyUyQzEwNDQ5JTVEJTJDJTVCNDQ4JTJDMTc0MiUyQzEwNTE4JTVEJTJDJTVCNjY0JTJDODg5JTJDMTA2NjglNUQlMkMlNUI2NTMlMkM4NzAlMkMxMDkwMSU1RCUyQyU1QjczMiUyQzcxNiUyQzEwOTY4JTVEJTJDJTVCODM4JTJDNTE4JTJDMTExMTglNUQlMkMlNUI4NDAlMkM1MTglMkMxMTQyMiU1RCUyQyU1Qjg0MCUyQzUxNCUyQzExODE2JTVEJTJDJTVCODQwJTJDNTE2JTJDMTE4NzUlNUQlMkMlNUI4NDIlMkM1MTYlMkMxMjE0NyU1RCUyQyU1Qjg0MiUyQzUxNyUyQzEzMDU3JTVEJTJDJTVCODU0JTJDNzgyJTJDMTMyMTYlNUQlMkMlNUI4NTclMkM4MzMlMkMxMzcxNyU1RCUyQyU1Qjg1NyUyQzg0NSUyQzE0MTY1JTVEJTJDJTVCODY1JTJDOTAyJTJDMTQyNjUlNUQlMkMlNUI4NjYlMkMxMTY4JTJDMTQ0MTUlNUQlMkMlNUI4NzAlMkMxMTcyJTJDMTQ1NjUlNUQlMkMlNUI4NjglMkMxMTcyJTJDMTQ3MTYlNUQlMkMlNUI3MDIlMkMxMTczJTJDMTQ4NjUlNUQlMkMlNUI2NzglMkMxMTU2JTJDMTY2NDglNUQlMkMlNUI2NzglMkMxMTQ2JTJDMTY2NjQlNUQlMkMlNUI2NDYlMkM4NTIlMkMxNjgxNCU1RCU1RCIsImN0X3NjcmVlbl9pbmZvIjoiJTdCJTIyZnVsbFdpZHRoJTIyJTNBMjM2NiUyQyUyMmZ1bGxIZWlnaHQlMjIlM0ExNDQ4OCUyQyUyMnZpc2libGVXaWR0aCUyMiUzQTIzNjYlMkMlMjJ2aXNpYmxlSGVpZ2h0JTIyJTNBMTMzOCU3RCIsImFwYmN0X2lmcmFtZXNfcHJvdGVjdGVkIjpbXSwiY3RfY2hlY2tqcyI6IjEwMzcwODE2NDMiLCJjdF90aW1lem9uZSI6IjMiLCJhcGJjdF9waXhlbF91cmwiOiJodHRwcyUzQSUyRiUyRm1vZGVyYXRlNC12NC5jbGVhbnRhbGsub3JnJTJGcGl4ZWwlMkYxYzkwOWUyOGEzMGJhMjQ4NzdjZWI4MzI1NDFlYTliNi5naWYiLCJhcGJjdF9zZXNzaW9uX2lkIjoib3B1ZWNmc2MiLCJhcGJjdF9wcmV2X3JlZmVyZXIiOiJodHRwOi8vcm9kbmlrLnJ1L3dwLWxvZ2luLnBocD9yZWRpcmVjdF90bz1odHRwJTNBJTJGJTJGcm9kbmlrLnJ1JTJGd3AtYWRtaW4lMkYmcmVhdXRoPTEiLCJhcGJjdF9zZXNzaW9uX2N1cnJlbnRfcGFnZSI6Imh0dHA6Ly9yb2RuaWsucnUvIiwidHlwbyI6W119"
                  type="hidden" class="apbct_special_field ct_no_cookie_hidden_field">
            </form>
         </div>

         <div class="modal__contants">
            <div class="modal__desc" style="margin-top:0">Наши контакты:</div>
            <a href="tel:+73952628226" class="header__phone">
               <span>+7 (3952) 62-82-26</span>
            </a>
            <a href="tel:+79501326991" class="header__phone">
               <span>+7 (950) 132-69-91</span>
            </a>
            <div class="header__social">
               <div>Мы в соц сетях: </div>


               <ul class="soc">
                  <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                     <img src="./index_files/tg.png" alt="">
                  </a>
                  <a href="https://t.me/vadeanoih2o" target="_blank" class="social__link">
                     <img src="./index_files/wa.png" alt="">
                  </a>
               </ul>
            </div>
         </div>
         <div class="dsd">
            При сумме работ выше 1000 руб стоимость вызова не оплачивается! (8:00 - 18:00)
         </div>
         <div class="ded">
            <div class="tit">Срочный вызов мастера</div>
            <div class="fl">
               <div>с 08:00 до 18:00 - 300 руб.</div>
               <div>с 18:00 до 22:00 - 500 руб.</div>
               <div>с 22:00 до 08:00 - 1000 руб</div>
            </div>
         </div>
      </div>
      <img alt="Cleantalk Pixel" title="Cleantalk Pixel" id="apbct_pixel" style="display: none;"
         src="./index_files/1c909e28a30ba24877ceb832541ea9b6.gif">
      <script type="text/javascript" src="./index_files/script.js" id="script-js"></script>
   </div>


</body>

</html>