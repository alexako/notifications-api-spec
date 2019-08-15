<?php
namespace spec\ffuf\notifications\api\model\notification;

/**
 */
class Notification {

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $expire;

    /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    private $notificationType;

    /**
     * @var string
     */
    private $processed;

    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getExpire() {
        return $this->expire;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getNotificationType() {
        return $this->notificationType;
    }

    /**
     * @return string
     */
    public function getProcessed() {
        return $this->processed;
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent($content = null) {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $expire
     * @return self
     */
    public function setExpire($expire = null) {
        $this->expire = $expire;
        return $this;
    }

    /**
     * @param integer $notificationType
     * @return self
     */
    public function setNotificationType($notificationType = null) {
        $this->notificationType = $notificationType;
        return $this;
    }

    /**
     * @param string $processed
     * @return self
     */
    public function setProcessed($processed = null) {
        $this->processed = $processed;
        return $this;
    }
}
