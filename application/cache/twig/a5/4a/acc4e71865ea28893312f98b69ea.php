<?php

/* guest/table.html */
class __TwigTemplate_a54aacc4e71865ea28893312f98b69ea extends Twig_Template
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
        echo "<div class=\"recordsTable\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 3
            echo "        <div class=\"guestrecord\">
            <p class=\"text guestname\">
                <span class=\"colored\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "username"), "html", null, true);
            echo "</span>&nbsp;
                <span class=\"timestamp\">(";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "time"), "html", null, true);
            echo ")&nbsp;написал(а):</span>
            </p>
            <p class=\"text guestmessage\">";
            // line 8
            echo $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "text");
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "guest/table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  39 => 8,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
