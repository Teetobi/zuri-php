<?php

    if(isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob =  $_POST['dob'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];

        $data = [$name, $email, $dob, $gender, $country];
        print_r($data);
        $file = fopen('userdata.csv', 'a');

        if ($file) {
            echo "file opened";
            fputcsv($file, $data);
        }else {
            echo "cannot be openned";
        }

        fclose($file);



    } else {
        echo "no data";
    }