<?php

    require 'app/Model/Connection.php';

    $conn = new Connection();
    echo $conn->Connect();

    