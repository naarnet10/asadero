<?php

/* ProyectoBundle::layout.html.twig */
class __TwigTemplate_b330a671d8f624744b0fdd1ff111d8ef2c9619ac01fe4e238d48e86bf524b038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <header>                   \t
        <h1><a href=\"index.html\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></h1> 
        <nav>  
            <ul class=\"menu\">
                <li class=\"current\"><a href=\"index.html\">about</a></li>
                <li><a href=\"wedding.html\">wedding</a></li>
                <li><a href=\"album.html\">album</a></li>
                <li><a href=\"links.html\">links</a></li>
                <li><a href=\"wishes.html\">your wishes</a></li>
                <li><a href=\"contacts.html\">contacts</a></li>
            </ul>
        </nav>
    </header>  
    <div id=\"slide\">
        <div class=\"slider\">
            <ul class=\"items\">
                <li><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                <li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                <li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                <li><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
            </ul>
        </div>
        <ul class=\"pags\">
            <li><a href=\"#\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-1-small.jpg"), "html", null, true);
        echo "\" alt=\"\"><span></span></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-2-small.jpg"), "html", null, true);
        echo "\" alt=\"\"><span></span></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-3-small.jpg"), "html", null, true);
        echo "\" alt=\"\"><span></span></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/slide-4-small.jpg"), "html", null, true);
        echo "\" alt=\"\"><span></span></a></li>
        </ul>
        <a href=\"#\" class=\"prev\">&nbsp;</a><a href=\"#\" class=\"next\">&nbsp;</a>
    </div>
";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "    <footer>
        <p><strong>© 2012  Kate&amp;Leo</strong><br> <a class=\"link\" href=\"http://www.templatemonster.com/\" target=\"_blank\" rel=\"nofollow\">Website Template</a> by TemplateMonster.com</p>
        <div class=\"soc-icons\"><a href=\"#\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/icon-1.png"), "html", null, true);
        echo "\" alt=\"\"></a><a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/icon-2.png"), "html", null, true);
        echo "\" alt=\"\"></a><a href=\"#\"><img src=\"images/icon-3.png\" alt=\"\"></a></div>
    </footer>
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    <script type=\"text/javascript\">
        
        \$(document).ready(function(){\t
\t\t\t\$('.slider')._TMS({
\t\t\t\tshow:0,
\t\t\t\tpauseOnHover:true,
\t\t\t\tprevBu:'.prev',
\t\t\t\tnextBu:'.next',
\t\t\t\tplayBu:false,
\t\t\t\tduration:800,
\t\t\t\tpreset:'fade',
\t\t\t\tpagination:'.pags',
\t\t\t\tpagNums:false,
\t\t\t\tslideshow:7000,
\t\t\t\tnumStatus:false,
\t\t\t\tbanners:false,
\t\t\t\twaitBannerAnimation:false,
\t\t\t\tprogressBar:false
\t\t\t});\t\t
\t\t});
        
        
        
        
    </script>


";
    }

    public function getTemplateName()
    {
        return "ProyectoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  128 => 42,  119 => 38,  115 => 36,  112 => 35,  107 => 34,  103 => 35,  101 => 34,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
