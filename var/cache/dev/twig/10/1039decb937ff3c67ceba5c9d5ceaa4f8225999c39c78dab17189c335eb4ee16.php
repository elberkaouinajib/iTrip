<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3e869220929674b5a6a43c634ba3daea2546b8ef602ded8f249ad2daef43bb60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3219074517c96283bb2c6a8787c026d4283615738fe798e26fd9792cd871b88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3219074517c96283bb2c6a8787c026d4283615738fe798e26fd9792cd871b88d->enter($__internal_3219074517c96283bb2c6a8787c026d4283615738fe798e26fd9792cd871b88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_999f02399b7b08c571bedc6151507c6329cfd5783b74b67a01f725084f3a00dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999f02399b7b08c571bedc6151507c6329cfd5783b74b67a01f725084f3a00dc->enter($__internal_999f02399b7b08c571bedc6151507c6329cfd5783b74b67a01f725084f3a00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3219074517c96283bb2c6a8787c026d4283615738fe798e26fd9792cd871b88d->leave($__internal_3219074517c96283bb2c6a8787c026d4283615738fe798e26fd9792cd871b88d_prof);

        
        $__internal_999f02399b7b08c571bedc6151507c6329cfd5783b74b67a01f725084f3a00dc->leave($__internal_999f02399b7b08c571bedc6151507c6329cfd5783b74b67a01f725084f3a00dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83cfb31b372dce3753904a334d94a17141326fd2903aab9b5d05f9a7147a7563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cfb31b372dce3753904a334d94a17141326fd2903aab9b5d05f9a7147a7563->enter($__internal_83cfb31b372dce3753904a334d94a17141326fd2903aab9b5d05f9a7147a7563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cca7f8359e10cf08ff45fa38692329a4de4f53674b90d8c019d50e14d5167f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca7f8359e10cf08ff45fa38692329a4de4f53674b90d8c019d50e14d5167f78->enter($__internal_cca7f8359e10cf08ff45fa38692329a4de4f53674b90d8c019d50e14d5167f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cca7f8359e10cf08ff45fa38692329a4de4f53674b90d8c019d50e14d5167f78->leave($__internal_cca7f8359e10cf08ff45fa38692329a4de4f53674b90d8c019d50e14d5167f78_prof);

        
        $__internal_83cfb31b372dce3753904a334d94a17141326fd2903aab9b5d05f9a7147a7563->leave($__internal_83cfb31b372dce3753904a334d94a17141326fd2903aab9b5d05f9a7147a7563_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9109a50ef74de19d39e9834a076183fc6bcee466ef1f78a30886ef3e9cae8b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9109a50ef74de19d39e9834a076183fc6bcee466ef1f78a30886ef3e9cae8b0c->enter($__internal_9109a50ef74de19d39e9834a076183fc6bcee466ef1f78a30886ef3e9cae8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cb1363157a40ccaa57a89b243ca8e254443f693e8348672c4aff3494fc05e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb1363157a40ccaa57a89b243ca8e254443f693e8348672c4aff3494fc05e1e->enter($__internal_4cb1363157a40ccaa57a89b243ca8e254443f693e8348672c4aff3494fc05e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4cb1363157a40ccaa57a89b243ca8e254443f693e8348672c4aff3494fc05e1e->leave($__internal_4cb1363157a40ccaa57a89b243ca8e254443f693e8348672c4aff3494fc05e1e_prof);

        
        $__internal_9109a50ef74de19d39e9834a076183fc6bcee466ef1f78a30886ef3e9cae8b0c->leave($__internal_9109a50ef74de19d39e9834a076183fc6bcee466ef1f78a30886ef3e9cae8b0c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a33defb865e752a910e75ceb4ff6f9cd49737416fd678653884d63089c7b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a33defb865e752a910e75ceb4ff6f9cd49737416fd678653884d63089c7b84->enter($__internal_90a33defb865e752a910e75ceb4ff6f9cd49737416fd678653884d63089c7b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a05704a1cbe4759e9ae393e8426d3f2932abe1e66c242dc5a0373f77b055af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a05704a1cbe4759e9ae393e8426d3f2932abe1e66c242dc5a0373f77b055af1->enter($__internal_0a05704a1cbe4759e9ae393e8426d3f2932abe1e66c242dc5a0373f77b055af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a05704a1cbe4759e9ae393e8426d3f2932abe1e66c242dc5a0373f77b055af1->leave($__internal_0a05704a1cbe4759e9ae393e8426d3f2932abe1e66c242dc5a0373f77b055af1_prof);

        
        $__internal_90a33defb865e752a910e75ceb4ff6f9cd49737416fd678653884d63089c7b84->leave($__internal_90a33defb865e752a910e75ceb4ff6f9cd49737416fd678653884d63089c7b84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
