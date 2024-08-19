<?php

namespace App\Controller;

use App\Repository\AvisDepotRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    /**
     * Retrieve the list of urban planning authorization requests
     *
     * @param AvisDepotRepository $avisDepot
     * @return JsonResponse
     */
    #[Route('/', name: 'app_api', methods:['GET'])]
    public function index(AvisDepotRepository $avisDepot): JsonResponse
    {
        $authorizationRequests = $avisDepot->getAuthorizationRequests();
        return $this->json($authorizationRequests);
    }

    
    /**
     * Retrieve the list of urban planning authorization requests based on filters
     *
     * @param AvisDepotRepository $avisDepot
     * @param Request $request
     * @return JsonResponse
     */
    #[Route('/filters', name: 'app_api_filters', methods:['POST'])]
    public function filters(AvisDepotRepository $avisDepot, Request $request): JsonResponse
    {
        $filters = $request->getContent();
        $authorizationRequests = $avisDepot->getAuthorizationRequestsFilters($filters);
        return $this->json($authorizationRequests);
    }
}
