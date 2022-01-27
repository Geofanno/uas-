<?php
if(isset($_GET['x'])){
    switch($_GET['x']){
        case 'universal':
                include("universal.php");
                break;     
        case 'keluar':
            include("keluar.php");
            break;
        case 'beranda':
                include("beranda.php");
                break;
        case 'admin':
            include("admin.php");
            break;
        case 'tadmin':
              include("tadmin.php");
              break;
        case 'sadmin':
                include("sadmin.php");
                break;
        case 'hadmin':
                include("hadmin.php");
                break;
        case 'uadmin':
                include("uadmin.php");
                break;
        case 'ubadmin':
                include("ubadmin.php");
                break;
        case 'mobil':
                include("mobil.php");
                break;
        case 'tmobil':
                include("tmobil.php");
                break;
        case 'smobil':
                include("smobil.php");
                break;
        case 'hmobil':
                include("hmobil.php");
                break;
        case 'umobil':
                include("umobil.php");
                break;
        case 'ubmobil':
                include("ubmobil.php");
                break;
        case 'order':
                include("order.php");
                break;
        case 'torder':
                include("torder.php");
                break;
        case 'sorder':
                include("sorder.php");
                break;
        case 'horder':
                include("horder.php");
                break; 
        case 'rmobil':
                include("rmobil.php");
                break; 
        case 'rorder':
                include("rorder.php");
                break;
           
    }
}