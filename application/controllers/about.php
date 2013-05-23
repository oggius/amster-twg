<?php
class About extends CI_Controller {

    public function index()
    {
        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Информация о группе');
        $this->Meta->setValue('page_description', 'Общая информация, немного истории, а также состав группы AmsterDam');
        $meta = $this->Meta->getData();
        echo $this->twig->render('about/index.html', array("meta" => $meta));
    }
}