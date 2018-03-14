<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c46bd2507d37328d49a9b2fbcf072f5fb0542ed13f76a79481a7db8ca7d9eb76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40de3e7566e036e75d52dd23eaf3ad194580c9f19da3cd98d922693936634489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40de3e7566e036e75d52dd23eaf3ad194580c9f19da3cd98d922693936634489->enter($__internal_40de3e7566e036e75d52dd23eaf3ad194580c9f19da3cd98d922693936634489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6cb916349d758f7ed590a9b28e633cbcb30736168d8f250a5ca7d80f333d359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb916349d758f7ed590a9b28e633cbcb30736168d8f250a5ca7d80f333d359c->enter($__internal_6cb916349d758f7ed590a9b28e633cbcb30736168d8f250a5ca7d80f333d359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40de3e7566e036e75d52dd23eaf3ad194580c9f19da3cd98d922693936634489->leave($__internal_40de3e7566e036e75d52dd23eaf3ad194580c9f19da3cd98d922693936634489_prof);

        
        $__internal_6cb916349d758f7ed590a9b28e633cbcb30736168d8f250a5ca7d80f333d359c->leave($__internal_6cb916349d758f7ed590a9b28e633cbcb30736168d8f250a5ca7d80f333d359c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad73fff4af61fd52fbb30a9a33037081e6751ee99f32517f77195f5af045d0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad73fff4af61fd52fbb30a9a33037081e6751ee99f32517f77195f5af045d0fe->enter($__internal_ad73fff4af61fd52fbb30a9a33037081e6751ee99f32517f77195f5af045d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2af912c831e7fada9d4ef6f57c7d8b70caa6e218b81cb3f6fa8b89fe0a28ee3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af912c831e7fada9d4ef6f57c7d8b70caa6e218b81cb3f6fa8b89fe0a28ee3b->enter($__internal_2af912c831e7fada9d4ef6f57c7d8b70caa6e218b81cb3f6fa8b89fe0a28ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2af912c831e7fada9d4ef6f57c7d8b70caa6e218b81cb3f6fa8b89fe0a28ee3b->leave($__internal_2af912c831e7fada9d4ef6f57c7d8b70caa6e218b81cb3f6fa8b89fe0a28ee3b_prof);

        
        $__internal_ad73fff4af61fd52fbb30a9a33037081e6751ee99f32517f77195f5af045d0fe->leave($__internal_ad73fff4af61fd52fbb30a9a33037081e6751ee99f32517f77195f5af045d0fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d95ee2da55f0083a8653b3010f6814e82cf88b97650a648788b02cf29232f0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95ee2da55f0083a8653b3010f6814e82cf88b97650a648788b02cf29232f0b7->enter($__internal_d95ee2da55f0083a8653b3010f6814e82cf88b97650a648788b02cf29232f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1272046f4fd16f6e5f80390f89db1cd9e119daa63352bfd6397cf29b1fed91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1272046f4fd16f6e5f80390f89db1cd9e119daa63352bfd6397cf29b1fed91f->enter($__internal_f1272046f4fd16f6e5f80390f89db1cd9e119daa63352bfd6397cf29b1fed91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1272046f4fd16f6e5f80390f89db1cd9e119daa63352bfd6397cf29b1fed91f->leave($__internal_f1272046f4fd16f6e5f80390f89db1cd9e119daa63352bfd6397cf29b1fed91f_prof);

        
        $__internal_d95ee2da55f0083a8653b3010f6814e82cf88b97650a648788b02cf29232f0b7->leave($__internal_d95ee2da55f0083a8653b3010f6814e82cf88b97650a648788b02cf29232f0b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a664c3067079fe1fe490b03dc0d1bdcc63e68b295ecce6261106b5e977074a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a664c3067079fe1fe490b03dc0d1bdcc63e68b295ecce6261106b5e977074a36->enter($__internal_a664c3067079fe1fe490b03dc0d1bdcc63e68b295ecce6261106b5e977074a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17db1a28b96f9e2c4459fd5791e7927660a6ad0282f6eae9e4802bcfe908523c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17db1a28b96f9e2c4459fd5791e7927660a6ad0282f6eae9e4802bcfe908523c->enter($__internal_17db1a28b96f9e2c4459fd5791e7927660a6ad0282f6eae9e4802bcfe908523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_17db1a28b96f9e2c4459fd5791e7927660a6ad0282f6eae9e4802bcfe908523c->leave($__internal_17db1a28b96f9e2c4459fd5791e7927660a6ad0282f6eae9e4802bcfe908523c_prof);

        
        $__internal_a664c3067079fe1fe490b03dc0d1bdcc63e68b295ecce6261106b5e977074a36->leave($__internal_a664c3067079fe1fe490b03dc0d1bdcc63e68b295ecce6261106b5e977074a36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
