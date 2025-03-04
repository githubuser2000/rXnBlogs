<?php

/* display_options.html */
class __TwigTemplate_62d37b151d804b910c51505091d27b44cfc25ad3090ad9fb8e5c857b59c4fa3e extends Twig_Template
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
        echo "<div class=\"dropdown-container dropdown-container-";
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo " dropdown-button-control sort-tools\">
\t<span title=\"";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_OPTIONS");
        echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t<i class=\"icon fa-sort-amount-asc fa-fw\" aria-hidden=\"true\"></i>
\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t</span>
\t<div class=\"dropdown hidden\">
\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t<div class=\"dropdown-contents\">
\t\t\t<fieldset class=\"display-options\">
\t\t\t";
        // line 10
        if (($context["S_SORT_OPTIONS"] ?? null)) {
            // line 11
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_SORT_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DIRECTION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT");
            echo "\" />
\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo ($context["S_SELECT_SORT_DAYS"] ?? null);
            echo "</label>
\t\t\t\t";
            // line 17
            if (($context["S_SELECT_SORT_KEY"] ?? null)) {
                // line 18
                echo "\t\t\t\t<label>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t\t\t<label>";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DIRECTION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t\t\t";
        }
        // line 24
        echo "\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 22,  84 => 21,  76 => 19,  68 => 18,  66 => 17,  58 => 16,  53 => 14,  45 => 12,  37 => 11,  35 => 10,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_options.html", "");
    }
}
