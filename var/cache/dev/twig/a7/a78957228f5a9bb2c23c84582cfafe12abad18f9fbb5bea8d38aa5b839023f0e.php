<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b377d2a1408e9189259098b73507e007f8237d2b9183e8a493fab371f9ab0aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ecd34ee9dea0a132e8a66fc19c4d8b08a997856df2350c31b3bd87fe3cc277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ecd34ee9dea0a132e8a66fc19c4d8b08a997856df2350c31b3bd87fe3cc277->enter($__internal_c0ecd34ee9dea0a132e8a66fc19c4d8b08a997856df2350c31b3bd87fe3cc277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_48502ba08e72eb82e70e2f54b163395ef25a965e333428790c2c84e12972a5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48502ba08e72eb82e70e2f54b163395ef25a965e333428790c2c84e12972a5d9->enter($__internal_48502ba08e72eb82e70e2f54b163395ef25a965e333428790c2c84e12972a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ecd34ee9dea0a132e8a66fc19c4d8b08a997856df2350c31b3bd87fe3cc277->leave($__internal_c0ecd34ee9dea0a132e8a66fc19c4d8b08a997856df2350c31b3bd87fe3cc277_prof);

        
        $__internal_48502ba08e72eb82e70e2f54b163395ef25a965e333428790c2c84e12972a5d9->leave($__internal_48502ba08e72eb82e70e2f54b163395ef25a965e333428790c2c84e12972a5d9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_02fd18aa6839f21f447ec27bffb08154de4f69307a0c89fb0e58fcbc35c4ccf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fd18aa6839f21f447ec27bffb08154de4f69307a0c89fb0e58fcbc35c4ccf7->enter($__internal_02fd18aa6839f21f447ec27bffb08154de4f69307a0c89fb0e58fcbc35c4ccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c37129c53381d4f23718c605025391bd58ddf701577f26e7e47828b86602ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37129c53381d4f23718c605025391bd58ddf701577f26e7e47828b86602ecba->enter($__internal_c37129c53381d4f23718c605025391bd58ddf701577f26e7e47828b86602ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c37129c53381d4f23718c605025391bd58ddf701577f26e7e47828b86602ecba->leave($__internal_c37129c53381d4f23718c605025391bd58ddf701577f26e7e47828b86602ecba_prof);

        
        $__internal_02fd18aa6839f21f447ec27bffb08154de4f69307a0c89fb0e58fcbc35c4ccf7->leave($__internal_02fd18aa6839f21f447ec27bffb08154de4f69307a0c89fb0e58fcbc35c4ccf7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17878fdff332cc3b94724df9dbabb3decb461ec8f6ff2482282e35c10bf64d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17878fdff332cc3b94724df9dbabb3decb461ec8f6ff2482282e35c10bf64d48->enter($__internal_17878fdff332cc3b94724df9dbabb3decb461ec8f6ff2482282e35c10bf64d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd14a932612d086860bc68067e129b99e56e081852e521ed333beadd59c7cf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd14a932612d086860bc68067e129b99e56e081852e521ed333beadd59c7cf91->enter($__internal_dd14a932612d086860bc68067e129b99e56e081852e521ed333beadd59c7cf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dd14a932612d086860bc68067e129b99e56e081852e521ed333beadd59c7cf91->leave($__internal_dd14a932612d086860bc68067e129b99e56e081852e521ed333beadd59c7cf91_prof);

        
        $__internal_17878fdff332cc3b94724df9dbabb3decb461ec8f6ff2482282e35c10bf64d48->leave($__internal_17878fdff332cc3b94724df9dbabb3decb461ec8f6ff2482282e35c10bf64d48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
