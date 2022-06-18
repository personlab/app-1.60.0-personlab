<?php
  $rows = 2;
  $cols = 4;
  $data = array(array("1", "Антонов Игорь Владимирович", "helloworld@gmail.com", "муж", "1984"),
                array("2", "Иванова Кристина Викторовна", "helloworld@gmail.com", "жен", "1984"),
                array("3", "Борисов Максим Анатольевич", "helloworld@gmail.com", "муж", "1984"));
?>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>14_1 Домашнее задание</title>
  </head>
  <body>
  <!-- <?php
    include 'template.php';
    ?> -->
     <h1 class = "greeting" ><?php echo "Привет, новый пользователь!";?></h1>
     <h3 class = "timeDate">Сегодня: <?php echo date("d/m/Y");?></h3>
     <div class="contentTime">
       <div id = "time">
         <div class="circle" style = "--clr: #ff2972;">
           <div class="dots hr_dot"></div>
           <svg>
             <circle cx = "70" cy = "70" r = "70"></circle>
             <circle cx = "70" cy = "70" r = "70" id = "hh"></circle>
           </svg>
           <div id = "hours">00</div>
         </div>
         <div class="circle" style = "--clr: #fee800;">
           <div class="dots min_dot"></div>
           <svg>
             <circle cx = "70" cy = "70" r = "70"></circle>
             <circle cx = "70" cy = "70" r = "70" id = "mm"></circle>
           </svg>
           <div id = "minutes">00</div>
         </div>
         <div class="circle" style = "--clr: #04fc43;">
           <div class="dots sec_dot"></div>
           <svg>
             <circle cx = "70" cy = "70" r = "70"></circle>
             <circle cx = "70" cy = "70" r = "70" id = "ss"></circle>
           </svg>
           <div id = "seconds">00</div>
         </div>
         <div class="ap">
           <div id = "ampm">AM</div>
         </div>
       </div>
       <script>
           // включаем часы setInterval
         setInterval (() => {

         let hours = document.getElementById('hours');
         let minutes = document.getElementById('minutes');
         let seconds = document.getElementById('seconds');
         let ampm = document.getElementById('ampm');

         let hh = document.getElementById('hh');
         let mm = document.getElementById('mm');
         let ss = document.getElementById('ss');

         let hr_dot = document.querySelector('.hr_dot');
         let min_dot = document.querySelector('.min_dot');
         let sec_dot = document.querySelector('.sec_dot');

         let h = new Date().getHours();
         let m = new Date().getMinutes();
         let s = new Date().getSeconds();
         let am =h >= 12 ? "PM" : "AM"; // убрать AMPM

         // меняем 24 часовой формат на 12 часовой
         if (h > 12) {
           h = h - 12;
         }
         //Прибавляем ноль к (часу) (minutam) (secundam)
         h = (h < 10) ? "0" + h : h;
         m = (m < 10) ? "0" + m : m;
         s = (s < 10) ? "0" + s : s;

         hours.innerHTML = h + "<br><span>Hours</span>";
         minutes.innerHTML = m + "<br><span>Minutes</span>";
         seconds.innerHTML = s + "<br><span>Seconds</span>";
         ampm.innerHTML = am; // убрать AMPM

         hh.style.strokeDashoffset = 440 - (440 * h) / 12;
         // 12 hrs clock
         mm.style.strokeDashoffset = 440 - (440 * m) / 60;
         // 60 minutes
         ss.style.strokeDashoffset = 440 - (440 * s) / 60;
         // 60 seconds

         hr_dot.style.transform = `rotate(${h * 30}deg)`;
         // 360 / 12 = 30
         min_dot.style.transform = `rotate(${m * 6}deg)`;
         // 360 / 60 = 6
         sec_dot.style.transform = `rotate(${s * 6}deg)`;
         // 360 / 60 = 6
        })
       </script>
     </div>
     <table class = "tables">
       <thead class = "list">
         <th>№</th>
         <th>ФИО</th>
         <th>E-mail</th>
         <th>Пол</th>
         <th>Год рождения</th>
       </thead>
       <?php
       echo "<tbody>";
       for ($tr = 0; $tr <= $rows; $tr++) {
         echo "<tr>";
         for ($td = 0; $td <= $cols; $td++) {
           echo "<td>" . $data[$tr][$td] . "</td>";
         }
         echo "</tr>";
       }
       echo "</tbody>";
       ?>
       <tfoot>
         <td colspan="5">Итоги: 3</td>
       </tfoot>
     </table>
  </body>
</html>
