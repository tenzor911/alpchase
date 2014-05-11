<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Создание новой анкеты</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../js/jquery-1.10.2.js"></script>
        <script src="../js/onlyNumbersField.js"></script>
        <script src="../js/makeNewPass.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("input[name*='cust_pass']").val(makeNewPass());
            });
        </script>
    </head>
<body class="tm-background">
    <div class="tm-header">
	<div class="uk-container uk-container-center uk-header-bg">
            <form class="uk-form uk-margin uk-form-stacked" method="post" action="../system/getDataFromQuestionary.php">
                <fieldset>
                    <legend>Анкета №</legend>
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
                                <input type="text" id="form-gs-street" name="cust_name" placeholder="Введите ваше имя" class="uk-width-1-1">
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
                                <span class="msg_email emailerror">указан неверный email-адрес!</span>
                                <span class="msg_email emailsuccess">email-адрес указан правильно.</span>
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
                                    <option value=''>Интернет</option>
                                    <option value=''>СМИ</option>
                                    <option value=''>Знакомые</option>
                                    <option value=''>Рекламные каталоги</option>
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
                            <label class="uk-form-label" for="form-gs-street">Вопросы к нашей компании</label>
                            <div class="uk-form-controls">
                                <textarea class="my_area_width" id="form-s-t" cols="50" rows="5" name="cust_answers" placeholder="Введите ответы на вопросы клиента сюда"></textarea>
                            </div>
                        </div>
                    </div>
					
                    <hr/>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <label class="uk-form-label" for="form-gs-street">Секция выбора услуг для клиента</label>
                            <div id="ServiceBlockGroup"> 
                                <div id="CountryServiceOptionsBlock">
                                    <select name='dynfields[]' class="uk-margin-small-top" id='select_country_id'><option value=''>страна не выбрана</option></select><p>
                                </div>
                            </div>		  
                            <div class="uk-form-controls uk-margin-top">
                                <input type="button" id="add_field" value="Добавить услугу">
                                <input type="button" id="rem_field" value="Удалить услугу">
                            </div>
					  
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
                                <input type="button" value="Предпросмотр">
                            </div>
			</div>
                        <div class="uk-width-1-4">
                            <div class="uk-form-controls uk-margin-top">
                                <input type="button" value="Сохранить">
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
     
<script>
function updateSelect(selectId) {
  $.ajax({
    type: "POST",
    url: "../ajax_scripts/countryListUpdate.php",  
    dataType: "html",
    cache: false,
    success: function (response) {
      //alert(response); 
      $('#' + selectId).html(response);
    }
  });
}

$(document).ready(function () {
  updateSelect('select_country_id');
});
</script>

    
<script type="text/javascript">
var counter = 1;
$("#add_field").click(function () {
  if (counter > 10) {
    alert("Достигнут лимит добавления полей!");
    return false;
  }
  var newTextBoxDiv = $(document.createElement('div'))
    .attr("id", 'CountryServiceOptionsBlock' + counter);
  newTextBoxDiv.after().html('<select id="select_country_id' + counter + '"><option value="">страна не выбрана</option></select><p>');
  newTextBoxDiv.appendTo("#ServiceBlockGroup");
  updateSelect('select_country_id' + counter);
  counter++;
});	
    
    $("#rem_field").click(function () {
	if(counter==1){
          alert("Достигнут лимит удаления полей!");
          return false;
       }   
 
	counter--;
 
        $("#CountryServiceOptionsBlock" + counter).remove();
 
     });  
     
	
</script>

<script>
    
    $('input[name=lico_type]').click(function() {
        if ($('.radio_fz').is(':checked')) {
            $("input[name*='company']").prop('disabled', true);
            $("input[name*='position']").prop('disabled', true);
        } else {
            $("input[name*='company']").prop('disabled', false);
            $("input[name*='position']").prop('disabled', false);
        }
    });
    
    $('form input[name="cust_email"]').blur(function () {
        var email = $(this).val();
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        if (re.test(email)) {
            $('.msg_email').hide();
            $('.emailsuccess').show();
            return true;
        } else {
            $('.msg_email').hide();
            $('.emailerror').show();
            return false;
        }
    });
    
    $(':text').keyup(function() {
        if($("input[name*='cust_name']").val() !== "" && $("input[name*='cust_surn']").val() !== "" && $("input[name*='cust_email']").val() !== "" && $("input[name*='cust_primphone']").val() !== "" && $("input[name*='cust_country']").val() !== "" && $("input[name*='cust_city']").val() !== "" && $("input[name*='cust_trustee']").val() !== "") 
        {
            $("input[name*='option_send']").removeAttr('disabled');
            $('.msg_send').hide();
            $('.sending_disable').hide();
        } else {
            $("input[name*='option_send']").attr('disabled', true);  
            $('.msg_send').hide();
            $('.sending_disable').show();
        }
    });
</script>
</body>
</html>
