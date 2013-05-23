<?php

/* _macros/dateformat.html */
class __TwigTemplate_36acd7436bffcc1049058cae312faf19 extends Twig_Template
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
    }

    // line 1
    public function getconcertTime($_datestring = null, $_months = null)
    {
        $context = $this->env->mergeGlobals(array(
            "datestring" => $_datestring,
            "months" => $_months,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datestring"]) ? $context["datestring"] : null), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), twig_date_format_filter($this->env, (isset($context["datestring"]) ? $context["datestring"] : null), "m"), array(), "array"), "html", null, true);
            echo " в ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datestring"]) ? $context["datestring"] : null), "H:i"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros/dateformat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  21 => 1,  19 => 1,  146 => 55,  140 => 12,  135 => 7,  130 => 6,  124 => 4,  95 => 55,  88 => 50,  86 => 49,  48 => 13,  46 => 12,  38 => 7,  34 => 6,  29 => 4,  24 => 1,  98 => 37,  84 => 30,  82 => 29,  76 => 28,  72 => 27,  64 => 24,  59 => 22,  54 => 21,  50 => 20,  31 => 3,  28 => 2,);
    }
}
