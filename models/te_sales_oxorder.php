<?php
/**
 * This file is part of a techlines.de project
 *
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.techlines.de
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
                $sSelect .= " AND  oxorderdate = SUBDATE(CURDATE(),1)";
            break;
            
            case "week" :
                $sSelect .= " AND WEEK (oxorderdate) = WEEK( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastweek" :
                $sSelect .= " AND WEEK( oxorderdate ) = WEEK( subdate( now( ) , INTERVAL 1 WEEK ) ) AND YEAR( oxorderdate) = year( subdate( now( ) , INTERVAL 1 WEEK ) )";
            break;
            
            case "month" :
                $sSelect .= " AND MONTH (oxorderdate) = MONTH( current_date ) AND YEAR( oxorderdate) = YEAR( current_date )";
            break;
            
            case "lastmonth" :
                $sSelect .= " AND MONTH( oxorderdate ) = MONTH( subdate( now( ) , INTERVAL 1 MONTH ) ) AND YEAR( oxorderdate) = year( subdate( now( ) , INTERVAL 1 MONTH ) )";
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
    public function getOrderCnt( $blToday = false )
    {
        $sSelect  = 'select count(*) from oxorder where ';
        $sSelect .= 'oxshopid = "'.$this->getConfig()->getShopId().'"  and oxorder.oxstorno != "1" ';

        if ( $blToday ) {
            $sSelect .= 'and oxorderdate like "'.date( 'Y-m-d').'%" ';
        }

        return ( int ) oxDb::getDb()->getOne( $sSelect, false, false );
    }
}