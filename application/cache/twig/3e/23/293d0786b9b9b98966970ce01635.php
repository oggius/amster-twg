<?php

/* news/item.html */
class __TwigTemplate_3e23293d0786b9b9b98966970ce01635 extends Twig_Template
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
        echo "<div class=\"newsBig\">
    <div class=\"content_heading\">
        <div>
            <div id=\"vk_like\"></div>
            <script type=\"text/javascript\">
            VK.Widgets.Like(\"vk_like\", {type: \"mini\", height: 20} );
            </script>
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\"></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"";
        // line 12
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_short")), "html", null, true);
        echo "\">Твит</a>
        </div>
        <h1>";
        // line 14
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
        echo "</h1>
    </div>
    <div class=\"text\">";
        // line 16
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_full");
        echo "</div>
    <p class=\"newsDate\">Дата публикации: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "time"), "html", null, true);
        echo "</p>
</div>
<div class=\"newsBackWrapper\">
    <p class=\"newsBack\"><a href=\"/news.html\">Вернуться к списку новостей</a></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "news/item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 16,  47 => 14,  42 => 12,  31 => 3,  28 => 2,);
    }
}
