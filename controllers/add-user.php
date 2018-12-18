<?php

$app['database']->store('users', $_REQUEST);

header('Location: /');