<?php
session_start();
session_destroy();

header("Location: ../INDEX/index.php");
exit;