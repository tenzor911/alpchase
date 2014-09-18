<?php

class restoreCustomerPassword {
    public function getLoginPass($user_login, $user_passw, $user_name)
    {
        $this->u_login = $user_login;
        $this->u_passw = $user_passw;
        $this->u_name = $user_name;
    }
    
    private function setLogin() {
        return $this->u_login;
    }
    
    private function setPassw() {
        return $this->u_passw;
    }
    
    private function setName() {
        return $this->u_name;
    }
    
    private function setLink()
    {
        $privateZoneLink = "http://188.32.189.15/alpschase/customer";
        return $privateZoneLink;
    }
    
    private function setMessageSubject()
    {
        $emailSubject = "Восстановление пароля - ООО АЛП энд ЧЕЙЗ";
        return $emailSubject;
    }
    
    private function setMessageBody()        
    {
        $emailMessage = " 
            Добрый день, уважаемый ".$this->setName()."
    
            Вы запросили восстановление вашего пароля.
    
            ссылка на личный кабинет: ".$this->setLink()."
            ваш логин: ".$this->setLogin()."
            ваш новый пароль: ".$this->setPassw()."
    
            Это письмо сформировано автоматически. 
            Пожалуйста не отвечайте на него.
            
            с уважением, компания АЛП энд ЧЕЙЗ";
        
        return $emailMessage;
    }

	private function emailEncoding() 
	{
		$headerFields = array(
			"From: braindead@bk.ru",
			"MIME-Version: 1.0",
			"Content-Type: text/plain;charset=utf-8"
		);
		return $headerFields;
	}
	
    public function emailMethod() 
    {
        mail($this->setLogin(), $this->setMessageSubject(), $this->setMessageBody(), implode("\r\n", $this->emailEncoding()));
    }
}

?>