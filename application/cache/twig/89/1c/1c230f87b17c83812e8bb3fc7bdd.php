<?php

/* schedule/index.html */
class __TwigTemplate_891c1c230f87b17c83812e8bb3fc7bdd extends Twig_Template
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
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"Расписание ближайших концертов кавер-группы AmsterDam\">Твит</a>
        </div>
        <h1>Предстоящие концерты</h1>
    </div>
    <div class=\"single_col_content\">
        <p class=\"text\">Приглашаем всех ознакомиться с расписанием ближайших концертов кавер группы Amsterdmam в ресторанах и пабах Киева и Украины. Живая музыка на корпоративе, свадьбе или банкете в нашем исполнении в данном разделе не анонсируется, так как такие мероприятия имеют в большинстве своём закрытый характер.</p>
        <p class=\"text\">Друзья, если вы побывали на одном из наших концертов и у вас есть эмоции или критика, которыми вы хотели бы поделиться, приглашаем вас в нашу <a href=\"/guest.html\">Гостевую книгу</a>, где вы можете свободно высказаться о творчестве нашей группы. Будем рады любым мнениям и отзывам!</p>
        <div class=\"content_list\" style=\"margin-top: 20px\">
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) ? $context["concerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 21
            echo "                <div class=\"concert\" id=\"concert";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "id"), "html", null, true);
            echo "\">
                    <p class=\"heading\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "name"));
            echo "</p>
                    <div class=\"concertContent\">
                        <img src=\"/userfiles/places/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "place_image"), "html", null, true);
            echo "\" alt=\"Афиша ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "name"), "html", null, true);
            echo "\" width=\"100\"/>

                        <div class=\"concertText\">
                            <p class=\"text\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "description"), "html", null, true);
            echo "</p>
                            <p class=\"text\">Место:&nbsp;<span class=\"colored\">";
            // line 28
            echo $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "place_name");
            echo "</span>&nbsp;&nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "address"), "html", null, true);
            echo ")</p>
                            ";
            // line 29
            $context["dateformat"] = $this->env->loadTemplate("_macros/dateformat.html");
            // line 30
            echo "                            <p class=\"text\">Время:&nbsp;<span class=\"colored\">";
            echo $context["dateformat"]->getconcertTime($this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "time"), (isset($context["months"]) ? $context["months"] : null));
            echo "</span></p>
                            <div class=\"shareBlock\">
                            </div>                            
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "schedule/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  84 => 30,  82 => 29,  76 => 28,  72 => 27,  64 => 24,  59 => 22,  54 => 21,  50 => 20,  31 => 3,  28 => 2,);
    }
}
