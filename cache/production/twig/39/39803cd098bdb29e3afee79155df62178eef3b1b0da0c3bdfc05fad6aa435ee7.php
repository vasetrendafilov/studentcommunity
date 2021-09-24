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

/* ucp_agreement.html */
class __TwigTemplate_7ba72e1449735e98a8f7990aeaf1574097c8656582c577a277c821f672a9ef15 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 4
            echo "
";
            // line 5
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 6
                echo "<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 12
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}
</script>

\t<form method=\"post\" action=\"";
                // line 18
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t";
                // line 21
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 28
            echo "
\t<form method=\"post\" action=\"";
            // line 29
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 34
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
            // line 35
            // line 36
            echo "\t\t\t<p>";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 37
            // line 38
            echo "\t\t</div>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 40
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 41
                echo "\t\t\t<input type=\"submit\" name=\"coppa_no\" id=\"coppa_no\" value=\"";
                echo ($context["L_COPPA_NO"] ?? null);
                echo "\" class=\"button1\" />
\t\t\t<input type=\"submit\" name=\"coppa_yes\" id=\"coppa_yes\" value=\"";
                // line 42
                echo ($context["L_COPPA_YES"] ?? null);
                echo "\" class=\"button2\" />
\t\t\t";
            } else {
                // line 44
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AGREE");
                echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 45
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 47
            echo "\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 48
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        } elseif (        // line 54
($context["S_AGREEMENT"] ?? null)) {
            // line 55
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 59
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h2>
\t\t\t<p>";
            // line 60
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 66
        echo "
";
        // line 67
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  193 => 66,  184 => 60,  178 => 59,  172 => 55,  170 => 54,  161 => 48,  156 => 47,  151 => 45,  146 => 44,  141 => 42,  136 => 41,  134 => 40,  130 => 38,  129 => 37,  120 => 36,  119 => 35,  113 => 34,  105 => 29,  102 => 28,  92 => 21,  83 => 20,  78 => 18,  67 => 12,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
