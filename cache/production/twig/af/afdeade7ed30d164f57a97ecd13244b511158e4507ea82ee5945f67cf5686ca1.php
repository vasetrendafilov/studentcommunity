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

/* mcp_post.html */
class __TwigTemplate_9836407f11d16ee90f471d7c606393571e1c3a485523a88cc5ae1066d759bccf extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["S_MCP_REPORT"] ?? null)) {
            // line 4
            echo "\t";
            if (($context["S_PM"] ?? null)) {
                // line 5
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["REPORT_REASON_TITLE"] ?? null);
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["REPORTER_FULL"] ?? null);
            echo " &laquo; ";
            echo ($context["REPORT_DATE"] ?? null);
            echo "</p>
\t\t";
            // line 16
            if (($context["S_REPORT_CLOSED"] ?? null)) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (($context["REPORT_TEXT"] ?? null)) {
                // line 21
                echo "\t\t\t\t";
                echo ($context["REPORT_TEXT"] ?? null);
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                echo ($context["REPORT_REASON_DESCRIPTION"] ?? null);
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            echo ($context["S_CLOSE_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            // line 35
            echo "\t\t";
            if ( !($context["S_REPORT_CLOSED"] ?? null)) {
                // line 36
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 38
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t";
            // line 39
            // line 40
            echo "\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            echo ($context["REPORT_ID"] ?? null);
            echo "\" />
\t\t";
            // line 41
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 46
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 48
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 53
        echo ($context["U_VIEW_POST"] ?? null);
        echo "\">";
        echo ($context["POST_SUBJECT"] ?? null);
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data.trim() == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "';} return false;\">
\t\t\t\t\t";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 61
        if (($context["U_EDIT"] ?? null)) {
            // line 62
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["U_EDIT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "\" class=\"button\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 68
        echo "\t\t</ul>

\t\t";
        // line 70
        if (($context["S_PM"] ?? null)) {
            // line 71
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_DATE"] ?? null);
            echo "
\t\t\t<br /><strong>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo "
\t\t\t";
            // line 74
            if (($context["S_TO_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 74)) {
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 74);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 74);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 74)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 74);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 74);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 75
            echo "\t\t\t";
            if (($context["S_BCC_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 75)) {
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 75);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 75);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 75)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 75);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 75);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 76
            echo "\t\t</p>
\t\t";
        } else {
            // line 78
            echo "\t\t<p class=\"author\"><span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["MINI_POST_IMG"] ?? null);
            echo "</span></span> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo " &raquo; ";
            echo ($context["POST_DATE"] ?? null);
            echo "</p>
\t\t";
        }
        // line 80
        echo "
\t\t";
        // line 81
        if (($context["S_POST_UNAPPROVED"] ?? null)) {
            // line 82
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 86
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 87
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 88
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 89
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif (        // line 92
($context["S_POST_DELETED"] ?? null)) {
            // line 93
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 96
            if (($context["S_CAN_DELETE_POST"] ?? null)) {
                echo "<input class=\"button2\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 97
            echo "\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 98
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 99
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 100
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 104
        echo "
\t\t";
        // line 105
        if (($context["S_MESSAGE_REPORTED"] ?? null)) {
            // line 106
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 107
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
            echo "</span> <a href=\"";
            echo ($context["U_MCP_REPORT"] ?? null);
            echo "\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 110
        echo "
\t\t";
        // line 111
        // line 112
        echo "
\t\t<div id=\"post_details\" class=\"content post_details\">
\t\t\t";
        // line 114
        echo ($context["POST_PREVIEW"] ?? null);
        echo "
\t\t</div>

\t\t";
        // line 117
        // line 118
        echo "
\t\t";
        // line 119
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 120
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 121
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 123
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 123);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t</dl>
\t\t";
        }
        // line 127
        echo "
\t\t";
        // line 128
        if ((($context["DELETED_MESSAGE"] ?? null) || ($context["DELETE_REASON"] ?? null))) {
            // line 129
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 130
            echo ($context["DELETED_MESSAGE"] ?? null);
            echo "
\t\t\t\t";
            // line 131
            if (($context["DELETE_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["DELETE_REASON"] ?? null);
                echo "</em>";
            }
            // line 132
            echo "\t\t\t</div>
\t\t";
        }
        // line 134
        echo "
\t\t";
        // line 135
        if (($context["SIGNATURE"] ?? null)) {
            // line 136
            echo "\t\t\t<div id=\"sig";
            echo ($context["POST_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 138
        echo "
\t\t";
        // line 139
        if ((($context["S_MCP_REPORT"] ?? null) && ($context["S_CAN_VIEWIP"] ?? null))) {
            // line 140
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 141
            if (($context["S_PM"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_PM_IP");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            if (($context["U_WHOIS"] ?? null)) {
                // line 142
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_WHOIS"] ?? null);
                echo "\">";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                } else {
                    echo ($context["POST_IP"] ?? null);
                }
                echo "</a> (";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IP"] ?? null);
                } else {
                    echo "<a href=\"";
                    echo ($context["U_LOOKUP_IP"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                    echo " (";
                    echo ($context["POST_IP"] ?? null);
                    echo ")";
                } else {
                    echo ($context["POST_IP"] ?? null);
                    if (($context["U_LOOKUP_IP"] ?? null)) {
                        echo " (<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 145
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 147
        echo "
\t</div>

\t</div>
</div>

";
        // line 153
        if ((((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null)) || ($context["S_CAN_CHGPOSTER"] ?? null)) || ($context["S_MCP_POST_ADDITIONAL_OPTS"] ?? null))) {
            // line 154
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 157
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 158
            if (($context["S_CAN_CHGPOSTER"] ?? null)) {
                // line 159
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 163
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_POSTER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 164
                if (($context["S_USER_SELECT"] ?? null)) {
                    echo "<dd><select name=\"u\">";
                    echo ($context["S_USER_SELECT"] ?? null);
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 165
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 167
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 169
                echo ($context["U_FIND_USERNAME"] ?? null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 172
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 176
            echo "
\t\t";
            // line 177
            // line 178
            echo "
\t\t";
            // line 179
            if ((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null))) {
                // line 180
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                echo ($context["U_MCP_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 184
                echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 186
                if (($context["S_CAN_LOCK_POST"] ?? null)) {
                    if (($context["S_POST_LOCKED"] ?? null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 187
                echo "\t\t\t\t\t";
                if (($context["S_CAN_DELETE_POST"] ?? null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 188
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 191
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 195
            echo "
\t\t</div>
\t</div>
";
        }
        // line 199
        echo "

";
        // line 201
        if (((($context["S_MCP_QUEUE"] ?? null) || ($context["S_MCP_REPORT"] ?? null)) || ($context["RETURN_TOPIC"] ?? null))) {
            // line 202
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 205
            if (($context["S_MCP_QUEUE"] ?? null)) {
                echo ($context["RETURN_QUEUE"] ?? null);
                echo " | ";
                echo ($context["RETURN_TOPIC_SIMPLE"] ?? null);
                echo " | ";
                echo ($context["RETURN_POST"] ?? null);
            } elseif (($context["S_MCP_REPORT"] ?? null)) {
                echo ($context["RETURN_REPORTS"] ?? null);
                if ( !($context["S_PM"] ?? null)) {
                    echo " | <a href=\"";
                    echo ($context["U_VIEW_POST"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_TOPIC"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo ($context["RETURN_TOPIC"] ?? null);
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 210
        echo "
";
        // line 211
        if (($context["S_MCP_QUEUE"] ?? null)) {
        } else {
            // line 213
            echo "
\t";
            // line 214
            if (($context["S_SHOW_USER_NOTES"] ?? null)) {
                // line 215
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 218
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t";
                // line 220
                if (($context["S_USER_NOTES"] ?? null)) {
                    // line 221
                    echo "\t\t\t\t<h3>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 223
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "usernotes", [], "any", false, false, false, 223));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 224
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_BY", [], "any", false, false, false, 224);
                        echo " &laquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_AT", [], "any", false, false, false, 224);
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 225
                        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ID", [], "any", false, false, false, 225);
                            echo "\" /></div>";
                        }
                        // line 226
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ACTION", [], "any", false, false, false, 226);
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "
\t\t\t\t";
                    // line 231
                    if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                        // line 232
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 233
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 234
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t";
                }
                // line 238
                echo "
\t\t\t<h3>";
                // line 239
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 240
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 247
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 248
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 249
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 256
            echo "
\t";
            // line 257
            if (($context["S_SHOW_REPORTS"] ?? null)) {
                // line 258
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 261
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 263
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reports", [], "any", false, false, false, 263));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 264
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 264)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 264);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 264);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 264);
                    }
                    echo " &laquo; ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TIME", [], "any", false, false, false, 264);
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_TITLE", [], "any", false, false, false, 265);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_DESC", [], "any", false, false, false, 265);
                    echo "</em>";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 265)) {
                        echo "<br />";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 265);
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 271
            echo "
\t";
            // line 272
            if ((($context["S_CAN_VIEWIP"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
                // line 273
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 276
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                if (($context["U_WHOIS"] ?? null)) {
                    // line 277
                    echo "\t\t\t\t<a href=\"";
                    echo ($context["U_WHOIS"] ?? null);
                    echo "\">";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                    } else {
                        echo ($context["POST_IP"] ?? null);
                    }
                    echo "</a> (";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IP"] ?? null);
                    } else {
                        echo "<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 279
                    echo "\t\t\t\t";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                        echo " (";
                        echo ($context["POST_IP"] ?? null);
                        echo ")";
                    } else {
                        echo ($context["POST_IP"] ?? null);
                        if (($context["U_LOOKUP_IP"] ?? null)) {
                            echo " (<a href=\"";
                            echo ($context["U_LOOKUP_IP"] ?? null);
                            echo "\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 280
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 285
                echo $this->extensions['phpbb\template\twig\extension']->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 286
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "userrow", [], "any", false, false, false, 290));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 291
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["userrow"], "S_ROW_COUNT", [], "any", false, false, false, 291) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 292
                    if (twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 292)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 292);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 292);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 292);
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_SEARCHPOSTS", [], "any", false, false, false, 293);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 293);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "NUM_POSTS", [], "any", false, false, false, 293);
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 296
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 297
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 304
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_post.html", 304)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 305
                echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 314
                echo $this->extensions['phpbb\template\twig\extension']->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 315
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iprow", [], "any", false, false, false, 319));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 320
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["iprow"], "S_ROW_COUNT", [], "any", false, false, false, 320) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 321
                    if (twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 321)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 321);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 321);
                        echo "</a> (";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 321);
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 321);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 321);
                        echo "</a> (<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_LOOKUP_IP", [], "any", false, false, false, 321);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["iprow"], "NUM_POSTS", [], "any", false, false, false, 322);
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 325
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 326
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"buttons\">
\t\t\t\t<p><a href=\"";
                // line 333
                echo ($context["U_LOOKUP_ALL"] ?? null);
                echo "#ip\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_ALL");
                echo "</a></p>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t<ul>
\t\t\t\t";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination_ips", [], "any", false, false, false, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination_ips"]) {
                    // line 339
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "S_IS_PREV", [], "any", false, false, false, 339)) {
                        // line 340
                        echo "\t\t\t\t\t<li class=\"arrow previous\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 340);
                        echo "\" rel=\"prev\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 341
$context["pagination_ips"], "S_IS_CURRENT", [], "any", false, false, false, 341)) {
                        // line 342
                        echo "\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 342);
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 343
$context["pagination_ips"], "S_IS_ELLIPSIS", [], "any", false, false, false, 343)) {
                        // line 344
                        echo "\t\t\t\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 345
$context["pagination_ips"], "S_IS_NEXT", [], "any", false, false, false, 345)) {
                        // line 346
                        echo "\t\t\t\t\t<li class=\"arrow next\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 346);
                        echo "\" rel=\"next\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 348
                        echo "\t\t\t\t\t<li><a class=\"button\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 348);
                        echo "\" role=\"button\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 348);
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    // line 350
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination_ips'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 357
            echo "
";
        }
        // line 359
        echo "
";
        // line 360
        if (($context["S_TOPIC_REVIEW"] ?? null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 360)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 361
        echo "
";
        // line 362
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 362)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1229 => 362,  1226 => 361,  1212 => 360,  1209 => 359,  1205 => 357,  1197 => 351,  1191 => 350,  1183 => 348,  1173 => 346,  1171 => 345,  1166 => 344,  1164 => 343,  1159 => 342,  1157 => 341,  1148 => 340,  1145 => 339,  1141 => 338,  1131 => 333,  1125 => 329,  1116 => 326,  1113 => 325,  1105 => 322,  1083 => 321,  1074 => 320,  1069 => 319,  1062 => 315,  1058 => 314,  1047 => 305,  1035 => 304,  1029 => 300,  1020 => 297,  1017 => 296,  1003 => 293,  991 => 292,  982 => 291,  977 => 290,  970 => 286,  966 => 285,  957 => 280,  940 => 279,  918 => 277,  913 => 276,  908 => 273,  906 => 272,  903 => 271,  897 => 267,  881 => 265,  863 => 264,  859 => 263,  854 => 261,  849 => 258,  847 => 257,  844 => 256,  834 => 249,  830 => 248,  826 => 247,  816 => 240,  812 => 239,  809 => 238,  806 => 237,  800 => 234,  796 => 233,  793 => 232,  791 => 231,  788 => 230,  777 => 226,  771 => 225,  761 => 224,  757 => 223,  751 => 221,  749 => 220,  744 => 218,  739 => 215,  737 => 214,  734 => 213,  731 => 211,  728 => 210,  695 => 205,  690 => 202,  688 => 201,  684 => 199,  678 => 195,  671 => 191,  664 => 188,  657 => 187,  641 => 186,  635 => 184,  627 => 180,  625 => 179,  622 => 178,  621 => 177,  618 => 176,  611 => 172,  603 => 169,  598 => 167,  594 => 165,  586 => 164,  581 => 163,  573 => 159,  571 => 158,  567 => 157,  562 => 154,  560 => 153,  552 => 147,  546 => 145,  529 => 144,  507 => 142,  498 => 141,  495 => 140,  493 => 139,  490 => 138,  482 => 136,  480 => 135,  477 => 134,  473 => 132,  464 => 131,  460 => 130,  457 => 129,  455 => 128,  452 => 127,  448 => 125,  439 => 123,  435 => 122,  431 => 121,  428 => 120,  426 => 119,  423 => 118,  422 => 117,  416 => 114,  412 => 112,  411 => 111,  408 => 110,  398 => 107,  395 => 106,  393 => 105,  390 => 104,  383 => 100,  378 => 99,  374 => 98,  369 => 97,  363 => 96,  356 => 93,  354 => 92,  348 => 89,  343 => 88,  339 => 87,  335 => 86,  331 => 85,  324 => 82,  322 => 81,  319 => 80,  305 => 78,  301 => 76,  270 => 75,  240 => 74,  233 => 73,  226 => 72,  223 => 71,  221 => 70,  217 => 68,  210 => 64,  204 => 63,  201 => 62,  199 => 61,  193 => 58,  183 => 57,  174 => 53,  167 => 48,  161 => 46,  153 => 41,  148 => 40,  147 => 39,  142 => 38,  136 => 36,  133 => 35,  132 => 34,  126 => 31,  118 => 25,  112 => 23,  106 => 21,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  83 => 15,  76 => 14,  69 => 9,  63 => 7,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_post.html", "");
    }
}
