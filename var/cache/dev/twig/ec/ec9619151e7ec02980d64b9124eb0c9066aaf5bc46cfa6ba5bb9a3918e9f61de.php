<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8766bd209ce082ce0001cdb70a0ea9e9f44026c1ba3702bae207b933c55c08ac extends Twig_Template
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
        $__internal_f7612c1a22862e93c4ed868f65bac46e850bbe183a28d7e4b50f4adff0a9cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7612c1a22862e93c4ed868f65bac46e850bbe183a28d7e4b50f4adff0a9cd4e->enter($__internal_f7612c1a22862e93c4ed868f65bac46e850bbe183a28d7e4b50f4adff0a9cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7d3bc37eace546772e7ca6196ca4e6eaf3a0f8bf26b3843b74566b723afcf8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3bc37eace546772e7ca6196ca4e6eaf3a0f8bf26b3843b74566b723afcf8e1->enter($__internal_7d3bc37eace546772e7ca6196ca4e6eaf3a0f8bf26b3843b74566b723afcf8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f7612c1a22862e93c4ed868f65bac46e850bbe183a28d7e4b50f4adff0a9cd4e->leave($__internal_f7612c1a22862e93c4ed868f65bac46e850bbe183a28d7e4b50f4adff0a9cd4e_prof);

        
        $__internal_7d3bc37eace546772e7ca6196ca4e6eaf3a0f8bf26b3843b74566b723afcf8e1->leave($__internal_7d3bc37eace546772e7ca6196ca4e6eaf3a0f8bf26b3843b74566b723afcf8e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Najib\\Desktop\\TECH WEB\\CarRent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
