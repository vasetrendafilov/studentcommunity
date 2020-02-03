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

/* acp_groups_position.html */
class __TwigTemplate_e23a92be1d412b8cba8992b08fdf83b560be8cdea3a184f28d4ed784e42994f9 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_groups_position.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("MANAGE_LEGEND");
        echo "</h1>

\t<form id=\"legend_settings\" method=\"post\" action=\"";
        // line 7
        echo ($context["U_ACTION"] ?? null);
        echo "\"";
        if (($context["S_CAN_UPLOAD"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"legend_sort_groupname\">";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND_SORT_GROUPNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND_SORT_GROUPNAME_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"legend_sort_groupname\" class=\"radio\" value=\"1\"";
        // line 14
        if (($context["LEGEND_SORT_GROUPNAME"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"legend_sort_groupname\" class=\"radio\" value=\"0\"";
        // line 15
        if ( !($context["LEGEND_SORT_GROUPNAME"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 21
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_legend\" />
\t\t";
        // line 23
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</p>
\t</fieldset>
\t</form>

\t<p>";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND_EXPLAIN");
        echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP");
        echo "</th>
\t\t<th>";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_TYPE");
        echo "</th>
\t\t<th>";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "legend", [], "any", false, false, false, 40));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["legend"]) {
            // line 41
            echo "\t\t<tr>
\t\t\t<td><strong";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["legend"], "GROUP_COLOUR", [], "any", false, false, false, 42)) {
                echo " style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["legend"], "GROUP_COLOUR", [], "any", false, false, false, 42);
                echo "\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["legend"], "GROUP_NAME", [], "any", false, false, false, 42);
            echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["legend"], "GROUP_TYPE", [], "any", false, false, false, 43);
            echo "</td>
\t\t\t<td class=\"actions\">
\t\t\t\t<span class=\"up-disabled\" style=\"display: none;\">";
            // line 45
            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
            echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["legend"], "U_MOVE_UP", [], "any", false, false, false, 46);
            echo "\" data-ajax=\"row_up\">";
            echo ($context["ICON_MOVE_UP"] ?? null);
            echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
            // line 47
            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
            echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["legend"], "U_MOVE_DOWN", [], "any", false, false, false, 48);
            echo "\" data-ajax=\"row_down\">";
            echo ($context["ICON_MOVE_DOWN"] ?? null);
            echo "</a></span>
\t\t\t\t<a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["legend"], "U_DELETE", [], "any", false, false, false, 49);
            echo "\">";
            echo ($context["ICON_DELETE"] ?? null);
            echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\">";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_GROUPS_ADDED");
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['legend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t</tbody>
\t</table>

\t<form id=\"legend_add_group\" method=\"post\" action=\"";
        // line 60
        echo ($context["U_ACTION_LEGEND"] ?? null);
        echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<select name=\"g\">
\t\t\t\t<option value=\"0\">";
        // line 63
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_GROUP");
        echo "</option>
\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "add_legend", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["add_legend"]) {
            // line 65
            echo "\t\t\t\t\t<option";
            if (twig_get_attribute($this->env, $this->source, $context["add_legend"], "GROUP_SPECIAL", [], "any", false, false, false, 65)) {
                echo " class=\"sep\"";
            }
            echo " value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["add_legend"], "GROUP_ID", [], "any", false, false, false, 65);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["add_legend"], "GROUP_NAME", [], "any", false, false, false, 65);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_legend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</select>
\t\t\t";
        // line 68
        // line 69
        echo "\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
        // line 71
        // line 72
        echo "\t\t\t";
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</fieldset>
\t</form>

\t<h1>";
        // line 76
        echo $this->extensions['phpbb\template\twig\extension']->lang("MANAGE_TEAMPAGE");
        echo "</h1>

\t<form id=\"teampage_settings\" method=\"post\" action=\"";
        // line 78
        echo ($context["U_ACTION"] ?? null);
        echo "\"";
        if (($context["S_CAN_UPLOAD"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 81
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"teampage_memberships\">";
        // line 83
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_MEMBERSHIPS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"0\"";
        // line 85
        if ((($context["DISPLAY_MEMBERSHIPS"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_DISP_FIRST");
        echo "</label><br />
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"1\"";
        // line 86
        if ((($context["DISPLAY_MEMBERSHIPS"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_DISP_DEFAULT");
        echo "</label><br />
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"2\"";
        // line 87
        if ((($context["DISPLAY_MEMBERSHIPS"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_DISP_ALL");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"teampage_forums\">";
        // line 91
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_FORUMS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_forums\" class=\"radio\" value=\"1\"";
        // line 93
        if (($context["DISPLAY_FORUMS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_forums\" class=\"radio\" value=\"0\"";
        // line 94
        if ( !($context["DISPLAY_FORUMS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 99
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 100
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_teampage\" />
\t\t";
        // line 102
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</p>
\t</fieldset>
\t</form>

\t<p>";
        // line 107
        echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE_EXPLAIN");
        echo "</p>

\t";
        // line 109
        if ((($context["S_TEAMPAGE_CATEGORY"] ?? null) && ($context["CURRENT_CATEGORY_NAME"] ?? null))) {
            echo "<p><strong><a href=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TEAMPAGE");
            echo "</a> &raquo; ";
            echo ($context["CURRENT_CATEGORY_NAME"] ?? null);
            echo "</strong></p>";
        }
        // line 110
        echo "
\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
        // line 115
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP");
        echo "</th>
\t\t<th>";
        // line 116
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_TYPE");
        echo "</th>
\t\t<th>";
        // line 117
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "teampage", [], "any", false, false, false, 121));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teampage"]) {
            // line 122
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 124
            if (twig_get_attribute($this->env, $this->source, $context["teampage"], "U_CATEGORY", [], "any", false, false, false, 124)) {
                // line 125
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["teampage"], "U_CATEGORY", [], "any", false, false, false, 125);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_NAME", [], "any", false, false, false, 125);
                echo "</a>
\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t<strong";
                if (twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_COLOUR", [], "any", false, false, false, 127)) {
                    echo " style=\"color: ";
                    echo twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_COLOUR", [], "any", false, false, false, 127);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_NAME", [], "any", false, false, false, 127);
                echo "</strong>
\t\t\t\t";
            }
            // line 129
            echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">";
            // line 130
            if (twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_TYPE", [], "any", false, false, false, 130)) {
                echo twig_get_attribute($this->env, $this->source, $context["teampage"], "GROUP_TYPE", [], "any", false, false, false, 130);
            } else {
                echo "-";
            }
            // line 131
            echo "\t\t\t</td></td>
\t\t\t<td class=\"actions\">
\t\t\t\t<span class=\"up-disabled\" style=\"display: none;\">";
            // line 133
            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
            echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["teampage"], "U_MOVE_UP", [], "any", false, false, false, 134);
            echo "\" data-ajax=\"row_up\">";
            echo ($context["ICON_MOVE_UP"] ?? null);
            echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
            // line 135
            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
            echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["teampage"], "U_MOVE_DOWN", [], "any", false, false, false, 136);
            echo "\" data-ajax=\"row_down\">";
            echo ($context["ICON_MOVE_DOWN"] ?? null);
            echo "</a></span>
\t\t\t\t<a href=\"";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["teampage"], "U_DELETE", [], "any", false, false, false, 137);
            echo "\">";
            echo ($context["ICON_DELETE"] ?? null);
            echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\">";
            // line 142
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_GROUPS_ADDED");
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teampage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "\t</tbody>
\t</table>

\t";
        // line 148
        if ( !($context["S_TEAMPAGE_CATEGORY"] ?? null)) {
            // line 149
            echo "\t<form id=\"teampage_add_category\" method=\"post\" action=\"";
            echo ($context["U_ACTION_TEAMPAGE"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"inputbox autowidth\" type=\"text\" maxlength=\"255\" name=\"category_name\" placeholder=\"";
            // line 151
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_CATEGORY_NAME");
            echo "\" />
\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
            // line 152
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_GROUP_CATEGORY");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add_category\" />
\t\t\t";
            // line 154
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
\t";
        }
        // line 158
        echo "
\t<form id=\"teampage_add_group\" method=\"post\" action=\"";
        // line 159
        echo ($context["U_ACTION_TEAMPAGE"] ?? null);
        echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<select name=\"g\">
\t\t\t\t<option value=\"0\">";
        // line 162
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_GROUP");
        echo "</option>
\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "add_teampage", [], "any", false, false, false, 163));
        foreach ($context['_seq'] as $context["_key"] => $context["add_teampage"]) {
            // line 164
            echo "\t\t\t\t\t<option";
            if (twig_get_attribute($this->env, $this->source, $context["add_teampage"], "GROUP_SPECIAL", [], "any", false, false, false, 164)) {
                echo " class=\"sep\"";
            }
            echo " value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["add_teampage"], "GROUP_ID", [], "any", false, false, false, 164);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["add_teampage"], "GROUP_NAME", [], "any", false, false, false, 164);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_teampage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t</select>
\t\t\t";
        // line 167
        // line 168
        echo "\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
        // line 170
        // line 171
        echo "\t\t\t";
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</fieldset>
\t</form>

";
        // line 175
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_groups_position.html", 175)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_groups_position.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 175,  556 => 171,  555 => 170,  549 => 168,  548 => 167,  545 => 166,  530 => 164,  526 => 163,  522 => 162,  516 => 159,  513 => 158,  506 => 154,  501 => 152,  497 => 151,  491 => 149,  489 => 148,  484 => 145,  475 => 142,  472 => 141,  461 => 137,  455 => 136,  451 => 135,  445 => 134,  441 => 133,  437 => 131,  431 => 130,  428 => 129,  416 => 127,  408 => 125,  406 => 124,  402 => 122,  397 => 121,  390 => 117,  386 => 116,  382 => 115,  375 => 110,  365 => 109,  360 => 107,  352 => 102,  347 => 100,  343 => 99,  331 => 94,  323 => 93,  315 => 91,  304 => 87,  296 => 86,  288 => 85,  282 => 83,  277 => 81,  267 => 78,  262 => 76,  254 => 72,  253 => 71,  247 => 69,  246 => 68,  243 => 67,  228 => 65,  224 => 64,  220 => 63,  214 => 60,  209 => 57,  200 => 54,  197 => 53,  186 => 49,  180 => 48,  176 => 47,  170 => 46,  166 => 45,  161 => 43,  151 => 42,  148 => 41,  143 => 40,  136 => 36,  132 => 35,  128 => 34,  119 => 28,  111 => 23,  106 => 21,  102 => 20,  90 => 15,  82 => 14,  74 => 12,  69 => 10,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_groups_position.html", "");
    }
}
