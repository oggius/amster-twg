<?php
class Order extends CI_Controller {

    public function index()
    {
        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Заказ выстпуления');
        $this->Meta->setValue('page_description', 'Заказ выступления группы AmsterDam на корпоратив, свадьбу, ивент по телефону, через онлайн-форму или по email');
        $meta = $this->Meta->getData();

        echo $this->twig->render('order/index.html', array('meta' => $meta));
    }
}