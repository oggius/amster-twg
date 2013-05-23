<?php
class Promo extends CI_Controller {

    public function index()
    {
        $this->load->model('videomanager_model', 'Videomanager');
        $videoList = $this->Videomanager->getList(0, 20);

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Видео- и аудиозаписи группы AmsterDam');
        $this->Meta->setValue('page_description', 'Промо-видео, аудио-демо, а так же видеозаписи с живых выступлений группы AmsterDam');
        $meta = $this->Meta->getData();
        echo $this->twig->render('promo/index.html', array('meta' => $meta, 'videoList' => $videoList));
    }
}