  <?php	
	include 'header.html';
  ?>
<main>
    <?php
        if(isset($_POST['name']) && trim($_POST['name']) != ''){
            echo '<h2>Ответ на ваше обращение</h2>';
            echo '<p> Здравствуйте, '.$_POST['name'].'</p>'; //выводим ФИО

        if ($_POST['category'] == 'propose'){ //проверяем тип обращения
                echo '<p>Спасибо за Ваше предложение:</p>';
        }else{
                echo '<p>Мы рассмотрим Вашу жалобу:</p>';
        }

        echo '<textarea readonly>'.$_POST['message'].'</textarea>';//вывод текста сообщения
        echo '<br>';
        
        // Проверяем прикрепленный файл
        if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo 'Вы приложили следующий файл: '.$_POST['attachment'];

        // Формируем кнопку "Заполнить снова" с передачей параметров
        echo '<p><a class="btn" href="index.php?name='.$_POST['name'].'&email='.$_POST['email'].'&from='.$_POST['from'].'">Заполнить снова</a></p>';
        }


        else{
            echo '<h2>К сожалению, вы не заполнили форму</h2>';
            echo '<p><a class="btn" href="index.php">Заполнить снова</a></p>';
        }
    ?>
</main>
</body>
</html>