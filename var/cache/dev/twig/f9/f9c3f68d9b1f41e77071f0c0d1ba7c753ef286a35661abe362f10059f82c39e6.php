<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3a0de6ce044f7d4027caadcc91425086d267734a71b9b0521f3e0f2085bc005b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c102e5b165ffcff7bb1547631184e3295df9182dd1e86f8594d08d97af49ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c102e5b165ffcff7bb1547631184e3295df9182dd1e86f8594d08d97af49ee4->enter($__internal_0c102e5b165ffcff7bb1547631184e3295df9182dd1e86f8594d08d97af49ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_bae293402a0c1e84fecf97f40f43bfbe5034d76580dfead6556af1142a8073e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae293402a0c1e84fecf97f40f43bfbe5034d76580dfead6556af1142a8073e7->enter($__internal_bae293402a0c1e84fecf97f40f43bfbe5034d76580dfead6556af1142a8073e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c102e5b165ffcff7bb1547631184e3295df9182dd1e86f8594d08d97af49ee4->leave($__internal_0c102e5b165ffcff7bb1547631184e3295df9182dd1e86f8594d08d97af49ee4_prof);

        
        $__internal_bae293402a0c1e84fecf97f40f43bfbe5034d76580dfead6556af1142a8073e7->leave($__internal_bae293402a0c1e84fecf97f40f43bfbe5034d76580dfead6556af1142a8073e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4718eed6affee3029b449ee3b354c7b21182ea88cc013179cdf0d34f17125d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4718eed6affee3029b449ee3b354c7b21182ea88cc013179cdf0d34f17125d4c->enter($__internal_4718eed6affee3029b449ee3b354c7b21182ea88cc013179cdf0d34f17125d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a760f432aca3f55e51f5ec763180afba5ba02af11c1a25ecdb369943f7259fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a760f432aca3f55e51f5ec763180afba5ba02af11c1a25ecdb369943f7259fb6->enter($__internal_a760f432aca3f55e51f5ec763180afba5ba02af11c1a25ecdb369943f7259fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a760f432aca3f55e51f5ec763180afba5ba02af11c1a25ecdb369943f7259fb6->leave($__internal_a760f432aca3f55e51f5ec763180afba5ba02af11c1a25ecdb369943f7259fb6_prof);

        
        $__internal_4718eed6affee3029b449ee3b354c7b21182ea88cc013179cdf0d34f17125d4c->leave($__internal_4718eed6affee3029b449ee3b354c7b21182ea88cc013179cdf0d34f17125d4c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95baf63fc4175bff80616bcfe30133d0257bd8b24d6f35c05fc5e1e812330bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95baf63fc4175bff80616bcfe30133d0257bd8b24d6f35c05fc5e1e812330bc4->enter($__internal_95baf63fc4175bff80616bcfe30133d0257bd8b24d6f35c05fc5e1e812330bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f5513557da8f08d349733f9ff7ab2ca5bc6f993106b06c17ed0dae882bf42c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5513557da8f08d349733f9ff7ab2ca5bc6f993106b06c17ed0dae882bf42c3->enter($__internal_7f5513557da8f08d349733f9ff7ab2ca5bc6f993106b06c17ed0dae882bf42c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_7f5513557da8f08d349733f9ff7ab2ca5bc6f993106b06c17ed0dae882bf42c3->leave($__internal_7f5513557da8f08d349733f9ff7ab2ca5bc6f993106b06c17ed0dae882bf42c3_prof);

        
        $__internal_95baf63fc4175bff80616bcfe30133d0257bd8b24d6f35c05fc5e1e812330bc4->leave($__internal_95baf63fc4175bff80616bcfe30133d0257bd8b24d6f35c05fc5e1e812330bc4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
