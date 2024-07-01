<?php
class Controller_Main extends Controller {
    public function action_index() {
        $this->view->generate('main_view.php', 'layout/layout_view.php', 'Главная');
    }
}

