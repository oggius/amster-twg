<?php

/* gallery/index.html */
class __TwigTemplate_6237b4f1fcedc286c76d962d02435ebd extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"/theme/ext/cloud-carousel.1.0.5.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\"#albums\").CloudCarousel(\t\t
            {\t\t\t
                reflHeight:70,
\t\t\t\treflOpacity:0.5,
\t\t\t\treflGap:0,            
                xPos: 350,
                yPos: 100,
                buttonLeft: \$(\"#left-but\"),
                buttonRight: \$(\"#right-but\"),
                altBox: \$(\"#alt-text\"),
                titleBox: \$(\"#title-text\")
            }
        );
    })
</script>
<div>
    <div class=\"content_heading\" style=\"width: 735px\">
        <div>
            <div id=\"vk_like\"></div>
            <script type=\"text/javascript\">
            VK.Widgets.Like(\"vk_like\", {type: \"mini\", height: 20} );
            </script>
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\"></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-url=\"http://www.amsterdam-band.com/gallery.html\" data-lang=\"ru\" data-text=\"В галерее кавер-группы AmsterDam много живых фотографий с концертов, свадеб и корпоративов\">Твит</a>            
        </div>
        <h1>Фотогалерея</h1>
    </div>
    <div class=\"single_col_content\">
    <p class=\"text\" style=\"width: 735px\">На этой странице представлены фотоотчеты по наиболее ярким концертам живой группы AmsterDam. По мере поступления фотографий от наших друзей и гостей, мы будем расширять данный список фотографий. Кстати, мы с удовольствием публикуем фотографии не только профессиональных фотографов, но и любительские снимки наших гостей, поэтому если Вы любите и умеете фотографировать, то приходите на <a href=\"/schedule.html\">ближайший концерт</a> нашей группы в Киеве - и возможно именно Ваши снимки украсят нашу коллекцию в ближайшем будущем! ;)</p>\t
        <div class=\"gallery\">
            <div id=\"albums\" style=\"width:700px; height:550px;background:#000;overflow:scroll;\">
            <!-- Define elements to accept the alt and title text from the images. -->
            <p id=\"alt-text\" class=\"colored\"></p>             
            <p id=\"title-text\" class=\"colored\"></p>             
                ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 42
            echo "                <a href=\"/gallery/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "alias"), "html", null, true);
            echo ".html\">
\t\t\t\t\t";
            // line 43
            if (twig_test_empty($this->getAttribute((isset($context["album"]) ? $context["album"] : null), "img_src"))) {
                // line 44
                echo "\t\t\t\t\t\t<img class=\"cloudcarousel\" src=\"/userfiles/gallery/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "id"), "html", null, true);
                echo "/title.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "name"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t<img class=\"cloudcarousel\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "img_src"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "name"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            }
            // line 48
            echo "                </a>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            <a id=\"left-but\" href=\"javascript:void(0)\" rel=\"nofollow\"></a>
            <a id=\"right-but\" href=\"javascript:void(0)\" rel=\"nofollow\"></a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gallery/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  98 => 48,  90 => 46,  82 => 44,  80 => 43,  75 => 42,  71 => 41,  31 => 3,  28 => 2,);
    }
}
