<?php 

include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

session_start();

if(!$_SESSION['email']){
    header("location: ../customer");
}

echo "Welcome ".$_SESSION['email']."! <a href='../exit'>Logout Here</a></h1>";

$customer_data = mysql_query("SELECT customer_id, quest_date, customer_name, customer_surn, customer_midd, customer_compname FROM users_customers WHERE customer_email = '".$_SESSION['email']."'");
$data = mysql_fetch_assoc($customer_data);

$cust_id = $data['customer_id'];

$order = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
FROM system_services 
INNER JOIN (system_podservice 
INNER JOIN (users_customers 
INNER JOIN (system_countries 
INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$cust_id."));");
echo "<hr>";

if(isset($_SESSION['email']))
{
  $getUserVisits = mysql_query("SELECT customer_visits FROM users_customers WHERE customer_email='".$_SESSION['email']."'");
  $counterVal = mysql_fetch_array($getUserVisits);
  $counterVal['customer_visits']++;
  mysql_query("UPDATE users_customers SET customer_visits=".$counterVal['customer_visits']." WHERE customer_email='".$_SESSION['email']."'");
}

?>
<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Личный кабинет клиента</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../js/jquery/jquery-1.10.2.js"></script>
        <script src="../js/functions/function_AddOrDeleteFields.js"></script>
        <script src="../js/functions/function_OrderBasket.js"></script>
        <script src="../js/uikit.js"></script>
        <script src="../js/switcher.js"></script>
    </head>
    <body class="tm-background">
    <div class="tm-header">
	<div class="uk-container uk-container-center uk-header-bg">
            <form class="uk-form uk-margin uk-form-stacked">
                <fieldset>
                    <div class="uk-grid">
                        <div class="uk-width-1-2">
                            <legend>
                                Коммерческое предложение
                            </legend>
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
                                    Просмотры: <?php echo $counterVal['customer_visits'];?>
                                </div>
                            </div>
			</div>
                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Ф.И.О <?php echo $data['customer_name']." ".$data['customer_surn'];?>
                            </label>
                            
                        </div>
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Компания <?php echo $data['customer_compname'];?>
                            </label>
                            
                        </div>
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Дата <?php echo $data['quest_date'];?>
                            </label>
                            
                        </div>
                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                           <p>Добрый день, Иван Иванович</p>
                           <p>Вас приветствует компания "ALPS and CHASE" и любезно просит, посмотреть наше предложение!</p>
                        </div>
                    </div>					
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
                                <li class="uk-active">
                                    <a href="#">Ваш запрос:</a> <p>
                                     
                                </li>
                                <li class="">
                                    <a href="#">В чем мы можем быть Вам полезны?</a>
                                </li>
                                <li class="">
                                    <a href="#">Почему лучше работать с нами?</a>
                                </li>
                            </ul>
                            <ul id="tab-content" class="uk-switcher uk-margin">
                                <li class="uk-active">
                                        <?php while ($order_data = mysql_fetch_assoc($order)) {?><p>
                                        <?php echo $order_data['country_name'];?><p>
                                        <?php echo $order_data['service_name'];?><p>
                                        <?php echo $order_data['podservice_name'];?><p>
                                            <hr>
                                        <?php }?></li>
                                
                                <li class="">Профиль компании
                                            Услуги
                                                (по странам)
                                            Мы будем рады видеть Вас в качестве наших клиентов.
                                                С уважением,
                                            «____» www., телефон:
                                </li>
                                <li class="">Преимущества:
                                                1.
                                                2.


                                </li>
                            </ul>			
                        </div>
                    </div>					
                    <hr/>	
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                           <h4>Запросить другие услуги компании</h4>
                            <p>Так же Вы можете запросить стоимость других услуг, выбрав необходимые по нашему прайс-листу.<br/>
                            После обработки данных секретарём, данные по стоимости и срокам выполнения запрошенных услуг будут добавленны в Ваше коммерческое предложение.
                            </p>
                            <p><strong>ЗАПРОС:</strong></p>
                        </div>
                    </div>	
                    <hr/>					
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <label class="uk-form-label" for="form-gs-street">Пожалуйста выберите дополнительные услуги </label>
                            <div id="ServiceBlockGroup"></div>
                            <input type="button" onclick="addSection(); return false;" value="Добавить секцию"><input type="hidden" id="countSections" value="1"><input type="hidden" id="iSections" value="1">
                        </div>
                    </div>		
                        <hr/>
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
                            <p>Пожалуйста, ознакомившись с данным комерческим предложением, примите решение:</p>
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
                            С уважением, .
                            </p>
                        </div>
                    </div>	
                    <div class="uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
                                <div class="uk-width-1-3">
                                    15.01.2014
                                </div>
                                <div class="uk-width-1-3">
                                    www.alpschase.com
                                </div>
                                <div class="uk-width-1-3">
                                    <a class="preview2" data-fancybox-type="ajax" href="preview.php" id="preview2">Preview</a>
                                    +7(495) 123-54-56
                                </div>
                            </div>
			</div>
                        <div class="uk-width-1-2">
                        </div>
                    </div>						
                </fieldset>
            </form>
        </div>
   </div>
        <script>
            $(document).ready(function () {
  $('.preview2').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    $.ajax({
      type: "POST",
      cache: false,
      url: this.href, // preview.php
      data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        // on success, post (preview) returned data in fancybox
        $.fancybox(data, {
          // fancybox API options
          fitToView: false,
          width: 905,
          height: 505,
          autoSize: false,
          closeClick: false,
          openEffect: 'none',
          closeEffect: 'none'
        }); // fancybox
      } // success
    }); // ajax
  }); // on
}); // ready
        </script>
</body>
</html>
