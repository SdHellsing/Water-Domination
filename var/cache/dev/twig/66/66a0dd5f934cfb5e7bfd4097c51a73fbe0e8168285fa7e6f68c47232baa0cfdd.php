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
        $__internal_0c1d581a03d401c33e8d574e54a6bfaecc6f0bc26bc353f5baf669242e85aef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1d581a03d401c33e8d574e54a6bfaecc6f0bc26bc353f5baf669242e85aef5->enter($__internal_0c1d581a03d401c33e8d574e54a6bfaecc6f0bc26bc353f5baf669242e85aef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1d581a03d401c33e8d574e54a6bfaecc6f0bc26bc353f5baf669242e85aef5->leave($__internal_0c1d581a03d401c33e8d574e54a6bfaecc6f0bc26bc353f5baf669242e85aef5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be69d14734d6e5a3b6a871c66081323dc8ebcd1d8fa712baed306d6f9b6fe3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be69d14734d6e5a3b6a871c66081323dc8ebcd1d8fa712baed306d6f9b6fe3a6->enter($__internal_be69d14734d6e5a3b6a871c66081323dc8ebcd1d8fa712baed306d6f9b6fe3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_check_register");
        echo "\" method=\"POST\" >
        <input type=\"text\" name=\"username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"age\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["age"] ?? $this->getContext($context, "age")), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"email\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"password\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? $this->getContext($context, "password")), "html", null, true);
        echo "\" /> <br>
        <button type=\"submit\" value=\"Submit\">Submit</button>
    </form>

";
        
        $__internal_be69d14734d6e5a3b6a871c66081323dc8ebcd1d8fa712baed306d6f9b6fe3a6->leave($__internal_be69d14734d6e5a3b6a871c66081323dc8ebcd1d8fa712baed306d6f9b6fe3a6_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac0809889070a9e2205a731c6e763deca67b9f6785189154a70f43eb4d55a786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0809889070a9e2205a731c6e763deca67b9f6785189154a70f43eb4d55a786->enter($__internal_ac0809889070a9e2205a731c6e763deca67b9f6785189154a70f43eb4d55a786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
";
        
        $__internal_ac0809889070a9e2205a731c6e763deca67b9f6785189154a70f43eb4d55a786->leave($__internal_ac0809889070a9e2205a731c6e763deca67b9f6785189154a70f43eb4d55a786_prof);

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
        return array (  78 => 16,  72 => 15,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

    <form action=\"{{ path('user_check_register')}}\" method=\"POST\" >
        <input type=\"text\" name=\"username\" value=\"{{ username }}\" /> <br>
        <input type=\"text\" name=\"age\" value=\"{{ age }}\" /> <br>
        <input type=\"text\" name=\"email\" value=\"{{ email }}\" /> <br>
        <input type=\"text\" name=\"password\" value=\"{{ password }}\" /> <br>
        <button type=\"submit\" value=\"Submit\">Submit</button>
    </form>

{% endblock %}

{% block stylesheets %}

{% endblock %}

", "default/registration.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\app\\Resources\\views\\default\\registration.html.twig");
    }
}
