<?php
require "./vendor/autoload.php";
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Http\Kernel as KernelContracts;
use Illuminate\Foundation\Http\Kernel;


$app = new Application();
//print_r($app->make("mysql")->select());
$app->bind(KernelContracts::class, Kernel::class);
$kernel = $app->make(KernelContracts::class, [$app]);

echo $kernel->handler('');

