<?php

namespace inserveofgod\src\controllers;

/**
 * class HomeController
 * @package inserveofgod\controllers
 */
class HomeController extends Controller {
    public function index() {
        return $this->render('home/index', [
            'name' => 'maho',
        ]);
    }
}
