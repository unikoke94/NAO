<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_20eaffacbdf1e4e82884819db7a73c2b744745bb919c5aef3592df77a09fd003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eaffacbdf1e4e82884819db7a73c2b744745bb919c5aef3592df77a09fd003->enter($__internal_20eaffacbdf1e4e82884819db7a73c2b744745bb919c5aef3592df77a09fd003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_67952c1aa56a6a45f1dbad2a685587fe3f66f99b67e5e0010336cc106c1bf121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67952c1aa56a6a45f1dbad2a685587fe3f66f99b67e5e0010336cc106c1bf121->enter($__internal_67952c1aa56a6a45f1dbad2a685587fe3f66f99b67e5e0010336cc106c1bf121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_20eaffacbdf1e4e82884819db7a73c2b744745bb919c5aef3592df77a09fd003->leave($__internal_20eaffacbdf1e4e82884819db7a73c2b744745bb919c5aef3592df77a09fd003_prof);

        
        $__internal_67952c1aa56a6a45f1dbad2a685587fe3f66f99b67e5e0010336cc106c1bf121->leave($__internal_67952c1aa56a6a45f1dbad2a685587fe3f66f99b67e5e0010336cc106c1bf121_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}