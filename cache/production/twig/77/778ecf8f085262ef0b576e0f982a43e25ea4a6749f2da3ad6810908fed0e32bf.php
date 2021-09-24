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

/* mcp_logs.html */
class __TwigTemplate_ce685995b03cfa2014e399fb5c744ae20246f97dfd8404fb2c948012fde292ee extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_logs.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 5
        echo ($context["U_POST_ACTION"] ?? null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar bar-top\">
\t\t";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <input type=\"search\" class=\"inputbox autowidth\" name=\"keywords\" value=\"";
        echo ($context["S_KEYWORDS"] ?? null);
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "\" />
\t\t<div class=\"pagination\">
\t\t\t";
        // line 13
        echo ($context["TOTAL"] ?? null);
        echo "
\t\t\t";
        // line 14
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 14))) {
            // line 15
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_logs.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 16
            echo "\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t</div>

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name\">";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "</th>
\t\t<th class=\"center\">";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("IP");
        echo "</th>
\t\t<th class=\"center\">";
        // line 27
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIME");
        echo "</th>
\t\t<th class=\"name\">";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
        echo "</th>
\t\t";
        // line 29
        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
            echo "<th>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</th>";
        }
        // line 30
        echo "\t</tr>
\t</thead>
\t\t<tbody>
\t";
        // line 33
        if (($context["S_LOGS"] ?? null)) {
            // line 34
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "log", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 35
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "S_ROW_COUNT", [], "any", false, false, false, 35) % 2 == 0)) {
                    echo "<tr class=\"bg1\">";
                } else {
                    echo "<tr class=\"bg2\">";
                }
                // line 36
                echo "\t\t\t<td>";
                echo twig_get_attribute($this->env, $this->source, $context["log"], "USERNAME", [], "any", false, false, false, 36);
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["log"], "IP", [], "any", false, false, false, 37);
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["log"], "DATE", [], "any", false, false, false, 38);
                echo "</td>
\t\t\t<td>";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["log"], "ACTION", [], "any", false, false, false, 39);
                echo "<br />
\t\t\t";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["log"], "DATA", [], "any", false, false, false, 40);
                echo "
\t\t</td>
\t\t\t";
                // line 42
                if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                    echo "<td style=\"width: 5%\" align=\"center\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["log"], "ID", [], "any", false, false, false, 42);
                    echo "\" /></td>";
                }
                // line 43
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t<tr>
\t\t\t<td class=\"bg1\" colspan=\"";
            // line 47
            if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ENTRIES");
            echo "</span></td>
\t\t</tr>
\t";
        }
        // line 50
        echo "\t</tbody>
\t</table>

\t";
        // line 53
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "log", [], "any", false, false, false, 53))) {
            // line 54
            echo "\t\t<div class=\"action-bar bottom\">
\t\t\t";
            // line 55
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_logs.html", 55)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 56
            echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 58
            echo ($context["TOTAL"] ?? null);
            echo "
\t\t\t\t";
            // line 59
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 59))) {
                // line 60
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_logs.html", 60)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 61
                echo "\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t</div>
\t\t</div>

\t\t";
            // line 67
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</div>
\t</div>

\t\t";
            // line 71
            if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                // line 72
                echo "\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                // line 73
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_ALL");
                echo "\" />
\t\t\t\t&nbsp;<input class=\"button1\" type=\"submit\" value=\"";
                // line 74
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                echo "\" name=\"action[del_marked]\" />

\t\t\t\t<div><a href=\"#\" onclick=\"marklist('mcp', 'mark', true); return false;\">";
                // line 76
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'mark', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t</fieldset>
\t\t";
            }
            // line 79
            echo "\t";
        } else {
            // line 80
            echo "\t\t\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 84
        echo "</form>

<br />

";
        // line 88
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_logs.html", 88)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_logs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 88,  305 => 84,  297 => 80,  294 => 79,  286 => 76,  281 => 74,  277 => 73,  274 => 72,  272 => 71,  265 => 67,  260 => 64,  254 => 62,  251 => 61,  238 => 60,  236 => 59,  232 => 58,  228 => 56,  216 => 55,  213 => 54,  211 => 53,  206 => 50,  194 => 47,  191 => 46,  188 => 45,  181 => 43,  175 => 42,  170 => 40,  166 => 39,  162 => 38,  158 => 37,  153 => 36,  146 => 35,  141 => 34,  139 => 33,  134 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  104 => 19,  98 => 17,  95 => 16,  82 => 15,  80 => 14,  76 => 13,  66 => 11,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_logs.html", "");
    }
}
