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

/* ucp_pm_options.html */
class __TwigTemplate_78fd47de2044368d5768c504cb248a6de6baf03d552ad954a91feb02d5994243 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_options.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t";
        // line 10
        if (($context["ERROR_MESSAGE"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR_MESSAGE"] ?? null);
            echo "</p>";
        }
        // line 11
        echo "\t";
        if (($context["NOTIFICATION_MESSAGE"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["NOTIFICATION_MESSAGE"] ?? null);
            echo "</p>";
        }
        // line 12
        echo "
\t<h3>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFINED_RULES");
        echo "</h3>

\t<ol class=\"def-rules\">
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rule", [], "any", false, false, false, 16));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 17
            echo "\t\t<li><div class=\"right-box\"><input type=\"submit\" name=\"delete_rule[";
            echo twig_get_attribute($this->env, $this->source, $context["rule"], "RULE_ID", [], "any", false, false, false, 17);
            echo "]\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_RULE");
            echo "\" class=\"button2\" /></div><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IF");
            echo "</strong> ";
            echo twig_get_attribute($this->env, $this->source, $context["rule"], "CHECK", [], "any", false, false, false, 17);
            echo " <em>";
            echo twig_get_attribute($this->env, $this->source, $context["rule"], "RULE", [], "any", false, false, false, 17);
            echo "</em> ";
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "STRING", [], "any", false, false, false, 17)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "STRING", [], "any", false, false, false, 17);
                echo "</strong> | ";
            }
            echo twig_get_attribute($this->env, $this->source, $context["rule"], "ACTION", [], "any", false, false, false, 17);
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "FOLDER", [], "any", false, false, false, 17)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "FOLDER", [], "any", false, false, false, 17);
            }
            echo "<div style=\"clear: both;\"></div></li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t<li><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_RULES_DEFINED");
            echo "</strong></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ol>

\t<h3>";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_NEW_RULE");
        echo "</h3>

\t<fieldset class=\"fields2\">

\t";
        // line 27
        if (($context["S_CHECK_DEFINED"] ?? null)) {
            // line 28
            echo "\t\t<dl>
\t\t\t<dt><label";
            // line 29
            if (($context["S_CHECK_SELECT"] ?? null)) {
                echo " for=\"check_option\"";
            }
            echo ">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IF");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t";
            // line 31
            if (($context["S_CHECK_SELECT"] ?? null)) {
                echo "<select name=\"check_option\" id=\"check_option\">";
                echo ($context["S_CHECK_OPTIONS"] ?? null);
                echo "</select> <input type=\"submit\" name=\"next\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo ($context["CHECK_CURRENT"] ?? null);
                echo "<input type=\"hidden\" name=\"check_option\" value=\"";
                echo ($context["CHECK_OPTION"] ?? null);
                echo "\" />";
            }
            // line 32
            echo "\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if (($context["S_RULE_DEFINED"] ?? null)) {
            // line 37
            echo "\t\t<dl>
\t\t\t<dt>";
            // line 38
            if (($context["S_RULE_SELECT"] ?? null)) {
                echo "<input type=\"submit\" name=\"back[rule]\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<label>&nbsp;</label>";
            }
            echo "</dt>
\t\t\t<dd>";
            // line 39
            if (($context["S_RULE_SELECT"] ?? null)) {
                echo "<select name=\"rule_option\" id=\"rule_option\">";
                echo ($context["S_RULE_OPTIONS"] ?? null);
                echo "</select> <input type=\"submit\" name=\"next\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<em>";
                echo ($context["RULE_CURRENT"] ?? null);
                echo "</em><input type=\"hidden\" name=\"rule_option\" value=\"";
                echo ($context["RULE_OPTION"] ?? null);
                echo "\" />";
            }
            echo "</dd>
\t\t</dl>
\t";
        }
        // line 42
        echo "
\t";
        // line 43
        if (($context["S_COND_DEFINED"] ?? null)) {
            // line 44
            echo "\t\t";
            if ((($context["S_COND_SELECT"] ?? null) || ($context["COND_CURRENT"] ?? null))) {
                // line 45
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 46
                if (($context["S_COND_SELECT"] ?? null)) {
                    echo "<input type=\"submit\" name=\"back[cond]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS_STEP");
                    echo "\" class=\"button2\" />";
                } else {
                    echo "<label>&nbsp;</label>";
                }
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
                // line 48
                if (($context["S_COND_SELECT"] ?? null)) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    if (($context["S_TEXT_CONDITION"] ?? null)) {
                        // line 50
                        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"rule_string\" value=\"";
                        echo ($context["CURRENT_STRING"] ?? null);
                        echo "\" class=\"inputbox medium\" maxlength=\"250\" />
\t\t\t\t\t\t";
                    } elseif (                    // line 51
($context["S_USER_CONDITION"] ?? null)) {
                        // line 52
                        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"rule_string\" value=\"";
                        echo ($context["CURRENT_STRING"] ?? null);
                        echo "\" class=\"inputbox tiny\" />&nbsp;<span>[ <a href=\"";
                        echo ($context["U_FIND_USERNAME"] ?? null);
                        echo "\" onclick=\"find_username(this.href); return false;\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                        echo "</a> ]</span>
\t\t\t\t\t\t";
                    } elseif (                    // line 53
($context["S_GROUP_CONDITION"] ?? null)) {
                        // line 54
                        echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rule_string\" value=\"";
                        echo ($context["CURRENT_STRING"] ?? null);
                        echo "\" />";
                        if (($context["S_GROUP_OPTIONS"] ?? null)) {
                            echo "<select name=\"rule_group_id\">";
                            echo ($context["S_GROUP_OPTIONS"] ?? null);
                            echo "</select>";
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_GROUPS");
                        }
                        // line 55
                        echo "\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t<input type=\"submit\" name=\"next\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT_STEP");
                    echo "\" class=\"button2\" />
\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t<strong>";
                    echo ($context["COND_CURRENT"] ?? null);
                    echo "</strong><input type=\"hidden\" name=\"rule_string\" value=\"";
                    echo ($context["CURRENT_STRING"] ?? null);
                    echo "\" /><input type=\"hidden\" name=\"rule_user_id\" value=\"";
                    echo ($context["CURRENT_USER_ID"] ?? null);
                    echo "\" /><input type=\"hidden\" name=\"rule_group_id\" value=\"";
                    echo ($context["CURRENT_GROUP_ID"] ?? null);
                    echo "\" />
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
            }
            // line 63
            echo "\t\t<input type=\"hidden\" name=\"cond_option\" value=\"";
            echo ($context["COND_OPTION"] ?? null);
            echo "\" />
\t";
        }
        // line 65
        echo "

\t";
        // line 67
        if (($context["NONE_CONDITION"] ?? null)) {
            echo "<input type=\"hidden\" name=\"cond_option\" value=\"none\" />";
        }
        // line 68
        echo "
\t";
        // line 69
        if (($context["S_ACTION_DEFINED"] ?? null)) {
            // line 70
            echo "\t\t<dl>
\t\t\t<dt>";
            // line 71
            if (($context["S_ACTION_SELECT"] ?? null)) {
                echo "<input type=\"submit\" name=\"back[action]\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<label>&nbsp;</label>";
            }
            echo "</dt>
\t\t\t<dd>";
            // line 72
            if (($context["S_ACTION_SELECT"] ?? null)) {
                echo " <select name=\"action_option\">";
                echo ($context["S_ACTION_OPTIONS"] ?? null);
                echo "</select> <input type=\"submit\" name=\"add_rule\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_RULE");
                echo "\" class=\"button1\" />";
            } else {
                echo ($context["ACTION_CURRENT"] ?? null);
                echo "<input type=\"hidden\" name=\"action_option\" value=\"";
                echo ($context["ACTION_OPTION"] ?? null);
                echo "\" />";
            }
            echo "</dd>
\t\t</dl>
\t";
        }
        // line 75
        echo "
\t</fieldset>

\t<h3>";
        // line 78
        echo $this->extensions['phpbb\template\twig\extension']->lang("FOLDER_OPTIONS");
        echo "</h3>

\t<fieldset class=\"fields2\">

\t";
        // line 82
        if ( !($context["S_MAX_FOLDER_ZERO"] ?? null)) {
            // line 83
            echo "\t<dl>
\t\t<dt><label for=\"foldername\">";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FOLDER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 85
            if (($context["S_MAX_FOLDER_REACHED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_FOLDER_REACHED");
            } else {
                echo "<input type=\"text\" class=\"inputbox medium\" name=\"foldername\" id=\"foldername\" size=\"30\" maxlength=\"30\" /> <input class=\"button2\" type=\"submit\" name=\"addfolder\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                echo "\" />";
            }
            echo "</dd>
\t</dl>
\t";
            // line 87
            if (($context["S_FOLDER_OPTIONS"] ?? null)) {
                echo "<hr class=\"dashed\" />";
            }
            // line 88
            echo "\t";
        }
        // line 89
        echo "


\t";
        // line 92
        if (($context["S_FOLDER_OPTIONS"] ?? null)) {
            // line 93
            echo "\t\t<dl>
\t\t\t<dt><label for=\"rename_folder_id\">";
            // line 94
            echo $this->extensions['phpbb\template\twig\extension']->lang("RENAME_FOLDER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"rename_folder_id\" id=\"rename_folder_id\">";
            // line 95
            echo ($context["S_FOLDER_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t<dt><label for=\"new_folder_name\">";
            // line 96
            echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_FOLDER_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" class=\"inputbox tiny\" name=\"new_folder_name\" id=\"new_folder_name\" maxlength=\"30\" /> <input class=\"button2\" type=\"submit\" name=\"rename_folder\" value=\"";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("RENAME");
            echo "\" /></dd>
\t\t</dl>
\t\t<hr class=\"dashed\" />
\t\t<dl>
\t\t\t<dt><label for=\"remove_folder_id\">";
            // line 101
            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FOLDER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"remove_folder_id\" id=\"remove_folder_id\">";
            // line 102
            echo ($context["S_FOLDER_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><label for=\"remove_action1\"><input type=\"radio\" name=\"remove_action\" id=\"remove_action1\" value=\"1\" checked=\"checked\" /> ";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_DELETED_MESSAGES_TO");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label> <select name=\"move_to\">";
            echo ($context["S_TO_FOLDER_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><label for=\"remove_action2\"><input type=\"radio\" name=\"remove_action\" id=\"remove_action2\" value=\"2\" /> ";
            // line 104
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MESSAGES_IN_FOLDER");
            echo "</label></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><input class=\"button2\" type=\"submit\" name=\"remove_folder\" value=\"";
            // line 105
            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE");
            echo "\" /></dd>
\t\t</dl>
\t";
        }
        // line 108
        echo "
\t<hr class=\"dashed\" />

\t<dl>
\t\t<dt><label for=\"full_action1\">";
        // line 112
        echo $this->extensions['phpbb\template\twig\extension']->lang("IF_FOLDER_FULL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action1\"><input type=\"radio\" name=\"full_action\" id=\"full_action1\" value=\"1\"";
        // line 113
        echo ($context["S_DELETE_CHECKED"] ?? null);
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_OLDEST_MESSAGES");
        echo "</label></dd>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action2\"><input type=\"radio\" name=\"full_action\" id=\"full_action2\" value=\"2\"";
        // line 114
        echo ($context["S_MOVE_CHECKED"] ?? null);
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_TO_FOLDER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label> <select name=\"full_move_to\">";
        echo ($context["S_FULL_FOLDER_OPTIONS"] ?? null);
        echo "</select></dd>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action3\" style=\"white-space:normal;\"><input type=\"radio\" name=\"full_action\" id=\"full_action3\" value=\"3\"";
        // line 115
        echo ($context["S_HOLD_CHECKED"] ?? null);
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("HOLD_NEW_MESSAGES");
        echo "</label></dd>
\t</dl>


\t<dl>
\t\t<dt><label>";
        // line 120
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_ACTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_ACTION_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 121
        echo ($context["DEFAULT_ACTION"] ?? null);
        echo "</dd>
\t\t<dd><input class=\"button2\" type=\"submit\" name=\"fullfolder\" value=\"";
        // line 122
        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE");
        echo "\" /></dd>
\t</dl>
\t</fieldset>

\t</div>
\t";
        // line 127
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</div>
</form>

";
        // line 131
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_options.html", 131)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 131,  492 => 127,  484 => 122,  480 => 121,  473 => 120,  463 => 115,  454 => 114,  448 => 113,  443 => 112,  437 => 108,  431 => 105,  427 => 104,  420 => 103,  416 => 102,  411 => 101,  404 => 97,  399 => 96,  395 => 95,  390 => 94,  387 => 93,  385 => 92,  380 => 89,  377 => 88,  373 => 87,  362 => 85,  357 => 84,  354 => 83,  352 => 82,  345 => 78,  340 => 75,  323 => 72,  313 => 71,  310 => 70,  308 => 69,  305 => 68,  301 => 67,  297 => 65,  291 => 63,  286 => 60,  274 => 58,  268 => 56,  265 => 55,  254 => 54,  252 => 53,  243 => 52,  241 => 51,  236 => 50,  233 => 49,  231 => 48,  220 => 46,  217 => 45,  214 => 44,  212 => 43,  209 => 42,  191 => 39,  181 => 38,  178 => 37,  176 => 36,  173 => 35,  168 => 32,  155 => 31,  145 => 29,  142 => 28,  140 => 27,  133 => 23,  129 => 21,  120 => 19,  92 => 17,  87 => 16,  81 => 13,  78 => 12,  71 => 11,  65 => 10,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_options.html", "");
    }
}
