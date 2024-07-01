<?php
class Controller_Contacts extends Controller {
    public function action_index($data) {
        $this->view->generate('contacts_view.php', 'layout/layout_view.php', 'Контакты', $data);
    }
}
