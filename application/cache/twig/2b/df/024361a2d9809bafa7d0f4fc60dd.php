<?php

/* order/index.html */
class __TwigTemplate_2bdf024361a2d9809bafa7d0f4fc60dd extends Twig_Template
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
    <h1>Заказ выступления</h1>
    <p class=\"text\">100% живая музыка в исполнении кавер группы AmsterDam станет прекрасным украшением вашего праздника. Убедитесь в этом сами!</p>
    <p class=\"text\">По вопросам заказа выступления обращайтесь по телефонам: </p>
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
    
    <p class=\"text\">Ознакомиться и скачать наши технический и бытовой райдеры Вы можете по ссылке:</p>
    <p class=\"whiteOutline\"><a href=\"/rider.html\">Технический и бытовой райдер</a></p>
    <p class=\"text\">Также рекомендуем ознакомиться с нашим репертуаром, в котором найдется музыка даже для самых изысканных ценителей музыки!</p>
    <p class=\"whiteOutline\"><a href=\"/playlist.html\">Репертуар группы AmsterDam</a></p>
    <p class=\"text\">Звоните! Вы не пожалеете!</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "order/index.html";
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
