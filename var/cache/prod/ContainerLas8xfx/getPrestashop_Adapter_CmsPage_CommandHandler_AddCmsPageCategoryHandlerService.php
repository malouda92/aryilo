<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cms_page.command_handler.add_cms_page_category_handler' shared service.

return $this->services['prestashop.adapter.cms_page.command_handler.add_cms_page_category_handler'] = new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\AddCmsPageCategoryHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
