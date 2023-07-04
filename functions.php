<?php 
    function getPasswordbyLength($userLength){
        $pool = "0123456789ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuwxyz!?&%$.,";
        
        $poolLength = strlen($pool) - 1;

        $generatedPassword = [];

        for ($i = 0; $i < $userLength; $i++) {

            $randomValue = rand(0, $poolLength);

            $generatedPassword[] = $pool[$randomValue];
        };

        $finalPassword = implode($generatedPassword);

        return $finalPassword;
    }
?>