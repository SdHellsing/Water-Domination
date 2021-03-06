<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5c8c2b35c46a030488cc76eed9c20589ad9df9dc8a2ca8f74b4d91721b2e054 extends Twig_Template
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
        $__internal_0e3f60a686065b9aef713dd02c9b9ee7544786c30456ab74304d2b213228f466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3f60a686065b9aef713dd02c9b9ee7544786c30456ab74304d2b213228f466->enter($__internal_0e3f60a686065b9aef713dd02c9b9ee7544786c30456ab74304d2b213228f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3f60a686065b9aef713dd02c9b9ee7544786c30456ab74304d2b213228f466->leave($__internal_0e3f60a686065b9aef713dd02c9b9ee7544786c30456ab74304d2b213228f466_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37b5cca504854b678bf2324f11df049e712ab57cbe9a15e95bedd9b4fd7053cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b5cca504854b678bf2324f11df049e712ab57cbe9a15e95bedd9b4fd7053cc->enter($__internal_37b5cca504854b678bf2324f11df049e712ab57cbe9a15e95bedd9b4fd7053cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37b5cca504854b678bf2324f11df049e712ab57cbe9a15e95bedd9b4fd7053cc->leave($__internal_37b5cca504854b678bf2324f11df049e712ab57cbe9a15e95bedd9b4fd7053cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fb5cf2a5e114de7963e5303c4f09f6149f16acab81d9eb9bff8442ba3f68528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb5cf2a5e114de7963e5303c4f09f6149f16acab81d9eb9bff8442ba3f68528->enter($__internal_3fb5cf2a5e114de7963e5303c4f09f6149f16acab81d9eb9bff8442ba3f68528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3fb5cf2a5e114de7963e5303c4f09f6149f16acab81d9eb9bff8442ba3f68528->leave($__internal_3fb5cf2a5e114de7963e5303c4f09f6149f16acab81d9eb9bff8442ba3f68528_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d3abf3dd66de0bcefcf2ef41d53ba8a673a561d9f3ca3b741e47ab841b8211b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3abf3dd66de0bcefcf2ef41d53ba8a673a561d9f3ca3b741e47ab841b8211b->enter($__internal_5d3abf3dd66de0bcefcf2ef41d53ba8a673a561d9f3ca3b741e47ab841b8211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d3abf3dd66de0bcefcf2ef41d53ba8a673a561d9f3ca3b741e47ab841b8211b->leave($__internal_5d3abf3dd66de0bcefcf2ef41d53ba8a673a561d9f3ca3b741e47ab841b8211b_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
