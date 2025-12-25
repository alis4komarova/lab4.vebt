  <?php	
	include 'header.html';
  ?>
  <?php 
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $from=$_GET['from'];
    } else {
    $name = '';
    $email = '';
    $from = '';
}
?>
<main>
    <h1>Форма обратной связи</h1>
    <form name="feedback" method="POST" action="home.php">
        <p>
            ФИО:<br>
            <input type="text" name="name" placeholder="ФИО" value="<?php echo $name; ?>"><br>
            email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="yourEmail@mail.ru"><br>
            Откуда узнали:<br>
            <input type="radio" name="from" value="fr" <?php echo ($from == 'fr') ? 'checked' : ''; ?>>
            От друга <br>
            <input type="radio" name="from" value="in" <?php echo ($from == 'in') ? 'checked' : ''; ?>>
            Из интернета <br>
            <select size="1" name="category">
                <option selected disabled>
                    Тип обращения
                </option>
                <option value="complaint">
                    Жалоба
                </option>
                <option value="propose">
                    Предложение
                </option>
            </select><br>
            <textarea name="message" rows="5" cols="40">
            </textarea><br>
            <input type="file"  name="attachment" enctype="multipart/form-data" ><br>
            <input type="checkbox" name="agree" value="yes">
            Даю согласие на обработку персональных данных
        </p>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>
</body>
</html>