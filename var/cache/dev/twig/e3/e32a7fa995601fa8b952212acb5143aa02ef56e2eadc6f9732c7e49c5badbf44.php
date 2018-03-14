<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8ff9158bac084dbf545033f9dfefa1160141ac7bfd295cf4b10fe6a254ab39d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82173c177e314683e3cb927bd31aec32835b2fff406f767d06105022cbfe842b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82173c177e314683e3cb927bd31aec32835b2fff406f767d06105022cbfe842b->enter($__internal_82173c177e314683e3cb927bd31aec32835b2fff406f767d06105022cbfe842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_aa6ecb76d784f702599baac4b1cae74bf252ab008eff44d06b87c95170b0532e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6ecb76d784f702599baac4b1cae74bf252ab008eff44d06b87c95170b0532e->enter($__internal_aa6ecb76d784f702599baac4b1cae74bf252ab008eff44d06b87c95170b0532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82173c177e314683e3cb927bd31aec32835b2fff406f767d06105022cbfe842b->leave($__internal_82173c177e314683e3cb927bd31aec32835b2fff406f767d06105022cbfe842b_prof);

        
        $__internal_aa6ecb76d784f702599baac4b1cae74bf252ab008eff44d06b87c95170b0532e->leave($__internal_aa6ecb76d784f702599baac4b1cae74bf252ab008eff44d06b87c95170b0532e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0e21e7c43c9adb222e8e56e2a1564bd9e055fff0efe63abcc4e304cdf23a22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e21e7c43c9adb222e8e56e2a1564bd9e055fff0efe63abcc4e304cdf23a22e->enter($__internal_a0e21e7c43c9adb222e8e56e2a1564bd9e055fff0efe63abcc4e304cdf23a22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_877e54c445bcecc7f44cd116197d5cbbc0e976751539e3090cabca88bc9b7725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877e54c445bcecc7f44cd116197d5cbbc0e976751539e3090cabca88bc9b7725->enter($__internal_877e54c445bcecc7f44cd116197d5cbbc0e976751539e3090cabca88bc9b7725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_877e54c445bcecc7f44cd116197d5cbbc0e976751539e3090cabca88bc9b7725->leave($__internal_877e54c445bcecc7f44cd116197d5cbbc0e976751539e3090cabca88bc9b7725_prof);

        
        $__internal_a0e21e7c43c9adb222e8e56e2a1564bd9e055fff0efe63abcc4e304cdf23a22e->leave($__internal_a0e21e7c43c9adb222e8e56e2a1564bd9e055fff0efe63abcc4e304cdf23a22e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
