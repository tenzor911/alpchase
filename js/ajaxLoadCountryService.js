function getCountryValue(counter) {
    var country_id = 'select_country_id_';
    return country_id.concat(this.counter.toString()); 
}

function getServiceValue(counter) {
    var service_id = 'select_service_id_';
    return service_id.concat(this.counter.toString()); 
}


function ajax_update_country()  {
    var oXmlHttp = createXMLHttp();
    oXmlHttp.open("post", "../ajax_scripts/countryListUpdate.php", true);
    oXmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
    oXmlHttp.send(null);
    oXmlHttp.onreadystatechange = function()  {
        if(oXmlHttp.readyState == 4) 
        {
            if(oXmlHttp.status == 200) 
            {  
                a = oXmlHttp.responseText;
                document.getElementById(getCountryValue()).innerHTML = a;
            } 
                else {displayCustomerInfo("Ошибка: " + oXmlHttp.statusText);}
        }
    };
}

function ajax_update_service()  {
    var oXmlHttp = createXMLHttp();
    oXmlHttp.open("post", "../ajax_scripts/serviceListUpdate.php", true);
    oXmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
    oXmlHttp.send('info1='+1);
    oXmlHttp.onreadystatechange = function()  {
        if(oXmlHttp.readyState == 4) 
        {
            if(oXmlHttp.status == 200) 
            {
                b = oXmlHttp.responseText;
                document.getElementById(getServiceValue()).innerHTML = b;
            } 
                else {displayCustomerInfo("Ошибка: " + oXmlHttp.statusText);}
        }
    };
}
//-------------------------------------------------

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
//-----------------------------------------------------