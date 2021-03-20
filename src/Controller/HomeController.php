<?php

namespace App\Controller;

use App\Manager\HomeManager;
use App\Message\HomeMessage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /** @var HomeManager */
    private $homeManager;

    /** @var MessageBusInterface */
    private $messageBus;

    /**
     * HomeController constructor.
     */
    public function __construct(HomeManager $homeManager, MessageBusInterface $messageBus)
    {
        $this->homeManager  = $homeManager;
        $this->messageBus   = $messageBus;
    }

    #[Route('/home', name: 'home')]
    public function index(Request $request) : Response
    {
        $path = $request->get('path');
        $message = $request->get('message');
        $this->messageBus->dispatch(new HomeMessage(1548));

        return $this->json([
            'message' => $path,
            'path' => $message,
        ]);
    }
}
