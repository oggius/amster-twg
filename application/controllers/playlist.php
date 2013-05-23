<?php
class Playlist extends CI_Controller {

    public function index()
    {
        $this->load->model('Playlist_model', 'Playlist');
        $playlist = $this->Playlist->getListGrouped();

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Репертуар группы. Полный список исполняемых хитов');
        $this->Meta->setValue('page_description', 'Полный репертуар хитов, исполняемых группой AmsterDam');
        $meta = $this->Meta->getData();
        echo $this->twig->render('playlist/index.html', array('meta' => $meta, 'songs' => $playlist));
    }
}