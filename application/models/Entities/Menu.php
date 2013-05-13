<?php

namespace Entities;

/**
 * Menu
 */
class Menu
{
    /**
     * @var integer $menuId
     */
    private $menuId;

    /**
     * @var string $menuSegment
     */
    private $menuSegment;

    /**
     * @var string $menuName
     */
    private $menuName;

    /**
     * @var string $menuRoles
     */
    private $menuRoles;


    /**
     * Get menuId
     *
     * @return integer $menuId
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set menuSegment
     *
     * @param string $menuSegment
     */
    public function setMenuSegment($menuSegment)
    {
        $this->menuSegment = $menuSegment;
    }

    /**
     * Get menuSegment
     *
     * @return string $menuSegment
     */
    public function getMenuSegment()
    {
        return $this->menuSegment;
    }

    /**
     * Set menuName
     *
     * @param string $menuName
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    /**
     * Get menuName
     *
     * @return string $menuName
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set menuRoles
     *
     * @param string $menuRoles
     */
    public function setMenuRoles($menuRoles)
    {
        $this->menuRoles = $menuRoles;
    }

    /**
     * Get menuRoles
     *
     * @return string $menuRoles
     */
    public function getMenuRoles()
    {
        return $this->menuRoles;
    }
}