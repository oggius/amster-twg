<?php

/* contacts/index.html */
class __TwigTemplate_5f2068a7c94ee8363a903fc60f9fbfcc extends Twig_Template
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
        echo "<div class=\"contacts\">
    <h1>Контакты</h1>
    <p class=\"text\"><strong>Кавер-группа AmsterDam</strong> - это зажигательная живая музыка для корпоратива, на свадьбу или банкет, в ресторан или паб; это 100% живой звук, качественный саунд, невероятная волна позитива и драйва, а так же замечательное настроение. Если Вы ищите живую группу в Киеве или Украине, любите живую музыку и хотите заказать музыкантов для своего праздника, то вы обратились по адресу: <strong>кавер-группа AmsterDam</strong> - это именно то, что вам нужно! В разделе <a href=\"/services.html\">Наши услуги</a> Вы можете ознакомиться с перечнем предоставляемых группой музыкальных услуг. </p>
    <p class=\"text\" style=\"margin-bottom: 12px\">Нас ищут по таким запросам - живая группа Киев, живая группа Украина, живая музыка Киев, заказать музыкантов, заказать музыкантов Киев, поиск музыкантов Киев.</p> 
    <table class=\"contactsTable\">
        <tr valign=\"top\">
            <td><p class=\"whiteOutline\">050&nbsp;605&nbsp;41&nbsp;04&nbsp;-&nbsp;</p></td>
            <td><p class=\"whiteOutline\">Игорь Лях, директор группы</td>
        </tr>
        <tr>
            <td><p class=\"whiteOutline\">096&nbsp;299&nbsp;20&nbsp;20&nbsp;-&nbsp;</p></td>
            <td><p class=\"whiteOutline\">Владислав</p></td>
        </tr>
        <tr>
            <td><p class=\"whiteOutline\">063&nbsp;733&nbsp;43&nbsp;83&nbsp;-&nbsp;</p></td>
            <td><p class=\"whiteOutline\">Богдан</p></td>
        </tr>        
    </table>
    <p class=\"whiteOutline\"><a style=\"color: #fff\" href=\"mailto:amsterdamrockband@gmail.com\">amsterdamrockband@gmail.com</a></p>
    <p class=\"socLinks\">
        <a href=\"http://vk.com/amsterdamcover\"><img src=\"/theme/images/vk_icon.jpg\" /></a>
        <a href=\"http://www.youtube.com/user/amsterdamrockband\"><img src=\"/theme/images/youtube_icon.png\" /></a>
        <a href=\"http://www.facebook.com/AmsterdamCoverBand\"><img src=\"/theme/images/facebook_icon.png\" /></a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "contacts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
