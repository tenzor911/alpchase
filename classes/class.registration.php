<?php
    class Registration
    {
        private $reg_user_name;
        private $reg_user_pass;
        private $reg_user_email;
        private $reg_user_role;
        
        private $check_email;


        public function FieldsValidation()
        {
            if(isset($_POST['submit'])) 
            {
                $this->reg_user_name = $_POST['name'];
                $this->reg_user_pass = $_POST['pass'];
                $this->reg_user_email = $_POST['email'];
                $this->reg_user_role = $_POST['roles'];
        
                if($this->reg_user_name=='')
                {
                    echo "<script>alert('Username is empty!')</script>"; 
                    exit();
                    
                }
    
                if($this->reg_user_pass=='')
                {
                    echo "<script>alert('Password is empty!')</script>"; 
                    exit();
                }
    
                if($this->reg_user_email=='')
                {
                    echo "<script>alert('Email is empty!')</script>"; 
                    exit();
                } 
            }
        }  
        
        public function EmailValidation()
        {
            $this->check_email = "SELECT * FROM users_managers WHERE um_email = '$this->reg_user_email'";
            $run_email_check = mysql_query($this->check_email);
            
            if(mysql_num_rows($run_email_check) > 0)
            {
                echo "<script>alert('Email $this->reg_user_email is already exists!')</script>";
                exit();
            }
            else 
            {
                $sql_query_register_new_user = "INSERT INTO users_managers (um_login, um_pass, um_email, um_role) VALUES ('".$this->reg_user_name."', MD5('".$this->reg_user_pass."'), '".$this->reg_user_email."', '".$this->reg_user_role."')";
                if (mysql_query($sql_query_register_new_user))
                {
                    echo "<script>alert('Registration successfull!')</script>";
                }
                
            }
        }
    }
?>    

