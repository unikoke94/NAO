<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_db6bac01085ddb08764573ab3415c3ccbd54b3df70729506b76f3e04429dd008 extends Twig_Template
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
        $__internal_1e32a3906aa7c8b5f96c246ffb35fd598b1626a975838c4cee669fc09830ebb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e32a3906aa7c8b5f96c246ffb35fd598b1626a975838c4cee669fc09830ebb0->enter($__internal_1e32a3906aa7c8b5f96c246ffb35fd598b1626a975838c4cee669fc09830ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_dcad86590d2c4b6fd074afac7e0662ae6a72b6bc15f68ab85ac17da407477836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcad86590d2c4b6fd074afac7e0662ae6a72b6bc15f68ab85ac17da407477836->enter($__internal_dcad86590d2c4b6fd074afac7e0662ae6a72b6bc15f68ab85ac17da407477836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_1e32a3906aa7c8b5f96c246ffb35fd598b1626a975838c4cee669fc09830ebb0->leave($__internal_1e32a3906aa7c8b5f96c246ffb35fd598b1626a975838c4cee669fc09830ebb0_prof);

        
        $__internal_dcad86590d2c4b6fd074afac7e0662ae6a72b6bc15f68ab85ac17da407477836->leave($__internal_dcad86590d2c4b6fd074afac7e0662ae6a72b6bc15f68ab85ac17da407477836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}