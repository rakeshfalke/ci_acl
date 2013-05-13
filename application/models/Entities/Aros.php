<?php



/**
 * Aros
 */
class Aros
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $parentId
     */
    private $parentId;

    /**
     * @var string $model
     */
    private $model;

    /**
     * @var integer $foreignKey
     */
    private $foreignKey;

    /**
     * @var string $alias
     */
    private $alias;

    /**
     * @var integer $lft
     */
    private $lft;

    /**
     * @var integer $rght
     */
    private $rght;


    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * Get parentId
     *
     * @return integer $parentId
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set model
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set foreignKey
     *
     * @param integer $foreignKey
     */
    public function setForeignKey($foreignKey)
    {
        $this->foreignKey = $foreignKey;
    }

    /**
     * Get foreignKey
     *
     * @return integer $foreignKey
     */
    public function getForeignKey()
    {
        return $this->foreignKey;
    }

    /**
     * Set alias
     *
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * Get alias
     *
     * @return string $alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    }

    /**
     * Get lft
     *
     * @return integer $lft
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rght
     *
     * @param integer $rght
     */
    public function setRght($rght)
    {
        $this->rght = $rght;
    }

    /**
     * Get rght
     *
     * @return integer $rght
     */
    public function getRght()
    {
        return $this->rght;
    }
}