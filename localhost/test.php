<?php require "header.php"; ?>

<div class="container">
	<section class="Test">
	<form action="result.php" method="POST">
		<div class="1q">
            <p>1.Сколько будет крыса+крыса?</p>
            <div class="labels">
                <label><input name="q1" type="radio" value="a">Две крысы</label> 
                <label><input name="q1" type="radio" value="b">Одна большая крыса</label> 
                <label><input name="q1" type="radio" value="c">Крыса в квадрате</label>
            </div>
        </div>
        <div class="2q">
            <p>2.Ты любишь сыррр?</p>
            <div class="labels">
                <label><input name="q2" type="radio" value="a">Да</label> 
                <label><input name="q2" type="radio" value="b">Нет</label>
                <label><input name="q2" type="radio" value="c">Что это такое?</label> 
        	</div>
        </div>
        <div class="3q">
            <p>3.Что такое "пингование"?</p>
            <div class="labels">
                <label><input name="q3" type="radio" value="a">Пинговать - это тупить</label> 
                <label><input name="q3" type="radio" value="b">Проверка пакетов</label>
            </div> 
        </div>
        <div class="4q">
            <p>4.Как тебе тест?</p>
            <div class="labels">
                <label><input name="q4" type="radio" value="a">Ужасно</label> 
                <label><input name="q4" type="radio" value="b">Хочу ещё вопросов!</label>
            </div>  
        </div>
    <button type="submit" class="btn2">Момент истины</button>
</form>
</section>
</div>
</body>
</html>
