<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
$modul = 'bphtb';

$route["{$modul}/about"] = "irul"; //sample aja; langsung nama controller di dalam module-nya

$route["{$modul}/sspd_register"]             = "sspd/register"; 
$route["{$modul}/sspd_register/grid"]        = "sspd/grid_register"; 
$route["{$modul}/sspd_register/grid/(:any)"] = "sspd/grid_register/$1"; 
$route["{$modul}/sspd_register/show_rpt"]        = "sspd/show_rpt"; 
$route["{$modul}/sspd_register/show_rpt/(:any)"] = "sspd/show_rpt/$1";
//2016 03 16
$route["{$modul}/sspd_register/show_xls"]        = "sspd/show_xls"; 
$route["{$modul}/sspd_register/show_xls/(:any)"] = "sspd/show_xls/$1"; 
