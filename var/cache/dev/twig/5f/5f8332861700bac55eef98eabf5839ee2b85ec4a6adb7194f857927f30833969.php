<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_653b3a902c2757f5e6004712ee426b53f84164542345fe1282b611824d56680c extends Twig_Template
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
        $__internal_36fde955442a6538266f9004f55a4f2c768a2a626e7cc76fca2c78ac6acf6dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fde955442a6538266f9004f55a4f2c768a2a626e7cc76fca2c78ac6acf6dee->enter($__internal_36fde955442a6538266f9004f55a4f2c768a2a626e7cc76fca2c78ac6acf6dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b05a8422bac177acc54f69737e3333ffa102282344a0fb81d4a840a49b294c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05a8422bac177acc54f69737e3333ffa102282344a0fb81d4a840a49b294c2b->enter($__internal_b05a8422bac177acc54f69737e3333ffa102282344a0fb81d4a840a49b294c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_36fde955442a6538266f9004f55a4f2c768a2a626e7cc76fca2c78ac6acf6dee->leave($__internal_36fde955442a6538266f9004f55a4f2c768a2a626e7cc76fca2c78ac6acf6dee_prof);

        
        $__internal_b05a8422bac177acc54f69737e3333ffa102282344a0fb81d4a840a49b294c2b->leave($__internal_b05a8422bac177acc54f69737e3333ffa102282344a0fb81d4a840a49b294c2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}