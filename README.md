## This repo is no longer maintained. Alternative module available here https://github.com/vseager/magento2-snowdog-menu-luma

# Snowdog Menu Luma Support - Magento 2 Extension   
[![Latest Stable Version](https://img.shields.io/packagist/v/redchamps/module-snowdog-menu-luma-support.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-snowdog-menu-luma-support)     
[![Packagist](https://img.shields.io/packagist/dt/redchamps/module-snowdog-menu-luma-support.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-snowdog-menu-luma-support/stats)  
[![Packagist](https://img.shields.io/packagist/dm/redchamps/module-snowdog-menu-luma-support.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-snowdog-menu-luma-support/stats)  
  
[Snowdog Menu Extension](https://github.com/SnowdogApps/magento2-menu) provides the powerful menu editor interface to manage customized navigation links. However, when using this extension with the default Magento Luma theme, It will not display the navigation menu. 

You can use the RedChamps "snowdog-menu-luma-support" extension to display navigation menu (created with the snowdog-menu extension) on the Luma theme. 
  
  
## Installation  
  
> composer require redchamps/module-snowdog-menu-luma-support  


## Steps to display navigation in Luma theme

 - By default the extension use the **main** menu identifier to show navigation. So you must have the menu with "main" identifier under the 
 > Content > menu
 
 - If you want to display different identifier navigation menu other than **main** menu identifier. Then copy the **default.xml** file from 
 > /vendor/redchamps/module-snowdog-menu-luma-support/view/frontend/layout

and paste inside your theme under:
 >app/design/frontent/[Vendor]/[Theme]/RedChamps_SnowDogMenuLumaSupport/layout
 - now change the **main** identifier with your custom menu identifier. Your code should look like below:
```<referenceBlock name="catalog.topnav" remove="true"/>  
	<referenceBlock name="store.menu">  
	    <block name="main.menu" class="Snowdog\Menu\Block\Menu">  
	        <arguments>  
	            <argument name="menu" xsi:type="string">your_custom_identifier</argument>  
	        </arguments>  
	    </block>  
	</referenceBlock>
```


## Authors  
  
- RedChamps [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/_redChamps.svg?style=social)](https://twitter.com/_redChamps)  
  
- Sanchit [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/_techDriven.svg?style=social)](https://twitter.com/_techDriven)  

## Ad

Please visit our store https://redchamps.com for more free/paid extensions from us.
