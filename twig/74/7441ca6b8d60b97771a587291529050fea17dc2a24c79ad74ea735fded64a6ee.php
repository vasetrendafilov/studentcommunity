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

/* mcp_warn_front.html */
class __TwigTemplate_9abf7f88dc3ec983bb693810427f9c415b8d21fd17e622d9ba7f30d528bbcc42 extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_warn_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo ($context["U_POST_ACTION"] ?? null);
        echo "\">

<h2>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_USER");
        echo "</h3>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"username\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_USER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"username\" id=\"username\" type=\"text\" class=\"inputbox\" /></dd>
\t\t<dd><strong><a href=\"";
        // line 16
        echo ($context["U_FIND_USERNAME"] ?? null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
        echo "</a></strong></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submituser\" value=\"";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 26
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("MOST_WARNINGS");
        echo "</h3>

\t";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "highest", [], "any", false, false, false, 35))) {
            // line 36
            echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
            // line 39
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 40
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 41
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_WARNING_TIME");
            echo "</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "highest", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["highest"]) {
                // line 48
                echo "\t\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["highest"], "S_ROW_COUNT", [], "any", false, false, false, 48) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t<td>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["highest"], "USERNAME_FULL", [], "any", false, false, false, 49);
                echo "</td>
\t\t\t\t<td>";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["highest"], "WARNINGS", [], "any", false, false, false, 50);
                echo "</td>
\t\t\t\t<td>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["highest"], "WARNING_TIME", [], "any", false, false, false, 51);
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["highest"], "U_NOTES", [], "any", false, false, false, 52);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                echo "</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 58
            echo "\t\t<p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_WARNINGS");
            echo "</strong></p>
\t";
        }
        // line 60
        echo "
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_WARNINGS");
        echo "</h3>

\t";
        // line 69
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "latest", [], "any", false, false, false, 69))) {
            // line 70
            echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 74
            echo $this->extensions['phpbb\template\twig\extension']->lang("TIME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 75
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_WARNINGS");
            echo "</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "latest", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                // line 81
                echo "\t\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["latest"], "S_ROW_COUNT", [], "any", false, false, false, 81) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t<td>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["latest"], "USERNAME_FULL", [], "any", false, false, false, 82);
                echo "</td>
\t\t\t\t<td>";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["latest"], "WARNING_TIME", [], "any", false, false, false, 83);
                echo "</td>
\t\t\t\t<td>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["latest"], "WARNINGS", [], "any", false, false, false, 84);
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["latest"], "U_NOTES", [], "any", false, false, false, 85);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                echo "</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 91
            echo "\t\t<p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_WARNINGS");
            echo "</strong></p>
\t";
        }
        // line 93
        echo "
\t</div>
</div>

";
        // line 97
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_warn_front.html", 97)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_warn_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 97,  269 => 93,  263 => 91,  258 => 88,  247 => 85,  243 => 84,  239 => 83,  235 => 82,  226 => 81,  222 => 80,  214 => 75,  210 => 74,  206 => 73,  201 => 70,  199 => 69,  194 => 67,  185 => 60,  179 => 58,  174 => 55,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  142 => 48,  138 => 47,  129 => 41,  125 => 40,  121 => 39,  116 => 36,  114 => 35,  109 => 33,  99 => 26,  95 => 25,  91 => 24,  78 => 16,  72 => 14,  65 => 10,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_warn_front.html", "");
    }
}
