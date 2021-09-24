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

/* mcp_queue.html */
class __TwigTemplate_00776c09100f446adad8c8ed061d3f524a008a4037fbfdc10c0caa01758e90bb extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"mcp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\">

<fieldset class=\"forum-selection\">
\t<label for=\"fo\">";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <select name=\"f\" id=\"fo\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
        echo "\" class=\"button2\" />
\t";
        // line 8
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>

<h2>";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
        echo "</p>

\t";
        // line 18
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 18))) {
            // line 19
            echo "\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 21
            echo ($context["TOTAL"] ?? null);
            echo "
\t\t\t\t";
            // line 22
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 22))) {
                // line 23
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 23)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 24
                echo "\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t</div>

\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 33
            if (($context["S_TOPICS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST");
            }
            echo "</div></dt>
\t\t\t\t\t<dd class=\"moderation\"><span>";
            // line 34
            if ( !($context["S_TOPICS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " &amp; ";
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
            echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 42
                echo "
\t\t";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETED_TOPIC", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "\t\t\t<li><p class=\"notopics\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETED_TOPIC");
                    echo "</p></li>
\t\t";
                } else {
                    // line 46
                    echo "
\t\t<li class=\"row";
                    // line 47
                    if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 47) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_VIEW_DETAILS", [], "any", false, false, false, 51);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 51);
                    echo "</a>";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 51)) {
                        echo " <i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                    }
                    echo "<br />
\t\t\t\t\t\t<span>";
                    // line 52
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 52);
                    echo " &raquo; ";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_TIME", [], "any", false, false, false, 52);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t<span>
\t\t\t\t\t\t";
                    // line 57
                    if (($context["S_TOPICS"] ?? null)) {
                        echo "<br />";
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_TOPIC", [], "any", false, false, false, 57);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_TITLE", [], "any", false, false, false, 57);
                        echo "</a> <br />";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_VIEWFORUM", [], "any", false, false, false, 58);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "FORUM_NAME", [], "any", false, false, false, 58);
                    echo "</a>
\t\t\t\t\t</span>
\t\t\t\t</dd>


\t\t \t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 64
                    if (($context["S_TOPICS"] ?? null)) {
                        // line 65
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_ID", [], "any", false, false, false, 65);
                        echo "\" />
\t\t\t\t\t";
                    } else {
                        // line 67
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 67);
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
\t\t";
                }
                // line 73
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t</ul>

\t\t<div class=\"action-bar bottom\">
\t\t\t";
            // line 77
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_queue.html", 77)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 78
            echo "\t\t\t";
            if (($context["TOPIC_ID"] ?? null)) {
                echo "<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                echo ($context["TOPIC_ID"] ?? null);
                echo "\" checked=\"checked\" onClick=\"document.getElementById('mcp').submit()\" /> <strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 79
            echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 81
            echo ($context["TOTAL"] ?? null);
            echo "
\t\t\t\t";
            // line 82
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 82))) {
                // line 83
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 83)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 84
                echo "\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 91
            echo "\t\t<p class=\"notopics\"><strong>
\t\t\t";
            // line 92
            if (($context["S_RESTORE"] ?? null)) {
                // line 93
                echo "\t\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS_DELETED");
                }
                // line 94
                echo "\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS_QUEUE");
                }
                // line 96
                echo "\t\t\t";
            }
            // line 97
            echo "\t\t</strong></p>
\t";
        }
        // line 99
        echo "
\t</div>
</div>

";
        // line 103
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 103))) {
            // line 104
            echo "\t<fieldset class=\"display-actions\">
\t\t";
            // line 105
            if (($context["S_RESTORE"] ?? null)) {
                // line 106
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 107
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" />
\t\t";
            } else {
                // line 109
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 110
                echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                echo "\" />
\t\t";
            }
            // line 112
            echo "\t\t<div>
\t\t\t";
            // line 113
            if (($context["S_TOPICS"] ?? null)) {
                // line 114
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            }
            // line 118
            echo "\t\t</div>
\t</fieldset>
";
        }
        // line 121
        echo "</form>

";
        // line 123
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 123)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 123,  413 => 121,  408 => 118,  400 => 116,  392 => 114,  390 => 113,  387 => 112,  382 => 110,  377 => 109,  372 => 107,  367 => 106,  365 => 105,  362 => 104,  360 => 103,  354 => 99,  350 => 97,  347 => 96,  340 => 95,  337 => 94,  330 => 93,  328 => 92,  325 => 91,  319 => 87,  313 => 85,  310 => 84,  297 => 83,  295 => 82,  291 => 81,  287 => 79,  278 => 78,  266 => 77,  261 => 74,  255 => 73,  249 => 69,  243 => 67,  237 => 65,  235 => 64,  220 => 58,  208 => 57,  194 => 52,  184 => 51,  173 => 47,  170 => 46,  164 => 44,  162 => 43,  159 => 42,  155 => 41,  146 => 35,  138 => 34,  130 => 33,  122 => 27,  116 => 25,  113 => 24,  100 => 23,  98 => 22,  94 => 21,  90 => 19,  88 => 18,  83 => 16,  75 => 11,  69 => 8,  65 => 7,  58 => 6,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_queue.html", "");
    }
}
