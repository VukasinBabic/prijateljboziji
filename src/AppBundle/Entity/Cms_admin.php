<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Cms_admin
 *
 * @ORM\Table(name="cms_admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cms_adminRepository")
 */
class Cms_admin
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
     * @ORM\Column(name="first_name", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity="Cms_post", mappedBy="adminId")
     */
    private $cms_posts;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Cms_category", mappedBy="adminId")
     */
    private $cms_categories;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Cms_menu", mappedBy="adminId")
     */
    private $cms_admins_menu;
    
    public function __construct(){
        $this->cms_posts = new ArrayCollection;
        $this->cms_categories = new ArrayCollection;
        $this->cms_admins_menu = new ArrayCollection;
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Cms_admin
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Cms_admin
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cms_admin
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Cms_admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Cms_admin
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Cms_admin
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Cms_post $post
     *
     * @return Cms_admin
     */
    public function addPost(\AppBundle\Entity\Cms_post $post)
    {
        $this->cms_posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Cms_post $post
     */
    public function removePost(\AppBundle\Entity\Cms_post $post)
    {
        $this->cms_posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->cms_posts;
    }

    /**
     * Add cmsPost
     *
     * @param \AppBundle\Entity\Cms_post $cmsPost
     *
     * @return Cms_admin
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
     * Add cmsCategory
     *
     * @param \AppBundle\Entity\Cms_post $cmsCategory
     *
     * @return Cms_admin
     */
    public function addCmsCategory(\AppBundle\Entity\Cms_post $cmsCategory)
    {
        $this->cms_categories[] = $cmsCategory;

        return $this;
    }

    /**
     * Remove cmsCategory
     *
     * @param \AppBundle\Entity\Cms_post $cmsCategory
     */
    public function removeCmsCategory(\AppBundle\Entity\Cms_post $cmsCategory)
    {
        $this->cms_categories->removeElement($cmsCategory);
    }

    /**
     * Get cmsCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmsCategories()
    {
        return $this->cms_categories;
    }

    /**
     * Add cmsAdminsMenu
     *
     * @param \AppBundle\Entity\Cms_menu $cmsAdminsMenu
     *
     * @return Cms_admin
     */
    public function addCmsAdminsMenu(\AppBundle\Entity\Cms_menu $cmsAdminsMenu)
    {
        $this->cms_admins_menu[] = $cmsAdminsMenu;

        return $this;
    }

    /**
     * Remove cmsAdminsMenu
     *
     * @param \AppBundle\Entity\Cms_menu $cmsAdminsMenu
     */
    public function removeCmsAdminsMenu(\AppBundle\Entity\Cms_menu $cmsAdminsMenu)
    {
        $this->cms_admins_menu->removeElement($cmsAdminsMenu);
    }

    /**
     * Get cmsAdminsMenu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmsAdminsMenu()
    {
        return $this->cms_admins_menu;
    }
}
