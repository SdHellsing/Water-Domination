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
        $__internal_57ddcfc0f235a050890cbfeebac44df90bb16bbf1352da0b3cd89364f7c53bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ddcfc0f235a050890cbfeebac44df90bb16bbf1352da0b3cd89364f7c53bfc->enter($__internal_57ddcfc0f235a050890cbfeebac44df90bb16bbf1352da0b3cd89364f7c53bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ddcfc0f235a050890cbfeebac44df90bb16bbf1352da0b3cd89364f7c53bfc->leave($__internal_57ddcfc0f235a050890cbfeebac44df90bb16bbf1352da0b3cd89364f7c53bfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4efd4f151c3a7acb21cbaf2868e7fa8acdf3bd8125e2a1e2b7ddd245df5f9ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efd4f151c3a7acb21cbaf2868e7fa8acdf3bd8125e2a1e2b7ddd245df5f9ee7->enter($__internal_4efd4f151c3a7acb21cbaf2868e7fa8acdf3bd8125e2a1e2b7ddd245df5f9ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3> Hey brah, you succeeded! </h3>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_check_register");
        echo "\" method=\"POST\" >

        <input type=\"text\" name=\"username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"password\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? $this->getContext($context, "password")), "html", null, true);
        echo "\" /> <br>
        <button type=\"submit\" value=\"Submit\">Submit</button>

    </form>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ids"] ?? $this->getContext($context, "ids")));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 15
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_one_user", array("id" => $context["id"], "name" => "Pesho")), "html", null, true);
            echo "\">ID: ";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</a> </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        
        $__internal_4efd4f151c3a7acb21cbaf2868e7fa8acdf3bd8125e2a1e2b7ddd245df5f9ee7->leave($__internal_4efd4f151c3a7acb21cbaf2868e7fa8acdf3bd8125e2a1e2b7ddd245df5f9ee7_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87ecbd4f49479361df9598ee96e1a125fe25ae894156d4b48c033c8c6b7ab6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ecbd4f49479361df9598ee96e1a125fe25ae894156d4b48c033c8c6b7ab6a3->enter($__internal_87ecbd4f49479361df9598ee96e1a125fe25ae894156d4b48c033c8c6b7ab6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "
";
        
        $__internal_87ecbd4f49479361df9598ee96e1a125fe25ae894156d4b48c033c8c6b7ab6a3->leave($__internal_87ecbd4f49479361df9598ee96e1a125fe25ae894156d4b48c033c8c6b7ab6a3_prof);

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
        return array (  91 => 21,  85 => 20,  77 => 17,  66 => 15,  62 => 14,  54 => 9,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
<h3> Hey brah, you succeeded! </h3>

    <form action=\"{{ path('user_check_register')}}\" method=\"POST\" >

        <input type=\"text\" name=\"username\" value=\"{{ username }}\" /> <br>
        <input type=\"text\" name=\"password\" value=\"{{ password }}\" /> <br>
        <button type=\"submit\" value=\"Submit\">Submit</button>

    </form>

    {% for id in ids %}
        <p><a href=\"{{ path(\"get_one_user\", {id: id, name: 'Pesho'}) }}\">ID: {{ id }}</a> </p>
    {% endfor %}

{% endblock %}

{% block stylesheets %}

{% endblock %}

", "default/registration.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\app\\Resources\\views\\default\\registration.html.twig");
    }
}
