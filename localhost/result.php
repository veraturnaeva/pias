<?php require "header.php"; ?>

<?php
   $ot = 0;
   $not = 0;
      if ($_POST[q1] == b){$ot++;}
      if ($_POST[q2] == a){$ot++;}
      if ($_POST[q3] == b){$ot++;}
      if ($_POST[q4] == b){$ot++;}
      
?>

<div class="container">
	<div class="results">
		<?php if ($ot==4)
		{ echo '<div class="res">
                    <div class="textcongr">
                    <div class="txt1">
                        <p class="cute"> &#128150 Милая крыса &#128150 </p> 
                    </div>
                    <div class="txt2">
                        <p class="congrats"> Поздравляем! Ты самая милая крыса в мире!
                        Ты любишь, когда чешут за ушком, охотно сидишь на плече и спишь на коленях :3 
                        Любимый вид сыра - моцарелла! </p>
                    </div>
                        <a href="test.php" class="btn">
			                 ещё раз
	                    </a>	
                    </div>
                    <img src="img/res1.gif" alt="" class="img_result1">
                </div>' ;} ?>
                
		<?php if ($ot==3)
		{ echo '<div class="res">
                    <div class="textcongr">
                    <div class="txt1">
                        <p class="cute"> &#127829 Сплинтер &#127829 </p> 
                    </div>
                    <div class="txt2">
                        <p class="congrats"> Вы больше всего похожи на Сплинтера. Пока Вы проходили тест 
                        на Вас оформили усыновление четырех детей.
                         Устройтесь на работу и попытайтесь прокормить черепашек. 
                        Cоциальной помощи нет, но Вы держитесь. А ещё Вы лучший папа крыса. </p>
                    </div>
                        <a href="test.php" class="btn">
			                 ещё раз
	                    </a>	
                    </div>
                    <img src="img/res3.gif" alt="" class="img_result3">
                </div>' ;} ?>
                
                
         <?php if ($ot==1)
		{ echo '<div class="res">
                    <div class="textcongr">
                    <div class="txt1">
                        <p class="cute"> &#128169 Мышь &#128169 </p> 
                    </div>
                    <div class="txt2">
                        <p class="congrats"> Вы хотите заполучить маску крысы, являсь обычной мышью 
                        с кучей проблем личного характера и эмоцианальным грузом. 
                        Вам не стоит создавать себе кумиров, ведь Вы уникальны и прекрасны какими есть, за это Вас любят окружающие 
                        и преподаватели, которые ставят автоматы. 
                        Кродитесь тихо, но целенаправлено и всё будет хорошо! </p>
                    </div>
                        <a href="test.php" class="btn">
			                 ещё раз
	                    </a>	
                    </div>
                    <img src="img/res2.gif" alt="" class="img_result3">
                </div>' ;} ?>
                
                <?php if ($ot==0)
		{ echo '<div class="res">
                    <div class="textcongr">
                    <div class="txt3">
                        <p class="cute"> Ты вообще не крыса и не мышь, попробуй еще раз! </p> 
                    </div>

                        <a href="test.php" class="btn">
			                 пройти тест
	                    </a>	
                    </div>
                </div>' ;} ?>
                
         <?php if ($ot==2)
		{ echo '<div class="res">
                    <div class="textcongr">
                    <div class="txt1">
                        <p class="cute"> &#129313 Обычная крыса &#129313 </p> 
                    </div>
                    <div class="txt2">
                        <p class="congrats"> Вы больше всего похожи на обычную крысу, не больше и не меньше. 
                        Вы можете воровать зерна правды, пока жизнь не закрутит Вас в вихре перемен. 
                        А сейчас продолжайте наслаждаться своими крохотуличными пальцами на лапках. </p>
                    </div>
                        <a href="test.php" class="btn">
			                 ещё раз
	                    </a>	
                    </div>
                    <img src="img/res4.gif" alt="" class="img_result3">
                </div>' ;} ?>
	</div>
	
</div>
</body> 
</html>