<?php

/**
 * BudgetPoste
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class BudgetPoste extends BaseBudgetPoste
{
    public function getTotal() {
            return $this->getPrixUnitaire() * $this->getNombre();
    }
    public function __toString()
    {
      return $this->getNom();
    }
}
