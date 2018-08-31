<?php

include_once __DIR__ . '/default_config.php';
include_once __DIR__ . '/OmniTiSkillTest1.php';

// create object
$otst1 = new \OmniTiSkillTest1();

// set configuration.
$otst1->set($config);

// execute
$otst1->run();
