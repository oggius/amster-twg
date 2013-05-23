<?php
class Gallery extends CI_Controller {

    public function index()
    {
        $this->load->model('Photo_model', 'Photo');
        $albums = $this->Photo->getAlbumsList( true );
        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Фотогалерея');
        $this->Meta->setValue('page_description', 'Фотографии с концертов группы AmsterDam, фотосеты, фотоподборка');
        $meta = $this->Meta->getData();
        echo $this->twig->render('gallery/index.html', array('meta' => $meta, 'albums' => $albums));
    }
    
    public function item($albumAlias)
    {
        $this->load->model('Album_model', 'Album');
        $this->Album->initByAlias($albumAlias);
        $albumData = $this->Album->getFullData();
        if (!empty($albumData) && $albumData['show_in_gallery']) {
            $this->load->helper('gallery_helper');
            $this->load->model('Meta_model', 'Meta');
            $this->Meta->setValue('page_title', 'Фотоотчет ' . $albumData['name']);
            $this->Meta->setValue('page_description', strip_tags($albumData['description']));
            $meta = $this->Meta->getData();
            echo $this->twig->render(
                            'gallery/album.html',
                            array(
                                'meta' => $meta,
                                'albumData' => $albumData, 
                                'gallery' => renderGalleryBlock($this->Album, array())
                                )
                            );            
        } else {
            show_404();
        }
    }
}