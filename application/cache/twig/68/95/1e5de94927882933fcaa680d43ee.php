<?php

/* layout_page_2col.html */
class __TwigTemplate_68951e5de94927882933fcaa680d43ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "page_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "page_title"), "Кавер группа AmsterDam")) : ("Кавер группа AmsterDam")), "html", null, true);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"Description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "page_description"), "html", null, true);
        echo "\" />
<meta name=\"Keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "page_keywords"), "html", null, true);
        echo "\" />
<meta name=\"robots\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "index_follow"), "html", null, true);
        echo "\">
<meta http-equiv=\"Cache-Control\" content=\"public\" /> 
<meta http-equiv=\"Cache-Control\" content=\"max-age=";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "cache_expiration"), "html", null, true);
        echo ", must-revalidate\" />
<meta http-equiv=\"Expires\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "cache_expiration"), "html", null, true);
        echo "\" />
";
        // line 12
        echo $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "canonical");
        echo "
<link rel=\"shortcut icon\" href=\"/theme/images/favicon.gif\">
<link href=\"/theme/css/styles.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" >
<link href=\"/theme/css/ui-darkness/jquery-ui-1.10.0.custom.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" >
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/theme/js/main.js\"></script>
<script type=\"text/javascript\" src=\"/theme/js/jquery-ui-1.10.0.custom.min.js\"></script>
<script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37064991-1']);
  _gaq.push(['_trackPageview']);
</script>
<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?75\"></script>
<script type=\"text/javascript\">
  VK.init({apiId: 3361784, onlyWidgets: true});
</script>
</head>
<body>
<div id=\"site\">
    <div id=\"top\"></div>
    <div id=\"leftcol\"></div>
    <div id=\"centercol_twocol\">
        <div class=\"header\">
            <div class=\"logo\"><a href=\"/\" title=\"Кавер группа AmsterDam\"><img src=\"/theme/images/logo.png\" alt=\"Кавер Группа AmsterDam\" title=\"Кавер Группа AmsterDam\"></a></div>
            ";
        // line 36
        $this->env->loadTemplate("menu/main.html")->display($context);
        // line 37
        echo "            <div class=\"order\">
                <a href=\"/order.html\">Заказать выступление</a>
            </div>            
        </div>
        <div class=\"content_wrapper\">
            <div id=\"right\">
\t\t\t\t";
        // line 43
        $this->displayBlock('page_content', $context, $blocks);
        echo "            
            </div>            
        </div>
    </div>
    <div id=\"rightcol\"></div>
    <div id=\"bottom\"></div>
</div> 
<script type=\"text/javascript\">
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>  
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/ru_RU/all.js#xfbml=1\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</body>
</html>";
    }

    public function block_page_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout_page_2col.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 43,  80 => 37,  78 => 36,  51 => 12,  47 => 11,  43 => 10,  38 => 8,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
