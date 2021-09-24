<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* progress_bar.html */
class __TwigTemplate_dfcda33e78d24c324ecf3ebc5ed36432d8b4f25e1113c41c88e51369ecebe14f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "progress_bar.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
// <![CDATA[
\t/**
\t* Close previously opened popup
\t*/
\tfunction close_popup()
\t{
\t\tif (opener != null)
\t\t{
\t\t\tif (opener.close_waitscreen != null)
\t\t\t{
\t\t\t\tif (opener.close_waitscreen == 1)
\t\t\t\t{
\t\t\t\t\topener.close_waitscreen = 0;
\t\t\t\t\tself.close();
\t\t\t\t\treturn 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tsetTimeout(\"close_popup()\", 1000);
\t\treturn 0;
\t}
// ]]>
</script>

<div class=\"successbox\">
\t<h3>";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("PROGRESS");
        echo "</h3>
\t<img src=\"images/progress_bar.gif\" alt=\"";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("PROGRESS");
        echo "\" />
\t<p>";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("PROGRESS_EXPLAIN");
        echo "</p>
</div>

<script>
// <![CDATA[
\tclose_popup();
// ]]>
</script>

";
        // line 40
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "progress_bar.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "progress_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  86 => 31,  82 => 30,  78 => 29,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "progress_bar.html", "");
    }
}
