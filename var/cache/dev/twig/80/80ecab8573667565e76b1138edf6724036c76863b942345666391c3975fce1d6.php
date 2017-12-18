<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e0bc94dfcdce8cf73564270014b4178b328eceb5ae2f4f2d27672b2bf080ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e0bc94dfcdce8cf73564270014b4178b328eceb5ae2f4f2d27672b2bf080ec->enter($__internal_96e0bc94dfcdce8cf73564270014b4178b328eceb5ae2f4f2d27672b2bf080ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_c4b33c93330ec1f1c38c428fa24b0d72b3ac0c0fe3a90d03f9c5ebfdc26023e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b33c93330ec1f1c38c428fa24b0d72b3ac0c0fe3a90d03f9c5ebfdc26023e5->enter($__internal_c4b33c93330ec1f1c38c428fa24b0d72b3ac0c0fe3a90d03f9c5ebfdc26023e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_96e0bc94dfcdce8cf73564270014b4178b328eceb5ae2f4f2d27672b2bf080ec->leave($__internal_96e0bc94dfcdce8cf73564270014b4178b328eceb5ae2f4f2d27672b2bf080ec_prof);

        
        $__internal_c4b33c93330ec1f1c38c428fa24b0d72b3ac0c0fe3a90d03f9c5ebfdc26023e5->leave($__internal_c4b33c93330ec1f1c38c428fa24b0d72b3ac0c0fe3a90d03f9c5ebfdc26023e5_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_73281ec56a0e6ab72c4f55e32e74e9132b585c38a199b888a0dd0c64e40c097b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73281ec56a0e6ab72c4f55e32e74e9132b585c38a199b888a0dd0c64e40c097b->enter($__internal_73281ec56a0e6ab72c4f55e32e74e9132b585c38a199b888a0dd0c64e40c097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5619d4caee215be28158f4a1a7d5c894901c0ec4eec66442538b7611232c0583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5619d4caee215be28158f4a1a7d5c894901c0ec4eec66442538b7611232c0583->enter($__internal_5619d4caee215be28158f4a1a7d5c894901c0ec4eec66442538b7611232c0583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_5619d4caee215be28158f4a1a7d5c894901c0ec4eec66442538b7611232c0583->leave($__internal_5619d4caee215be28158f4a1a7d5c894901c0ec4eec66442538b7611232c0583_prof);

        
        $__internal_73281ec56a0e6ab72c4f55e32e74e9132b585c38a199b888a0dd0c64e40c097b->leave($__internal_73281ec56a0e6ab72c4f55e32e74e9132b585c38a199b888a0dd0c64e40c097b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ff09bb6f65d8be38c9142ab00bfc2a36dfbf247aab13d425b0ef6ba3a412f90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff09bb6f65d8be38c9142ab00bfc2a36dfbf247aab13d425b0ef6ba3a412f90d->enter($__internal_ff09bb6f65d8be38c9142ab00bfc2a36dfbf247aab13d425b0ef6ba3a412f90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_db207d1f32b308db919f7d222390ada69712929b389f2df849062537dbed7c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db207d1f32b308db919f7d222390ada69712929b389f2df849062537dbed7c46->enter($__internal_db207d1f32b308db919f7d222390ada69712929b389f2df849062537dbed7c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_db207d1f32b308db919f7d222390ada69712929b389f2df849062537dbed7c46->leave($__internal_db207d1f32b308db919f7d222390ada69712929b389f2df849062537dbed7c46_prof);

        
        $__internal_ff09bb6f65d8be38c9142ab00bfc2a36dfbf247aab13d425b0ef6ba3a412f90d->leave($__internal_ff09bb6f65d8be38c9142ab00bfc2a36dfbf247aab13d425b0ef6ba3a412f90d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_a334caef2b127720dd9c049ac9b04b3c9270f4d2458fabdef03757f414231c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a334caef2b127720dd9c049ac9b04b3c9270f4d2458fabdef03757f414231c8c->enter($__internal_a334caef2b127720dd9c049ac9b04b3c9270f4d2458fabdef03757f414231c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0fb65253f98c7484de9719249208b27064bd4fe2daf1106698f483bd880148f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb65253f98c7484de9719249208b27064bd4fe2daf1106698f483bd880148f4->enter($__internal_0fb65253f98c7484de9719249208b27064bd4fe2daf1106698f483bd880148f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0fb65253f98c7484de9719249208b27064bd4fe2daf1106698f483bd880148f4->leave($__internal_0fb65253f98c7484de9719249208b27064bd4fe2daf1106698f483bd880148f4_prof);

        
        $__internal_a334caef2b127720dd9c049ac9b04b3c9270f4d2458fabdef03757f414231c8c->leave($__internal_a334caef2b127720dd9c049ac9b04b3c9270f4d2458fabdef03757f414231c8c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5c0087eb58899055d12d3370ce61f2dd69f7b6f83e69faae1894d3b5379db2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0087eb58899055d12d3370ce61f2dd69f7b6f83e69faae1894d3b5379db2f2->enter($__internal_5c0087eb58899055d12d3370ce61f2dd69f7b6f83e69faae1894d3b5379db2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_653fac8e43cc90972f02e5cf4bc23f2efccb7a635559fb120f78f18070609d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653fac8e43cc90972f02e5cf4bc23f2efccb7a635559fb120f78f18070609d3a->enter($__internal_653fac8e43cc90972f02e5cf4bc23f2efccb7a635559fb120f78f18070609d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_653fac8e43cc90972f02e5cf4bc23f2efccb7a635559fb120f78f18070609d3a->leave($__internal_653fac8e43cc90972f02e5cf4bc23f2efccb7a635559fb120f78f18070609d3a_prof);

        
        $__internal_5c0087eb58899055d12d3370ce61f2dd69f7b6f83e69faae1894d3b5379db2f2->leave($__internal_5c0087eb58899055d12d3370ce61f2dd69f7b6f83e69faae1894d3b5379db2f2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
