<?php
class Reports extends CI_Controller {

    public function index()
    {
        $this->load->model('Reportmanager_model', 'ReportManager');
        $this->load->helper('report_helper');
        $reports = $this->ReportManager->getLatest(0, 10);
        $reportsListHtml = renderReportsList($reports, SHOW_GALLERY_ALL, true);

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', 'Фото- и видеоотчеты с выступлений группы AmsterDam на праздниках, свадьбах, корпоративах, в ресторанах и пабах');
        $this->Meta->setValue('page_description', 'Фотоотчеты и видеоотчеты с выступлений кавер-группы AmsterDam на различых мероприятиях, таких как свадьба, корпоратив, банкет, день рождения, выступление в ресторане и пабе');
        $meta = $this->Meta->getData();

        echo $this->twig->render('reports/index.html', array('meta' => $meta, 'reportsList' => $reportsListHtml));
    }
    
    public function item($reportAlias)
    {
        $this->load->model('Report_model', 'Report');
        $this->Report->initByAlias($reportAlias);
        $this->Report->initLinkedVideo();
        if (!$this->Report->isInit()) {
            show_404();
        }
        
        $reportData = $this->Report->getData();
        $this->load->helper('report_helper');
        $reportBlock = renderReportBlock($this->Report, false);

        $this->load->model('Meta_model', 'Meta');
        $this->Meta->setValue('page_title', $reportData['name'] . ' - фотоотчет с выступления');
        $this->Meta->setValue('page_description', strip_tags($reportData['description_short']));
        $meta = $this->Meta->getData();

        echo $this->twig->render(
                            'reports/single_page.html',
                            array(
                                'meta' => $meta,
                                'report' => $reportData,
                                'reportBlock' => $reportBlock
                            )
                        );
    }
}