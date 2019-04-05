<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<h2 class="main_title">Спасибо за Вашу заявку</h2>
<div class="article">

<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $db_form = mysqli_connect('localhost', 'root', '', 'main');
    mysqli_set_charset($db_form, 'utf8');

    $sql_form = "INSERT INTO clients (id, fio, email, phone, comment, adaptive_comment) VALUE 
    (NULL, '{$_POST['fio']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['comment']}', '{$_POST['comment_for_adaptive']}')";
    $result = mysqli_query($db_form, $sql_form);

    if ($result){
        echo "Данные добавлены в базу";
    }else{
        echo "Ошибка";
    }
?>

</div>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>