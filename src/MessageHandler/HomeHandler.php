<?php


namespace App\MessageHandler;


use App\Manager\HomeManager;
use App\Message\HomeMessage;
use MongoDB\Driver\Manager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class HomeHandler extends AbstractController implements MessageHandlerInterface
{
    /** @var HomeManager */
    private $homeManager;

    /**
     * HomeHandler constructor.
     */
    public function __construct(HomeManager $homeManager)
    {
        $this->homeManager =$homeManager;
    }

    public function __invoke(HomeMessage $message) {

        $this->homeManager->blogInfos($message->getMessageId());

      return $this->redirectToRoute('home', ['path' => "test", "message"=>"test"]);

    }

}