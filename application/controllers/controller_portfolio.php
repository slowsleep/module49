<?php
class Controller_Portfolio extends Controller
{
    public function action_index($data)
    {
        $this->view->generate('portfolio_view.php', 'layout/layout_view.php', 'Портфолио', $data);
    }
}
