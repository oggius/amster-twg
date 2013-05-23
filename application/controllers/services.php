<?php
class Services extends CI_Controller {

    public function index()
    {
        $this->load->model('Guest_model', 'Guest');
        $records = $this->Guest->getRecords(0, 10, true);
        // load feedbacks block
        $recordsTable = $this->twig->render('guest/heading_table.html', array('records' => $records));
        // get reports
        $this->load->model('Reportmanager_model', 'ReportManager');
        $this->load->helper('report_helper');
        $reports = $this->ReportManager->getLatest(0, 3);
        $reportsListHtml = renderReportsList($reports, SHOW_GALLERY_FIRST, true);

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Кавер группа AmsterDam - услуги профессиональных музыкантов, живая музыка на корпоратив, свадьбу, юбилей, банкет, в ресторан, паб');
        $this->Meta->setValue('page_description', 'Музыкальная кавер группа AmsterDam - живая музыка для любого праздника: на корпоратив, на свадьбу, на юбилей на день рождения');
        $this->Meta->setValue('page_keywords', 'группа для корпоратива, живая музыка на корпоратив, кавер группа на корпоратив, AmsterDam, музыка на корпоратив, группа на праздник, музыка на праздник, живая музыка группа на день рождения, живая музыка группа в ресторан, живая музыка на юбилей, группа на свадьбу, живая музыка группа на свадьбу, живая музыка на свадьбу, заказ музыкантов на свадьбу, музика на свадьбу, музыка на свадьбу, музыканты на свадьбу киев, музыка на свадьбе');
        $meta = $this->Meta->getData();
        echo $this->twig->render(
                        'services/index.html',
                        array(
                            'meta' => $meta,
                            'responsesTable' => $recordsTable,
                            'reportsList' => $reportsListHtml
                        )
        );
    }
}