<?php
class Controller_Portfolio extends Controller {
    public function action_index($data) {
        $this->view->generate('view_portfolio.php', 'template_view.php', $data);
    }
}

