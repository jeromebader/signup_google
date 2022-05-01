<?php
        interface IValidation {

            public function changePasswordsValidation($new_password,$_confirmpassword,$old_password=null,$email=null);
            public function emailValiation($email);
            public function idValidation($id);

        }    

?>