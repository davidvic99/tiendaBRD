<?php

/* frontal/inicio.html.twig */
class __TwigTemplate_663be8deb380db1f5de9cc9e0656f343db311e96d029913c87f2ab8429e8c768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e418ba952b7e7ae346e196565505fb81b33f1f68c9801a9ff3a6bfa2b6a28f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e418ba952b7e7ae346e196565505fb81b33f1f68c9801a9ff3a6bfa2b6a28f2->enter($__internal_3e418ba952b7e7ae346e196565505fb81b33f1f68c9801a9ff3a6bfa2b6a28f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $__internal_5f7de74b2bf66c195819a807a6e0c3983ef978aa39c0c31f5b2344b8fe48d121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7de74b2bf66c195819a807a6e0c3983ef978aa39c0c31f5b2344b8fe48d121->enter($__internal_5f7de74b2bf66c195819a807a6e0c3983ef978aa39c0c31f5b2344b8fe48d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e418ba952b7e7ae346e196565505fb81b33f1f68c9801a9ff3a6bfa2b6a28f2->leave($__internal_3e418ba952b7e7ae346e196565505fb81b33f1f68c9801a9ff3a6bfa2b6a28f2_prof);

        
        $__internal_5f7de74b2bf66c195819a807a6e0c3983ef978aa39c0c31f5b2344b8fe48d121->leave($__internal_5f7de74b2bf66c195819a807a6e0c3983ef978aa39c0c31f5b2344b8fe48d121_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7da8fba5c7d701355ec45e861aa80cdaf1ace69ba7bba11fdbef68486aa93d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7da8fba5c7d701355ec45e861aa80cdaf1ace69ba7bba11fdbef68486aa93d3->enter($__internal_e7da8fba5c7d701355ec45e861aa80cdaf1ace69ba7bba11fdbef68486aa93d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_599f89632f0ba0947077b4649540a1caed2d9b4c9bc0d0fbcd54c1cd6ff458e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599f89632f0ba0947077b4649540a1caed2d9b4c9bc0d0fbcd54c1cd6ff458e0->enter($__internal_599f89632f0ba0947077b4649540a1caed2d9b4c9bc0d0fbcd54c1cd6ff458e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg2.jpg"), "html", null, true);
        echo "'); transform: translate3d(0px, 33.3333px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Material Kit.</h1>
            <h3>A Badass Bootstrap 4 UI Kit based on Material Design.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_599f89632f0ba0947077b4649540a1caed2d9b4c9bc0d0fbcd54c1cd6ff458e0->leave($__internal_599f89632f0ba0947077b4649540a1caed2d9b4c9bc0d0fbcd54c1cd6ff458e0_prof);

        
        $__internal_e7da8fba5c7d701355ec45e861aa80cdaf1ace69ba7bba11fdbef68486aa93d3->leave($__internal_e7da8fba5c7d701355ec45e861aa80cdaf1ace69ba7bba11fdbef68486aa93d3_prof);

    }

    public function getTemplateName()
    {
        return "frontal/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
 <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('{{ asset('img/bg2.jpg')}}'); transform: translate3d(0px, 33.3333px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Material Kit.</h1>
            <h3>A Badass Bootstrap 4 UI Kit based on Material Design.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "frontal/inicio.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\inicio.html.twig");
    }
}
