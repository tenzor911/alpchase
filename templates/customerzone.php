<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['email']){
    header("location: ../customer");
}

echo "Welcome ".$_SESSION['email']."! <a href='../exit'>Logout Here</a></h1>";
echo "<hr>";
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <link rel="stylesheet" type="text/css" href="../css/uikit2.css">
        <script type="text/javascript" src="../js/uikit.js"></script>
        <script type="text/javascript" src="../js/switcher.js"></script>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery/jquery-1.10.2.js"></script>
    </head>
    <body class="tm-background">	
        <div class="tm-header">
            <div class="uk-container uk-container-center uk-header-bg">
                <form class="uk-form uk-margin uk-form-stacked">
                    <fieldset>
                        <div class="uk-grid">
                            <div class="uk-width-1-2">
                                <legend>Комерческое предложение</legend>
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
                                    <div class="uk-width-1-3">
                                        Избранное
                                    </div>
                                    <div class="uk-width-1-3">
                                        Презентация
                                    </div>
                                    <div class="uk-width-1-3">
                                        Просмотры: 15
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="uk-grid">
                <div class="uk-width-1-3">
                    <label for="form-s-mix2">
                        Ф.И.О
                    </label>
                    <input type="text" id="form-h-it" placeholder="Иванов Иван Иванович">    
                </div>
                <div class="uk-width-1-3">
                    <label for="form-s-mix2">
                        Компания
                    </label>
                    <input type="text" id="form-h-it" placeholder="">    
                </div>
                <div class="uk-width-1-3">
                    <label for="form-s-mix2">
                        Дата
                    </label>
                    <input type="date" id="form-h-id" placeholder="01-01-2014"> 
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <p>Добрый день, Иван Иванович</p>
                    <p>Вас приветствует компания "ALPS & CHASE" и любезно просит, посмотреть наше предложение!</p>
                </div>
            </div>					
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
                        <li class="uk-active">
                            <a href="#">
                                Ваш запрос
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                В чем мы можем быть Вам полезны?
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                Почему лучше работать с нами?
                            </a>
                        </li>
                    </ul>
                    <ul id="tab-content" class="uk-switcher uk-margin">
                        <li class="uk-active">
                            Любая информация 1
                        </li>
                        <li class="">
                            Любая информация 2
                        </li>
                        <li class="">
                            Любая информация 3
                        </li>
                    </ul>
		</div>
            </div>					
            <hr/>	
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h4>Запросить другие услуги компании</h4>
                    <p>Так же Вы можете запросить стоимость других услуг, выбрав необходимые по нашему прайс-листу.<br/>
                    После обработки данных секретарём, данные по стоимости и срокам выполнения запрошенных услуг0 будут добавленны в Ваше комерческое предложение.</p>
                    <p><strong>ЗАПРОС:</strong></p>
                </div>
            </div>	
            <hr/>					
            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <label for="form-s-s">
                        Выберите страну
                    </label>
                    <select id="form-s-s">
                        <option>Казахстан</option>
                        <option>Украина</option>
                    </select>
                </div>
		<div class="uk-width-1-2">
                    <label for="form-s-s">
                        Выберите услуги
                    </label>
                    <select id="form-s-s">
                        <option>Регистрация компании</option>
                        <option>Правовое заключение</option>
                    </select>
		</div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-1">  
                    <span class="uk-form-label" for="form-s-t">
                        Индивидуальный запрос
                    </span>
                <textarea id="form-s-t" cols="100" rows="5" placeholder="Напишите что Вам нужно"></textarea>	
</div>
                    </div>				
<hr/>					
					
 <div class="uk-grid">
                        <div class="uk-width-1-1">
						   <p>
						   Пожалуйста, ознакомившись с данным комерческим предложением, примите решение:
						   </p>
						</div>
                    </div>						
<div class="uk-grid uk-text-center">
                        <div class="uk-width-1-3">
					<div class="uk-form-controls uk-margin-top">
                            <input type="button" value="Принять предложение">
                    </div>
					  </div>
					                          <div class="uk-width-1-3">
					<div class="uk-form-controls uk-margin-top">
                            <input type="button" value="Отклонить предложение">
                    </div>
					  </div>
					                          <div class="uk-width-1-3">
					<div class="uk-form-controls uk-margin-top">
							<input type="button" value="Отложить предложение">
                    </div>
					  </div>
					  
                    </div>	
 <div class="uk-grid">
                        <div class="uk-width-1-1">
<p>Так же Вы можете нам сделать встречное предложение, выслав нам соотвествующее письмо:</p>
<textarea id="form-s-t" cols="100" rows="5" placeholder="Напишите что Вы хотите предложить"></textarea>	
</div>
</div>
 <div class="uk-grid">
                        <div class="uk-width-1-1">
<p>Мы будем рады видеть Вас в качестве наших клиентов!<br/>
С уважением, Иван Иванов.
</p>
</div>
                    </div>	
	<div class="uk-grid">
						<div class="uk-width-1-2">
						<div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
<div class="uk-width-1-3">15.01.2014</div>
<div class="uk-width-1-3">www.naebalovo.ru</div>
<div class="uk-width-1-3">+7(495) 123-54-56</div>
                        </div>
						</div>
						
						<div class="uk-width-1-2">
                        </div>
    </div>					
				
                </fieldset>

            </form>
   </div>
   </div>
	</body>
</html>
