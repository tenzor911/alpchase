divid='data_field';

function refreshRegistryData()
{
var oXmlHttp = createXMLHttp();
oXmlHttp.open("post", "../ajax_scripts/loadRegistryData.php", true);
oXmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
oXmlHttp.send(null);
oXmlHttp.onreadystatechange = function() 	//перехват и обработка ответа сервера		
 	{if(oXmlHttp.readyState == 4) 
   	 	{if(oXmlHttp.status == 200) 
	 	 	{a = oXmlHttp.responseText;
	 		 document.getElementById(divid).innerHTML=a;	//вставка полученного ответа сервера в div, с помощью свойства innerhtml и id элемента, id был задан в самом начале, то есть можно выводить в любой div, зная его id
     	 		} 
			else {displayCustomerInfo("Ошибка: " + oXmlHttp.statusText);}
   		}
 	};

}

//функция для создания объекта xmlhttp, ключевого в ajax, работает в старых версиях IE----------------
 function createXMLHttp() {
        if(typeof XMLHttpRequest != "undefined") { // для браузеров аля Mozilla
          return new XMLHttpRequest();
        } else if(window.ActiveXObject) { // для Internet Explorer (all versions)
          var aVersions = ["MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0",
                   "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp",
                   "Microsoft.XMLHttp"
                   ];
          for (var i = 0; i < aVersions.length; i++) {
            try { //
              var oXmlHttp = new ActiveXObject(aVersions[i]);
              alert(aVersions[i]);
              return oXmlHttp;
            } catch (oError) {
              /* поскольку это элемент управления ActiveX, любая ошибка создания объекта будет
                возбуждать исключительную ситуацию, а это означает что попытке создания
                объекта необходимо предпринимать внутри конструкции try...catch.
                
                 В данном случае, если обнаружена ошибка, мы
                 ничего не делаем, создать объект с данной версией компонента не удалось.
               */
            }
          }
          throw new Error("Невозможно создать объект XMLHttp.");
        }
      }