<?php
session_start();
session_destroy();
header('location: /admin'); //nhớ thay link admin vào đây
