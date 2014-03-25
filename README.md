sales - module to get more sales info
============================================

How to install
--------------
1.    Place the whole module in your shop in:

          modules/te/sales/
 
2.    Copy file "vendormetadata.php" from /modules/te/setup/ to

            modules/te/
                
3.    Activate the modul.

4.    Clear tmp/ and update views.


How to use
---------- 
Go to "Administer Orders" -> "Sales"

Features
--------

In the standard Oxid backend the sales values are all for today and total. This small module reads the sales figures for 
- today 
- yesterday 
- weekly 
- Last week 
- Month 
- Last month 
- next to last month 
- year 

Cancellations will be considered. 

The output is displayed on a separate page in the oxide backend


Notice
------------
Tested only with OXID CE 4.8.x eShop
for Oxid CE / PE ab 4.7.x


Version
-------
Actual version is 1.0