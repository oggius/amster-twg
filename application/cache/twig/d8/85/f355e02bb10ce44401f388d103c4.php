<?php

/* promo/index.html */
class __TwigTemplate_d885f355e02bb10ce44401f388d103c4 extends Twig_Template
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
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"Ознакомьтесь с промо-видео кавер группы AmsterDam, а также записями с других концеров\">Твит</a>
        </div>
        <h1>Видео и аудио</h1>
    </div>
    <div class=\"single_col_content\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videoList"]) ? $context["videoList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 18
            echo "            <h2 class=\"colored\">";
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title");
            echo "</h2>
            <div class=\"text\">";
            // line 19
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "description");
            echo "</div>
            <div class=\"video\">
                <iframe width=\"560\" height=\"315\" src=\"";
            // line 21
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "embeded_code");
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <p class=\"text\">Хотим заметить, что на данных видеоматериалах представлена лишь небольшая часть нашего репертуара, который за время существования группы AmsterDam разросся довольно существенно. Можете убедиться в этом сами, на странице <a href=\"http://www.amsterdam-band.com/playlist.html\">плейлист</a> представлен полный репертуар кавер-группы AmsterDam, и он постоянно расширяется.</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "promo/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  61 => 21,  56 => 19,  51 => 18,  47 => 17,  31 => 3,  28 => 2,);
    }
}
