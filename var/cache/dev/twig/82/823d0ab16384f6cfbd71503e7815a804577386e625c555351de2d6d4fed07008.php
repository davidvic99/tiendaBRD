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
        $__internal_9e16ecdbd4695d9285c7bfe80804fb294d373be4afd3fa708ad10ae12e148d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e16ecdbd4695d9285c7bfe80804fb294d373be4afd3fa708ad10ae12e148d33->enter($__internal_9e16ecdbd4695d9285c7bfe80804fb294d373be4afd3fa708ad10ae12e148d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $__internal_db1c845486037ac60615dee9ac5b61029c1acb7dc0004421576901140f89107a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1c845486037ac60615dee9ac5b61029c1acb7dc0004421576901140f89107a->enter($__internal_db1c845486037ac60615dee9ac5b61029c1acb7dc0004421576901140f89107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e16ecdbd4695d9285c7bfe80804fb294d373be4afd3fa708ad10ae12e148d33->leave($__internal_9e16ecdbd4695d9285c7bfe80804fb294d373be4afd3fa708ad10ae12e148d33_prof);

        
        $__internal_db1c845486037ac60615dee9ac5b61029c1acb7dc0004421576901140f89107a->leave($__internal_db1c845486037ac60615dee9ac5b61029c1acb7dc0004421576901140f89107a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dac2b81bee8f64a6640699ac0c86e2dee1952772a4ebec23877d1b3dc25eb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dac2b81bee8f64a6640699ac0c86e2dee1952772a4ebec23877d1b3dc25eb63->enter($__internal_2dac2b81bee8f64a6640699ac0c86e2dee1952772a4ebec23877d1b3dc25eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cf766a0ce96de74e206985ba4f65440283378d31f81c6f5f86d923d271b9502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf766a0ce96de74e206985ba4f65440283378d31f81c6f5f86d923d271b9502->enter($__internal_9cf766a0ce96de74e206985ba4f65440283378d31f81c6f5f86d923d271b9502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg2.jpg"), "html", null, true);
        echo "'); transform: translate3d(0px, 0px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Tienda de la tripe alianza.</h1>
            <h3>Esto va a quedar dabutens.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_9cf766a0ce96de74e206985ba4f65440283378d31f81c6f5f86d923d271b9502->leave($__internal_9cf766a0ce96de74e206985ba4f65440283378d31f81c6f5f86d923d271b9502_prof);

        
        $__internal_2dac2b81bee8f64a6640699ac0c86e2dee1952772a4ebec23877d1b3dc25eb63->leave($__internal_2dac2b81bee8f64a6640699ac0c86e2dee1952772a4ebec23877d1b3dc25eb63_prof);

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
 <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('{{ asset('img/bg2.jpg')}}'); transform: translate3d(0px, 0px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Tienda de la tripe alianza.</h1>
            <h3>Esto va a quedar dabutens.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "frontal/inicio.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\inicio.html.twig");
    }
}
