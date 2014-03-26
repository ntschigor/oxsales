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


class te_sales_oxorder extends te_sales_oxorder_parent
{
    /**
     * Returns orders total price
     *
     * @param bool $blToday if true calculates only current day orders
     *
     * @return int
     */
    public function getOrderSum( $blToday = false, $sPeriod = null)
    {
        $sSelect  = 'select sum(oxtotalordersum / oxcurrate) from oxorder where ';
        $sSelect .= 'oxshopid = "'.$this->getConfig()->getShopId().'" and oxorder.oxstorno != "1" ';

        if ( $blToday ) {
            $sSelect .= 'and oxorderdate like "'.date( 'Y-m-d').'%" ';
        }
        
        switch ($sPeriod)
        {
            case "yesterday" :
                $sSelect .= " AND  oxorderdate LIKE '".date("Y-m-d", strtotime("yesterday"))."%'";
            break;
            
            case "week" :
                $sSelect .= " AND WEEK (oxorderdate) = WEEK( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastweek" :
                $sSelect .= " AND WEEK( oxorderdate ) = WEEK( subdate( CURDATE( ) , INTERVAL 1 WEEK ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 1 WEEK ) )";
            break;
            
            case "month" :
                $sSelect .= " AND MONTH (oxorderdate) = MONTH( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastmonth" :
                $sSelect .= " AND MONTH( oxorderdate ) = MONTH( subdate( CURDATE( ) , INTERVAL 1 MONTH ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 1 MONTH ) )";
            break;
            
            case "nllastmonth" :
                $sSelect .= " AND MONTH( oxorderdate ) = MONTH( subdate( CURDATE( ) , INTERVAL 2 MONTH ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 2 MONTH ) )";
            break;
            
            case "year" :
                $sSelect .= " AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
        }
        return ( double ) oxDb::getDb()->getOne( $sSelect, false, false );
    }

    /**
     * Returns orders count
     *
     * @param bool $blToday if true calculates only current day orders
     *
     * @return int
     */
    public function getOrderCnt( $blToday = false, $sPeriod = null )
    {
        $sSelect  = 'select count(*) from oxorder where ';
        $sSelect .= 'oxshopid = "'.$this->getConfig()->getShopId().'"  and oxorder.oxstorno != "1" ';

        if ( $blToday ) {
            $sSelect .= 'and oxorderdate like "'.date( 'Y-m-d').'%" ';
        }
        switch ($sPeriod)
        {
            case "yesterday" :
                $sSelect .= " AND  oxorderdate LIKE '".date("Y-m-d", strtotime("yesterday"))."%'";
            break;
            
            case "week" :
                $sSelect .= " AND WEEK (oxorderdate) = WEEK( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastweek" :
                $sSelect .= " AND WEEK( oxorderdate ) = WEEK( subdate( CURDATE( ) , INTERVAL 1 WEEK ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 1 WEEK ) )";
            break;
            
            case "month" :
                $sSelect .= " AND MONTH (oxorderdate) = MONTH( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastmonth" :
                $sSelect .= " AND MONTH( oxorderdate ) = MONTH( subdate( CURDATE( ) , INTERVAL 1 MONTH ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 1 MONTH ) )";
            break;
            
            case "nllastmonth" :
                $sSelect .= " AND MONTH( oxorderdate ) = MONTH( subdate( CURDATE( ) , INTERVAL 2 MONTH ) ) AND YEAR( oxorderdate) = year( subdate( CURDATE( ) , INTERVAL 2 MONTH ) )";
            break;
            
            case "year" :
                $sSelect .= " AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
        }

        return ( int ) oxDb::getDb()->getOne( $sSelect, false, false );
    }
}