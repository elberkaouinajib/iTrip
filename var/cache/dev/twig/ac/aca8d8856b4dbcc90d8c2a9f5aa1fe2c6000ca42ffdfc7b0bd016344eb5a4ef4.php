<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_e27327f304bf94a1838fda6c054c1b83bd1b262bc0ee69033bf41f7aa59ecf29 extends Twig_Template
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
        $__internal_0631e3dfd3ab7ca578fce27b7add6b8ad20cda62ce60a398422a8c967c356d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0631e3dfd3ab7ca578fce27b7add6b8ad20cda62ce60a398422a8c967c356d12->enter($__internal_0631e3dfd3ab7ca578fce27b7add6b8ad20cda62ce60a398422a8c967c356d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_eada6b8e3fe1081e8203b6cadb8bd45047ed20bc0b01ca7c2d0c2ead2412c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eada6b8e3fe1081e8203b6cadb8bd45047ed20bc0b01ca7c2d0c2ead2412c15b->enter($__internal_eada6b8e3fe1081e8203b6cadb8bd45047ed20bc0b01ca7c2d0c2ead2412c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_0631e3dfd3ab7ca578fce27b7add6b8ad20cda62ce60a398422a8c967c356d12->leave($__internal_0631e3dfd3ab7ca578fce27b7add6b8ad20cda62ce60a398422a8c967c356d12_prof);

        
        $__internal_eada6b8e3fe1081e8203b6cadb8bd45047ed20bc0b01ca7c2d0c2ead2412c15b->leave($__internal_eada6b8e3fe1081e8203b6cadb8bd45047ed20bc0b01ca7c2d0c2ead2412c15b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
