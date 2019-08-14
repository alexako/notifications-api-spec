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
    private $id;

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
    public function getId() {
        return $this->id;
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
     * @param string $processed
     * @return self
     */
    public function setProcessed($processed = null) {
        $this->processed = $processed;
        return $this;
    }
}
