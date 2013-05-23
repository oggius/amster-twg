<?php

/* reports/index.html */
class __TwigTemplate_3a28f0e891a6660236293e0c730b5bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_page_1col.html");

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_page_1col.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        // line 3
        echo "<div>
    <div class=\"content_heading\">
        <div>
            <div id=\"vk_like\"></div>
            <script type=\"text/javascript\">
            VK.Widgets.Like(\"vk_like\", {type: \"mini\", height: 20} );
            </script>
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\"></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-url=\"http://www.amsterdam-band.com/reports.html\" data-lang=\"ru\" data-text=\"Фото- и видеоотчеты с выступлений кавер-группы AmsterDam\">Твит</a>            
        </div>
        <h1>Отчеты с выступлений</h1>
    </div>
    <div class=\"single_col_content\">
    <p>На данной странице вы можете просмотреть фото- и видеоотчеты с выступлений <strong>кавер-группы AmsterDam</strong> на различных мероприятиях, таких как <strong>свадьбы, корпоративы, банкеты, дни рождения, выступления в пабах и ресторанах</strong>. Каждый отчет содержит описание выступления, а также небольшую галерею фотографий и видеофайлов с наиболее интересными моментами с каждого концерта, ведь живая музыка и живые концерты всегда преподносят интересные моменты и сюрпризы :)</p>\t
    ";
        // line 18
        echo (isset($context["reportsList"]) ? $context["reportsList"] : null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "reports/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  31 => 3,  28 => 2,);
    }
}
