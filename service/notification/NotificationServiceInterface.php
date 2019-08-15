<?php
namespace spec\ffuf\notifications\api\service\notification;

/**
 */
interface NotificationServiceInterface {

    /**
     * @param \spec\ffuf\notifications\api\model\notification\Notification $notification
     * @return \spec\ffuf\notifications\api\model\notification\Notification
     */
    public function create(\spec\ffuf\notifications\api\model\notification\Notification $notification);

    /**
     * @param string $firstResultId
     * @param integer $maxResults
     * @return \spec\ffuf\notifications\api\model\notification\Notification[]
     */
    public function getAll($firstResultId = 0, $maxResults = 100);

    /**
     * @param string $notificationId
     * @return \spec\ffuf\notifications\api\model\notification\Notification
     */
    public function getById($notificationId);

    /**
     * @param string $notificationId
     */
    public function remove($notificationId);
}
