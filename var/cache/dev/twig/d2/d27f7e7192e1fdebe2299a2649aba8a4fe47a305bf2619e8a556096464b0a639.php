<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_255824eed4543eb3f0932baac2a456642abacc95cfab9e069d313157e23966a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11ee4e7e6024f52937f32f9a3187fb8e939b725ea4095ad187e11d7f822852be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ee4e7e6024f52937f32f9a3187fb8e939b725ea4095ad187e11d7f822852be->enter($__internal_11ee4e7e6024f52937f32f9a3187fb8e939b725ea4095ad187e11d7f822852be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_118c6f8b4f92543d9e2ae875c57eadf646066333cab9ea833df104427060f73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118c6f8b4f92543d9e2ae875c57eadf646066333cab9ea833df104427060f73f->enter($__internal_118c6f8b4f92543d9e2ae875c57eadf646066333cab9ea833df104427060f73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ee4e7e6024f52937f32f9a3187fb8e939b725ea4095ad187e11d7f822852be->leave($__internal_11ee4e7e6024f52937f32f9a3187fb8e939b725ea4095ad187e11d7f822852be_prof);

        
        $__internal_118c6f8b4f92543d9e2ae875c57eadf646066333cab9ea833df104427060f73f->leave($__internal_118c6f8b4f92543d9e2ae875c57eadf646066333cab9ea833df104427060f73f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abf0c7f8bb18a67d9030d42b85d46bdc316a961b2caf05c2bf39c044b7024784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf0c7f8bb18a67d9030d42b85d46bdc316a961b2caf05c2bf39c044b7024784->enter($__internal_abf0c7f8bb18a67d9030d42b85d46bdc316a961b2caf05c2bf39c044b7024784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6cbc3bfef2acfdd28bfceff71d9d648c4064277be3119cd145999370c28dbe17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbc3bfef2acfdd28bfceff71d9d648c4064277be3119cd145999370c28dbe17->enter($__internal_6cbc3bfef2acfdd28bfceff71d9d648c4064277be3119cd145999370c28dbe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6cbc3bfef2acfdd28bfceff71d9d648c4064277be3119cd145999370c28dbe17->leave($__internal_6cbc3bfef2acfdd28bfceff71d9d648c4064277be3119cd145999370c28dbe17_prof);

        
        $__internal_abf0c7f8bb18a67d9030d42b85d46bdc316a961b2caf05c2bf39c044b7024784->leave($__internal_abf0c7f8bb18a67d9030d42b85d46bdc316a961b2caf05c2bf39c044b7024784_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e82dd6da9233caa2e5d49e4df0ba0e814d650ee5debfdc710a36eb5f3f87c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e82dd6da9233caa2e5d49e4df0ba0e814d650ee5debfdc710a36eb5f3f87c2f->enter($__internal_7e82dd6da9233caa2e5d49e4df0ba0e814d650ee5debfdc710a36eb5f3f87c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb5ad8bb290205a8e3bf1d8a5ab39a99865ecd5f17d6f75baa680563ae5bcbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5ad8bb290205a8e3bf1d8a5ab39a99865ecd5f17d6f75baa680563ae5bcbea->enter($__internal_fb5ad8bb290205a8e3bf1d8a5ab39a99865ecd5f17d6f75baa680563ae5bcbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_fb5ad8bb290205a8e3bf1d8a5ab39a99865ecd5f17d6f75baa680563ae5bcbea->leave($__internal_fb5ad8bb290205a8e3bf1d8a5ab39a99865ecd5f17d6f75baa680563ae5bcbea_prof);

        
        $__internal_7e82dd6da9233caa2e5d49e4df0ba0e814d650ee5debfdc710a36eb5f3f87c2f->leave($__internal_7e82dd6da9233caa2e5d49e4df0ba0e814d650ee5debfdc710a36eb5f3f87c2f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b55cc9fcf3f34dd70ce039f4061467ba6978d142477eb3490347663d493e0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b55cc9fcf3f34dd70ce039f4061467ba6978d142477eb3490347663d493e0b7->enter($__internal_6b55cc9fcf3f34dd70ce039f4061467ba6978d142477eb3490347663d493e0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a5c95d58af7e661f98f7c78663e188273b98e464717b6f9f295904ebb9b58bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5c95d58af7e661f98f7c78663e188273b98e464717b6f9f295904ebb9b58bc->enter($__internal_8a5c95d58af7e661f98f7c78663e188273b98e464717b6f9f295904ebb9b58bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8a5c95d58af7e661f98f7c78663e188273b98e464717b6f9f295904ebb9b58bc->leave($__internal_8a5c95d58af7e661f98f7c78663e188273b98e464717b6f9f295904ebb9b58bc_prof);

        
        $__internal_6b55cc9fcf3f34dd70ce039f4061467ba6978d142477eb3490347663d493e0b7->leave($__internal_6b55cc9fcf3f34dd70ce039f4061467ba6978d142477eb3490347663d493e0b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
