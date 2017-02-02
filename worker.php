<?php

$worker = new GearmanWorker();
$worker->addServer('gearman'); // gearman hostname is linked, required

$worker->addFunction('echo', 'doEcho');

while ($worker->work());

function doEcho($job) {
     sleep(1);
     echo "Workload: ".$job->workload()."\n";
 }
	
	
