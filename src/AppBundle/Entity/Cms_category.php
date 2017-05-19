<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cms_category
 *
 * @ORM\Table(name="cms_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cms_categoryRepository")
 */
class Cms_category
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200)
     * 
     * 
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=200)
     */
    private $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=200)
     */
    private $subtitle;

    /**
     *
     * @ORM\OneToOne(targetEntity="Cms_category")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $parentId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=10)
     */
    private $lang;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Cms_admin", inversedBy="cms_categories")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
     */
    private $adminId;

    /**
     * @ORM\OneToMany(targetEntity="Cms_post", mappedBy="category")
     */
    private $cms_posts;
    
    /**
     * @ORM\OneToMany(targetEntity="Cms_menu_category", mappedBy="categoryId")
     */
    private $cms_category_ids;
    
    public function __construct() {
        $this->cms_posts = new ArrayCollection();
        $this->cms_category_ids = new ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Cms_category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Cms_category
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return Cms_category
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Cms_category
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Cms_category
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Cms_category
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Cms_category
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set adminId
     *
     * @param integer $adminId
     *
     * @return Cms_category
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * Get adminId
     *
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }
    
    public function getCms_posts(){
        return $this->cms_posts;
    }
    
    public function setCms_posts($posts){
        $this->cms_posts = $posts;
    }

    /**
     * Add cmsPost
     *
     * @param \AppBundle\Entity\Cms_post $cmsPost
     *
     * @return Cms_category
     */
    public function addCmsPost(\AppBundle\Entity\Cms_post $cmsPost)
    {
        $this->cms_posts[] = $cmsPost;

        return $this;
    }

    /**
     * Remove cmsPost
     *
     * @param \AppBundle\Entity\Cms_post $cmsPost
     */
    public function removeCmsPost(\AppBundle\Entity\Cms_post $cmsPost)
    {
        $this->cms_posts->removeElement($cmsPost);
    }

    /**
     * Get cmsPosts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmsPosts()
    {
        return $this->cms_posts;
    }

    /**
     * Add cmsCategoryId
     *
     * @param \AppBundle\Entity\Cms_menu_category $cmsCategoryId
     *
     * @return Cms_category
     */
    public function addCmsCategoryId(\AppBundle\Entity\Cms_menu_category $cmsCategoryId)
    {
        $this->cms_category_ids[] = $cmsCategoryId;

        return $this;
    }

    /**
     * Remove cmsCategoryId
     *
     * @param \AppBundle\Entity\Cms_menu_category $cmsCategoryId
     */
    public function removeCmsCategoryId(\AppBundle\Entity\Cms_menu_category $cmsCategoryId)
    {
        $this->cms_category_ids->removeElement($cmsCategoryId);
    }

    /**
     * Get cmsCategoryIds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmsCategoryIds()
    {
        return $this->cms_category_ids;
    }
}
