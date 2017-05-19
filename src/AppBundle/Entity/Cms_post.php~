<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cms_post
 *
 * @ORM\Table(name="cms_post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cms_postRepository")
 */
class Cms_post
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Cms_category", inversedBy="cms_posts")
     * $ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200)
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
     * @ORM\Column(name="description", type="string", length=200)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Cms_admin", inversedBy="cms_posts")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
     */
    private $adminId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;
    
    /**
     * @ORM\OneToMany(targetEntity="Cms_comment", mappedBy="postId")
     */
    private $cms_comments;

    public function __construct() {
        $this->cms_comments = new ArrayCollection;
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
     * Set category
     *
     * @param integer $category
     *
     * @return Cms_post
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Cms_post
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
     * @return Cms_post
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
     * Set description
     *
     * @param string $description
     *
     * @return Cms_post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Cms_post
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Cms_post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Cms_post
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
     * @return Cms_post
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

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Cms_post
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
     * Add cmsComment
     *
     * @param \AppBundle\Entity\Cms_comment $cmsComment
     *
     * @return Cms_post
     */
    public function addCmsComment(\AppBundle\Entity\Cms_comment $cmsComment)
    {
        $this->cms_comments[] = $cmsComment;

        return $this;
    }

    /**
     * Remove cmsComment
     *
     * @param \AppBundle\Entity\Cms_comment $cmsComment
     */
    public function removeCmsComment(\AppBundle\Entity\Cms_comment $cmsComment)
    {
        $this->cms_comments->removeElement($cmsComment);
    }

    /**
     * Get cmsComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmsComments()
    {
        return $this->cms_comments;
    }
}
