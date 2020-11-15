<?php

    require 'Model/Connection.php';

    $conn = new Connection();
    echo $conn->Connect();