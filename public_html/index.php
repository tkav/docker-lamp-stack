<?php

//Environmental variables defined in .env file
$instanceName = $_SERVER['INSTANCE_NAME'];
$projectColor = $_SERVER['PROJECT_COLOR'];

echo '<h1>Hello from <font color="'.$projectColor.'">'.$instanceName.'</font> instance</h1>';