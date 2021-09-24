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

/* ucp_attachments.html */
class __TwigTemplate_20cfb0eea33f012cf69fcadd6770ccf15c24e9396e26e2b95efe413b5e58858b extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_attachments.html", 1)->display($context);
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
        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS_EXPLAIN");
        echo "</p>

\t";
        // line 12
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachrow", [], "any", false, false, false, 12))) {
            // line 13
            echo "\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 15
            echo ($context["NUM_ATTACHMENTS"] ?? null);
            echo "
\t\t\t\t";
            // line 16
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 16))) {
                // line 17
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_attachments.html", 17)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 18
                echo "\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t</div>
\t\t</div>

\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><a href=\"";
            // line 27
            echo ($context["U_SORT_FILENAME"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
            echo "</a></div></dt>
\t\t\t\t\t<dd class=\"extra\"><a href=\"";
            // line 28
            echo ($context["U_SORT_DOWNLOADS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOADS");
            echo "</a></dd>
\t\t\t\t\t<dd class=\"time\"><span><a href=\"";
            // line 29
            echo ($context["U_SORT_POST_TIME"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TIME");
            echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\">";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist responsive-show-columns\">

\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachrow", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["attachrow"]) {
                // line 37
                echo "\t\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["attachrow"], "S_ROW_COUNT", [], "any", false, false, false, 37) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "U_VIEW_ATTACHMENT", [], "any", false, false, false, 41);
                echo "\" class=\"topictitle attachment-filename ellipsis-text\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "FILENAME", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "FILENAME", [], "any", false, false, false, 41);
                echo "</a> (";
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "SIZE", [], "any", false, false, false, 41);
                echo ")<br />
\t\t\t\t\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["attachrow"], "S_IN_MESSAGE", [], "any", false, false, false, 42)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 42);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "TOPIC_TITLE", [], "any", false, false, false, 42);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"extra\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "DOWNLOAD_COUNT", [], "any", false, false, false, 45);
                echo "</dd>
\t\t\t\t<dd class=\"time\"><span>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "POST_TIME", [], "any", false, false, false, 46);
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"attachment[";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["attachrow"], "ATTACH_ID", [], "any", false, false, false, 47);
                echo "]\" value=\"1\"";
                if (twig_get_attribute($this->env, $this->source, $context["attachrow"], "S_LOCKED", [], "any", false, false, false, 47)) {
                    echo " disabled title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENT_LOCKED");
                    echo "\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t</ul>

\t\t<div class=\"action-bar bottom\">
\t\t\t";
            // line 54
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "ucp_attachments.html", 54)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 55
            echo "\t\t\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "

\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 58
            echo ($context["TOTAL_ATTACHMENTS"] ?? null);
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "
\t\t\t\t";
            // line 59
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 59))) {
                // line 60
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_attachments.html", 60)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 61
                echo "\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 68
            echo "\t\t<p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_NO_ATTACHMENTS");
            echo "</strong></p>
\t";
        }
        // line 70
        echo "
\t</div>
</div>

";
        // line 74
        if (($context["S_ATTACHMENT_ROWS"] ?? null)) {
            // line 75
            echo "\t<fieldset class=\"display-actions\">
\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
            // line 76
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
            echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', 'attachment', true); return false;\">";
            // line 77
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', 'attachment', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 78
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        }
        // line 81
        echo "</form>

";
        // line 83
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_attachments.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 83,  302 => 81,  296 => 78,  290 => 77,  286 => 76,  283 => 75,  281 => 74,  275 => 70,  269 => 68,  263 => 64,  257 => 62,  254 => 61,  241 => 60,  239 => 59,  233 => 58,  226 => 55,  214 => 54,  209 => 51,  193 => 47,  189 => 46,  185 => 45,  167 => 42,  157 => 41,  145 => 37,  141 => 36,  132 => 30,  126 => 29,  120 => 28,  114 => 27,  106 => 21,  100 => 19,  97 => 18,  84 => 17,  82 => 16,  78 => 15,  74 => 13,  72 => 12,  67 => 10,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_attachments.html", "");
    }
}
