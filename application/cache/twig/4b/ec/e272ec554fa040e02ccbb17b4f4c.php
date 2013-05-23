<?php

/* guest/heading_table.html */
class __TwigTemplate_4bece272ec554fa040e02ccbb17b4f4c extends Twig_Template
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
        echo "<a href=\"/guest.html\" class=\"headLink colored\"><h2 class=\"colored\">Отзывы о кавер группе AmsterDam</h2></a>
<div class=\"recordsTable\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 4
            echo "        <div class=\"guestrecord\">
            <p class=\"text guestname\">
                <span class=\"colored\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "username"), "html", null, true);
            echo "</span>&nbsp;
                <span class=\"timestamp\">(";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "time"), "html", null, true);
            echo ")&nbsp;написал(а):</span>
            </p>
            <p class=\"text guestmessage\">";
            // line 9
            echo $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "text");
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <p class=\"text\" style=\"text-align: center\"><strong><a href=\"/guest.html\">Просмотреть все отзывы о кавер-группе AmsterDam</a></strong></p>
</div>";
    }

    public function getTemplateName()
    {
        return "guest/heading_table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  40 => 9,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
