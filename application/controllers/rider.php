<?php
class Rider extends CI_Controller {

    public function index()
    {
        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Технический и бытовой райдеры группы');
        $this->Meta->setValue('page_description', 'Технический и бытовой райдеры группы AmsterDam. Райдер обычно составляется и предоставляется организаторам выступления для того, чтобы однозначно определить требования к техническому оснащению сцены, а так же заранее оговорить все бытовые моменты сотрудничества с группой');
        $meta = $this->Meta->getData();

        echo $this->twig->render('rider/index.html', array('meta' => $meta));
    }
}