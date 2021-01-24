<?php

require_once 'AppController.php';
require_once __DIR__."/../repository/SearchRepository.php";

class SearchController extends AppController {

    public function search() {
        $searchRepository = new SearchRepository();
        $spectacle = $searchRepository->getAllPerformances();

        $this->render('search', ['spectacle'=>$spectacle]);
    }

    public function searchSearch() {
//        //if input jest pusty => wyciągnij wszystko z bazy danych
//        $repository = new SearchRepository();
//        $title =
//        $performances = $repository->getPerformancesByTittle($title);
//        echo json_encode($performances);

        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);
            header('Content-type: application/json');
            http_response_code(200);
            $repository = new SearchRepository();

            echo json_encode($repository->getPerformancesByTittle($decoded['search']));
        }
    }
}