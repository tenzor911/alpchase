<?php

class sendEmail
{  
    public function getLoginPass($user_login, $user_passw)
    {
        $this->u_login = $user_login;
        $this->u_passw = $user_passw;
    }
    
    public function setLogin() {
        return $this->u_login;
    }
    
     public function setPassw() {
        return $this->u_passw;
    }
    
    
    private $emailSubject = "Коммерческое приложение ООО АЛП энд ЧЕЙЗ";
    private $emailMessage = " 

        
    Добрый день,
    
    Проследуйте по ссылке в ваш личный кабинет, чтобы ознакомиться с нашим коммерческим предложением. 
    
    ссылка на личный кабинет: http://alpchase-test.url.ph/customer
    ваш логин:
    ваш пароль: 
    
    Надеюсь, Ваши намерения по началу работы на данном рынке достаточно серьезны.
    Предлагаю созвониться или договориться о встрече для детализации условий совместной работы.
    Подтвердите получение, пожалуйста.

    С уважением,
    Ананян Анна

    119049, Москва,
    1-й Спасоналивковский пер., 16.
    +7 (499) 23 800 23";
    
    

        public function emailMethod() 
    {
        mail($emailTo, $this->setLogin(),$this->emailMessage);
    }
    
    
}
?>