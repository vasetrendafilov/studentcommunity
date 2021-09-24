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

/* simple_footer.html */
class __TwigTemplate_97368a3c711c0dac629007b8def7f1032d64476169a5ca764b0bc9437d9de6a5 extends \Twig\Template
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
        echo "\t\t<div style=\"text-align: ";
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo ";\"><a href=\"#\" onclick=\"self.close(); return false;\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CLOSE_WINDOW");
        echo "</a></div>
\t<br /><br />
</div>

<div id=\"page-footer\">

\t";
        // line 7
        if (($context["S_COPYRIGHT_HTML"] ?? null)) {
            // line 8
            echo "\t\t<br />";
            echo ($context["CREDIT_LINE"] ?? null);
            echo "
\t\t";
            // line 9
            if (($context["TRANSLATION_INFO"] ?? null)) {
                echo "<br />";
                echo ($context["TRANSLATION_INFO"] ?? null);
            }
            // line 10
            echo "\t";
        }
        // line 11
        echo "
\t";
        // line 12
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 13
            echo "\t\t";
            if (($context["S_COPYRIGHT_HTML"] ?? null)) {
                echo "<br /><br />";
            }
            // line 14
            echo "\t\t";
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "
\t";
        }
        // line 16
        echo "
</div>

<script src=\"";
        // line 19
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 20
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.4.1.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 21
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>

";
        // line 23
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 24);
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  105 => 23,  97 => 21,  89 => 20,  85 => 19,  80 => 16,  74 => 14,  69 => 13,  67 => 12,  64 => 11,  61 => 10,  56 => 9,  51 => 8,  49 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_footer.html", "");
    }
}
