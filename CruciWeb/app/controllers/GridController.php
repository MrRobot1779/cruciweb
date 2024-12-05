<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Grid.php';

class GridController extends Controller {
    public function index() {
        $gridModel = new Grid();
        $grids = $gridModel->getAll();
        $this->loadView('grid/index', ['grids' => $grids]);
    }

    public function create() {
        $this->loadView('grid/create');
    }
}
