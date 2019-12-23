<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo( 'test' ); ?></title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/index.css'; ?>" type="text/css" media="screen">
    <script src="<?php echo get_template_directory_uri()?>/https://code.jquery.com/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/index.js" type="text/javascript"></script>
  </head>
  <body>
    <header>
      <div class="top">
        <img src="<?php echo get_template_directory_uri()?>/img/Шар_579.jpg" alt="Image" class="logo" >
        <div class="wrapper">
          <div class="container-header">
            <div class="main-nav-container">
              <ul class="main-nav">
               	<li><a href="#">Про нас</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">Контакти</a></li>
              </ul>
            </div>

            <div class="wrapper-contacts">
              <ul class="contacts">
                <li class="">
                  <img src="<?php echo get_template_directory_uri()?>/img/adress.png" 
                    class="icon"
                    width="8px"
                    height="14px" />
                  Адреса:
                  <br />
                  м. Львів, вул. Котлярська, 2
                </li>
                <li class="">
                  <img
                    src="<?php echo get_template_directory_uri()?>/img/skype.png" 
                    class="icon"
                    width="14px"
                    height="13px"
                  />
                  Skype:
                  <br />
                  flora2115
                </li>
                <li class="">
                  <img
                    src="<?php echo get_template_directory_uri()?>/img/phone.png" 
                    class="icon"
                    width="15px"
                    height="15px"
                  />
                  (032) 297 16-45
                  <br />
                  (067)-756-58-76
                </li>
              </ul>
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri()?>/img/Underline.jpg" class="underline" />
          <div class="menu">
            <ul class="menu-list">
              <li><a href="#">Головна</a></li>
              <li><a href="#">Автобусом в Європу</a></li>
              <li>
                <a href="#"
                  >Країни <img src="<?php echo get_template_directory_uri()?>/img/arrow.png" width="11px" height="6px" />
                </a>
              </li>
              <li><a href="#">Круїзи</a></li>
              <li><a href="#">Тури Україною</a></li>
              <li><a href="#">Раннє бронювання</a></li>
              <li><a href="#">Акція одного дня</a></li>
              <li><a href="#">Акція на вікенд</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="slider">
        <div class="item">
          <img src="<?php echo get_template_directory_uri()?>/img/slider-1.jpg" />
          <div class="slideText">
            <h1>Нові горизонти Вашого відпочинку</h1>
            <p>
              Ми поставили перед собою завдання зробити якісний відпочинок
              доступним для всіх українських сімей і розробили нову концепцію
              щасливого і безтурботного відпочинку з дітьми
            </p>
          </div>
        </div>
        <a class="prev" onclick="minusSlide()">&#10094;</a>
        <a class="next" onclick="plusSlide()">&#10095;</a>
        <div class="slider-dots">
          <span class="slider-dots_item" onclick="currentSlide(1)"></span>
          <span class="slider-dots_item" onclick="currentSlide(2)"></span>
          <span class="slider-dots_item" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </header>
  