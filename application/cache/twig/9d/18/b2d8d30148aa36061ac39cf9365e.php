<?php

/* news/main_block.html */
class __TwigTemplate_9d18b2d8d30148aa36061ac39cf9365e extends Twig_Template
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
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["news"]) ? $context["news"] : null)) > 0)) {
            // line 2
            echo "        <a class=\"headLink colored\" href=\"/news.html\"><h2 class=\"colored\">Последние новости</h2></a>
        ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "            <div class=\"newsItem\" id=\"newsItem";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\">
                <h3>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</h3>
                <div class=\"news_short\">
                    ";
                // line 7
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_short");
                echo "&nbsp;
                </div>
                <a class=\"newsMore colored\" href=\"/news/";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo ".html\">(подробнее)</a>
                <br />
                <!--<p class=\"newsDate\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date"), "html", null, true);
                echo "</p>-->
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        <p class=\"text\" style=\"text-align: center\"><strong><a href=\"/news.html\">Просмотреть все новости кавер-группы AmsterDam</a></strong></p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "news/main_block.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  49 => 11,  44 => 9,  39 => 7,  34 => 5,  29 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
