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

/* ucp_profile_autologin_keys.html */
class __TwigTemplate_59aa081a919ea7c587434122e9a28f2ba90a974a523322225e211c7737164739 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_autologin_keys.html", 1)->display($context);
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
\t\t<p>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_AUTOLOGIN_KEYS");
        echo "</p>
\t\t";
        // line 9
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 10
        echo "\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\">";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_KEY");
        echo "</th>
\t\t\t\t\t<th class=\"center\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("IP");
        echo "</th>
\t\t\t\t\t<th class=\"center\">";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_TIME");
        echo "</th>
\t\t\t\t\t<th class=\"center mark\">";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "sessions", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sessions"]) {
            // line 21
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["sessions"], "S_ROW_COUNT", [], "any", false, false, false, 21) % 2 == 0)) {
                echo "<tr class=\"bg1\">";
            } else {
                echo "<tr class=\"bg2\">";
            }
            // line 22
            echo "\t\t\t\t\t<td><label for=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "KEY", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "KEY", [], "any", false, false, false, 22);
            echo "</label></td>
\t\t\t\t\t<td class=\"center\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "IP", [], "any", false, false, false, 23);
            echo "</td>
\t\t\t\t\t<td class=\"center\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "LOGIN_TIME", [], "any", false, false, false, 24);
            echo "</td>
\t\t\t\t\t<td class=\"center mark\"><input type=\"checkbox\" name=\"keys[]\" value=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "KEY", [], "any", false, false, false, 25);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sessions"], "KEY", [], "any", false, false, false, 25);
            echo "\" /></td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t\t<tr><td colspan=\"4\" class=\"bg1\" style=\"text-align: center\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_NO_AUTOLOGIN_KEYS");
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "sessions", [], "any", false, false, false, 35))) {
            // line 36
            echo "\t<fieldset class=\"display-actions\">
\t\t";
            // line 37
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"submit\" name=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 39
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        }
        // line 42
        echo "
</form>

";
        // line 45
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_autologin_keys.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_autologin_keys.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 45,  175 => 42,  169 => 39,  163 => 38,  157 => 37,  154 => 36,  152 => 35,  145 => 30,  136 => 28,  126 => 25,  122 => 24,  118 => 23,  111 => 22,  104 => 21,  99 => 20,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  75 => 10,  69 => 9,  65 => 8,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_profile_autologin_keys.html", "");
    }
}
