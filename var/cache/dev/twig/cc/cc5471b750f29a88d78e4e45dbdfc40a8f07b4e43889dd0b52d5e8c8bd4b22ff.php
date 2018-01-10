<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_97c5e204bd3ecc2c33d3c52a83b33c9da6608529a9d708eb46945eb4ca5217bb extends Twig_Template
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
        $__internal_3875b241cd2e436a116801c26251ad6d083fee4757fd5e2c942198bbaaa3dd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3875b241cd2e436a116801c26251ad6d083fee4757fd5e2c942198bbaaa3dd23->enter($__internal_3875b241cd2e436a116801c26251ad6d083fee4757fd5e2c942198bbaaa3dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_37a69a459ef7391a04af2e647c0e05570f915af24c7522d4c2a968bd4505fb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a69a459ef7391a04af2e647c0e05570f915af24c7522d4c2a968bd4505fb90->enter($__internal_37a69a459ef7391a04af2e647c0e05570f915af24c7522d4c2a968bd4505fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_3875b241cd2e436a116801c26251ad6d083fee4757fd5e2c942198bbaaa3dd23->leave($__internal_3875b241cd2e436a116801c26251ad6d083fee4757fd5e2c942198bbaaa3dd23_prof);

        
        $__internal_37a69a459ef7391a04af2e647c0e05570f915af24c7522d4c2a968bd4505fb90->leave($__internal_37a69a459ef7391a04af2e647c0e05570f915af24c7522d4c2a968bd4505fb90_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.html.twig");
    }
}