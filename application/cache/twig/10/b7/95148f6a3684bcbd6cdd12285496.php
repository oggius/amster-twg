<?php

/* news/index.html */
class __TwigTemplate_10b795148f6a3684bcbd6cdd12285496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_page_2col.html");

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_page_2col.html";
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
    <h1>Последние новости</h1>
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["news"]) ? $context["news"] : null)) > 0)) {
            // line 6
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        <div class=\"newsItem\" id=\"newsItem";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\">
            <h2>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</h2>
            <div class=\"news_short\">
                ";
                // line 10
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_short");
                echo "
                <br />
                <a class=\"newsMore\" href=\"/news/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo ".html\">Читать полностью</a>
            </div>
            <!--<p class=\"newsDate\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date"), "html", null, true);
                echo "</p>-->
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo " 
    ";
        } else {
            // line 18
            echo "        <h2>Пока никаких новостей :)</h2>
    ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "news/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  75 => 18,  71 => 16,  62 => 14,  57 => 12,  52 => 10,  47 => 8,  42 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
