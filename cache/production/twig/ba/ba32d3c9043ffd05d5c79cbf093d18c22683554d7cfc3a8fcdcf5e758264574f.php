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

/* acp_prune_forums.html */
class __TwigTemplate_ee8d85a46aa57181befd594c8f251af0906f16d0b7189ad292a9e37578a96e4c extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_prune_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_PRUNED"] ?? null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PRUNE");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_SUCCESS");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
            echo "</th>
\t\t<th>";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_PRUNED");
            echo "</th>
\t\t<th>";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_PRUNED");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pruned", [], "any", false, false, false, 20));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pruned"]) {
                // line 21
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["pruned"], "FORUM_NAME", [], "any", false, false, false, 22);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["pruned"], "NUM_TOPICS", [], "any", false, false, false, 23);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["pruned"], "NUM_POSTS", [], "any", false, false, false, 24);
                echo "</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\" style=\"text-align: center;\">";
                // line 28
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_PRUNE");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pruned'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</tbody>
\t</table>

";
        } elseif (        // line 34
($context["S_SELECT_FORUM"] ?? null)) {
            // line 35
            echo "
\t<h1>";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 40
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 43
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_FORUM");
            echo "</legend>
\t\t<p>";
            // line 44
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOK_UP_FORUMS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt>";
            // line 46
            echo "<label for=\"forum\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOK_UP_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>";
            echo "</dt>
\t\t<dd><select id=\"forum\" name=\"f[]\" multiple=\"multiple\" size=\"10\">";
            // line 47
            echo ($context["S_FORUM_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOK_UP_FORUM");
            echo "\" />
\t</p>
\t</fieldset>

\t</form>

";
        } else {
            // line 59
            echo "
\t<a href=\"";
            // line 60
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<h2>";
            // line 66
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
            echo "</h2>

\t<p>";
            // line 68
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECTED_FORUMS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["FORUM_LIST"] ?? null);
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 70
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PRUNE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"prune_days\">";
            // line 75
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_NOT_POSTED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"prune_vieweddays\">";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_NOT_VIEWED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_vieweddays\" name=\"prune_vieweddays\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"polls\">";
            // line 83
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_OLD_POLLS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\" /> ";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"polls\" name=\"prune_old_polls\" value=\"0\" checked=\"checked\" /> ";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"announce\">";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\" /> ";
            // line 89
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"announce\" name=\"prune_announce\" value=\"0\" checked=\"checked\" /> ";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sticky\">";
            // line 93
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_STICKY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\" /> ";
            // line 94
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"sticky\" name=\"prune_sticky\" value=\"0\" checked=\"checked\" /> ";
            // line 95
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t</dl>

\t";
            // line 98
            // line 99
            echo "
\t<p class=\"quick\">
\t\t";
            // line 101
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t";
            // line 102
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 109
        echo "
";
        // line 110
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_forums.html", 110)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 110,  317 => 109,  308 => 103,  304 => 102,  300 => 101,  296 => 99,  295 => 98,  289 => 95,  285 => 94,  280 => 93,  274 => 90,  270 => 89,  265 => 88,  259 => 85,  255 => 84,  248 => 83,  240 => 79,  232 => 75,  227 => 73,  221 => 70,  213 => 68,  208 => 66,  203 => 64,  198 => 62,  189 => 60,  186 => 59,  176 => 52,  169 => 48,  165 => 47,  158 => 46,  153 => 44,  149 => 43,  143 => 40,  138 => 38,  133 => 36,  130 => 35,  128 => 34,  123 => 31,  114 => 28,  111 => 27,  103 => 24,  99 => 23,  95 => 22,  92 => 21,  87 => 20,  80 => 16,  76 => 15,  72 => 14,  64 => 9,  59 => 7,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_prune_forums.html", "");
    }
}
