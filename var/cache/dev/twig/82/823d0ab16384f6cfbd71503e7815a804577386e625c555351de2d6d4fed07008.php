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
        $__internal_bd6fea616cb567b1924d9a977730baf2231206f3ba3faa9cecd3b52f3aecf016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6fea616cb567b1924d9a977730baf2231206f3ba3faa9cecd3b52f3aecf016->enter($__internal_bd6fea616cb567b1924d9a977730baf2231206f3ba3faa9cecd3b52f3aecf016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $__internal_bfe0c4bb05735df0afb575d1ab7fbe11135e840d744c5c490c81d8466d163450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe0c4bb05735df0afb575d1ab7fbe11135e840d744c5c490c81d8466d163450->enter($__internal_bfe0c4bb05735df0afb575d1ab7fbe11135e840d744c5c490c81d8466d163450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6fea616cb567b1924d9a977730baf2231206f3ba3faa9cecd3b52f3aecf016->leave($__internal_bd6fea616cb567b1924d9a977730baf2231206f3ba3faa9cecd3b52f3aecf016_prof);

        
        $__internal_bfe0c4bb05735df0afb575d1ab7fbe11135e840d744c5c490c81d8466d163450->leave($__internal_bfe0c4bb05735df0afb575d1ab7fbe11135e840d744c5c490c81d8466d163450_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6117eefc166964862e546970535e9d72238898e381f05565f2572ea1438740a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6117eefc166964862e546970535e9d72238898e381f05565f2572ea1438740a8->enter($__internal_6117eefc166964862e546970535e9d72238898e381f05565f2572ea1438740a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed59808d66db645299c27be345e4f7c73ec7006bbe1abdbcb8a12faecc450ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed59808d66db645299c27be345e4f7c73ec7006bbe1abdbcb8a12faecc450ec2->enter($__internal_ed59808d66db645299c27be345e4f7c73ec7006bbe1abdbcb8a12faecc450ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg2.jpg"), "html", null, true);
        echo "'); transform: translate3d(0px, 0px, 0px);\">
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
        
        $__internal_ed59808d66db645299c27be345e4f7c73ec7006bbe1abdbcb8a12faecc450ec2->leave($__internal_ed59808d66db645299c27be345e4f7c73ec7006bbe1abdbcb8a12faecc450ec2_prof);

        
        $__internal_6117eefc166964862e546970535e9d72238898e381f05565f2572ea1438740a8->leave($__internal_6117eefc166964862e546970535e9d72238898e381f05565f2572ea1438740a8_prof);

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
