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

/* posting_attach_body.html */
class __TwigTemplate_8db59471c6e4856355b62890d945444e8538cef48a3bb7e97e7d3b44a929ec5d extends \Twig\Template
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
        echo "<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t<div class=\"inner\">

\t<p>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>

\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t<dl>
\t\t<dt><label for=\"fileupload\">";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox autowidth\" />
\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FILE");
        echo "\" class=\"button2\" onclick=\"upload = true;\" />
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"filecomment\">";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox autowidth\">";
        // line 16
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<div id=\"attach-panel-multi\" class=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"button2\" value=\"";
        // line 21
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t";
        // line 24
        // line 25
        echo "\t<div class=\"panel";
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 25))) {
            echo " hidden";
        }
        echo " file-list-container\" id=\"file-list-container\">
\t\t<div class=\"inner\">
\t\t\t<table class=\"table1 zebra-list fixed-width-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 32
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty file-list\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row attach-row-tpl\" id=\"attach-row-tpl\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
        // line 41
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            echo "<input type=\"button\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
            echo "\" class=\"button2 hidden file-inline-bbcode\" />&nbsp;";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
        echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"inputbox\"></textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 59
        // line 60
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 61
            echo "\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ATTACH_ID", [], "any", false, false, false, 62);
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "U_VIEW_ATTACHMENT", [], "any", false, false, false, 64);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILENAME", [], "any", false, false, false, 64);
            echo "</a></span>
\t\t\t\t\t\t\t\t";
            // line 65
            // line 66
            echo "\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
            // line 67
            if ((($context["S_BBCODE_ALLOWED"] ?? null) && ($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null))) {
                echo "<input type=\"button\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
                echo "\" class=\"button2 file-inline-bbcode\" />&nbsp;";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 68);
            echo "]\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
            echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 70
            // line 71
            echo "\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 74);
            echo "]\" rows=\"1\" cols=\"30\" class=\"inputbox\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILE_COMMENT", [], "any", false, false, false, 74);
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "S_HIDDEN", [], "any", false, false, false, 75);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILESIZE", [], "any", false, false, false, 78);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 84
            // line 85
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t";
        // line 87
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t";
        // line 91
        // line 92
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 92,  226 => 91,  220 => 87,  218 => 86,  212 => 85,  211 => 84,  202 => 78,  196 => 75,  190 => 74,  185 => 71,  184 => 70,  176 => 68,  170 => 67,  167 => 66,  166 => 65,  160 => 64,  154 => 62,  152 => 61,  147 => 60,  146 => 59,  125 => 42,  119 => 41,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  85 => 25,  84 => 24,  78 => 21,  70 => 16,  65 => 15,  58 => 11,  51 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_attach_body.html", "");
    }
}
