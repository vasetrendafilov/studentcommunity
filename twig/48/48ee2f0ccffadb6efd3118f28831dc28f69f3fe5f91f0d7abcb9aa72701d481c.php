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

/* mcp_ban.html */
class __TwigTemplate_01a499d2cb7196e03f22806c3f17f5698de5fb69902f8cb79aa99345f43deee3 extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_ban.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\tvar ban_length = new Array();
\t\tban_length[-1] = '';
\tvar ban_reason = new Array();
\t\tban_reason[-1] = '';
\tvar ban_give_reason = new Array();
\t\tban_give_reason[-1] = '';

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bans", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["bans"]) {
            // line 12
            echo "\t\tban_length['";
            echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 12);
            echo "'] = '";
            echo twig_get_attribute($this->env, $this->source, $context["bans"], "A_LENGTH", [], "any", false, false, false, 12);
            echo "';
\t\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["bans"], "A_REASON", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t\t\tban_reason['";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 14);
                echo "'] = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bans"], "REASON", [], "any", false, false, false, 14), "js");
                echo "';
\t\t";
            }
            // line 16
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["bans"], "A_GIVE_REASON", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t\t\tban_give_reason['";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 17);
                echo "'] = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bans"], "GIVE_REASON", [], "any", false, false, false, 17), "js");
                echo "';
\t\t";
            }
            // line 19
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\tfunction display_details(option)
\t{
\t\tdocument.getElementById('unbanlength').innerHTML = ban_length[option];
\t\tif (option in ban_reason) {
\t\t\tdocument.getElementById('unbanreason').innerHTML = ban_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbanreason').innerHTML = '';
\t\t}
\t\tif (option in ban_give_reason) {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = ban_give_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = '';
\t\t}
\t}
</script>

<form id=\"mcp_ban\" method=\"post\" action=\"";
        // line 37
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<h2>";
        // line 39
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h3>
\t<p>";
        // line 45
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
        echo "</p>

\t<fieldset>
\t";
        // line 48
        // line 49
        echo "\t<dl>
\t\t<dt><label for=\"ban\">";
        // line 50
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_CELL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"ban\"><textarea name=\"ban\" id=\"ban\" class=\"inputbox\" cols=\"40\" rows=\"3\">";
        // line 51
        echo ($context["BAN_QUANTIFIER"] ?? null);
        echo "</textarea></label></dd>
\t\t";
        // line 52
        if (($context["S_USERNAME_BAN"] ?? null)) {
            echo "<dd><strong><a href=\"";
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
            echo "</a></strong></dd>";
        }
        // line 53
        echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"banlength\">";
        // line 55
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"banlength\"><select name=\"banlength\" id=\"banlength\" onchange=\"if(this.value==-1){document.getElementById('banlengthother').style.display = 'block';}else{document.getElementById('banlengthother').style.display='none';}\">";
        // line 56
        echo ($context["S_BAN_END_OPTIONS"] ?? null);
        echo "</select></label></dd>
\t\t<dd id=\"banlengthother\" style=\"display: none;\"><label><input type=\"text\" name=\"banlengthother\" class=\"inputbox\" /><br /><span>";
        // line 57
        echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR_MONTH_DAY");
        echo "</span></label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"banreason\">";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_REASON");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"banreason\" id=\"banreason\" type=\"text\" class=\"inputbox\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bangivereason\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_GIVE_REASON");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"bangivereason\" id=\"bangivereason\" type=\"text\" class=\"inputbox\" maxlength=\"255\" /></dd>
\t</dl>

\t<hr />

\t<dl>
\t\t<dt><label for=\"banexclude0\">";
        // line 71
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_EXCLUDE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_EXCLUDE_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"banexclude1\"><input type=\"radio\" name=\"banexclude\" id=\"banexclude1\" value=\"1\" /> ";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label for=\"banexclude0\"><input type=\"radio\" name=\"banexclude\" id=\"banexclude0\" value=\"0\" checked=\"checked\" /> ";
        // line 74
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 77
        // line 78
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 84
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"bansubmit\" value=\"";
        // line 85
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 86
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 92
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNBAN_TITLE");
        echo "</h3>
\t<p>";
        // line 93
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNBAN_EXPLAIN");
        echo "</p>

\t";
        // line 95
        if (($context["S_BANNED_OPTIONS"] ?? null)) {
            // line 96
            echo "\t\t<fieldset>
\t\t";
            // line 97
            // line 98
            echo "\t\t<dl>
\t\t\t<dt><label for=\"unban\">";
            // line 99
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_CELL");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"unban[]\" id=\"unban\" multiple=\"multiple\" size=\"5\" onchange=\"if (this.selectedIndex != -1) {display_details(this.options[this.selectedIndex].value);}\">";
            // line 100
            echo ($context["BANNED_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbanlength\"></strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 107
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbanreason\"></strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 111
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_GIVE_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbangivereason\"></strong></dd>
\t\t</dl>
\t\t";
            // line 114
            // line 115
            echo "\t\t</fieldset>

\t\t</div>
\t</div>

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 121
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"reset\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"unbansubmit\" value=\"";
            // line 122
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</fieldset>

\t";
        } else {
            // line 126
            echo "
\t\t<p><strong>";
            // line 127
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BAN_CELL");
            echo "</strong></p>

\t\t</div>
\t</div>

\t";
        }
        // line 133
        echo "</form>

";
        // line 135
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_ban.html", 135)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_ban.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 135,  331 => 133,  322 => 127,  319 => 126,  312 => 122,  306 => 121,  298 => 115,  297 => 114,  290 => 111,  282 => 107,  274 => 103,  268 => 100,  263 => 99,  260 => 98,  259 => 97,  256 => 96,  254 => 95,  249 => 93,  245 => 92,  236 => 86,  232 => 85,  226 => 84,  218 => 78,  217 => 77,  211 => 74,  207 => 73,  199 => 71,  188 => 64,  180 => 60,  174 => 57,  170 => 56,  165 => 55,  161 => 53,  153 => 52,  149 => 51,  144 => 50,  141 => 49,  140 => 48,  134 => 45,  130 => 44,  122 => 39,  117 => 37,  98 => 20,  92 => 19,  84 => 17,  81 => 16,  73 => 14,  71 => 13,  64 => 12,  60 => 11,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_ban.html", "");
    }
}
