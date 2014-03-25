[{include file="headitem.tpl" title="ORDER_PACKAGE_TITLE"|oxmultilangassign box=" "}]

<style>
td.listfilter{
    border-bottom: 1px solid #c8c8c8;
}
</style>

<div id="liste">
    <div id="noprint" ><br>
    
        <table cellspacing="0" cellpadding="0" border="0" width="98%" class="box">
            <tr>
                <td class="listfilter first" height="5">
                    <div class="r1"><div class="b1"></div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_TODAY" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_YESTERDAY" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_WEEK" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_LASTWEEK" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_MONTH" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_LASTMONTH" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_NLLASTMONTH" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_YEAR" }]</div></div>
                </td>
                <td class="listfilter" height="5">
                    <div class="r1"><div class="b1">[{ oxmultilang ident="ORDER_SALES_ORDER_TOTAL" }]</div></div>
                </td>
            </tr>
            <tr>
                <td class="listheader first">[{ oxmultilang ident="ORDER_SALES_ORDER_SUM" }]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_yesterday }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_week }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_lastweek }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_month }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_lastmonth }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_nllastmonth }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordersum_year }]</b> [{ $currency->name}]</td>
                <td class="listitem">&nbsp;<b>[{ $ordertotalsum }]</b> [{ $currency->name}]</td>
            </tr>
            <tr>
                <td class="listheader first">[{ oxmultilang ident="ORDER_SALES_ORDER_AM" }]</td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_yesterday }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_week }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_lastweek }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_month }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_lastmonth }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_nllastmonth }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordercnt_year }]</b></td>
                <td class="listitem2">&nbsp;<b>[{ $ordertotalcnt }]</b></td>
            </tr>
        </table>
    
    </div>
</div>

</body>
</html>