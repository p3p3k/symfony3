<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7d6a49019e43dc7e61f3aabcc2bc91e4d6a2130d76e47b4865ca1f2b4f1656f3 extends Twig_Template
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
        $__internal_0fc30c8c2c1893be040112d09952846316aae8499b26794951179d39500dc731 = $this->env->getExtension("native_profiler");
        $__internal_0fc30c8c2c1893be040112d09952846316aae8499b26794951179d39500dc731->enter($__internal_0fc30c8c2c1893be040112d09952846316aae8499b26794951179d39500dc731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0fc30c8c2c1893be040112d09952846316aae8499b26794951179d39500dc731->leave($__internal_0fc30c8c2c1893be040112d09952846316aae8499b26794951179d39500dc731_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
