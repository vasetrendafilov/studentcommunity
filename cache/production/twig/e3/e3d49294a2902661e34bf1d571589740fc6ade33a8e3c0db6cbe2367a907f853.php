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

/* mcp_approve.html */
class __TwigTemplate_d861d3e4d612a667f1837bb02a8a988019998098bcee6207c658ff4e41dac3b1 extends \Twig\Template
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
        if (($context["S_AJAX_REQUEST"] ?? null)) {
            // line 2
            echo "
\t<h3>";
            // line 3
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h3>
\t<p>";
            // line 4
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t";
            // line 6
            if (($context["S_NOTIFY_POSTER"] ?? null)) {
                // line 7
                echo "\t\t<label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                if (($context["S_APPROVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if ((( !($context["S_APPROVE"] ?? null) &&  !($context["S_RESTORE"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reason", [], "any", false, false, false, 10)))) {
                // line 11
                echo "\t\t<label><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE_REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t<select name=\"reason_id\">
\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reason", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reason"], "ID", [], "any", false, false, false, 13);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["reason"], "S_SELECTED", [], "any", false, false, false, 13)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["reason"], "DESCRIPTION", [], "any", false, false, false, 13);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</select></label>

\t\t<label><strong>";
                // line 16
                echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_INFO");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CAN_LEAVE_BLANK");
                echo "</span>
\t\t\t<textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 17
                echo ($context["REASON"] ?? null);
                echo "</textarea>
\t\t</label>
\t";
            }
            // line 20
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 22
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "mcp_approve.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t";
            // line 32
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t<div class=\"inner\">

\t<div class=\"content\">

\t\t<h2 class=\"message-title\">";
            // line 37
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>
\t\t";
            // line 38
            if (($context["ADDITIONAL_MSG"] ?? null)) {
                echo "<p class=\"error\">";
                echo ($context["ADDITIONAL_MSG"] ?? null);
                echo "</p>";
            }
            // line 39
            echo "
\t\t<fieldset>
\t\t";
            // line 41
            if (($context["S_NOTIFY_POSTER"] ?? null)) {
                // line 42
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                // line 44
                if (($context["S_APPROVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 47
            echo "
\t\t";
            // line 48
            if ((( !($context["S_APPROVE"] ?? null) &&  !($context["S_RESTORE"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reason", [], "any", false, false, false, 48)))) {
                // line 49
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label>";
                // line 50
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE_REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"reason_id\">
\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reason", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reason"], "ID", [], "any", false, false, false, 52);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["reason"], "S_SELECTED", [], "any", false, false, false, 52)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["reason"], "DESCRIPTION", [], "any", false, false, false, 52);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label for=\"reason\">";
                // line 57
                echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_INFO");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CAN_LEAVE_BLANK");
                echo "</span></dt>
\t\t\t\t<dd><textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 58
                echo ($context["REASON"] ?? null);
                echo "</textarea></dd>
\t\t\t</dl>
\t\t";
            }
            // line 61
            echo "
\t\t<dl class=\"fields2 nobg\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><strong>";
            // line 64
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</strong></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 69
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"submit\" name=\"confirm\" value=\"";
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 70
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t</div>

\t</div>
</div>

</form>

";
            // line 80
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "mcp_approve.html", 80)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "mcp_approve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 80,  254 => 70,  248 => 69,  240 => 64,  235 => 61,  229 => 58,  222 => 57,  216 => 53,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 47,  175 => 44,  171 => 42,  169 => 41,  165 => 39,  159 => 38,  155 => 37,  147 => 32,  142 => 30,  139 => 29,  127 => 28,  124 => 27,  117 => 23,  113 => 22,  109 => 20,  103 => 17,  96 => 16,  92 => 14,  75 => 13,  68 => 11,  66 => 10,  63 => 9,  53 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_approve.html", "");
    }
}
