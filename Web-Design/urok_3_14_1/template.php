<?php
  for($i = 1; $i <= 5; $i++) {
    echo "<li><a href='#'>Item" . $i . "</a></li>";
};
  if (isset($_POST['form'])) {
    echo 'Заголовок: ', htmlspecialchars($_POST['title'], ENT_QUOTES, "UTF-8"), '<br>';
    echo 'Текст: ', htmlspecialchars($_POST['content'], ENT_QUOTES, "UTF-8");
}
