<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_705c9c008ef4989ae782a04a7c731d79340f1f71cfab15f85f661898e1db73a7 extends Twig_Template
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
        $__internal_09a0b8c9428afdbfa6c8c91948163d044d071acc47688f01e985d49a0b463239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0b8c9428afdbfa6c8c91948163d044d071acc47688f01e985d49a0b463239->enter($__internal_09a0b8c9428afdbfa6c8c91948163d044d071acc47688f01e985d49a0b463239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a0b8c9428afdbfa6c8c91948163d044d071acc47688f01e985d49a0b463239->leave($__internal_09a0b8c9428afdbfa6c8c91948163d044d071acc47688f01e985d49a0b463239_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1213c5584c2dc2ec2aa53b9df0d5639bd2a0e97089963078946075bd6087b057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1213c5584c2dc2ec2aa53b9df0d5639bd2a0e97089963078946075bd6087b057->enter($__internal_1213c5584c2dc2ec2aa53b9df0d5639bd2a0e97089963078946075bd6087b057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1213c5584c2dc2ec2aa53b9df0d5639bd2a0e97089963078946075bd6087b057->leave($__internal_1213c5584c2dc2ec2aa53b9df0d5639bd2a0e97089963078946075bd6087b057_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55def9ebabb4f50429c8d98e933bc514cc82faca2bd0000806c4b5cb4169ac60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55def9ebabb4f50429c8d98e933bc514cc82faca2bd0000806c4b5cb4169ac60->enter($__internal_55def9ebabb4f50429c8d98e933bc514cc82faca2bd0000806c4b5cb4169ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55def9ebabb4f50429c8d98e933bc514cc82faca2bd0000806c4b5cb4169ac60->leave($__internal_55def9ebabb4f50429c8d98e933bc514cc82faca2bd0000806c4b5cb4169ac60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a3e0533897e760ff41d3485861868f071048a924bb6cd5db77f035bb94344f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a3e0533897e760ff41d3485861868f071048a924bb6cd5db77f035bb94344f->enter($__internal_d7a3e0533897e760ff41d3485861868f071048a924bb6cd5db77f035bb94344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7a3e0533897e760ff41d3485861868f071048a924bb6cd5db77f035bb94344f->leave($__internal_d7a3e0533897e760ff41d3485861868f071048a924bb6cd5db77f035bb94344f_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
