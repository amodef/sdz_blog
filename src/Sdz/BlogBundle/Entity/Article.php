<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{
  /**
   * @var integer
   */
  private $id;

  /**
   * @var \DateTime
   */
  private $date;

  /**
   * @var string
   */
  private $titre;

  /**
   * @var string
   */
  private $auteur;

  /**
   * @var string
   */
  private $contenu;

  /**
   * @var boolean
   */
  private $publication;

  public function __construct()
  {
    $this->date = new \Datetime();
    $this->publication = true;
  }

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set date
   *
   * @param \DateTime $date
   * @return Article
   */
  public function setDate($date)
  {
    $this->date = $date;
  
    return $this;
  }

  /**
   * Get date
   *
   * @return \DateTime 
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set titre
   *
   * @param string $titre
   * @return Article
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;
  
    return $this;
  }

  /**
   * Get titre
   *
   * @return string 
   */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
   * Set auteur
   *
   * @param string $auteur
   * @return Article
   */
  public function setAuteur($auteur)
  {
    $this->auteur = $auteur;
  
    return $this;
  }

  /**
   * Get auteur
   *
   * @return string 
   */
  public function getAuteur()
  {
    return $this->auteur;
  }

  /**
   * Set contenu
   *
   * @param string $contenu
   * @return Article
   */
  public function setContenu($contenu)
  {
    $this->contenu = $contenu;
  
    return $this;
  }

  /**
   * Get contenu
   *
   * @return string 
   */
  public function getContenu()
  {
    return $this->contenu;
  }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }
}