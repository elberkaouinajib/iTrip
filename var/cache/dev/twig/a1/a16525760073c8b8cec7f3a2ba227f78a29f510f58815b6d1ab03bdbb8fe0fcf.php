<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_259104cec7ee490fa9bcc7267b1398c96846b354f0d7d9e9ec4987eb414808e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d6c5e7572df947cdd7773c5bec36d921dde0948f2707435f98dd0323fb552268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c5e7572df947cdd7773c5bec36d921dde0948f2707435f98dd0323fb552268->enter($__internal_d6c5e7572df947cdd7773c5bec36d921dde0948f2707435f98dd0323fb552268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_72c990ae63b5cf18943c023a281e0922d9b02437f77408282b4ca7cca25102fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c990ae63b5cf18943c023a281e0922d9b02437f77408282b4ca7cca25102fc->enter($__internal_72c990ae63b5cf18943c023a281e0922d9b02437f77408282b4ca7cca25102fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c5e7572df947cdd7773c5bec36d921dde0948f2707435f98dd0323fb552268->leave($__internal_d6c5e7572df947cdd7773c5bec36d921dde0948f2707435f98dd0323fb552268_prof);

        
        $__internal_72c990ae63b5cf18943c023a281e0922d9b02437f77408282b4ca7cca25102fc->leave($__internal_72c990ae63b5cf18943c023a281e0922d9b02437f77408282b4ca7cca25102fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_554b4d027f1eb46e90e5432427f4f426949d17b9fe3d6df3c5bf427364d17244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554b4d027f1eb46e90e5432427f4f426949d17b9fe3d6df3c5bf427364d17244->enter($__internal_554b4d027f1eb46e90e5432427f4f426949d17b9fe3d6df3c5bf427364d17244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a038543cdbb3e93821a87193b952a7d3192113e7747e845540b04fbaaa9c8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a038543cdbb3e93821a87193b952a7d3192113e7747e845540b04fbaaa9c8ff->enter($__internal_6a038543cdbb3e93821a87193b952a7d3192113e7747e845540b04fbaaa9c8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6a038543cdbb3e93821a87193b952a7d3192113e7747e845540b04fbaaa9c8ff->leave($__internal_6a038543cdbb3e93821a87193b952a7d3192113e7747e845540b04fbaaa9c8ff_prof);

        
        $__internal_554b4d027f1eb46e90e5432427f4f426949d17b9fe3d6df3c5bf427364d17244->leave($__internal_554b4d027f1eb46e90e5432427f4f426949d17b9fe3d6df3c5bf427364d17244_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_241f5e2eda4365026af3a3c06c1bec52fe1796cee9f1d95052ae7dc98b6f3b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241f5e2eda4365026af3a3c06c1bec52fe1796cee9f1d95052ae7dc98b6f3b4d->enter($__internal_241f5e2eda4365026af3a3c06c1bec52fe1796cee9f1d95052ae7dc98b6f3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0b773cf2a0f45589b3a86bc21a354183e4a997b027e4a2b96ac68c13110f33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b773cf2a0f45589b3a86bc21a354183e4a997b027e4a2b96ac68c13110f33f->enter($__internal_f0b773cf2a0f45589b3a86bc21a354183e4a997b027e4a2b96ac68c13110f33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f0b773cf2a0f45589b3a86bc21a354183e4a997b027e4a2b96ac68c13110f33f->leave($__internal_f0b773cf2a0f45589b3a86bc21a354183e4a997b027e4a2b96ac68c13110f33f_prof);

        
        $__internal_241f5e2eda4365026af3a3c06c1bec52fe1796cee9f1d95052ae7dc98b6f3b4d->leave($__internal_241f5e2eda4365026af3a3c06c1bec52fe1796cee9f1d95052ae7dc98b6f3b4d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae2044ef3de3041929028c778670fb52e6b03a44063fbdc6ae4813995602e036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2044ef3de3041929028c778670fb52e6b03a44063fbdc6ae4813995602e036->enter($__internal_ae2044ef3de3041929028c778670fb52e6b03a44063fbdc6ae4813995602e036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4175dbc283d31681d84f411284b3cac60ab310f85816f2e68261b79175651e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4175dbc283d31681d84f411284b3cac60ab310f85816f2e68261b79175651e7->enter($__internal_f4175dbc283d31681d84f411284b3cac60ab310f85816f2e68261b79175651e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f4175dbc283d31681d84f411284b3cac60ab310f85816f2e68261b79175651e7->leave($__internal_f4175dbc283d31681d84f411284b3cac60ab310f85816f2e68261b79175651e7_prof);

        
        $__internal_ae2044ef3de3041929028c778670fb52e6b03a44063fbdc6ae4813995602e036->leave($__internal_ae2044ef3de3041929028c778670fb52e6b03a44063fbdc6ae4813995602e036_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
