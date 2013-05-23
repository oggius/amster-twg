<?php

/* home/index.html */
class __TwigTemplate_60ed5a16cedca61166b413846938473b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_main.html");

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"main_content_top\">
    <img class=\"mainimg\" src=\"/theme/images/amsterdam.jpg\" alt=\"Кавер-группа AmsterDam\" title=\"Кавер-группа AmsterDam\" />
    <div class=\"main_top_right\">
        <h1>Кавер группа AmsterDam</h1>
        <p class=\"text\">Приветствуем Вас! Вы обратились по адресу, потому что мы умеем создавать незабываемую атмосферу для любого праздника, и если вы не хотите чтобы гости засыпали, то <strong>живая музыка</strong> - это то что нужно, а ее может обеспечить только <strong>\"живая\" группа</strong>, такая как мы - <strong>кавер группа AmsterDam</strong>. Нужны доказательства? Приходите на наш концерт и убедитесь сами!</p>
        <div style=\"width:310px; float: left; margin-top: 10px\">
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\" data-lang></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"uk\" data-text=\"Кавер группа AmsterDam - музыка вашего настроения! 100% живой звук, культовые хиты!\">Твит</a>
        </div>
        <br style=\"clear: both;\" />
        <h3 class=\"heading\">Ближайший концерт</h3>
        <div class=\"content_list\">
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) ? $context["concerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 17
            echo "                <div class=\"concert\" id=\"concert";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "id"), "html", null, true);
            echo "\">
                    <p class=\"heading\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "name"), "html", null, true);
            echo "</p>
                    <div class=\"concert_description\">
\t\t\t\t\t\t";
            // line 20
            if (twig_test_empty($this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "concert_image"))) {
                // line 21
                echo "\t\t\t\t\t\t\t<p><img src=\"/userfiles/places/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "place_image"), "html", null, true);
                echo "\" alt=\"Афиша ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "name"), "html", null, true);
                echo " width=\"100\"/> </p>
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t\t<p><img src=\"/userfiles/places/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "place_image"), "html", null, true);
                echo "\" alt=\"Афиша ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "name"), "html", null, true);
                echo " width=\"100\"/> </p>
\t\t\t\t\t\t";
            }
            // line 25
            echo "                        <p class=\"text\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "description"), "html", null, true);
            echo "</p>
                    </div>
                    <p class=\"text\">Место:&nbsp;<span class=\"colored\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "place_name"), "html", null, true);
            echo "</span></p>
\t\t\t\t\t";
            // line 28
            $context["dateformat"] = $this->env->loadTemplate("_macros/dateformat.html");
            // line 29
            echo "                    <p class=\"text\">Время:&nbsp;<span class=\"colored\">";
            echo $context["dateformat"]->getconcertTime($this->getAttribute((isset($context["concert"]) ? $context["concert"] : null), "time"), (isset($context["months"]) ? $context["months"] : null));
            echo "</span></p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
</div>
<div class=\"main_content_bottom\">
    <div class=\"main_bottom_2col_wrapper\">
        <div class=\"main_bottom_left\">
            <div class=\"mainBlock\">";
        // line 38
        echo (isset($context["newsBlock"]) ? $context["newsBlock"] : null);
        echo "</div>
        </div>
        <div class=\"main_bottom_right\">
            <div class=\"mainBlock\">
                ";
        // line 42
        echo (isset($context["feedbacksBlock"]) ? $context["feedbacksBlock"] : null);
        echo "                
            </div>
        </div>
    </div>
    <div class=\"mainBlock\">
        <h2 class=\"colored\">Последние отчеты</h2>
        ";
        // line 48
        echo (isset($context["reportsList"]) ? $context["reportsList"] : null);
        echo "
    </div>
    <div class=\"mainBlock\">
        <h2 class=\"colored\">Информация</h2>
        <p class=\"text\"><strong>Кавер-группа AmsterDam</strong> - это зажигательная живая музыка для корпоратива, на свадьбу или банкет, в ресторан или паб; это 100% живой звук, качественный саунд, невероятная волна позитива и драйва, ну и конечно же отменное настроение, которое мы спешим подарить всей аудитории. Если Вы ищите живую группу в Киеве или Украине, любите живую музыку и хотите заказать музыкантов для своего праздника, то вы обратились по адресу: <strong>кавер-группа AmsterDam</strong> - это именно то, что вам нужно! В разделе <a href=\"/services.html\">Наши услуги</a> Вы можете ознакомиться с перечнем предоставляемых группой музыкальных услуг. </p>
        <p class=\"text\">Кавер-группа AmsterDam имеет богатый опыт выступлений на различных праздниках, музыкальной поддержке на <strong>свадьбе</strong>, <strong>корпоративе</strong>, <strong>вечеринке</strong>, <strong>банкете</strong></a>. Мы работали и постоянно работаем с лучшими заведениями Киева и Украины, стали постоянными гостями и резидентами известных ресторанов, клубов и пабов. В <a href=\"/playlist.html\">репертуаре</a> кавер-группы AmsterDam найдётся музыка на любой вкус, от классических хитов 70-х - 2000-х и до современных треков. Умножьте это всё на невероятную энегретику, драйв, собственные аранжировки, полностью живой звук - и вы убедитесь, что пригласив нас к себе на праздник, свадьбу или корпоратив, вы точно не прогадаете, Вы и Ваши гости останутся довольны. Мы это гарантируем!</p>
        <p class=\"text\">Как говорится, лучше один раз увидеть, чем сто раз услышать. Ну а что может быть лучше, чем увидеть и услышать одновременно? Поэтому, приглашаем Вас ознакомиться с <a href=\"/schedule.html\">расписанием концертов</a> и обязательно посетить выступление <strong>кавер-группы AmsterDam в Киеве</strong>.</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  115 => 42,  108 => 38,  100 => 32,  90 => 29,  88 => 28,  84 => 27,  78 => 25,  70 => 23,  62 => 21,  60 => 20,  55 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,);
    }
}
