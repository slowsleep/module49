<?php
class Controller_About extends Controller {
    public function action_index() {
        $this->view->generate('about_view.php', 'layout/layout_view.php', 'О нас');
    }
}
