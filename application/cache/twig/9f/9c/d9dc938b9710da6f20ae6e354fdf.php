<?php

/* reports/single_page.html */
class __TwigTemplate_9f9cd9dc938b9710da6f20ae6e354fdf extends Twig_Template
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
        echo "<div class=\"single_col_content\" style=\"float: left; width: 100%\">
    <div class=\"content_heading\" style=\"width: 735px\">
        <div>
            <div id=\"vk_like\"></div>
            <script type=\"text/javascript\">
            VK.Widgets.Like(\"vk_like\", {type: \"mini\", height: 20} );
            </script>
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\"></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "name"), "html", null, true);
        echo "\">Твит</a>            
        </div>
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "name"), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 16
        echo (isset($context["reportBlock"]) ? $context["reportBlock"] : null);
        echo "
    <div class=\"gallery-back\">
        <a href=\"/reports.html\" class=\"link-back colored\">Вернуться к отчетам</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "reports/single_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  47 => 14,  42 => 12,  31 => 3,  28 => 2,  19 => 1,);
    }
}
