<?php

class Reseaux extends webServiceBean
{

    /**
     * @var Reseau[] $Reseau
     */
    protected $Reseau = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Reseau[]
     */
    public function getReseau()
    {
      return $this->Reseau;
    }

    /**
     * @param Reseau[] $Reseau
     * @return Reseaux
     */
    public function setReseau(array $Reseau = null)
    {
      $this->Reseau = $Reseau;
      return $this;
    }

}
