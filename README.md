# magento2-shop-by-brand

#Features
<ul>
<li>Link in top Navigation </li>
<li>Automatic assiciate with default manufacturer attribute</li>
<li>Can Re-Sync for New Manufacturer Brand</li>
<li>Any Brand Can be Assign as Featured</li>
<li>Left Side bar Block for Shop By Brands</li>
</ul>

<h2>Composer Installation Instructions</h2>
Add GIT Repository to composer
<pre>
composer config repositories.vihadigitalcom-magento2-shopbybrand vcs https://github.com/vihadigitalcom/magento2-shop-by-brand/
</pre>

After that, need to install this module as follows:
<pre>
  composer require vihadigitalcom/shopbybrand
</pre>


<br/>
<h2> Mannual Installation Instructions</h2>
go to Magento2Project root dir 
create following Directory Structure :<br/>
<strong>/Magento2Project/app/code/Vihadigitalcom/ShopByBrand</strong>
you can also create by following command:
<pre>
cd /Magento2Project
mkdir app/code/Vihadigitalcom
mkdir app/code/Vihadigitalcom/ShopByBrand
</pre>



<h3> Enable Vihadigitalcom/ShopByBrand Module</h3>
to Enable this module you need to follow these steps:

<ul>
<li>
<strong>Enable the Module</strong>
<pre>bin/magento module:enable Vihadigitalcom_ShopByBrand</pre></li>
<li>
<strong>Run Upgrade Setup</strong>
<pre>bin/magento setup:upgrade</pre></li>
<li>
<strong>Re-Compile (in-case you have compilation enabled)</strong>
	<pre>bin/magento setup:di:compile</pre>
</li>
</ul>
