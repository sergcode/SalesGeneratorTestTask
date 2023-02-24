<?php
    $to  = "<shsv100@ya.ru>";

    $subject = "Заголовок письма";

    $message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

    $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    $response = ['message' => $message];

    mail($to, $subject, $message, $headers);
    header('Content-type: application/json');
    echo json_encode($response);
