<?php

/* playlist/index.html */
class __TwigTemplate_780965d1e8a88c13305d66adf534ecf7 extends Twig_Template
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
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"Репертуар кавер группы AmsterDam состоит только из хитов, от 60-х и до наших дней!\">Твит</a>
        </div>
        <h1>Репертуар группы</h1>
    </div>
    <div class=\"single_col_content\">
        <div class=\"content_list\">
            <table class=\"playlist\">
                <tr valign=\"top\">
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) ? $context["songs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 21
            echo "                    <td>
                        <p class=\"colored\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "type"), "html", null, true);
            echo "</p>
                        <ul>
                            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["type"]) ? $context["type"] : null), "songs"));
            foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
                // line 25
                echo "                             ";
                if ((!twig_test_empty($this->getAttribute((isset($context["song"]) ? $context["song"] : null), "author")))) {
                    // line 26
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["song"]) ? $context["song"] : null), "author"), "html", null, true);
                    echo "&nbsp;&nbsp;-&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["song"]) ? $context["song"] : null), "title"), "html", null, true);
                    echo "</li>
                             ";
                } else {
                    // line 28
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["song"]) ? $context["song"] : null), "title"), "html", null, true);
                    echo "</li>
                             ";
                }
                // line 30
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        </ul>
                    </td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tr>
            </table>
            <p class=\"text\">Также, если Вам более удобно, Вы можете <a href=\"/userfiles/playlist_AmsterDam.doc\" title=\"Скачать репертуар в формате .doc\">скачать репертуар</a> группы в формате .doc</p>
            <a class=\"colored\" href=\"/userfiles/playlist_AmsterDam.doc\" title=\"Скачать репертуар в формате .doc\"><img style=\"position: relative; top: 12px; right: 5px\" src=\"/theme/images/word_icon.png\" alt=\"Скачать репертуар в формате .doc\" title=\"Скачать репертуар в формате .doc\" />Скачать репертуар в формате .doc</a>
            <br />
            <br />
            <p class=\"text\"><u>ПРИМЕЧАНИЕ:</u> По желанию клиента репертуар может быть индивидуально расширен</p>
            <p class=\"text\">Дорогие друзья, хотели бы обратить Ваше внимание на то, что зачастую существенные обновления репертуара группы освещаются в <a href=\"/news.html\">новостях сайта</a>, поэтому следите за нашими обновлениями, чтобы оставаться в курсе событий!</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "playlist/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  89 => 31,  83 => 30,  77 => 28,  69 => 26,  66 => 25,  62 => 24,  57 => 22,  54 => 21,  50 => 20,  31 => 3,  28 => 2,);
    }
}
