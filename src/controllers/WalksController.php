<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Place.php';
require_once __DIR__.'/../repository/PlaceRepository.php';


class WalksController extends AppController {

    private $placeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->placeRepository = new PlaceRepository();
    }

    public function walks(){

        $this->render('walks');
    }
    public function places(){

        header('Content-type: application/json');
        http_response_code(200);

        echo json_encode($this->placeRepository->getPlaces());

    }
}
