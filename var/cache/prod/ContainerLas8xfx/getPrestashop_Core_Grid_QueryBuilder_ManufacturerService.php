<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query_builder.manufacturer' shared service.

return $this->services['prestashop.core.grid.query_builder.manufacturer'] = new \PrestaShop\PrestaShop\Core\Grid\Query\ManufacturerQueryBuilder(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ary_', ${($_ = isset($this->services['prestashop.core.query.doctrine_search_criteria_applicator']) ? $this->services['prestashop.core.query.doctrine_search_criteria_applicator'] : ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->getContextListShopId());
