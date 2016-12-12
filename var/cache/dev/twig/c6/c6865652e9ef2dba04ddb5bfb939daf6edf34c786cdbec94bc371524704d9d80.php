<?php

/* base.html.twig */
class __TwigTemplate_c297efa9f6e9efd1dddc96fd01895af773d3e28ec16b6ab9254573d9b6b579c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f3ce2960c69ae7ba481411ad5f0230f264d6dea743d7594b8662437e67be1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3ce2960c69ae7ba481411ad5f0230f264d6dea743d7594b8662437e67be1f3->enter($__internal_3f3ce2960c69ae7ba481411ad5f0230f264d6dea743d7594b8662437e67be1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3f3ce2960c69ae7ba481411ad5f0230f264d6dea743d7594b8662437e67be1f3->leave($__internal_3f3ce2960c69ae7ba481411ad5f0230f264d6dea743d7594b8662437e67be1f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f92b682116db418ac34e0bc893d828397ce2a58f0bfa69952ddfe32320425b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f92b682116db418ac34e0bc893d828397ce2a58f0bfa69952ddfe32320425b5->enter($__internal_0f92b682116db418ac34e0bc893d828397ce2a58f0bfa69952ddfe32320425b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f92b682116db418ac34e0bc893d828397ce2a58f0bfa69952ddfe32320425b5->leave($__internal_0f92b682116db418ac34e0bc893d828397ce2a58f0bfa69952ddfe32320425b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00738a63c1ee6a7b938f997357e3df6a74fd0a750f3db16ed94f83dc6f488f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00738a63c1ee6a7b938f997357e3df6a74fd0a750f3db16ed94f83dc6f488f25->enter($__internal_00738a63c1ee6a7b938f997357e3df6a74fd0a750f3db16ed94f83dc6f488f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00738a63c1ee6a7b938f997357e3df6a74fd0a750f3db16ed94f83dc6f488f25->leave($__internal_00738a63c1ee6a7b938f997357e3df6a74fd0a750f3db16ed94f83dc6f488f25_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5203d007b8c07c256c35a9e27bbfa41647bea6039a86855d6e138c1d46a5ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5203d007b8c07c256c35a9e27bbfa41647bea6039a86855d6e138c1d46a5ae8->enter($__internal_a5203d007b8c07c256c35a9e27bbfa41647bea6039a86855d6e138c1d46a5ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5203d007b8c07c256c35a9e27bbfa41647bea6039a86855d6e138c1d46a5ae8->leave($__internal_a5203d007b8c07c256c35a9e27bbfa41647bea6039a86855d6e138c1d46a5ae8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f78ed5896e3302f6ef80bd51f0ef88b7cae9c056df1d6dcb8c728dd196beab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78ed5896e3302f6ef80bd51f0ef88b7cae9c056df1d6dcb8c728dd196beab31->enter($__internal_f78ed5896e3302f6ef80bd51f0ef88b7cae9c056df1d6dcb8c728dd196beab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f78ed5896e3302f6ef80bd51f0ef88b7cae9c056df1d6dcb8c728dd196beab31->leave($__internal_f78ed5896e3302f6ef80bd51f0ef88b7cae9c056df1d6dcb8c728dd196beab31_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\app\\Resources\\views\\base.html.twig");
    }
}
