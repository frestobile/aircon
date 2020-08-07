<?php

    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $firstname = filter_var($_POST['苗字'], FILTER_SANITIZE_STRING);
        $firstname = filter_var($_POST['名前'], FILTER_SANITIZE_STRING);

        $zip1 = filter_var($_POST['zip1'], FILTER_SANITIZE_NUMBER_INT);
        $zip2 = filter_var($_POST['zip2'], FILTER_SANITIZE_NUMBER_INT);
        $state = filter_var($_POST['都道府県'], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['市区町村'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['それ以降'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['それ以降'], FILTER_SANITIZE_STRING);

        $cell = filter_var($_POST['電話番号'], FILTER_SANITIZE_NUMBER_INT);
        $mail = filter_var($_POST['メールアドレス'], FILTER_SANITIZE_EMAIL);

        $f_date = filter_var($_POST['第1希望-日付'], FILTER_SANITIZE_STRING);
        $f_time = filter_var($_POST['第1希望-時間'], FILTER_SANITIZE_STRING);
        $s_date = filter_var($_POST['第2希望-日付'], FILTER_SANITIZE_STRING);
        $s_time = filter_var($_POST['第2希望-時間'], FILTER_SANITIZE_STRING);
        $t_date = filter_var($_POST['第3希望-日付'], FILTER_SANITIZE_STRING);
        $t_time = filter_var($_POST['第3希望-時間'], FILTER_SANITIZE_STRING);

        $symptom = $_POST['症状'];


        $msg  = filter_var($_POST['症状の詳細'], FILTER_SANITIZE_STRING);
        
        $feedback = $_POST['エコ得でんきに関して'];

        // Creating Array of Errors
        $formErrors = array();

        if (strlen($msg) < 10) {
            $formErrors[] = 'Message Can\'t Be Less Than <strong>10</strong> Characters'; 
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'forever_ourvictory@hotmail.com';
        $subject = 'ToAcros';
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $msg, $headers);
            
            $user = '';
            $mail = '';
            $cell = '';
            $msg = '';
            
            $success = '<div class="alert alert-success">We Have Recieved Your Message</div>';
            
        }
        
    }
?>
