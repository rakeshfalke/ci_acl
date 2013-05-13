<?php



/**
 * ArosAcos
 */
class ArosAcos
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $aroId
     */
    private $aroId;

    /**
     * @var integer $acoId
     */
    private $acoId;

    /**
     * @var string $create
     */
    private $create;

    /**
     * @var string $read
     */
    private $read;

    /**
     * @var string $update
     */
    private $update;

    /**
     * @var string $delete
     */
    private $delete;


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
     * Set aroId
     *
     * @param integer $aroId
     */
    public function setAroId($aroId)
    {
        $this->aroId = $aroId;
    }

    /**
     * Get aroId
     *
     * @return integer $aroId
     */
    public function getAroId()
    {
        return $this->aroId;
    }

    /**
     * Set acoId
     *
     * @param integer $acoId
     */
    public function setAcoId($acoId)
    {
        $this->acoId = $acoId;
    }

    /**
     * Get acoId
     *
     * @return integer $acoId
     */
    public function getAcoId()
    {
        return $this->acoId;
    }

    /**
     * Set create
     *
     * @param string $create
     */
    public function setCreate($create)
    {
        $this->create = $create;
    }

    /**
     * Get create
     *
     * @return string $create
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * Set read
     *
     * @param string $read
     */
    public function setRead($read)
    {
        $this->read = $read;
    }

    /**
     * Get read
     *
     * @return string $read
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Set update
     *
     * @param string $update
     */
    public function setUpdate($update)
    {
        $this->update = $update;
    }

    /**
     * Get update
     *
     * @return string $update
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set delete
     *
     * @param string $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * Get delete
     *
     * @return string $delete
     */
    public function getDelete()
    {
        return $this->delete;
    }
}