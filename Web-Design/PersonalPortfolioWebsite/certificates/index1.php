<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="certificates.css">
  <title>Сертификаты</title>
</head>
<body>
  <section class="mainWTPFooter">

     <div class="contentWTPFooter">
       <div class = "interest1">
         <a href = "https://shopmaster.info/YuriyBaragin_Personal_Portfolio/" class = "btn">Главная</a>
       </div>
       <div class="containerImageReflectionEffect">

         <img src="Metodologii-Agile_Scrum.jpg">
         <img src="Prodvinutaya-rabota_s_GIT.jpg">
       </div>

    </div>
  </section>

  <section class="mainWTPFootercopyrightText">
     <div class="contentWTPFootercopyrightText">
      <div>
       <p class ="copyrightText">  &copy;<?php print_r(date("Y"));  print_r("&nbsp;Yuriy Baragin");?></p>
         <div id = "time">
           <?php print_r(date("F j"));?>
         <div id = "hours">00</div>:
         <div id = "minutes">00</div>:
         <div id = "seconds">00</div>
       </div>
      </div>
     </div>

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

</script>

</body>
</html>
