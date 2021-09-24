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

/* ucp_main_bookmarks.html */
class __TwigTemplate_1a99754b696ed63c4198e8b0409f7b06a82818d5f2956da5692fa0f78f50e0ef extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_bookmarks.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARKS_EXPLAIN");
        echo "</p>

";
        // line 12
        if (($context["S_NO_DISPLAY_BOOKMARKS"] ?? null)) {
            // line 13
            echo "\t<p class=\"error\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARKS_DISABLED");
            echo "</p>
";
        } else {
            // line 15
            echo "
";
            // line 16
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 16))) {
                // line 17
                echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"row-item\">
\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARKS");
                echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 29
                    echo "\t\t<li class=\"row";
                    if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 29)) {
                        echo " reported";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 29) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_DELETED_TOPIC", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><strong>";
                        // line 32
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETED_TOPIC");
                        echo "</strong></div></dt>
\t\t\t\t\t<dd class=\"lastpost\"><span>&nbsp;</span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 34);
                        echo "]\" id=\"t";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 34);
                        echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t<dl class=\"row-item ";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 37);
                        echo "\">
\t\t\t\t<dt";
                        // line 38
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 38)) {
                            echo " style=\"background-image: url(";
                            echo ($context["T_ICONS_PATH"] ?? null);
                            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 38);
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 38);
                        echo "\">
\t\t\t\t\t";
                        // line 39
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 39)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 39);
                            echo "\" class=\"row-item-link\"></a>";
                        }
                        // line 40
                        echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                        // line 41
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 41)) {
                            // line 42
                            echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 42);
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 43
                            echo ($context["NEW_POST"] ?? null);
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 45
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 45);
                        echo "\" class=\"topictitle\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 45);
                        echo "</a>
\t\t\t\t\t\t";
                        // line 46
                        if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 46) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 46))) {
                            // line 47
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 47);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 48
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 51)) {
                            // line 52
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 52);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 53
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 56
                        echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
                        // line 57
                        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 57))) {
                            // line 58
                            echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 60));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 61
                                echo "\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 61)) {
                                    // line 62
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 62)) {
                                    echo "<li class=\"active\"><span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 62);
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif (twig_get_attribute($this->env, $this->source,                                 // line 63
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 63)) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif (twig_get_attribute($this->env, $this->source,                                 // line 64
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 64)) {
                                    // line 65
                                    echo "\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 65);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 65);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                }
                                // line 67
                                echo "\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 68
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                        // line 72
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 72)) {
                            echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 73
                        echo "\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 73);
                        echo " &raquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 73);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 76
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 76)) {
                            echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 77);
                        echo " &laquo;
\t\t\t\t\t\t\t<a href=\"";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 78);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 78);
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        // line 82
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " </dfn>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 82);
                        echo "
\t\t\t\t\t<a href=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 83);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 84
                        echo ($context["VIEW_LATEST_POST"] ?? null);
                        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<br />";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 86);
                        echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 88);
                        echo "]\" id=\"t";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 88);
                        echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 91
                    echo "\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "\t</ul>

\t<div class=\"action-bar bar-bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
                // line 97
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "
\t\t\t";
                // line 98
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 98))) {
                    // line 99
                    echo "\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_main_bookmarks.html", 99)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 100
                    echo "\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t";
                }
                // line 103
                echo "\t\t</div>
\t</div>

";
            } else {
                // line 107
                echo "\t<p><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BOOKMARKS");
                echo "</strong></p>
";
            }
            // line 109
            echo "
";
        }
        // line 111
        echo "
\t</div>
</div>

";
        // line 115
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 115)) &&  !($context["S_NO_DISPLAY_BOOKMARKS"] ?? null))) {
            // line 116
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unbookmark\" value=\"";
            // line 117
            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_BOOKMARK_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', '', true); return false;\">";
            // line 118
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', '', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 119
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        }
        // line 122
        echo "</form>

";
        // line 124
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_bookmarks.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 124,  426 => 122,  420 => 119,  414 => 118,  410 => 117,  407 => 116,  405 => 115,  399 => 111,  395 => 109,  389 => 107,  383 => 103,  377 => 101,  374 => 100,  361 => 99,  359 => 98,  355 => 97,  349 => 93,  342 => 91,  334 => 88,  329 => 86,  324 => 84,  318 => 83,  310 => 82,  299 => 78,  290 => 77,  286 => 76,  275 => 73,  271 => 72,  268 => 71,  263 => 68,  257 => 67,  247 => 65,  245 => 64,  239 => 63,  232 => 62,  229 => 61,  225 => 60,  221 => 58,  219 => 57,  216 => 56,  210 => 53,  203 => 52,  200 => 51,  194 => 48,  187 => 47,  185 => 46,  178 => 45,  172 => 43,  167 => 42,  165 => 41,  162 => 40,  156 => 39,  145 => 38,  140 => 37,  132 => 34,  127 => 32,  124 => 31,  122 => 30,  111 => 29,  107 => 28,  98 => 22,  94 => 21,  90 => 20,  85 => 17,  83 => 16,  80 => 15,  74 => 13,  72 => 12,  67 => 10,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_bookmarks.html", "");
    }
}
