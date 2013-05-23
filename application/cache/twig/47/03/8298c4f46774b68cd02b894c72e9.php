<?php

/* guest/index.html */
class __TwigTemplate_47038298c4f46774b68cd02b894c72e9 extends Twig_Template
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
        echo "<div class=\"contacts\">
    <div class=\"content_heading\">
        <div>
            <div id=\"vk_like\"></div>
            <script type=\"text/javascript\">
            VK.Widgets.Like(\"vk_like\", {type: \"mini\", height: 20} );
            </script>
            <g:plusone size=\"medium\"></g:plusone>
            <div class=\"fb-like\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\" data-font=\"arial\"></div>
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"AmsterdamCover\" data-lang=\"ru\" data-text=\"Делитесь впечатлениями и оставляйте свои замечания в Гостевой книге группы AmsterDam\">Твит</a>            
        </div>
        <h1>Гостевая</h1>
    </div>
    <p>Добро пожаловать в Гостевую книгу. Здесь Вы можете оставить отзыв о творчестве нашей кавер группы, высказать свои замечания и пожелания, а так же просто пожелать нам творческих успехов и расcказать, как вы любите живую музыку :)</p>
    <br />
    <p class=\"text\">ВНИМАНИЕ! Сразу хотим предупредить, что все комментарии, содержащие ругательства, оскорбления, ненормативную лексику, а так же любую информацию, несовместимую со словами \"культурный воспитанный человек\" (экстремизм, расизм, спам, реклама, \"троллинг\" и прочую неотносящуюся к теме сайта ерунду) будут удалены без каких-либо предупреждений</p>
    <div class=\"formblock\">
        ";
        // line 20
        if (((isset($context["recordsCount"]) ? $context["recordsCount"] : null) == 0)) {
            // line 21
            echo "            <a href=\"javascript:void(0)\" rel=\"nofollow\" class=\"showguestform colored\">Оставить первый отзыв</a>
        ";
        } else {
            // line 23
            echo "            <a href=\"javascript:void(0)\" rel=\"nofollow\" class=\"showguestform colored\">Оставить отзыв</a>
        ";
        }
        // line 25
        echo "        <div class=\"guestform\" style=\"display: none\">
            <p class=\"gbfield\"><label>Ваше имя*</label><br /><input type=\"text\" name=\"guestname\" value=\"\"/></p>
            <p class=\"gbfield\"><label>Ваш email</label><br /><input type=\"text\" name=\"guestemail\" value=\"\"/></p>
            <!--<p class=\"gbfield\"><label>А вы точно не робот?:) Ответьте на вопрос: как называется наша группа?</label><br /><input type=\"text\" name=\"antispam\" value=\"\"/></p>-->
            <p class=\"gbfield\"><label>Собственно, сам отзыв* =)</label><br /><textarea name=\"guestmessage\"></textarea></p>
            <p><a href=\"javascript:void(0)\" rel=\"nofollow\" class=\"sendguestmessage colored\">Отправить</a></p>
        </div>
    </div>
    ";
        // line 33
        echo (isset($context["recordsTable"]) ? $context["recordsTable"] : null);
        echo "
    ";
        // line 34
        if ((isset($context["hasMore"]) ? $context["hasMore"] : null)) {
            // line 35
            echo "    <a href=\"javascript:void(0)\" class=\"loadMore\">Показать больше отзывов</a>
    ";
        }
        // line 37
        echo "    <p class=\"text\">Если Вы считаете, что какой-либо отзыв носит оскорбительный характер или хотели бы удалить отзыв, который сами оставили, пожалуйста, напишите нам на электронную почту или свяжитесь по телефонам, которые размещены в разделе <a href=\"/contacts.html\">Контакты</a>, и мы обязательно отреагируем на Ваш запрос.</p>    
</div>
";
    }

    public function getTemplateName()
    {
        return "guest/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  76 => 35,  74 => 34,  70 => 33,  60 => 25,  56 => 23,  52 => 21,  50 => 20,  31 => 3,  28 => 2,);
    }
}
