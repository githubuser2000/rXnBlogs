<?php

/* @vse_abbc3/event/posting_editor_buttons_after.html */
class __TwigTemplate_d18a47ed0893cb3d33f44c23c772c5eb3a8701619558205325cfba263f326c5b extends Twig_Template
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
        $this->loadTemplate("abbc3_posting_buttons.html", "@vse_abbc3/event/posting_editor_buttons_after.html", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/posting_editor_buttons_after.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_abbc3/event/posting_editor_buttons_after.html", "");
    }
}
