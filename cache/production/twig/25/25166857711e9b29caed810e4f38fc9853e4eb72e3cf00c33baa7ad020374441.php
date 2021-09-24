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

/* profilefields/url.html */
class __TwigTemplate_c4ed3e5e7e42cf7216c80e2837e91285a715c0dc7393d19a1fed1814b1cbc52f extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "url", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 2
            echo "<input type=\"url\" class=\"inputbox autowidth\" name=\"";
            echo twig_get_attribute($this->env, $this->source, $context["url"], "FIELD_IDENT", [], "any", false, false, false, 2);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["url"], "FIELD_IDENT", [], "any", false, false, false, 2);
            echo "\" size=\"";
            echo twig_get_attribute($this->env, $this->source, $context["url"], "FIELD_LENGTH", [], "any", false, false, false, 2);
            echo "\" maxlength=\"";
            echo twig_get_attribute($this->env, $this->source, $context["url"], "FIELD_MAXLEN", [], "any", false, false, false, 2);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["url"], "FIELD_VALUE", [], "any", false, false, false, 2);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profilefields/url.html", "");
    }
}
