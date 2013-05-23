<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model', 'News');
    }
	
    public function index()
    {
        $newsList = $this->News->getLatest(3);

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Последние новости с музыкального фронта');
        $this->Meta->setValue('page_description', 'Самые последние новости, а также всё самое интересное, что происходит в жизни группы, читайте здесь');
        $meta = $this->Meta->getData();

        echo $this->twig->render('news/index.html', array('meta' => $meta, 'news' => $newsList));
    }
    
    public function item($itemId)
    {
        $itemId = intval($itemId);
        $newsItem = $this->News->getItem($itemId);
        if (!empty($newsItem)) {
            $this->load->model('Meta_model', 'Meta');
            $this->Meta->setValue('page_title', $newsItem->title);
            $this->Meta->setValue('page_description', strip_tags($newsItem->text_short));
            $meta = $this->Meta->getData();
            echo $this->twig->render('news/item.html', array('meta' => $meta, 'item' => $newsItem));
        } else {
            show_404();
        }
    }
}