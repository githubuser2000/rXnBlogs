<?php

/* overall_header.html */
class __TwigTemplate_fff50b24bd4b1b3f471f810bab5e7cb929323d085d1dd6d1b82479290dffed63 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => ($context["S_FORUM_ID"] ?? null)));
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => ($context["S_TOPIC_ID"] ?? null)));
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 49
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 52
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 53
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 55
        echo "
";
        // line 56
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 57
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 59
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 61
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 64
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 65
        echo "
";
        // line 66
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 68
        // line 69
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 71
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\" style=\"background-image: url(/styles/alxsilver8/theme/images/tekstura-fon-cvety-zheltyy.jpg);background-attachment:fixed;\">

";
        // line 73
        // line 74
        echo "
<div id=\"wrap\" class=\"wrap\" style=\"background: transparent url(/styles/alxsilver8/theme/images/tekstura-fon-cvety-zheltyy4.png) 0 0 repeat;opacity: 0.95;background-size: 100% 100%;\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\"> <!-- style=\"opacity: 0.9; -->
\t\t<div class=\"headerbar\" role=\"banner\"  style=\"text-align: center;\"> 
\t\t";
        // line 79
        // line 80
        echo "\t\t\t<div class=\"inner\" style=\"text-align: center;\">

\t\t\t<div id=\"site-description\" class=\"site-description\" style=\"text-align: center;margin-left:auto; margin-right:auto;\" >
\t\t\t\t<aside style=\"display:inline; text-align:left; float:left;\">
\t\t\t    \t\t<a href=\"/\">
\t\t\t\t\t\t<img src=\"/styles/alxsilver8/theme/images/uno-logo.png\" style=\"width : 80px; height : 80px;\">
\t\t\t\t\t</a>
\t\t\t\t</aside>
\t\t\t\t  <!--
\t\t\t\t  <h1>";
        // line 89
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t\t\t  <p>";
        // line 90
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</p>
\t\t\t\t  <p class=\"skiplink\"><a href=\"#start_here\">";
        // line 91
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
\t\t\t\t  -->
\t\t\t\t<article style=\"display:inline;float:left;text-align: center;margin-left:auto; margin-right:auto;\">
\t\t\t\t\t<header style=\"text-align : center;\">
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<img src=\"/styles/alxsilver8/theme/images/1a.png\">
\t\t\t\t\t\t\t<img src=\"/styles/alxsilver8/theme/images/1b.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</header>
\t\t\t\t\t<footer>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<img src=\"/styles/alxsilver8/theme/images/2a.png\"><img src=\"/styles/alxsilver8/theme/images/2b.png\"><img src=\"/styles/alxsilver8/theme/images/2c.png\"> 
\t\t\t\t\t\t</a>
\t\t\t\t\t</footer>
\t\t\t\t</article>
\t\t\t\t<!--\t  <img src=\"/styles/alxsilver8/theme/images/freiredeforum_ueberschrift.png\" style=\" height: 56px; width: 450px;\"> -->
\t\t\t\t<aside style=\"display:inline;float:right;margin:0;margin-left:auto; margin-right:auto;\">
\t\t\t\t</aside>
\t\t\t    </a>
\t\t\t</div>

\t\t\t";
        // line 112
        // line 113
        echo "\t\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 114
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 115
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 117
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 119
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
            // line 121
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 124
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 129
        echo "\t\t\t";
        // line 130
        echo "
\t\t\t</div>
\t\t\t";
        // line 132
        // line 133
        echo "\t\t</div>
\t\t";
        // line 134
        // line 135
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 135)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 136
        echo "\t</div>

\t";
        // line 138
        // line 139
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\" style=\"opacity: 1;\">
\t\t";
        // line 142
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 143
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 149
        echo "
\t\t";
        // line 150
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 150,  413 => 149,  403 => 145,  399 => 143,  397 => 142,  392 => 139,  391 => 138,  387 => 136,  374 => 135,  373 => 134,  370 => 133,  369 => 132,  365 => 130,  363 => 129,  355 => 124,  350 => 122,  344 => 121,  339 => 119,  335 => 118,  327 => 117,  322 => 115,  319 => 114,  316 => 113,  315 => 112,  291 => 91,  287 => 90,  283 => 89,  272 => 80,  271 => 79,  264 => 74,  263 => 73,  254 => 71,  250 => 69,  249 => 68,  244 => 66,  241 => 65,  236 => 64,  228 => 61,  224 => 59,  216 => 57,  214 => 56,  211 => 55,  203 => 53,  201 => 52,  196 => 50,  192 => 49,  187 => 48,  170 => 33,  168 => 32,  158 => 24,  152 => 22,  150 => 21,  147 => 20,  144 => 18,  131 => 17,  118 => 16,  107 => 15,  96 => 14,  85 => 13,  74 => 12,  63 => 11,  61 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
