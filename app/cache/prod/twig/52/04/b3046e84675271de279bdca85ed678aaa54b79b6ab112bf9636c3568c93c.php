<?php

/* ProyectoBundle:Default:index.html.twig */
class __TwigTemplate_5204b3046e84675271de279bdca85ed678aaa54b79b6ab112bf9636c3568c93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProyectoBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com. July 30, 2012!</div>
        <div class=\"container_24\">
            <div class=\"grid_7\">
                <div class=\"top-1 right-1\">
                    <h2 class=\"h2-border\">Love <span>story:</span></h2>
                    <p class=\"p1 top-2\">Kate&amp;Leo is one of <a href=\"http://blog.templatemonster.com/free-website-templates/\" class=\"link\" target=\"_blank\">Free Website
                            Templates</a> created by TemplateMonster.com team. This website template is optimized 
                        for 1280X1024 screen resolution.It is 
                        also XHTML &amp; CSS valid.</p>
                    <p class=\"p-border\">The PSD source files of this <a class=\"link\" href=\"http://blog.templatemonster.com/2012/07/30/free-website-template-jquery-slider-wedding-page/\" target=\"_blank\" rel=\"nofollow\">Kate&amp;Leo</a> template are available for free for the registered members of TemplateMonster.com. Feel free to 
                        get them!</p>
                    <p class=\"p-border clr-1 top-3\">Lorem ipsum dolor sit amet, onsectetur adipiscing elit. Vivamus sed arcu duieu tincidunt sem.Vivamus hendrerit mauris 
                        ut dui gravida ut. </p>
                    <a href=\"#\" class=\"link-1\">Read more</a>
                </div>
            </div>
            <div class=\"grid_1\">
                <div class=\"line-2\">&nbsp;</div>
            </div>
            <div class=\"grid_8\">
                <div class=\"top-1 right-1\">
                    <h3><strong>About</strong> Kate</h3>
                    <div class=\"box-1\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/page1-img1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-border img-indent\">
                        <div class=\"extra-wrap\">
                            <p class=\"text-1\">Kate Nelson</p>
                            <p class=\"text-2\">24 years old<br>Beginner actress</p>
                        </div>
                    </div>
                    <p class=\"text-3 top-4\">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut dui gravida ut viverra lectus tincidunt. </p>
                    <p class=\"p-border\">Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem.</p>
                    <a href=\"#\" class=\"link-1\">Read more</a>
                </div>
            </div>  
            <div class=\"grid_1\">
                <div class=\"line-2\">&nbsp;</div>
            </div>  
            <div class=\"grid_7\">
                <div class=\"top-1\">
                    <h3><strong>About</strong> Leo</h3>
                    <div class=\"box-1\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyecto/images/page1-img2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-border img-indent\">
                        <div class=\"extra-wrap\">
                            <p class=\"text-1\">Leo Green</p>
                            <p class=\"text-2\">28 years old<br>Layer</p>
                        </div>
                    </div>
                    <div class=\"comments\">
                        <div class=\"comments-corner\"></div>
                        <div class=\"comment-1\">
                            <div class=\"comment-2\">
                                <p class=\"text-4\">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut dui 
                                    gravida ut viverra lectus tincidunt.</p>
                                <p class=\"text-5 top-5\">Lorem ipsum dolor sit amet, onsec
                                    tetur adipiscing elit. Vivamus sed 
                                    arcu duieu tincidunt sem Vivamus. </p>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\" class=\"link-1\">Read more</a>
                </div>
            </div>  
            <div class=\"clear\"></div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "ProyectoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  65 => 28,  39 => 4,  36 => 3,  11 => 1,);
    }
}
