<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cms_menu_category
 *
 * @ORM\Table(name="cms_menu_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cms_menu_categoryRepository")
 */
class Cms_menu_category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(targetEntity="Cms_menu", inversedBy="cms_menus")
     * @ORM\JoinColumn(name="menu", referencedColumnName="id")
     */
    private $menuId;

    
    /**
     * @ORM\ManyToOne(targetEntity="Cms_category", inversedBy="cms_category_ids")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $categoryId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set menuId
     *
     * @param integer $menuId
     *
     * @return Cms_menu_category
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return int
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Cms_menu_category
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
