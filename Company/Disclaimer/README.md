# Product Disclaimer Module

## Main Functionalities
A custom section in the product detail view page under product short description, with a message from system configuration. message field for system configuration.
Admin will be able to save and update message in configuration and once enabled and saved it will be shown on all product detail pages only.
Also support Wysiwyg Editor


## Installation
\* = in production please use the `--keep-generated` option


 - Unzip the zip file in `app/code/Company`
 - Enable the module by running `php bin/magento module:enable Company_Disclaimer`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`



## Configuration
System > Configuration > Vendor >  Module > General 

 - Enabled (disclaimer/general/is_enabled) <br/> 
  `Enable/Disable selection`

 - Content (disclaimer/general/content) <br/>
  `Product Disclaimer Content Editor`
 


## Specifications

 - Block
	- Product\Disclaimer > product/disclaimer.phtml

- Block
	- System\Config\Editor > system/config/editor.phtml
	
 - Helper
	- Company\Disclaimer\Helper\Data


## Graphql
Extended store configuration for using and return custom module system values.

Request
```
{
	storeConfig
  	{
		disclaimer_general_is_enabled
		disclaimer_general_content
	}
}
```


