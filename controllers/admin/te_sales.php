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


class te_sales extends oxAdminView
{
    /**
     * Executes parent method parent::render()
     * to Smarty engine, returns name of template file "te_sales.tpl".
     *
     * @return string
     */
    public function render()
    {
        parent::render();
        
        $myConfig = $this->getConfig();
        
        $oOrder = oxNew( "oxOrder" );
        $oCur  = $myConfig->getActShopCurrencyObject();
        $oLang = oxRegistry::getLang();
        
        $this->_aViewData["currency"] = $oCur;
        // orders today
        $dSum  = $oOrder->getOrderSum(true);
        $this->_aViewData["ordersum"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt"] = $oOrder->getOrderCnt(true);

        // ALL orders
        $dSum = $oOrder->getOrderSum();
        $this->_aViewData["ordertotalsum"] = $oLang->formatCurrency( $dSum, $oCur);
        $this->_aViewData["ordertotalcnt"] = $oOrder->getOrderCnt();
       
          
        $dSum  = $oOrder->getOrderSum(false, "yesterday");
        $this->_aViewData["ordersum_yesterday"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_yesterday"] = $oOrder->getOrderCnt(false, "yesterday");
        
        $dSum  = $oOrder->getOrderSum(false, "week");
        $this->_aViewData["ordersum_week"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_week"] = $oOrder->getOrderCnt(false, "week");
        
        $dSum  = $oOrder->getOrderSum(false, "lastweek");
        $this->_aViewData["ordersum_lastweek"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_lastweek"] = $oOrder->getOrderCnt(false, "lastweek");
        
        $dSum  = $oOrder->getOrderSum(false, "month");
        $this->_aViewData["ordersum_month"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_month"] = $oOrder->getOrderCnt(false, "month");
        
        $dSum  = $oOrder->getOrderSum(false, "lastmonth");
        $this->_aViewData["ordersum_lastmonth"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_lastmonth"] = $oOrder->getOrderCnt(false, "lastmonth");
        
        $dSum  = $oOrder->getOrderSum(false, "nllastmonth");
        $this->_aViewData["ordersum_nllastmonth"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_nllastmonth"] = $oOrder->getOrderCnt(false, "nllastmonth");
        
        $dSum  = $oOrder->getOrderSum(false, "year");
        $this->_aViewData["ordersum_year"] = $oLang->formatCurrency($dSum, $oCur);
        $this->_aViewData["ordercnt_year"] = $oOrder->getOrderCnt(false, "year");
        
        return "te_sales.tpl";
    }
}