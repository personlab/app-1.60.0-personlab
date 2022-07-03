<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="btnTwuo.css">
  <title>Форма Регистрации</title>
</head>
<body>

  <section class="about">

            <div class="contact-us">
                 <form class = 'userForm' method = 'GET' action = 'formResultOne.php' >   <!-- enctype = 'multipart/form-data'> -->
                           <p><input type = 'text' name = 'name' required = 'required'><span>Name:<span class = 'error'>*</span></span></p>
                           <p><input type = 'text' name = 'surtName' required = 'required'><span>SurtName:<span class = 'error'>*</span></span></p>
                           <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                           <p><input type = 'text' name = 'email' required = 'required'><span>Email:<span class = 'error'>*</span></span></p>
                           <p><input type = 'text' name = 'phone' required = 'required'><span>Phone:<span class = 'error'>*</span></span></p>
                           <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                           <p><input type = 'password' name = 'passwd_confirm' required = 'required'><span>Pass.confirm<span class = 'error'>*</span></span></p>
                           <p><lable class = 'sex'>Пол</lable></p>
                           <div class = 'genderUser'>
                              Мужской <input class = 'radioB' type = 'radio' name = 'userGender' value = 'Мужской'>
                              Женский <input class = 'radioB' type = 'radio' name = 'userGender' value = 'Женский'>
                            </div>
                            </style>
                            <p><textarea name = 'userMessage' cols="30" rows="3" required = 'required'></textarea><span>Ваш комментарий<span class = 'error'>&nbsp;&nbsp;*</span></span></p>
                            <div class="capth">
                              <p><img src = "captcha.php" class = "captchas" ></p>
                              <!--<p><input type="text" name="captcha" placeholder="Проверочный код" required="required"></p> -->
                              <p><input type="text" name="captcha" placeholder="Проверочный код *" required="required"></p>
                            </div>
                            <button class = 'btn' type = 'submit' name = 'submit'>
                            <span>Зарегистрироваться</span>
                            <span>Зарегистрироваться</span>
                            </button>

               <!--  required = "required" <form class = "userForm" method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> обработка кода php в этом же файле -->
                            <br>
                            <a href="privatePage.php" class = 'btn_2'>
                              <span><h5>Персональная страница</h5></span>
                              <span><h5>Персональная страница</h5></span>
                            </a>
                            <br>
              </form>
            </div>


              <div class="imgBx">
                <form class = 'userForm' method = 'POST' action = 'resultFormResultUpdate.php'>
                  <h3>Обновление данных по ID</h3>
                        <p><input type = 'text' name = 'id' required = 'required'><span>ID:<span class = 'error'>*</span></span></p>
                        <p><input type = 'text' name = 'name1' required = 'required'><span>Name:<span class = 'error'>*</span></span></p>
                        <p><input type = 'text' name = 'surtName1' required = 'required'><span>SurtName:<span class = 'error'>*</span></span></p>
                        <p><input type = 'text' name = 'login1' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                        <p><input type = 'text' name = 'email1' required = 'required'><span>Email:<span class = 'error'>*</span></span></p>
                        <p><input type = 'text' name = 'phone1' required = 'required'><span>Phone:<span class = 'error'>*</span></span></p>
                      <!--  <p><input type = 'password' name = 'passwd1' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                        <p><input type = 'password_confirm' name = 'passwd_confirm1' required = 'required'><span>Pass.confirm<span class = 'error'>*</span></span></p> -->
                        <br>
                        <div class = 'genderUser'>
                           Мужской <input class = 'radioB' type = 'radio' name = 'userGender1' value = 'Мужской'>
                           Женский <input class = 'radioB' type = 'radio' name = 'userGender1' value = 'Женский'>
                         </div>
                        <button class = 'btn_3' type = 'submit' name = 'submit'>
                        <span>Обновить данные</span>
                        <span>Обновить данные</span>
                        </button>
                      </form>

                      <form class = 'userForm_1' method = 'POST' action = 'resultVisionResult.php'>
                        <h3>Получить данные по ID</h3>
                             <p><input type = 'text' name = 'id' required = 'required'><span>ID:<span class = 'error'>*</span></span></p>
                             <br>
                             <button class = 'btn_4' type = 'submit' name = 'submit'>
                             <span> Получить данные</span>
                             <span> Получить данные</span>
                             </button>
                           </form>

             </div>
          </section>




</body>
</html>
