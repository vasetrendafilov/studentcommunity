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

/* forumlist_body.html */
class __TwigTemplate_cea8d65df7d96e635a69736afb7dee544faec71730a311b4a9d11404bed02acd extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 3)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 3))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 11)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 12)) {
                    // line 13
                    echo " <h2 class=\"forum-category\">
\t<a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 14);
                    echo "</a></h2>
\t";
                }
                // line 16
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist-new forums\">
\t";
            }
            // line 20
            echo "\t";
            // line 21
            echo "
\t";
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t";
                // line 24
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t<div class=\"row-item\">
\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 27);
                echo "\" class=\"forumtitle\">
\t\t\t\t<div title=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 28);
                echo "\" class=\"row_1\">
\t\t\t\t\t\t";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    // line 31
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 31);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 32
                    // line 33
                    echo "\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span  class=\"title-title\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 35);
                echo "</span>
\t\t\t\t\t\t\t<span class=\"title-description\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 36);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "\t\t\t\t\t<div class=\"redirect\"><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 40);
                    echo "</span></div>
\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 41
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t <div class=\"row_2\">
\t\t\t\t\t<div class=\"topics\">";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 43);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "</dfn></div>
\t\t\t\t\t<div class=\"posts\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 44);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</dfn></div>
\t\t\t\t\t<div class=\"lastpost\">
\t\t\t\t\t\t\t";
                    // line 46
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 46)) {
                        // line 47
                        echo "\t\t\t\t\t\t<time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 47);
                        echo "\">";
                        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 47), 0, 16);
                        echo "</time>
\t\t\t\t\t\t<dfn title=\"";
                        // line 48
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 49
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 49)) > 16)) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 50), 0, 16);
                            echo "...
\t\t\t\t\t\t\t";
                        } else {
                            // line 52
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 52);
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 54
                        echo "\t\t\t\t\t\t</dfn>
\t\t\t\t\t\t";
                    } else {
                        // line 56
                        echo "\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 56)) {
                            // line 57
                            echo "\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 57));
                            echo "
\t\t\t\t\t\t";
                        } else {
                            // line 59
                            echo "\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
                // line 67
                // line 68
                echo "\t\t</li>
\t\t";
                // line 69
                // line 70
                echo "\t";
            }
            // line 71
            echo "
\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 77
                // line 78
                echo "\t";
            }
            // line 79
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 83
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 83,  246 => 81,  240 => 79,  237 => 78,  236 => 77,  230 => 73,  228 => 72,  225 => 71,  222 => 70,  221 => 69,  218 => 68,  217 => 67,  212 => 64,  208 => 62,  205 => 61,  199 => 59,  193 => 57,  190 => 56,  186 => 54,  180 => 52,  174 => 50,  172 => 49,  168 => 48,  161 => 47,  159 => 46,  152 => 44,  146 => 43,  143 => 42,  141 => 41,  133 => 40,  131 => 39,  125 => 36,  121 => 35,  118 => 34,  115 => 33,  114 => 32,  109 => 31,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  94 => 26,  93 => 25,  90 => 24,  88 => 23,  86 => 22,  83 => 21,  81 => 20,  75 => 16,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  58 => 10,  55 => 9,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
