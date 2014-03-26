<?php
/**
 *    This file is part of Module for OXID eShop CE/PE/EE.
 *
 *    Ofree software: you can redistribute it and/or modify
 *    it under the terms of the MIT License.
 *
 * Version:    1.0
 * Author:     Noel Tschigor
 * Author URI: http://www.techlines.de
 */


/**
 * Module information
 */
$aModule = array(
    'id'           => 'te/sales',
    'title'        => 'techlines.de // Sales',
    'description'  => 'See more sales data in order overview',
    'version'      => '1.0',
    'thumbnail'    => 'te_modulz.png',
    'author'       => 'Noel Tschigor',
    'email'        => 'info@techlines.de',
    'url'          => 'techlines.de',
    
    'extend' => array(
        'oxorder'           => 'te/sales/models/te_sales_oxorder'
    ),
    'files' => array(
        'te_sales'           => 'te/sales/controllers/admin/te_sales.php'        
	),	
    'templates' => array(
        'te_sales.tpl' => 'te/sales/views/admin/tpl/te_sales.tpl',
    ),
);