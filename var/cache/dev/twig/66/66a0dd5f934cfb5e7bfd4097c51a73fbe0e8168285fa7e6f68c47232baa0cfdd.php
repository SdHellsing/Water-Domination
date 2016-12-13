<?php

/* default/registration.html.twig */
class __TwigTemplate_ecb3b7dc7a05ccf4c8a2a6413e2ed68ab783cc50ee4dd09631d9b491f2b9fbda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/registration.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c8d99beb4005cc5e9476f2ec95c9157d09664392a9ed8a1a5403fadf014f1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8d99beb4005cc5e9476f2ec95c9157d09664392a9ed8a1a5403fadf014f1a8->enter($__internal_9c8d99beb4005cc5e9476f2ec95c9157d09664392a9ed8a1a5403fadf014f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8d99beb4005cc5e9476f2ec95c9157d09664392a9ed8a1a5403fadf014f1a8->leave($__internal_9c8d99beb4005cc5e9476f2ec95c9157d09664392a9ed8a1a5403fadf014f1a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f46db62f91a739112c8b81255ac17f67f7be6b8367b94cc4f7835dc4d741323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f46db62f91a739112c8b81255ac17f67f7be6b8367b94cc4f7835dc4d741323->enter($__internal_4f46db62f91a739112c8b81255ac17f67f7be6b8367b94cc4f7835dc4d741323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3> Let's register </h3>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div>
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
    </div>
    <div>
        <input type=\"submit\" value=\"Register\" />
    </div>
    ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_4f46db62f91a739112c8b81255ac17f67f7be6b8367b94cc4f7835dc4d741323->leave($__internal_4f46db62f91a739112c8b81255ac17f67f7be6b8367b94cc4f7835dc4d741323_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4488cc3c6561827f8da7aa68f37bae0238f8c5695c3eae87ed28e60f7bdb581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4488cc3c6561827f8da7aa68f37bae0238f8c5695c3eae87ed28e60f7bdb581->enter($__internal_a4488cc3c6561827f8da7aa68f37bae0238f8c5695c3eae87ed28e60f7bdb581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "
";
        
        $__internal_a4488cc3c6561827f8da7aa68f37bae0238f8c5695c3eae87ed28e60f7bdb581->leave($__internal_a4488cc3c6561827f8da7aa68f37bae0238f8c5695c3eae87ed28e60f7bdb581_prof);

    }

    public function getTemplateName()
    {
        return "default/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  79 => 22,  68 => 17,  60 => 12,  54 => 9,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h3> Let's register </h3>

    {{ form_start(form) }}
    <div>
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}
    </div>
    <div>
        {{ form_widget(form.password) }}
    </div>
    <div>
        <input type=\"submit\" value=\"Register\" />
    </div>
    {{ form_end(form) }}


{% endblock %}

{% block stylesheets %}

{% endblock %}

", "default/registration.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\app\\Resources\\views\\default\\registration.html.twig");
    }
}
