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

/* search_results.html */
class __TwigTemplate_452b18ba79cae01ddbe39969d1e2b5869c29ffe08570de18673d010b2807a428 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCHED_QUERY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 7
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IGNORED_TERMS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</strong></p>";
        }
        // line 8
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo " <p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 11
            echo "\t<p class=\"return-link\">
\t\t<a class=\"arrow-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 13
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
";
        } else {
            // line 17
            echo "\t<p class=\"advanced-search-link\">
\t\t<a class=\"arrow-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 19
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
";
        }
        // line 23
        echo "
";
        // line 24
        // line 25
        echo "
";
        // line 26
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 26)) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 27
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 29
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 30
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 31
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 33
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 44
            echo "
\t\t";
            // line 45
            // line 46
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 49
            echo "\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t";
            // line 50
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 51)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 52
                echo "\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 60
            echo "
\t";
            // line 61
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 61))) {
                // line 62
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 69
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 71
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 78
                    echo "\t\t\t";
                    // line 79
                    echo "\t\t\t<li class=\"row\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                    // line 81
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81)) {
                        echo " style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 81);
                    echo "\">
\t\t\t\t\t\t";
                    // line 82
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 82) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 82);
                        echo "\" class=\"row-item-link\"></a>";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t";
                    // line 84
                    // line 85
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 85) &&  !($context["S_IS_BOT"] ?? null))) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 86);
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 87
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_POST");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 90);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 90);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 91
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 91) || twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 91))) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 92);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 93
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_DELETED", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 97);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 98
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_REPORTED", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_REPORT", [], "any", false, false, false, 102);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 103
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
                    // line 107
                    // line 108
                    echo "
\t\t\t\t\t\t\t";
                    // line 109
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t";
                        // line 111
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 111);
                        echo " &laquo; <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 111);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 111);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 111);
                        echo "</time></a>
\t\t\t\t\t\t\t\t\t<br />";
                        // line 112
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 112);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 112);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 114
                        if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 114)) {
                            echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 114);
                            echo "</strong></span>";
                        }
                        // line 115
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "
\t\t\t\t\t\t\t<div class=\"responsive-hide left-box\">
\t\t\t\t\t\t\t\t";
                    // line 118
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_HAS_POLL", [], "any", false, false, false, 118)) {
                        echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 119
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "ATTACH_ICON_IMG", [], "any", false, false, false, 119)) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t\t\t";
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 121);
                    echo " &raquo; <time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 121);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME", [], "any", false, false, false, 121);
                    echo "</time> &raquo; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 121);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 121);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                    // line 122
                    // line 123
                    echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                    // line 125
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 125))) {
                        // line 126
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 129
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 129));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 130
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 130)) {
                                // line 131
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 131)) {
                                echo "<li class=\"active\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 131);
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 132
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 132)) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 133
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 133)) {
                                // line 134
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a class=\"button\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 134);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 134);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 136
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 137
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "
\t\t\t\t\t\t\t";
                    // line 141
                    // line 142
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 144);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 145);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
                    // line 147
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 147);
                    // line 148
                    echo "\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 149);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 150
                        echo ($context["VIEW_LATEST_POST"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "\t\t\t\t\t\t\t<br /><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 153);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 153);
                    echo "</time>
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 158
                    // line 159
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 165
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 167
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 171
            echo "
";
        } else {
            // line 173
            echo "
\t";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 174));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 175
                echo "\t\t";
                // line 176
                echo "\t\t<div class=\"search post ";
                if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 176) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POST_REPORTED", [], "any", false, false, false, 176)) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "L_IGNORE_POST", [], "any", false, false, false, 181);
                    echo "
\t\t</div>
\t";
                } else {
                    // line 184
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 185
                    // line 186
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_AUTHOR_FULL", [], "any", false, false, false, 186);
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_DATE", [], "any", false, false, false, 187);
                    echo "</dd>
\t\t\t<dd>";
                    // line 188
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 188);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 189
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 189);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 189);
                    echo "</a></dd>
\t\t\t";
                    // line 190
                    // line 191
                    echo "\t\t\t<dd>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 191);
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 192
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 192);
                    echo "</strong></dd>
\t\t\t";
                    // line 193
                    // line 194
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 197);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_SUBJECT", [], "any", false, false, false, 197);
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "MESSAGE", [], "any", false, false, false, 198);
                    echo "</div>
\t\t\t";
                    // line 199
                    // line 200
                    echo "\t\t</div>
\t";
                }
                // line 202
                echo "
\t";
                // line 203
                if ( !twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li>
\t\t\t\t<a href=\"";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 206);
                    echo "\" class=\"arrow-";
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo "\">
\t\t\t\t\t<i class=\"icon fa-angle-";
                    // line 207
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_POST");
                    echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t";
                }
                // line 212
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 215
                // line 216
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 217
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 219
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 224
        echo "
<div class=\"action-bar bottom\">
\t";
        // line 226
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 226)) && (($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null)))) {
            // line 227
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 228
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 228)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 229
            echo "\t</form>
\t\t";
        }
        // line 231
        echo "
\t<div class=\"pagination\">
\t\t";
        // line 233
        echo ($context["SEARCH_MATCHES"] ?? null);
        echo "
\t\t";
        // line 234
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 234))) {
            // line 235
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 235)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 236
            echo "\t\t";
        } else {
            // line 237
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 239
        echo "\t</div>
</div>

";
        // line 242
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 242)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 243
        echo "
";
        // line 244
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 244)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 244,  831 => 243,  819 => 242,  814 => 239,  808 => 237,  805 => 236,  792 => 235,  790 => 234,  786 => 233,  782 => 231,  778 => 229,  766 => 228,  761 => 227,  759 => 226,  755 => 224,  744 => 219,  740 => 217,  735 => 216,  734 => 215,  729 => 212,  719 => 207,  713 => 206,  709 => 204,  707 => 203,  704 => 202,  700 => 200,  699 => 199,  695 => 198,  689 => 197,  684 => 194,  683 => 193,  676 => 192,  668 => 191,  667 => 190,  658 => 189,  649 => 188,  645 => 187,  638 => 186,  637 => 185,  634 => 184,  628 => 181,  625 => 180,  623 => 179,  609 => 176,  607 => 175,  602 => 174,  599 => 173,  595 => 171,  588 => 167,  584 => 165,  577 => 160,  571 => 159,  570 => 158,  559 => 153,  553 => 150,  546 => 149,  543 => 148,  537 => 147,  530 => 145,  524 => 144,  520 => 142,  519 => 141,  516 => 140,  511 => 137,  505 => 136,  495 => 134,  493 => 133,  487 => 132,  480 => 131,  477 => 130,  473 => 129,  468 => 126,  466 => 125,  462 => 123,  461 => 122,  444 => 121,  442 => 120,  437 => 119,  433 => 118,  429 => 116,  426 => 115,  417 => 114,  406 => 112,  390 => 111,  387 => 110,  385 => 109,  382 => 108,  381 => 107,  378 => 106,  372 => 103,  365 => 102,  362 => 101,  356 => 98,  349 => 97,  346 => 96,  340 => 93,  333 => 92,  331 => 91,  324 => 90,  318 => 87,  313 => 86,  310 => 85,  309 => 84,  306 => 83,  300 => 82,  289 => 81,  285 => 79,  283 => 78,  279 => 77,  270 => 71,  266 => 70,  262 => 69,  258 => 68,  250 => 62,  248 => 61,  245 => 60,  243 => 59,  240 => 58,  235 => 55,  229 => 53,  226 => 52,  213 => 51,  211 => 50,  206 => 49,  198 => 48,  194 => 46,  193 => 45,  190 => 44,  181 => 38,  175 => 37,  170 => 35,  166 => 34,  162 => 33,  157 => 31,  154 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  142 => 24,  139 => 23,  130 => 19,  122 => 18,  119 => 17,  110 => 13,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  90 => 8,  81 => 7,  72 => 6,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
