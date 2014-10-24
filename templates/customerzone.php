<?php 

include('../setup/mysql_settings.php');
include('../classes/system/dataEdit.php');
include('../classes/system/class.getQuestNumber.php');

$questNum = new QuestNumber();

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

$loadBasket = new dataEdit();

/*$order = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
FROM system_services 
INNER JOIN (system_podservice 
INNER JOIN (users_customers 
INNER JOIN (system_countries 
INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$cust_id."));");
echo "<hr>";
*/
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
            <form class="uk-form uk-margin uk-form-stacked" id="customerData">
                <fieldset>
                    <div class="uk-grid">
                        <br>
                        <div class="uk-width-1-1">
                            <div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
                                <div class="uk-width-1-3">
                                    <h3>Избранное</h3>
                                </div>
                                <div class="uk-width-1-3">
                                    <h3>Презентация</h3>
                                </div>
                                <div class="uk-width-1-3">
                                    <h3>Просмотры: <?php echo $counterVal['customer_visits'];?></h3>
                                </div>
                            </div>
                            <br>
			</div>
                        <div class="uk-grid uk-text-center">
            
                        <div class="uk-width-1-2 uk-text-right">
                            <b>Коммерческое предложение №</b>
                        </div>
                        <div class="uk-width-1-2 uk-text-center">
                           <input type="text" id="form-gs-street1" name="cust_id" value="<?php $questNum->countQuestCustomer()?>" class="uk-width-1-6" readonly >
                        </div>
         
            </div>

                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Ф.И.О: <?php echo " ".$data['customer_name']." ".$data['customer_surn'];?>
                            </label>
                            
                        </div>
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Компания: <?php echo " ".$data['customer_compname'];?>
                            </label>
                            
                        </div>
                        <div class="uk-width-1-3">
                            <label for="form-s-mix2">
                                Дата: <?php echo " ".$data['quest_date'];?>
                            </label>
                            
                        </div>
                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                           <p>Добрый день, <?php echo " ".$data['customer_name'];?></p>
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
                                    <table width="600" cellpadding="0" cellspacing="0" align="center" id="mytable">
                                            <?php $loadBasket->loadCustomerBasket($cust_id);?>
                                    </table>   
                                    <hr/>	
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <center><input type="button" onclick="addSection(); return false;" value="Запросить другие услуги компании"><input type="hidden" id="countSections" value="1"><input type="hidden" id="iSections" value="1"></center>
                                        </div>
                                    </div>
                                </li>
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
				<input type="button" id="activateSubscription" value="Отложить предложение">
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
                        <div class="uk-width-1-1">
                            <div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
                                <div class="uk-width-1-3">
                                    15.01.2014
                                </div>
                                <div class="uk-width-1-3">
                                    www.alpschase.com
                                </div>
                                <div class="uk-width-1-3">
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
            $("#activateSubscription").click(function(){    
                formData = $("#customerData").serialize();
                $.post( 
                    "../ajax_scripts/offerAwaiting.php",
                    {   
                        myData: formData,
                        dataType: "json"
                    },
                    function(success) {
                        alert('Ваша подписка на рассылку активирована! '+success);
                        window.location.href = 'customerzone';
                    }
                );
            });
        </script>
</body>
</html>
