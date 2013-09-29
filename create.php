<?php

$new = array("aliceinchains",
"altj",
"autechre",
"bastille",
"blur",
"boardsofCanada",
"calvinharris",
"chrismoyles",
"connormaynard",
"crystalcastles",
"dadalife",
"delilah",
"edsheeran",
"emelisande",
"fakeblood",
"georgeezra",
"jaguarskills",
"jls",
"kylieminogue",
"lawson",
"modestep",
"naughtyboy",
"nightmaresonwax",
"paramore",
"planB",
"professorgreen",
"rollingstones",
"swedishhousemafia",
"thestaves",
"thewanted",
"tomodell",
"rioferdinand");

foreach ($new as $p) {
  exec("cp dummy.png build/assets/img/clients/$p.png");
}