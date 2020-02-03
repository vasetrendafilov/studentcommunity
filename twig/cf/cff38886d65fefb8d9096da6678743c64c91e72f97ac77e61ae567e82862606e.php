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

/* acp_ext_actions.html */
class __TwigTemplate_fb01f697d55f56a3759a09a8a62a0c7a8f2d49a0ffbb1afecff7cf31c7605eeb extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["enabled"] ?? null), "actions", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "U_ACTION", [], "any", false, false, false, 2);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION_EXPLAIN", [], "any", false, false, false, 2)) {
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION_EXPLAIN", [], "any", false, false, false, 2);
                echo "\"";
            }
            if (twig_get_attribute($this->env, $this->source, $context["action"], "COLOR", [], "any", false, false, false, 2)) {
                echo " style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "COLOR", [], "any", false, false, false, 2);
                echo ";\"";
            }
            echo " data-ajax=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "ACTION_AJAX", [], "any", false, false, false, 2);
            echo "\" data-refresh=\"true\">";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION", [], "any", false, false, false, 2);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["action"], "S_LAST_ROW", [], "any", false, false, false, 2)) {
                echo "&nbsp;|&nbsp;";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["disabled"] ?? null), "actions", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 6
            echo "\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "U_ACTION", [], "any", false, false, false, 6);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION_EXPLAIN", [], "any", false, false, false, 6)) {
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION_EXPLAIN", [], "any", false, false, false, 6);
                echo "\"";
            }
            if (twig_get_attribute($this->env, $this->source, $context["action"], "COLOR", [], "any", false, false, false, 6)) {
                echo " style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "COLOR", [], "any", false, false, false, 6);
                echo ";\"";
            }
            echo " data-ajax=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "ACTION_AJAX", [], "any", false, false, false, 6);
            echo "\" data-refresh=\"true\">";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "L_ACTION", [], "any", false, false, false, 6);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["action"], "S_LAST_ROW", [], "any", false, false, false, 6)) {
                echo "&nbsp;|&nbsp;";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "acp_ext_actions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  70 => 5,  67 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ext_actions.html", "");
    }
}
