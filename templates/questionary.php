<?php
include('../classes/system/getQuestNumber.php');

$questNum = new QuestNumber();

?>

<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Создание новой анкеты</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="../js/jquery/jquery-1.10.2.js"></script>
        <script src="../js/functions/function_AddOrDeleteFields.js"></script>
        <script src="../js/functions/function_CheckLegalForm.js"></script>
        <script src="../js/functions/function_EmailChecking.js"></script>
        <script src="../js/functions/function_FormPreview.js"></script>
        <script src="../js/functions/function_MakeNewPass.js"></script>
        <script src="../js/functions/function_OnlyNumbersField.js"></script>
        <script src="../js/functions/function_RequiredFields.js"></script>
    </head>
    
    
    <body class="tm-background">
        <div class="tm-header">
            <div class="uk-container uk-container-center uk-header-bg">
                <form class="uk-form uk-margin uk-form-stacked" method="post" action="../system/getDataFromQuestionary.php" id="QuestionaryForm">
                    <fieldset class="action">
                        <legend><center>Анкета № <input type="text" id="form-gs-street1" name="cust_id" value="<?php $questNum->countQuestCustomer()?>" class="uk-width-1-6" readonly > / Дата <input type="text" id="form-gs-street1" name="cust_date" value="<?php echo date("d.m.y");?>" class="uk-width-1-6" readonly></center></legend>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="uk-form-controls">
                                    <input type="hidden" id="form-gs-street" name="cust_pass" class="uk-width-1-1" value="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Имя (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street1" name="cust_name" placeholder="Введите ваше имя" value="" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Фамилия (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_surname" value="" placeholder="Введите вашу фамилию" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Отчество</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_middle" placeholder="Введите ваше отчество" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>					

                        <div class="uk-grid">
                            <div class="uk-width-1-1 uk-text-center">
                                <label><input type="radio" class="radio_fz" name="lico_type"/>Частное лицо</label>     
                                <label><input type="radio" class="radio_ur" name="lico_type" checked="true"/> Организация</label>
                            </div>
                        </div>
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Название организации</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_companyname" placeholder="Введите название организации"  class="uk-width-1-1">
                                </div>
                            </div>
                        </div>	
                    
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Должность</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_position" placeholder="Введите наименование должности"  class="uk-width-1-1">
                                </div>
                            </div>
                        </div>	
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">E-mail (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_email" placeholder="Введите адрес электронной почты" class="uk-width-1-1">
                                    <br>
                                    <span class="msg_email emailerror">Указан неверный email-адрес!</span>
                                    <span class="msg_email emailsuccess">Email-адрес указан правильно.</span><p>
                                    <span class="alreadyexist" id="alreadyexist"></span>
                                </div>
                            </div>
                        </div>		
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Основной телефон (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_primphone" maxlength="16" placeholder="Введите телефон с кодом страны и города" class="uk-width-1-1" onkeypress="return isNumber(event)">
                                </div>
                            </div>
                        </div>	
                    
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Дополнительный телефон</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_addphone" maxlength="16" placeholder="Введите телефон с кодом страны и города" class="uk-width-1-1" onkeypress="return isNumber(event)">
                                </div>
                            </div>
                        </div>	
					
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Страна (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_country" placeholder="Введите вашу страну" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>						

                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Город (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_city" placeholder="Введите название города" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>

                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Лицо принимающее решение (обязательное поле)</label>
                                <div class="uk-form-controls">
                                    <input type="text" id="form-gs-street" name="cust_trustee" placeholder="Должность лица принимающего решения" class="uk-width-1-1">
                                </div>
                            </div>
                        </div>

                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Откуда Вы о нас узнали?</label>
                                <div class="uk-form-controls">
                                    <select id="form-gs-street" class="uk-margin-small-top" name="cust_knowabout">
                                        <option>Интернет</option>
                                        <option>СМИ</option>
                                        <option>Знакомые</option>
                                        <option>Рекламные каталоги</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Вопросы к нашей компании</label>
                                <div class="uk-form-controls">
                                    <textarea class="my_area_width" id="form-s-t" cols="50" rows="5" name="cust_questions" placeholder="Если у клиента есть вопросы, то их можно ввести в это поле"></textarea>
                                </div>
                            </div>
                        </div>
                    
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Ответы нашей компании</label>
                                <div class="uk-form-controls">
                                    <textarea class="my_area_width" id="form-s-t" cols="50" rows="5" name="cust_answers" placeholder="Введите ответы на вопросы клиента сюда"></textarea>
                                </div>
                            </div>
                        </div>
					
                        <hr/>
                        
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="form-gs-street">Секции выбора услуг для клиента</label>
                                <div id="ServiceBlockGroup"></div>
                                <input type="button" onclick="addSection(); return false;" value="Добавить секцию"><input type="hidden" id="countSections" value="1">
                            </div>
                        </div>		
                        <hr/>

			<span class="msg_send sending_disable">Необходимые поля не заполнены! Отправка невозможна!</span>		
                        <div class="uk-grid uk-text-center">
                            <div class="uk-width-1-4">
                                <div class="uk-form-controls uk-margin-top">
                                    <input type="submit" name="option_send" value="Отправить" disabled>
                                </div>
                            </div>
                            <div class="uk-width-1-4">
                                <div class="uk-form-controls uk-margin-top">
                                    <input type="button" id="previewButton" value="Предпросмотр">
                                </div>
                            </div>
                            <div class="uk-width-1-4">
                                <div class="uk-form-controls uk-margin-top">
                                    <input type="button" id="saveDraft" value="Сохранить">
                                </div>
                            </div>
                            <div class="uk-width-1-4">
                                <div class="uk-form-controls uk-margin-top">
                                    <input type="button" value="Очистить">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="dialog-modal" title="Предпросмотр коммерческого предложения" hidden>
            <body class="tm-background">
		<div class="tm-header">
			<div class="uk-container uk-container-center uk-header-bg">
				<form class="uk-form uk-margin uk-form-stacked">
					<fieldset>
						<div class="uk-grid">
							<div class="uk-width-1-2">
								<legend>Коммерческое предложение</legend>
							</div>
							<div class="uk-width-1-2">
								<div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
								</div>
							</div>
						</div>
						<div class="uk-grid">
						    <div class="uk-width-2-4">
								<label for="form-s-mix2">
									Компания <span class="p_comp"></span>
								</label>	
							</div>
						    <div class="uk-width-2-4">
								<label for="form-s-mix2">
									Дата <?php echo date("d.m.y");?>
								</label>
							</div>
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<p>Добрый день, <span class="p_surn"></span> <span class="p_name"></span> <span class="p_midd"></span></p>
								<p>Вас приветствует компания "ALPS & CHASE" и любезно просит, посмотреть наше предложение!</p>
							</div>
						</div>					
						<div class="uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
                                                            <li class="uk-active">
                                                                Ваш запрос
                                                            </li>
                                                        </ul>
                                                        <ul id="tab-content" class="uk-switcher uk-margin">
                                                            <li class="uk-active">Любая информация 1</li>
                                                        </ul>
                                                    </div>
						</div>					
						<hr/>	
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<p>Мы будем рады видеть Вас в качестве наших клиентов!<br/>
								С уважением, .</p>
							</div>
						</div>	
	    					<div class="uk-grid">
							<div class="uk-width-1-2">
								<div class="uk-grid uk-text-small uk-text-center uk-text-bottom">
									<div class="uk-width-1-3">15.01.2014</div>
									<div class="uk-width-1-3">www.alpschase.com</div>
									<div class="uk-width-1-3">+7(495)123-54-56</div>
								</div>
							</div>
							
						</div>					
					</fieldset>
				</form>
			</div>
		</div>
            </body>
        </div>
    <script>
    function updateSelectCountry(selectCountryId) {
        $.ajax({
            type: "POST",
            url: "../ajax_scripts/countryListUpdate.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#' + selectCountryId).html(response);
            }
	});
    }		    
    
    function selectCountryAll(id, country) {		
        $.post( "../ajax_scripts/serviceListUpdate.php", 
        {country_select: country}, 
        function(data) {			
            $('.select_service'+id).each( 
                function() {				
                    $(this).html(data);			
                }
            );			
            $('.select_podservice'+id).each( 
                function() {				
                    $(this).html('<option value="0">Услуга не назначена</option>');			
                }
            );		
        });    
    }
    
    function selectService(id,service) {         		
        $.post( "../ajax_scripts/podserviceListUpdate.php", 
        {service_select: service}, 
        function(data) {			
            $('#select_podservice_id'+id).html(data);		
        });    
    }
    
    $("#saveDraft").click(function(){    
       formData = $("#QuestionaryForm").serialize();
       $.post( 
            "../system/getDataFromDraft.php",
            {   
            myData: formData,
            dataType: "json"
            },
            function(success) {
                alert('Анкета была сохранена как черновик! '+success);
                location.reload();
            }
        );
    });
    
    $(document).ready(function(){
        $("#previewButton").click(function(){ // Click to only happen on announce links
            $(function() {
                $( "#dialog-modal" ).dialog({
                    position: "top",
                    of: $( "#parent" ),
                    resizable: false,
                    modal: true,
                    width:1024, 
                    height: 800
                });
            });
        });
    });
    
    jQuery(function($) {
        var input_name = $("input[name*='cust_name']");
        var preview_name = $('#dialog-modal span.p_name');
        
        var input_surn = $("input[name*='cust_surn']");
        var preview_surn = $('#dialog-modal span.p_surn');
        
        var input_midd = $("input[name*='cust_midd']");
        var preview_midd = $('#dialog-modal span.p_midd');
        
        var input_comp = $("input[name*='cust_companyname']");
        var preview_comp = $('#dialog-modal span.p_comp');
        

        input_name.keyup(function(e) {
            preview_name.text(input_name.val());
        });
        
        input_surn.keyup(function(e) {
            preview_surn.text(input_surn.val());
        });
        
        input_midd.keyup(function(e) {
            preview_midd.text(input_midd.val());
        });
        
        input_comp.keyup(function(e) {
            preview_comp.text(input_comp.val());
        });
    });
    </script>
    </body>
</html>
