<?php

/* reports/block_link.html */
class __TwigTemplate_3e2f788b85ce4f345dca3c3170eca545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"report_content\">
    <h2><a class=\"link-no-underline\" href=\"/reports/";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "alias"), "html", null, true);
        echo ".html\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "name"), "html", null, true);
        echo "</a></h2>
    <div class=\"text\">
        ";
        // line 4
        echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "description");
        echo "
    </div>\t
    ";
        // line 6
        echo (isset($context["gallery"]) ? $context["gallery"] : null);
        echo "
    <p class=\"more\">
        <a class=\"colored\" href=\"/reports/";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "alias"), "html", null, true);
        echo ".html\">
            ";
        // line 9
        echo (((!twig_test_empty((isset($context["gallery"]) ? $context["gallery"] : null)))) ? ("Посмотреть остальные фото/видео") : ("Посмотреть полный отчет"));
        echo "
        </a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "reports/block_link.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  39 => 8,  34 => 6,  29 => 4,  22 => 2,  19 => 1,);
    }
}
