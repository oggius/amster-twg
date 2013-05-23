<?php

/* about/index.html */
class __TwigTemplate_b209a9a81763d6492f5143e5db8c483a extends Twig_Template
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
    <h1>О группе</h1>
    <p class=\"text\">Всем привет! Мы - группа AmsterDam! </p>
    <p class=\"text\">Наш коллектив собрался в 2010 году в Киеве. За 2 года существования группы нам удалось не только зарекомендовать себя как зажигательных, энергичных, неунывающих музыкантов, но и полюбиться очень многим представителям столичной публики! И всё это потому, что мы искренне и со всей душой любим как наше дело, так и наших слушателей, и с каждым выходом на сцену дарим им море драйва, позитива и просто хорошего настроения</p>
    <p class=\"whiteOutline\" style=\"margin-top: 15px; font-size: 14px\">Состав группы:</p>
    <p class=\"whiteOutline\">Олег - вокал, клавишные, аккордеон</p>
    <p class=\"whiteOutline\">Богдан - виртуозная гитара, вокал</p>
    <p class=\"whiteOutline\">Влад - \"качовая\" бас-гитара, вокал</p>
    <p class=\"whiteOutline\">Андрей - ударные</p>
    <p class=\"text\">Мы работаем в самых разных направлениях, в репертуаре найдется музыка на любой вкус даже для самых избалованных слушателей ;) Не верите? Тогда <a href=\"/promo.html\" >убедитесь сами</a>!</p>    
</div>
";
    }

    public function getTemplateName()
    {
        return "about/index.html";
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
