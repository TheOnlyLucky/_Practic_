<?php
$title="Главная страница"; 
require __DIR__ . '/header.php'; 
require "db.php"; 
?>

<div class="container mt-4">
<div class="row">
<div class="col">
<center>
<h1>Добро пожаловать на наш сайт!</h1>
</center>
</div>
</div>
</div>


<?php if(isset($_SESSION['logged_user'])) : ?>
	Здравствуйте, <?php echo $_SESSION['logged_user']->name; ?></br>


<a href="logout.php">Выйти</a> 
<?php else : ?>


<a href="login.php"><button type="button" class="btn btn-primary btn-left">Авторизоваться</button></a><br>
<a href="signup.php"><button type="button" class="btn btn-primary btn-left">Регистрация</button></a>
<?php endif; ?>

<?php require __DIR__ . '/footer.php'; ?> 