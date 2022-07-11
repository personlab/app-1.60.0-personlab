<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="portfolio.css">
  <title>Portfolio</title>
</head>
<body>

  <div class = "navigation">
    <div class = "banner">
      <img src = "me.jpg" class = "cover">
    </div>
    <div class="navLink">
      <ul>
        <li><a href="https://shopmaster.info/YuriyBaragin_Personal_Portfolio/Profile/">Обо мне</a></li>
        <li><a href="https://shopmaster.info/YuriyBaragin_Personal_Portfolio/Certificates/">Сертификаты</a></li>
        <li><a href="https://shopmaster.info/YuriyBaragin_Personal_Portfolio/Portfolio/">Портфолио</a></li>
      </ul>
    </div>
  </div>

  <section class = "sec">
    <header>
      <div class="toggle"></div>
      <a href="https://shopmaster.info/YuriyBaragin_Personal_Portfolio/Profile/" class = "btn">Я здесь</a>
    </header>

<section class="main">

  <div class="AccordionTab">
    <input type="radio" name="acc" id="acc1">
    <label for="acc1">
      <h4>01</h4>
      <h3>Форма обратной связи</h3>
    </label>
    <div class="AccordionContent">
      <p>
        <a href="https://github.com/personlab/app-1.60.0-personlab/blob/personlab-patch-1/Web-Design/PersonalPortfolioWebsite/secondPage/feedBack.php" target="_blank">Код на GitHub</a>
      </p>
    </div>
  </div>
  <div class="AccordionTab">
    <input type="radio" name="acc" id="acc2">
    <label for="acc2">
      <h4>02</h4>
      <h3>02</h3>
    </label>
    <div class="AccordionContent">
      <p>

      </p>
    </div>
  </div>
  <div class="AccordionTab">
    <input type="radio" name="acc" id="acc3">
    <label for="acc3">
      <h4>03</h4>
      <h3>03</h3>
    </label>
    <div class="AccordionContent">
      <p>

    </p>
    </div>
  </div>

  <footer>
    <ul class = "sci">
      <li><a href="https://api.whatsapp.com/send?phone=+79155047791" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
        <li><a href="https://t.me/YuriyBaragin" class="telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
        <li><a target = "_blank" href="https://instagram.com/shopmaster.info" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
<div>
<p class ="copyrightText">  &copy;<?php print_r(date("Y"));  print_r("&nbsp;Yuriy Baragin");?></p>
<div id = "time">
 <?php print_r(date("F j"));?>
<div id = "hours">00</div>:
<div id = "minutes">00</div>:
<div id = "seconds">00</div>
</div>
</div>
  </footer>

  </section>

  <script>

  setInterval (() => {

        let hours = document.getElementById('hours');
        let minutes = document.getElementById('minutes');
        let seconds = document.getElementById('seconds');


        let h = new Date().getHours();
        let m = new Date().getMinutes();
        let s = new Date().getSeconds();

        // меняем 24 часовой формат на 12 часовой
       /* if (h > 12) {
          h = h - 12;
        } */
        //Прибавляем ноль к (часу) (minutam) (secundam)
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        hours.innerHTML = h;
        minutes.innerHTML = m;
        seconds.innerHTML = s;

       })

    let menuToggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let sec = document.querySelector('.sec');
    menuToggle.onclick = function() {
      menuToggle.classList.toggle('active');
      navigation.classList.toggle('active');
      sec.classList.toggle('active');
    }
  </script>

</body>
</html>
