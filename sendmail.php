<?php
    $to  = "<shsv100@ya.ru>";

    $subject = "Тестовое задание ООО Генератор продаж";

    $message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

    $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
