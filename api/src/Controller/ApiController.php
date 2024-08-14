<?php

namespace App\Controller;

use App\Repository\AvisDepotRepository;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/', name: 'app_api', methods:['GET'])]
    public function index(AvisDepotRepository $avisDepot): JsonResponse
    {
        $authorizationRequests = $avisDepot->getAuthorizationRequests();
        return $this->json($authorizationRequests);
    }
}
