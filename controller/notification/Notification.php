<?php
namespace spec\ffuf\notifications\api\controller\notification;

use spec\ffuf\notifications\api\service\notification\NotificationServiceInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 */
class Notification {

    /**
     * @var Request
     */
    private $request;

    /**
     * @var \spec\ffuf\notifications\api\service\notification\NotificationServiceInterface
     */
    private $service;

    /**
     * @param NotificationServiceInterface $service
     * @param Request $request
     */
    public function __construct(NotificationServiceInterface $service, Request $request) {
        $this->service = $service;
        $this->request = $request;
    }

    /**
     * @param \spec\ffuf\notifications\api\model\notification\Notification $notification
     * @return \spec\ffuf\notifications\api\model\notification\Notification
     */
    public function create(\spec\ffuf\notifications\api\model\notification\Notification $notification) {
        return $this->service->create($notification);
    }

    /**
     * @return \spec\ffuf\notifications\api\model\notification\Notification[]
     */
    public function getAll() {
        $firstResultId = $this->request->query->get('firstResultId', 0);
        $maxResults = $this->request->query->get('maxResults', 100);
        return $this->service->getAll($firstResultId, $maxResults);
    }
}
