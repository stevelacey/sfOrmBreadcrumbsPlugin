<?php

/**
 * @package    sfOrmBreadcrumbsPlugin
 * @subpackage modules
 * @author     Nicolò Pignatelli <info@nicolopignatelli.com>
 * @version    SVN: $Id$
 */
class BasesfDoctrineBreadcrumbsComponents extends sfComponents
{
  public function executeBreadcrumbs(sfWebRequest $request)
  {
    $context = $this->getContext();
    $module  = $context->getModuleName();
    $action  = $context->getActionName();

    $sf_orm_bc            = new sfOrmBreadcrumbsDoctrine($module, $action);
    $this->breadcrumbs    = $sf_orm_bc->getBreadcrumbs();
    $this->separator      = $sf_orm_bc->getSeparator();
    $this->i18n_catalogue = $sf_orm_bc->getI18nCatalogue();
  }
}