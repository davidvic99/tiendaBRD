<?php

/* frontal/productos.html.twig */
class __TwigTemplate_8ed7200cb1b93f7b5f4554789de54dd9bb3f1fea273d6dcc196b73090c8605c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/productos.html.twig", 1);
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
        $__internal_3a12f6d3f63afb560d706671e736776c54ceea38a585a5f5f74c29937c3f686d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a12f6d3f63afb560d706671e736776c54ceea38a585a5f5f74c29937c3f686d->enter($__internal_3a12f6d3f63afb560d706671e736776c54ceea38a585a5f5f74c29937c3f686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_4cf663e4ba87405595c80f44e65105a901704195b272295efe0c797de05c060c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf663e4ba87405595c80f44e65105a901704195b272295efe0c797de05c060c->enter($__internal_4cf663e4ba87405595c80f44e65105a901704195b272295efe0c797de05c060c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a12f6d3f63afb560d706671e736776c54ceea38a585a5f5f74c29937c3f686d->leave($__internal_3a12f6d3f63afb560d706671e736776c54ceea38a585a5f5f74c29937c3f686d_prof);

        
        $__internal_4cf663e4ba87405595c80f44e65105a901704195b272295efe0c797de05c060c->leave($__internal_4cf663e4ba87405595c80f44e65105a901704195b272295efe0c797de05c060c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9446213c620d7d8b16fd2a9c240ad789d3242591f93aa15d68ab14439eefee3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9446213c620d7d8b16fd2a9c240ad789d3242591f93aa15d68ab14439eefee3e->enter($__internal_9446213c620d7d8b16fd2a9c240ad789d3242591f93aa15d68ab14439eefee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e00c487e76517f6e413380811b306dc07f97340e9b03233c65d5d00d2990cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e00c487e76517f6e413380811b306dc07f97340e9b03233c65d5d00d2990cfd->enter($__internal_5e00c487e76517f6e413380811b306dc07f97340e9b03233c65d5d00d2990cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_5e00c487e76517f6e413380811b306dc07f97340e9b03233c65d5d00d2990cfd->leave($__internal_5e00c487e76517f6e413380811b306dc07f97340e9b03233c65d5d00d2990cfd_prof);

        
        $__internal_9446213c620d7d8b16fd2a9c240ad789d3242591f93aa15d68ab14439eefee3e->leave($__internal_9446213c620d7d8b16fd2a9c240ad789d3242591f93aa15d68ab14439eefee3e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/productos.html.twig";
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

{% endblock %}", "frontal/productos.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\productos.html.twig");
    }
}
