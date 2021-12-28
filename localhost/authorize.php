<?php require "header.php"; ?>


<title>Вход/Регистрация</title> 

<div class="container">
	<div class="row">
		<div class="col">
			<p>Регистрация</p>
            <form action="check.php" method="post">
            	<input type="text" name="login"
					class="form-control" id="login" placeholder="Логин"><br>
                <input type="text" name="name"
					class="form-control" id="name" placeholder="Имя"><br>
                <input type="password" name="pass"
					class="form-control" id="pass" placeholder="Пароль"><br>
                <button class="btn3">
                	Зарегистрироваться
                </button>
                <br>
			</form>
		</div>

		<div class="col">
			<p>Вход</p>
            <form action="auth.php" method="post">
                <input type="text" name="login"
    				class="form-control" id="login" placeholder="Логин"><br>
                <input type="password" name="pass"
    				class="form-control" id="pass" placeholder="Пароль"><br>
                <button class="btn3">
                	Авторизоваться
                </button>
                <br>
            </form>
        </div>
	</div>
</div>
</body>
</html>
