<?php 
    require 'Client.php';
    require 'Company.php';
    require 'Package.php';

    $packageA = new Package('1000' ,'Type A');
    $packageB = new Package('1001' ,'Type B');
    $packageC = new Package('1002' ,'Type C');
    $packageD = new Package('1003' ,'Type D');
    $packageE = new Package('1003' ,'Type E');

    /** Creo clientes de ejemplo */
    $client1 = new Client('1000', 'Gonzalo', 'Calle Falsa 1234', '1165879622');
    $client2 = new Client('1001', 'Ariel', 'Victoria 1531', '1161346140');
    $client3 = new Client('1002', 'Sergio', 'Saborido 2548', '1122215558');
    
    /** Creo compañía */
    $company = new Company('01', 'Flybondy', 'Buenos Aires', '111111111');

    /** Genero transporte de productos */
    $company->transport($client1, $packageA, 'Lujan', 'Pilar', '10', '2019-10-13');
    $company->transport($client2, $packageB, 'Pilar', 'Lujan', '10', '2019-10-13');
    $company->transport($client2, $packageC, 'Buenos Aires - ARG', 'San Marino - USA', '10', '2019-10-12');
    
    // muestro reporte
    $report = $company->getReportByDate('2019-10-13');
    echo $report;

?>