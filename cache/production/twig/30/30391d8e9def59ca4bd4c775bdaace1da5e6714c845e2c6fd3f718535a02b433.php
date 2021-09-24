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

/* ucp_main_drafts.html */
class __TwigTemplate_0ddf0e201a680b9d4a819b6d8fb69d68f1c2764f56f8ae69f0cbc89e7dc83029 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
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
        echo $this->extensions['phpbb\template\twig\extension']->lang("DRAFTS_EXPLAIN");
        echo "</p>

";
        // line 12
        if (($context["S_EDIT_DRAFT"] ?? null)) {
            // line 13
            echo "
\t\t";
            // line 14
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "\t\t</div>
\t</div>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 19
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"reset\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE");
            echo "\" class=\"button1\" />
\t\t\t\t";
            // line 21
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</fieldset>

";
        } else {
            // line 25
            echo "
\t";
            // line 26
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "draftrow", [], "any", false, false, false, 26))) {
                // line 27
                echo "\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 30
                echo $this->extensions['phpbb\template\twig\extension']->lang("DRAFT_TITLE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 31
                echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DATE");
                echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
                // line 32
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist missing-column\">

\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "draftrow", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 39
                    echo "\t\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, $context["draftrow"], "S_ROW_COUNT", [], "any", false, false, false, 39) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a class=\"topictitle\" href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW_EDIT", [], "any", false, false, false, 43);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DRAFT_SUBJECT", [], "any", false, false, false, 43);
                    echo "</a><br />
\t\t\t\t\t\t\t";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, $context["draftrow"], "S_LINK_TOPIC", [], "any", false, false, false, 44)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW", [], "any", false, false, false, 44);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "TITLE", [], "any", false, false, false, 44);
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 45
$context["draftrow"], "S_LINK_FORUM", [], "any", false, false, false, 45)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW", [], "any", false, false, false, 45);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "TITLE", [], "any", false, false, false, 45);
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif (                    // line 46
($context["S_PRIVMSGS"] ?? null)) {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_FORUM");
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                    // line 49
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DATE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DATE", [], "any", false, false, false, 49);
                    echo "</strong><br />
\t\t\t\t\t\t\t\t";
                    // line 50
                    if (twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_INSERT", [], "any", false, false, false, 50)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_INSERT", [], "any", false, false, false, 50);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW_EDIT", [], "any", false, false, false, 50);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DATE", [], "any", false, false, false, 54);
                    echo "<br />";
                    if (twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_INSERT", [], "any", false, false, false, 54)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_INSERT", [], "any", false, false, false, 54);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW_EDIT", [], "any", false, false, false, 54);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_EDIT");
                    echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"d[";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DRAFT_ID", [], "any", false, false, false, 55);
                    echo "]\" id=\"d";
                    echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DRAFT_ID", [], "any", false, false, false, 55);
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t</ul>
\t";
            } else {
                // line 61
                echo "\t\t<p><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SAVED_DRAFTS");
                echo "</strong></p>
\t";
            }
            // line 63
            echo "
\t\t</div>
\t</div>

\t";
            // line 67
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "draftrow", [], "any", false, false, false, 67))) {
                // line 68
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
                // line 69
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('postform', '', true); return false;\">";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('postform', '', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t";
                // line 71
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>
\t";
            }
            // line 74
            echo "
";
        }
        // line 76
        echo "
</form>

";
        // line 79
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 79,  284 => 76,  280 => 74,  274 => 71,  268 => 70,  264 => 69,  261 => 68,  259 => 67,  253 => 63,  247 => 61,  243 => 59,  231 => 55,  215 => 54,  198 => 50,  191 => 49,  188 => 48,  183 => 47,  181 => 46,  171 => 45,  161 => 44,  155 => 43,  143 => 39,  139 => 38,  130 => 32,  126 => 31,  122 => 30,  117 => 27,  115 => 26,  112 => 25,  105 => 21,  101 => 20,  95 => 19,  89 => 15,  77 => 14,  74 => 13,  72 => 12,  67 => 10,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_drafts.html", "");
    }
}
