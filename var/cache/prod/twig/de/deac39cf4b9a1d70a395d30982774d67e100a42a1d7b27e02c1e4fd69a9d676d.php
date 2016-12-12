<?php

/* default/registration.html.twig */
class __TwigTemplate_8471add3810a3d18342f3035e2785843d5ab0ee51423e44059d43f7e8d100b98 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["user_registration_post"] ?? null), "html", null, true);
        echo "\">
        <input type=\"text\" name=\"name\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"age\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["age"] ?? null), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"email\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" /> <br>
        <input type=\"text\" name=\"password\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\" /> <br>
        <button type=\"submit\" value=\"Submit\">Submit</button>
    </form>

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "
";
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
        return array (  63 => 16,  60 => 15,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/registration.html.twig", "D:\\xampp\\htdocs\\Water-Domination\\app\\Resources\\views\\default\\registration.html.twig");
    }
}
