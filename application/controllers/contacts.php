<?php
class Contacts extends CI_Controller {

    public function index()
    {
        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Кавер группа AmsterDam - заказ музыкантов, наши контакты');
        $this->Meta->setValue('page_description', 'Кавер группа AmsterDam - заказать выступление музыкантов в Киеве');
        $this->Meta->setValue('page_keywords', 'живая группа киев, живая музыка киев, заказать музыкантов, заказать музыкантов киев, поиск музыкантов киев');
        $meta = $this->Meta->getData();
        echo $this->twig->render('contacts/index.html', array('meta' => $meta));
    }
}