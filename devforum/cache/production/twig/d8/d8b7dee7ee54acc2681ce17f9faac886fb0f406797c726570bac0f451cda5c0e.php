<?php

/* @vse_abbc3/abbc3_posting_buttons.html */
class __TwigTemplate_842b7a3c74185706611f5781fa6639004ace0fc6a2225e77b246306de97ea43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>

var copyPaste = '';
var bbvideoHeight = '";
        // line 4
        echo ($context["ABBC3_BBVIDEO_HEIGHT"] ?? null);
        echo "';
var bbvideoWidth = '";
        // line 5
        echo ($context["ABBC3_BBVIDEO_WIDTH"] ?? null);
        echo "';

/**
* Strip all BBCodes from the selected text
*/
function bbcodeToPlain(data) {
\tif (data.indexOf('[') < 0) {
\t\treturn data;
\t}

\tfunction bbcodeToPlainSimpleReplace(str) {
\t\treturn str.replace(basicBBcodeMatch, bbcodeToPlainPattern);
\t}

\tfunction bbcodeToPlainPattern(match_0, match_1, match_2, match_3) {
\t\tif (match_3 && match_3.indexOf('[') > -1) {
\t\t\tmatch_3 = bbcodeToPlainSimpleReplace(match_3);
\t\t}
\t\treturn match_3;
\t}

\tvar basicBBcodeMatch = new RegExp('\\\\[([a-z][a-z0-9]*)(?:=([^\\\\]]+))?]((?:.|[\\r\\n])*?)\\\\[/\\\\1]', 'gim');

\treturn bbcodeToPlainSimpleReplace(data);
}

/**
* Apply special BBCodes
*/
function bbspecial(bbcode, bbcodeId) {
\ttheSelection = false;

\tvar textarea = document.forms[form_name].elements[text_name];

\ttextarea.focus();

\tvar selLength, selStart, selEnd, s1, s2, s3;

\tif ((clientVer >= 4) && is_ie && is_win) {
\t\t// Get text selection
\t\ttheSelection = document.selection.createRange().text;
\t} else if (document.forms[form_name].elements[text_name].selectionEnd
\t\t\t&& (document.forms[form_name].elements[text_name].selectionEnd - document.forms[form_name].elements[text_name].selectionStart > 0)) {
\t\tselLength = textarea.textLength;
\t\tselLength = (typeof(selLength) === 'undefined' || selLength === '' || selLength === null) ? textarea.value.length : selLength;
\t\tselStart = textarea.selectionStart;
\t\tselEnd = textarea.selectionEnd;

\t\tif (selEnd === 1 || selEnd === 2) {
\t\t\tselEnd = selLength;
\t\t}

\t\ts1 = (textarea.value).substring(0, selStart);
\t\ts2 = (textarea.value).substring(selStart, selEnd);
\t\ts3 = (textarea.value).substring(selEnd, selLength);
\t\ttheSelection = s2;
\t}

\tswitch (bbcode) {
\t\tcase 'abbc3_plain':
\t\t\tif (theSelection) {
\t\t\t\ttry {
\t\t\t\t\tvar tempSelection = bbcodeToPlain(theSelection);

\t\t\t\t\tif ((clientVer >= 4) && is_ie && is_win) {
\t\t\t\t\t\tdocument.selection.createRange().text = tempSelection;
\t\t\t\t\t}
\t\t\t\t\telse if (textarea.selectionEnd && (textarea.selectionEnd - textarea.selectionStart > 0)) {
\t\t\t\t\t\ttextarea.value = s1 + tempSelection + s3;
\t\t\t\t\t\tselEnd = textarea.selectionEnd = (textarea.value).substring(0, selStart).length + tempSelection.length;
\t\t\t\t\t}
\t\t\t\t} catch (e) {}
\t\t\t} else {
\t\t\t\talert('";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_NOSELECT_ERROR"), "js");
        echo "');
\t\t\t\treturn;
\t\t\t}
\t\t\tbreak;

\t\tcase 'abbc3_copy':
\t\t\tif (theSelection) {
\t\t\t\tcopyPaste = theSelection;
\t\t\t} else {
\t\t\t\talert('";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_NOSELECT_ERROR"), "js");
        echo "');
\t\t\t\treturn;
\t\t\t}
\t\t\tbreak;

\t\tcase 'abbc3_paste':
\t\t\tif (copyPaste) {
\t\t\t\tbbfontstyle(copyPaste, '');
\t\t\t} else {
\t\t\t\talert('";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PASTE_ERROR"), "js");
        echo "');
\t\t\t}
\t\t\tbreak;

\t\tcase 'align=':
\t\t\tbbfontstyle('[align=center]', '[/align]');
\t\t\tbreak;

\t\tcase 'float=':
\t\t\tbbfontstyle('[float=left]', '[/float]');
\t\t\tbreak;

\t\tcase 'dir=':
\t\t\tbbfontstyle('[dir=rtl]', '[/dir]');
\t\t\tbreak;

\t\tcase 'marq=':
\t\t\tbbfontstyle('[marq=left]', '[/marq]');
\t\t\tbreak;

\t\tcase 'mod=':
\t\t\tbbfontstyle('[mod=";
        // line 117
        echo twig_escape_filter($this->env, ($context["ABBC3_USERNAME"] ?? null), "js");
        echo "]', '[/mod]');
\t\t\tbreak;

\t\tcase 'highlight=':
\t\t\tbbfontstyle('[highlight=yellow]', '[/highlight]');
\t\t\tbreak;

\t\tcase 'glow=':
\t\t\tbbfontstyle('[glow=red]', '[/glow]');
\t\t\tbreak;

\t\tcase 'shadow=':
\t\t\tbbfontstyle('[shadow=blue]', '[/shadow]');
\t\t\tbreak;

\t\tcase 'dropshadow=':
\t\t\tbbfontstyle('[dropshadow=blue]', '[/dropshadow]');
\t\t\tbreak;

\t\tcase 'blur=':
\t\t\tbbfontstyle('[blur=blue]', '[/blur]');
\t\t\tbreak;

\t\tcase 'BBvideo=':
\t\t\tif (theSelection || phpbb.isTouch) {
\t\t\t\tbbfontstyle('[BBvideo=' + bbvideoWidth + ',' + bbvideoHeight + ']', '[/BBvideo]');
\t\t\t} else {
\t\t\t\tbbwizard('";
        // line 144
        echo ($context["UA_ABBC3_BBVIDEO_WIZARD"] ?? null);
        echo "', 'bbvideo');
\t\t\t}
\t\t\tbreak;

\t\tcase 'url':
\t\t\tif (theSelection || phpbb.isTouch) {
\t\t\t\tbbstyle(16);
\t\t\t} else {
\t\t\t\tbbwizard('";
        // line 152
        echo ($context["UA_ABBC3_URL_WIZARD"] ?? null);
        echo "', 'url');
\t\t\t}
\t\t\tbreak;

\t\tdefault:
\t\t\tbbstyle(bbcodeId);
\t\t\tbreak;
\t}

\ttheSelection = '';
}

</script>

";
        // line 166
        $context["ABBC3_ICONS"] = (($context["ROOT_PATH"] ?? null) . ($context["ABBC3_BBCODE_ICONS"] ?? null));
        // line 167
        echo "
<div id=\"abbc3_buttons\">
\t<div class=\"abbc3_buttons_row\">
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"b\" name=\"addbbcode0\" value=\" \" style=\"background-image:url('";
        // line 170
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/bold.gif');\" onclick=\"bbstyle(0)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
        echo "\" />
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"i\" name=\"addbbcode2\" value=\" \" style=\"background-image:url('";
        // line 171
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/italic.gif');\" onclick=\"bbstyle(2)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
        echo "\" />
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"u\" name=\"addbbcode4\" value=\" \" style=\"background-image:url('";
        // line 172
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/underline.gif');\" onclick=\"bbstyle(4)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
        echo "\" />
\t\t";
        // line 173
        if (($context["S_BBCODE_QUOTE"] ?? null)) {
            // line 174
            echo "\t\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"q\" name=\"addbbcode6\" value=\" \" style=\"background-image:url('";
            echo ($context["ABBC3_ICONS"] ?? null);
            echo "/quote.gif');\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
            echo "\" />
\t\t";
        }
        // line 176
        echo "\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"c\" name=\"addbbcode8\" value=\" \" style=\"background-image:url('";
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/code.gif');\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
        echo "\" />
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"l\" name=\"addbbcode10\" value=\" \" style=\"background-image:url('";
        // line 177
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/listb.gif');\" onclick=\"bbstyle(10)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
        echo "\" />
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"o\" name=\"addbbcode12\" value=\" \" style=\"background-image:url('";
        // line 178
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/listo.gif');\" onclick=\"bbstyle(12)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
        echo "\" />
\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"y\" name=\"addlistitem\" value=\" \" style=\"background-image:url('";
        // line 179
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/listitem.gif');\" onclick=\"bbstyle(-1)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t\t";
        // line 180
        if (($context["S_BBCODE_IMG"] ?? null)) {
            // line 181
            echo "\t\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"p\" name=\"addbbcode14\" value=\" \" style=\"background-image:url('";
            echo ($context["ABBC3_ICONS"] ?? null);
            echo "/img.gif');\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
            echo "\" />
\t\t";
        }
        // line 183
        echo "\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 184
            echo "\t\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"w\" name=\"addbbcode16\" value=\" \" style=\"background-image:url('";
            echo ($context["ABBC3_ICONS"] ?? null);
            echo "/url.gif');\" onclick=\"bbspecial('url')\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
            echo "\" />
\t\t";
        }
        // line 186
        echo "\t\t";
        if (($context["S_BBCODE_FLASH"] ?? null)) {
            // line 187
            echo "\t\t\t<input type=\"button\" class=\"abbc3_button\" accesskey=\"d\" name=\"addbbcode18\" value=\" \" style=\"background-image:url('";
            echo ($context["ABBC3_ICONS"] ?? null);
            echo "/flash.gif');\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
            echo "\" />
\t\t";
        }
        // line 189
        echo "\t\t<input type=\"button\" class=\"abbc3_button\" name=\"abbc3_bbpalette\" id=\"abbc3_bbpalette\" value=\" \" style=\"background-image:url('";
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/fontcolor.gif');\" onclick=\"change_palette();\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
        echo "\" />
\t\t<select class=\"abbc3_select\" name=\"abbc3_addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.abbc3_addbbcode20.options[this.form.abbc3_addbbcode20.selectedIndex].value + ']', '[/size]');this.form.abbc3_addbbcode20.selectedIndex = 2;\" title=\"";
        // line 190
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
        echo "\">
\t\t\t<option value=\"50\">";
        // line 191
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
        echo "</option>
\t\t\t<option value=\"85\">";
        // line 192
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
        echo "</option>
\t\t\t<option value=\"100\" selected=\"selected\">";
        // line 193
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
        echo "</option>
\t\t\t";
        // line 194
        if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
            // line 195
            echo "\t\t\t\t<option value=\"150\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
            echo "</option>
\t\t\t\t";
            // line 196
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                // line 197
                echo "\t\t\t\t\t<option value=\"200\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                echo "</option>
\t\t\t\t";
            }
            // line 199
            echo "\t\t\t";
        }
        // line 200
        echo "\t\t</select>
\t\t<input type=\"button\" class=\"abbc3_button\" name=\"copybbcode\" value=\" \" style=\"background-image:url('";
        // line 201
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/copy.gif');\" onclick=\"bbspecial('abbc3_copy')\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_COPY_BBCODE");
        echo "\">
\t\t<input type=\"button\" class=\"abbc3_button\" name=\"pastebbcode\" value=\" \" style=\"background-image:url('";
        // line 202
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/paste.gif');\" onclick=\"bbspecial('abbc3_paste')\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PASTE_BBCODE");
        echo "\">
\t\t<input type=\"button\" class=\"abbc3_button\" name=\"plainbbcode\" value=\" \" style=\"background-image:url('";
        // line 203
        echo ($context["ABBC3_ICONS"] ?? null);
        echo "/plain.gif');\" onclick=\"bbspecial('abbc3_plain')\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PLAIN_BBCODE");
        echo "\">
\t\t";
        // line 204
        // line 205
        echo "\t</div>
\t";
        // line 206
        if ($this->getAttribute(($context["loops"] ?? null), "custom_tags", array())) {
            // line 207
            echo "\t\t<div class=\"abbc3_buttons_row\" style=\"border-top:0;\">
\t\t\t";
            // line 208
            // line 209
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tag"]) {
                // line 210
                echo "\t\t\t\t";
                if ($this->getAttribute($context["custom_tag"], "S_CUSTOM_BBCODE_ALLOWED", array())) {
                    // line 211
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["custom_tag"], "BBCODE_TAG", array()) == "font=")) {
                        // line 212
                        echo "\t\t\t\t\t\t<select class=\"abbc3_select\" name=\"abbc3_font\" onchange=\"bbfontstyle('[font=' + this.form.abbc3_font.options[this.form.abbc3_font.selectedIndex].value + ']', '[/font]'); this.form.abbc3_font.selectedIndex = 0\" title=\"";
                        echo $this->getAttribute($context["custom_tag"], "BBCODE_HELPLINE", array());
                        echo "\">
\t\t\t\t\t\t\t<option selected=\"selected\" >";
                        // line 213
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_FONT_BBCODE");
                        echo "</option>
\t\t\t\t\t\t\t<optgroup label=\"";
                        // line 214
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_FONT_SAFE");
                        echo "\">
\t\t\t\t\t\t\t\t<option style=\"font-family: Arial, sans-serif;\" value=\"Arial\">Arial</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Arial Black, sans-serif;\" value=\"Arial Black\">Arial Black</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Comic Sans MS, sans-serif;\" value=\"Comic Sans MS\">Comic Sans MS</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Courier New, sans-serif;\" value=\"Courier New\">Courier New</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Georgia, sans-serif;\" value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Impact, sans-serif;\" value=\"Impact\">Impact</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Times New Roman, sans-serif;\" value=\"Times New Roman\">Times New Roman</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Trebuchet MS, sans-serif;\" value=\"Trebuchet MS\">Trebuchet MS</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Verdana, sans-serif;\" value=\"Verdana\">Verdana</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<optgroup label=\"";
                        // line 225
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_FONT_FANCY");
                        echo "\">
\t\t\t\t\t\t\t\t<option style=\"font-family: Bradley Hand ITC, sans-serif;\" value=\"Bradley Hand ITC\" >Bradley Hand ITC</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Century Gothic, sans-serif;\" value=\"Century Gothic\" >Century Gothic</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Curlz MT, sans-serif;\" value=\"Curlz MT\">Curlz MT</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: cursive, sans-serif;\" value=\"cursive\">Cursive</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: fantasy, sans-serif;\" value=\"fantasy\">Fantasy</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: French Script MT, sans-serif;\" value=\"French Script MT\">French Script MT</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Garamond, sans-serif;\" value=\"Garamond\">Garamond</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Garamond Bold, sans-serif;\" value=\"Garamond Bold\">Garamond Bold</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Goudy Stout, sans-serif;\" value=\"Goudy Stout\">Goudy Stout</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Helvetica, sans-serif;\" value=\"Helvetica\">Helvetica</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: monospace, sans-serif;\" value=\"monospace\">Monospace</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: OCR A Extended, sans-serif;\" value=\"OCR A Extended\">OCR A Extended</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Script MT Bold, sans-serif;\" value=\"Script MT Bold\">Script MT Bold</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<optgroup label=\"";
                        // line 240
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_FONT_WIN");
                        echo "\">
\t\t\t\t\t\t\t\t<option style=\"font-family: Lucida Console, sans-serif;\" value=\"Lucida Console\">Lucida Console</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Lucida Sans Unicode, sans-serif;\" value=\"Lucida Sans Unicode\">Lucida Sans Unicode</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Microsoft Sans Serif, sans-serif;\" value=\"Microsoft Sans Serif\">Microsoft Sans Serif</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: MS Mincho, sans-serif;\" value=\"MS Mincho\">MS Mincho</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Palatino Linotype, sans-serif;\" value=\"Palatino Linotype\">Palatino Linotype</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Symbol, sans-serif;\" value=\"Symbol\">Symbol</option>
\t\t\t\t\t\t\t\t<option style=\"font-family: Tahoma, sans-serif;\" value=\"Tahoma\">Tahoma</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
                    } else {
                        // line 251
                        echo "\t\t\t\t\t\t<input type=\"button\" class=\"abbc3_button\" name=\"addbbcode";
                        echo $this->getAttribute($context["custom_tag"], "BBCODE_ID", array());
                        echo "\" value=\" ";
                        echo (( !$this->getAttribute($context["custom_tag"], "BBCODE_IMG", array())) ? ($this->getAttribute($context["custom_tag"], "BBCODE_TAG", array())) : (""));
                        echo " \"";
                        if ($this->getAttribute($context["custom_tag"], "BBCODE_IMG", array())) {
                            echo " style=\"background-image:url('";
                            echo (($context["ROOT_PATH"] ?? null) . $this->getAttribute($context["custom_tag"], "BBCODE_IMG", array()));
                            echo "');\"";
                        }
                        echo " onclick=\"bbspecial('";
                        echo $this->getAttribute($context["custom_tag"], "BBCODE_TAG", array());
                        echo "', ";
                        echo $this->getAttribute($context["custom_tag"], "BBCODE_ID", array());
                        echo ")\" title=\"";
                        echo $this->getAttribute($context["custom_tag"], "BBCODE_HELPLINE", array());
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 253
                    echo "\t\t\t\t";
                }
                // line 254
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "\t\t\t";
            // line 256
            echo "\t\t</div>
\t";
        }
        // line 258
        echo "</div>
<div id=\"bbcode_wizard\"></div>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/abbc3_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 258,  471 => 256,  469 => 255,  463 => 254,  460 => 253,  440 => 251,  426 => 240,  408 => 225,  394 => 214,  390 => 213,  385 => 212,  382 => 211,  379 => 210,  374 => 209,  373 => 208,  370 => 207,  368 => 206,  365 => 205,  364 => 204,  358 => 203,  352 => 202,  346 => 201,  343 => 200,  340 => 199,  334 => 197,  332 => 196,  327 => 195,  325 => 194,  321 => 193,  317 => 192,  313 => 191,  309 => 190,  302 => 189,  294 => 187,  291 => 186,  283 => 184,  280 => 183,  272 => 181,  270 => 180,  264 => 179,  258 => 178,  252 => 177,  245 => 176,  237 => 174,  235 => 173,  229 => 172,  223 => 171,  217 => 170,  212 => 167,  210 => 166,  193 => 152,  182 => 144,  152 => 117,  128 => 96,  116 => 87,  104 => 78,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_abbc3/abbc3_posting_buttons.html", "");
    }
}
