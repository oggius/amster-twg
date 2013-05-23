<?php

/* reports/block.html */
class __TwigTemplate_48f3a221b0490b8c9e34d218123e0da4 extends Twig_Template
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
    <div class=\"text\">";
        // line 2
        echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "description");
        echo "</div>
    ";
        // line 3
        echo (isset($context["gallery"]) ? $context["gallery"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "reports/block.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
