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

/* acp_profile.html */
class __TwigTemplate_9a8896bb6125b83f5025468cad74dec7b8ebd08ba3296b1d207750b43b127adf extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_profile.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_EDIT"] ?? null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (($context["ERROR_MSG"] ?? null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"add_profile_field\" method=\"post\" action=\"";
            // line 20
            echo ($context["U_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">

\t";
            // line 22
            if (($context["S_STEP_ONE"] ?? null)) {
                // line 23
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 25
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label>";
                // line 27
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><strong>";
                // line 28
                echo ($context["FIELD_TYPE"] ?? null);
                echo "</strong></dd>
\t\t</dl>
\t\t";
                // line 30
                if (($context["S_EDIT_MODE"] ?? null)) {
                    // line 31
                    echo "\t\t<dl>
\t\t\t<dt><label>";
                    // line 32
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input type=\"hidden\" name=\"field_ident\" value=\"";
                    // line 33
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "\" /><strong>";
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "</strong></dd>
\t\t</dl>
\t\t";
                } else {
                    // line 36
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"field_ident\">";
                    // line 37
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"field_ident\" name=\"field_ident\" value=\"";
                    // line 38
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "\" /></dd>
\t\t</dl>
\t\t";
                }
                // line 41
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_no_view\">";
                // line 42
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_PROFILE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"field_no_view\" name=\"field_no_view\" value=\"0\"";
                // line 43
                if ( !($context["S_FIELD_NO_VIEW"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"field_no_view\" value=\"1\"";
                // line 44
                if (($context["S_FIELD_NO_VIEW"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
                // line 49
                echo $this->extensions['phpbb\template\twig\extension']->lang("VISIBILITY_OPTION");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_profile\">";
                // line 51
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_PROFILE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_PROFILE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_profile\" name=\"field_show_profile\" value=\"1\"";
                // line 52
                if (($context["S_SHOW_PROFILE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_reg\">";
                // line 55
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_REGISTER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_REGISTER_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_reg\" name=\"field_show_on_reg\" value=\"1\"";
                // line 56
                if (($context["S_SHOW_ON_REG"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_pm\">";
                // line 59
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_PM");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_PM_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_pm\" name=\"field_show_on_pm\" value=\"1\"";
                // line 60
                if (($context["S_SHOW_ON_PM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_vt\">";
                // line 63
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_VT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_VT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_vt\" name=\"field_show_on_vt\" value=\"1\"";
                // line 64
                if (($context["S_SHOW_ON_VT"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_ml\">";
                // line 67
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_MEMBERLIST");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_MEMBERLIST_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_ml\" name=\"field_show_on_ml\" value=\"1\"";
                // line 68
                if (($context["S_SHOW_ON_MEMBERLIST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_required\">";
                // line 71
                echo $this->extensions['phpbb\template\twig\extension']->lang("REQUIRED_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REQUIRED_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_required\" name=\"field_required\" value=\"1\"";
                // line 72
                if (($context["S_FIELD_REQUIRED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_novalue\">";
                // line 75
                echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_NOVALUE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_NOVALUE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_novalue\" name=\"field_show_novalue\" value=\"1\"";
                // line 76
                if (($context["S_FIELD_SHOW_NOVALUE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_hide\">";
                // line 79
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_PROFILE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_hide\" name=\"field_hide\" value=\"1\"";
                // line 80
                if (($context["S_FIELD_HIDE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t";
                // line 82
                // line 83
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_is_contact\">";
                // line 84
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IS_CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IS_CONTACT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_is_contact\" name=\"field_is_contact\" value=\"1\"";
                // line 85
                if (($context["S_FIELD_CONTACT"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_desc\" id=\"field_contact_desc\" value=\"";
                // line 86
                echo ($context["FIELD_CONTACT_DESC"] ?? null);
                echo "\" /> <label for=\"field_contact_desc\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_CONTACT_DESC");
                echo "</label></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_url\" id=\"field_contact_url\" value=\"";
                // line 87
                echo ($context["FIELD_CONTACT_URL"] ?? null);
                echo "\" /> <label for=\"field_contact_url\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_CONTACT_URL");
                echo "</label></dd>
\t\t\t";
                // line 88
                // line 89
                echo "\t\t</dl>
\t\t</fieldset>

\t\t";
                // line 92
                if (($context["S_EDIT_MODE"] ?? null)) {
                    // line 93
                    echo "\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                    // line 94
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE");
                    echo "\" />
\t\t\t</fieldset>
\t\t";
                }
                // line 97
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 99
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_SPECIFIC");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"lang_name\">";
                // line 101
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FIELD_NAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"lang_name\" name=\"lang_name\" value=\"";
                // line 102
                echo ($context["LANG_NAME"] ?? null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"lang_explain\">";
                // line 105
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_DESCRIPTION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_DESCRIPTION_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><textarea id=\"lang_explain\" name=\"lang_explain\" rows=\"3\" cols=\"80\">";
                // line 106
                echo ($context["LANG_EXPLAIN"] ?? null);
                echo "</textarea></dd>
\t\t</dl>
\t\t";
                // line 108
                if ((($context["S_TEXT"] ?? null) || ($context["S_STRING"] ?? null))) {
                    // line 109
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_default_value\">";
                    // line 110
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_VALUE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_VALUE_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t<dd>";
                    // line 111
                    if (($context["S_STRING"] ?? null)) {
                        echo "<input class=\"text medium\" type=\"text\" id=\"lang_default_value\" name=\"lang_default_value\" value=\"";
                        echo ($context["LANG_DEFAULT_VALUE"] ?? null);
                        echo "\" />";
                    } else {
                        echo "<textarea id=\"lang_default_value\" name=\"lang_default_value\" rows=\"5\" cols=\"80\">";
                        echo ($context["LANG_DEFAULT_VALUE"] ?? null);
                        echo "</textarea>";
                    }
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                // line 114
                echo "\t\t";
                if ((($context["S_BOOL"] ?? null) || ($context["S_DROPDOWN"] ?? null))) {
                    // line 115
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_options\">";
                    // line 116
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ENTRIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>
\t\t\t\t\t";
                    // line 117
                    if ((($context["S_EDIT_MODE"] ?? null) && ($context["S_DROPDOWN"] ?? null))) {
                        // line 118
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_DROPDOWN_LANG_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 120
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_OPTIONS_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t</dt>
\t\t\t";
                    // line 123
                    if (($context["S_DROPDOWN"] ?? null)) {
                        // line 124
                        echo "\t\t\t\t<dd><textarea id=\"lang_options\" name=\"lang_options\" rows=\"5\" cols=\"80\">";
                        echo ($context["LANG_OPTIONS"] ?? null);
                        echo "</textarea></dd>
\t\t\t";
                    } else {
                        // line 126
                        echo "\t\t\t\t<dd><input class=\"medium\" id=\"lang_options\" name=\"lang_options[0]\" value=\"";
                        echo ($context["FIRST_LANG_OPTION"] ?? null);
                        echo "\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FIRST_OPTION");
                        echo "</dd>
\t\t\t\t<dd><input class=\"medium\" name=\"lang_options[1]\" value=\"";
                        // line 127
                        echo ($context["SECOND_LANG_OPTION"] ?? null);
                        echo "\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("SECOND_OPTION");
                        echo "</dd>
\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t</dl>
\t\t";
                }
                // line 131
                echo "\t\t";
                // line 132
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 135
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 136
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 137
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 140
($context["S_STEP_TWO"] ?? null)) {
                // line 141
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 143
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</legend>
\t\t";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "option", [], "any", false, false, false, 144));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 145
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "TITLE", [], "any", false, false, false, 146);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "EXPLAIN", [], "any", false, false, false, 146)) {
                        echo "<br /><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "EXPLAIN", [], "any", false, false, false, 146);
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "FIELD", [], "any", false, false, false, 147);
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 152
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 153
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_BASIC_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 156
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">
\t\t\t";
                // line 157
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 158
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 159
                echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT_STEP");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 162
($context["S_STEP_THREE"] ?? null)) {
                // line 163
                echo "
\t\t";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "options", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                    // line 165
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "LANGUAGE", [], "any", false, false, false, 166);
                    echo "</legend>
\t\t\t";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["options"], "field", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 168
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "L_TITLE", [], "any", false, false, false, 169);
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "</label>";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "L_EXPLAIN", [], "any", false, false, false, 169)) {
                            echo "<br /><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "L_EXPLAIN", [], "any", false, false, false, 169);
                            echo "</span>";
                        }
                        echo "</dt>
\t\t\t\t\t";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "FIELD", [], "any", false, false, false, 170);
                        echo "
\t\t\t\t</dl>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "\t\t\t</fieldset>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "
\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 176
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 177
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 180
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">
\t\t\t";
                // line 181
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                // line 182
                echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE");
                echo "\" />
\t\t\t";
                // line 183
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>

\t";
            }
            // line 187
            echo "
\t</form>

";
        } else {
            // line 191
            echo "
\t<h1>";
            // line 192
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_CUSTOM_PROFILE_FIELDS");
            echo "</h1>

\t";
            // line 194
            if (($context["S_NEED_EDIT"] ?? null)) {
                // line 195
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 196
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 197
                echo $this->extensions['phpbb\template\twig\extension']->lang("CUSTOM_FIELDS_NOT_TRANSLATED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 200
            echo "
\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 204
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
            echo "</th>
\t\t<th>";
            // line 205
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 206
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "fields", [], "any", false, false, false, 210));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
                // line 211
                echo "\t<tr>
\t\t<td>";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "FIELD_IDENT", [], "any", false, false, false, 212);
                echo "</td>
\t\t<td>";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "FIELD_TYPE", [], "any", false, false, false, 213);
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_ACTIVATE_DEACTIVATE", [], "any", false, false, false, 214);
                echo "\" data-ajax=\"activate_deactivate\">";
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "L_ACTIVATE_DEACTIVATE", [], "any", false, false, false, 214);
                echo "</a>";
                if (twig_get_attribute($this->env, $this->source, $context["fields"], "S_NEED_EDIT", [], "any", false, false, false, 214)) {
                    echo " | <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_TRANSLATE", [], "any", false, false, false, 214);
                    echo "\" style=\"color: red;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TRANSLATE");
                    echo "</a>";
                }
                echo "</td>

\t\t<td class=\"actions\" style=\"width: 80px;\">
\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 217
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"up\"><a href=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_MOVE_UP", [], "any", false, false, false, 218);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 219
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"down\"><a href=\"";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_MOVE_DOWN", [], "any", false, false, false, 220);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t";
                // line 221
                if ( !twig_get_attribute($this->env, $this->source, $context["fields"], "S_NEED_EDIT", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_EDIT", [], "any", false, false, false, 222);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>
\t\t\t";
                } else {
                    // line 224
                    echo "\t\t\t\t";
                    echo ($context["ICON_EDIT_DISABLED"] ?? null);
                    echo "
\t\t\t";
                }
                // line 226
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_DELETE", [], "any", false, false, false, 226);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t</td>

\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 231
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"4\">";
                // line 232
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t</tbody>
\t</table>

\t<form id=\"profile_fields\" method=\"post\" action=\"";
            // line 238
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<select name=\"field_type\">";
            // line 241
            echo ($context["S_TYPE_OPTIONS"] ?? null);
            echo "</select>
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 242
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_NEW_FIELD");
            echo "\" />
\t\t<input type=\"hidden\" name=\"create\" value=\"1\" />
\t\t";
            // line 244
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 249
        echo "
";
        // line 250
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_profile.html", 250)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 250,  817 => 249,  809 => 244,  804 => 242,  800 => 241,  794 => 238,  789 => 235,  780 => 232,  777 => 231,  764 => 226,  758 => 224,  750 => 222,  748 => 221,  742 => 220,  738 => 219,  732 => 218,  728 => 217,  712 => 214,  708 => 213,  704 => 212,  701 => 211,  696 => 210,  689 => 206,  685 => 205,  681 => 204,  675 => 200,  669 => 197,  665 => 196,  662 => 195,  660 => 194,  655 => 192,  652 => 191,  646 => 187,  639 => 183,  635 => 182,  631 => 181,  627 => 180,  621 => 177,  617 => 176,  614 => 175,  607 => 173,  598 => 170,  587 => 169,  584 => 168,  580 => 167,  576 => 166,  573 => 165,  569 => 164,  566 => 163,  564 => 162,  558 => 159,  554 => 158,  550 => 157,  546 => 156,  540 => 153,  536 => 152,  532 => 150,  523 => 147,  512 => 146,  509 => 145,  505 => 144,  501 => 143,  497 => 141,  495 => 140,  489 => 137,  485 => 136,  481 => 135,  476 => 132,  474 => 131,  470 => 129,  463 => 127,  456 => 126,  450 => 124,  448 => 123,  445 => 122,  439 => 120,  433 => 118,  431 => 117,  426 => 116,  423 => 115,  420 => 114,  406 => 111,  399 => 110,  396 => 109,  394 => 108,  389 => 106,  382 => 105,  376 => 102,  371 => 101,  366 => 99,  362 => 97,  356 => 94,  353 => 93,  351 => 92,  346 => 89,  345 => 88,  339 => 87,  333 => 86,  327 => 85,  320 => 84,  317 => 83,  316 => 82,  309 => 80,  302 => 79,  294 => 76,  287 => 75,  279 => 72,  272 => 71,  264 => 68,  257 => 67,  249 => 64,  242 => 63,  234 => 60,  227 => 59,  219 => 56,  212 => 55,  204 => 52,  197 => 51,  192 => 49,  180 => 44,  172 => 43,  165 => 42,  162 => 41,  156 => 38,  149 => 37,  146 => 36,  138 => 33,  131 => 32,  128 => 31,  126 => 30,  121 => 28,  114 => 27,  109 => 25,  105 => 23,  103 => 22,  96 => 20,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  73 => 11,  68 => 9,  59 => 7,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_profile.html", "");
    }
}
