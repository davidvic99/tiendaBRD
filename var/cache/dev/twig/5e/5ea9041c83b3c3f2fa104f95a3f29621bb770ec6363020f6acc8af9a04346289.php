<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d306f6f2fe6c35f404b707fa3e09fdef0c32ea3bd99a30a8c90ca3c6faa1bcfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e3c019e9c2c051fd5c5cf3f3d2bdc2e2b8b98199e0cfb59171beb9058ac3f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3c019e9c2c051fd5c5cf3f3d2bdc2e2b8b98199e0cfb59171beb9058ac3f11->enter($__internal_8e3c019e9c2c051fd5c5cf3f3d2bdc2e2b8b98199e0cfb59171beb9058ac3f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c5ff38c98c81cb835c6b97df7f9cc1e753a31927853af8634b8fa9ae8394bc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ff38c98c81cb835c6b97df7f9cc1e753a31927853af8634b8fa9ae8394bc7a->enter($__internal_c5ff38c98c81cb835c6b97df7f9cc1e753a31927853af8634b8fa9ae8394bc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3c019e9c2c051fd5c5cf3f3d2bdc2e2b8b98199e0cfb59171beb9058ac3f11->leave($__internal_8e3c019e9c2c051fd5c5cf3f3d2bdc2e2b8b98199e0cfb59171beb9058ac3f11_prof);

        
        $__internal_c5ff38c98c81cb835c6b97df7f9cc1e753a31927853af8634b8fa9ae8394bc7a->leave($__internal_c5ff38c98c81cb835c6b97df7f9cc1e753a31927853af8634b8fa9ae8394bc7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe64f36680265b1588392edfbc2de1c7b2b0dd3f8fa2f183fc5e962698158f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe64f36680265b1588392edfbc2de1c7b2b0dd3f8fa2f183fc5e962698158f7e->enter($__internal_fe64f36680265b1588392edfbc2de1c7b2b0dd3f8fa2f183fc5e962698158f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b4de3731af154e8813e0275d9eb2ed75774da954fd840b00d624a440043436e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4de3731af154e8813e0275d9eb2ed75774da954fd840b00d624a440043436e->enter($__internal_4b4de3731af154e8813e0275d9eb2ed75774da954fd840b00d624a440043436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4b4de3731af154e8813e0275d9eb2ed75774da954fd840b00d624a440043436e->leave($__internal_4b4de3731af154e8813e0275d9eb2ed75774da954fd840b00d624a440043436e_prof);

        
        $__internal_fe64f36680265b1588392edfbc2de1c7b2b0dd3f8fa2f183fc5e962698158f7e->leave($__internal_fe64f36680265b1588392edfbc2de1c7b2b0dd3f8fa2f183fc5e962698158f7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
