<?php

/* gallery/gallery.html */
class __TwigTemplate_8ba4d4c37be9e8bd30bdf5d31301050c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
        echo "\" class=\"photoGallery\">
    ";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : null)) > 0)) {
            // line 3
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "view_code"), "html", null, true);
                echo "\"><img src=\"/userfiles/gallery/videothumbs/youtube-play-video.jpg\" /></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        }
        // line 7
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "src"), "html", null, true);
            echo "\">
            <img 
                src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "src_thmb"), "html", null, true);
            echo "\",
                data-big=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "src"), "html", null, true);
            echo "\"
                data-title=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "title"), "html", null, true);
            echo "\"
                data-description=\"";
            // line 13
            echo $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "description");
            echo "\"
                >
        </a>                
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "           
</div>
<script>
Galleria.loadTheme('/theme/ext/galleria/themes/classic/galleria.classic.min.js');
Galleria.run('#";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
        echo "');
</script>
";
    }

    public function getTemplateName()
    {
        return "gallery/gallery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  76 => 16,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  48 => 8,  43 => 7,  40 => 6,  31 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
