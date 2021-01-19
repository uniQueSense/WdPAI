<?php

require_once 'AppController.php';
require_once __DIR__."/../repository/SearchRepository.php";

class SearchController extends AppController {

    public function search()
    {
        $searchRepository = new SearchRepository();
        $spectacle = $searchRepository->getAllPerformances();

        $this->render('search', ['spectacle'=>$spectacle]);
    }
}