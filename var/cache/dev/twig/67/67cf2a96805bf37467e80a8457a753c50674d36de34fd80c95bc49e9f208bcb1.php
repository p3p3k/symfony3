<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_867917401fec196783b05459d79c68913f42ec06242764042ad0080bae46a4f3 extends Twig_Template
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
        $__internal_deee340ac3a0320bfe41bae9b2ac6256add71ab6d3a999f982da41e85cbe0bf6 = $this->env->getExtension("native_profiler");
        $__internal_deee340ac3a0320bfe41bae9b2ac6256add71ab6d3a999f982da41e85cbe0bf6->enter($__internal_deee340ac3a0320bfe41bae9b2ac6256add71ab6d3a999f982da41e85cbe0bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_deee340ac3a0320bfe41bae9b2ac6256add71ab6d3a999f982da41e85cbe0bf6->leave($__internal_deee340ac3a0320bfe41bae9b2ac6256add71ab6d3a999f982da41e85cbe0bf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
