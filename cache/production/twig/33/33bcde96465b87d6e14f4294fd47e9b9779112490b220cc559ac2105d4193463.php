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

/* ucp_groups_membership.html */
class __TwigTemplate_30c7454445f50b77e797fe8f1933e95f0b941883db896b5543f55d0948ab157a extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_groups_membership.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUPS_EXPLAIN");
        echo "</p>
\t";
        // line 11
        $value = 0;
        $context['definition']->set('SHOW_BUTTONS', $value);
        // line 12
        echo "\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 12))) {
            // line 13
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 17
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 24
                echo "\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_SPECIAL", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 26
                    echo "\t\t";
                }
                // line 27
                echo "\t\t<li class=\"row\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 31
                if (($context["S_CHANGE_DEFAULT"] ?? null)) {
                    echo "<input title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if (twig_get_attribute($this->env, $this->source, $context["leader"], "S_GROUP_DEFAULT", [], "any", false, false, false, 31)) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_ID", [], "any", false, false, false, 31);
                    echo "\" /> ";
                }
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["leader"], "U_VIEW_GROUP", [], "any", false, false, false, 32);
                echo "\" class=\"forumtitle\"";
                if (twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_COLOUR", [], "any", false, false, false, 32)) {
                    echo " style=\"color:#";
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_COLOUR", [], "any", false, false, false, 32);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_NAME", [], "any", false, false, false, 32);
                echo "</a>
\t\t\t\t\t\t";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_DESC", [], "any", false, false, false, 33)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_DESC", [], "any", false, false, false, 33);
                }
                // line 34
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_SPECIAL", [], "any", false, false, false, 34)) {
                    echo "<br /><i>";
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_STATUS", [], "any", false, false, false, 34);
                    echo "</i>";
                }
                // line 35
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_ID", [], "any", false, false, false, 37);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_SPECIAL", [], "any", false, false, false, 37)) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</ul>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "member", [], "any", false, false, false, 44))) {
            // line 45
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 49
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "member", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 56
                echo "\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_SPECIAL", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t\t<li class=\"row\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 63
                if (($context["S_CHANGE_DEFAULT"] ?? null)) {
                    echo "<input title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if (twig_get_attribute($this->env, $this->source, $context["member"], "S_GROUP_DEFAULT", [], "any", false, false, false, 63)) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_ID", [], "any", false, false, false, 63);
                    echo "\" /> ";
                }
                // line 64
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["member"], "U_VIEW_GROUP", [], "any", false, false, false, 64);
                echo "\" class=\"forumtitle\"";
                if (twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_COLOUR", [], "any", false, false, false, 64)) {
                    echo " style=\"color:#";
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_COLOUR", [], "any", false, false, false, 64);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_NAME", [], "any", false, false, false, 64);
                echo "</a>
\t\t\t\t\t\t";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_DESC", [], "any", false, false, false, 65)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_DESC", [], "any", false, false, false, 65);
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_SPECIAL", [], "any", false, false, false, 66)) {
                    echo "<br /><i>";
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_STATUS", [], "any", false, false, false, 66);
                    echo "</i>";
                }
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_ID", [], "any", false, false, false, 69);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["member"], "GROUP_SPECIAL", [], "any", false, false, false, 69)) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t</ul>
\t";
        }
        // line 75
        echo "\t</div>
</div>

";
        // line 78
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pending", [], "any", false, false, false, 78))) {
            // line 79
            echo "<div class=\"panel\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_PENDING");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pending", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["pending"]) {
                // line 92
                echo "\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_SPECIAL", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 94
                    echo "\t\t";
                }
                // line 95
                echo "\t\t<li class=\"row\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["pending"], "U_VIEW_GROUP", [], "any", false, false, false, 99);
                echo "\" class=\"forumtitle\"";
                if (twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_COLOUR", [], "any", false, false, false, 99)) {
                    echo " style=\"color:#";
                    echo twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_COLOUR", [], "any", false, false, false, 99);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_NAME", [], "any", false, false, false, 99);
                echo "</a>
\t\t\t\t\t\t";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_DESC", [], "any", false, false, false, 100)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_DESC", [], "any", false, false, false, 100);
                }
                // line 101
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_SPECIAL", [], "any", false, false, false, 101)) {
                    echo "<br /><i>";
                    echo twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_STATUS", [], "any", false, false, false, 101);
                    echo "</i>";
                }
                // line 102
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_ID", [], "any", false, false, false, 104);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["pending"], "GROUP_SPECIAL", [], "any", false, false, false, 104)) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t</ul>
\t</div>
</div>
";
        }
        // line 112
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "nonmember", [], "any", false, false, false, 112))) {
            // line 113
            echo "<div class=\"panel\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 118
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_NONMEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 119
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "nonmember", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["nonmember"]) {
                // line 126
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["nonmember"], "S_CAN_JOIN", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 128
                    echo "\t\t";
                }
                // line 129
                echo "\t\t<li class=\"row\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "U_VIEW_GROUP", [], "any", false, false, false, 133);
                echo "\" class=\"forumtitle\"";
                if (twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_COLOUR", [], "any", false, false, false, 133)) {
                    echo " style=\"color:#";
                    echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_COLOUR", [], "any", false, false, false, 133);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_NAME", [], "any", false, false, false, 133);
                echo "</a>
\t\t\t\t\t\t";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_DESC", [], "any", false, false, false, 134)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_DESC", [], "any", false, false, false, 134);
                }
                // line 135
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_SPECIAL", [], "any", false, false, false, 135)) {
                    echo "<br /><i>";
                    echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_STATUS", [], "any", false, false, false, 135);
                    echo "</i>";
                }
                // line 136
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["nonmember"], "GROUP_ID", [], "any", false, false, false, 138);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["nonmember"], "S_CAN_JOIN", [], "any", false, false, false, 138)) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nonmember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t\t</div>
\t</div>
";
        }
        // line 146
        echo "

\t";
        // line 148
        if ((($context["S_CHANGE_DEFAULT"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_BUTTONS", [], "any", false, false, false, 148) == 1))) {
            // line 149
            echo "\t<fieldset>
\t\t";
            // line 150
            if (($context["S_CHANGE_DEFAULT"] ?? null)) {
                // line 151
                echo "\t\t<div class=\"left-box\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"change_default\" value=\"";
                // line 152
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_DEFAULT_GROUP");
                echo "\" />
\t\t\t";
                // line 153
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</div>
\t\t";
            }
            // line 156
            echo "
\t\t";
            // line 157
            if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_BUTTONS", [], "any", false, false, false, 157) == 1)) {
                // line 158
                echo "\t\t<div class=\"right-box\">
\t\t\t<label for=\"action\">";
                // line 159
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>
\t\t\t<select name=\"action\" id=\"action\">
\t\t\t\t<option value=\"join\">";
                // line 161
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOIN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"resign\">";
                // line 162
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESIGN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"demote\">";
                // line 163
                echo $this->extensions['phpbb\template\twig\extension']->lang("DEMOTE_SELECTED");
                echo "</option>
\t\t\t</select>&nbsp;
\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 165
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t\t";
                // line 166
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</div>
\t\t";
            }
            // line 169
            echo "\t</fieldset>
\t";
        }
        // line 171
        echo "
</form>

";
        // line 174
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_membership.html", 174)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_membership.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 174,  526 => 171,  522 => 169,  516 => 166,  512 => 165,  507 => 163,  503 => 162,  499 => 161,  493 => 159,  490 => 158,  488 => 157,  485 => 156,  479 => 153,  475 => 152,  472 => 151,  470 => 150,  467 => 149,  465 => 148,  461 => 146,  455 => 142,  441 => 138,  437 => 136,  430 => 135,  425 => 134,  413 => 133,  407 => 129,  404 => 128,  400 => 127,  397 => 126,  393 => 125,  384 => 119,  380 => 118,  373 => 113,  371 => 112,  365 => 108,  351 => 104,  347 => 102,  340 => 101,  335 => 100,  323 => 99,  317 => 95,  314 => 94,  310 => 93,  307 => 92,  303 => 91,  294 => 85,  290 => 84,  283 => 79,  281 => 78,  276 => 75,  272 => 73,  258 => 69,  254 => 67,  247 => 66,  242 => 65,  229 => 64,  217 => 63,  211 => 59,  208 => 58,  204 => 57,  201 => 56,  197 => 55,  188 => 49,  184 => 48,  179 => 45,  177 => 44,  174 => 43,  170 => 41,  156 => 37,  152 => 35,  145 => 34,  140 => 33,  127 => 32,  115 => 31,  109 => 27,  106 => 26,  102 => 25,  99 => 24,  95 => 23,  86 => 17,  82 => 16,  77 => 13,  74 => 12,  71 => 11,  67 => 10,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_groups_membership.html", "");
    }
}
