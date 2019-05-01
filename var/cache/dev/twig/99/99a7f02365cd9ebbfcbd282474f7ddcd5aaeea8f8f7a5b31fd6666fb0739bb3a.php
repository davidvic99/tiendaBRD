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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d50276010bcc4ed905203cde8958269867098f95725f3d5cc76188728e76ad47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50276010bcc4ed905203cde8958269867098f95725f3d5cc76188728e76ad47->enter($__internal_d50276010bcc4ed905203cde8958269867098f95725f3d5cc76188728e76ad47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_6b837ae681a5f541f9269d726863d8bf69b5f5633721927a945c10f110a4ce3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b837ae681a5f541f9269d726863d8bf69b5f5633721927a945c10f110a4ce3b->enter($__internal_6b837ae681a5f541f9269d726863d8bf69b5f5633721927a945c10f110a4ce3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d50276010bcc4ed905203cde8958269867098f95725f3d5cc76188728e76ad47->leave($__internal_d50276010bcc4ed905203cde8958269867098f95725f3d5cc76188728e76ad47_prof);

        
        $__internal_6b837ae681a5f541f9269d726863d8bf69b5f5633721927a945c10f110a4ce3b->leave($__internal_6b837ae681a5f541f9269d726863d8bf69b5f5633721927a945c10f110a4ce3b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ebd6873a68954416f0ba9879cc254915e78974d89f886a8ad043cf855f571be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebd6873a68954416f0ba9879cc254915e78974d89f886a8ad043cf855f571be->enter($__internal_7ebd6873a68954416f0ba9879cc254915e78974d89f886a8ad043cf855f571be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d51bddce3cae30a502b33581aac40a060b79797cc8b6f18e487a865ac676acc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51bddce3cae30a502b33581aac40a060b79797cc8b6f18e487a865ac676acc3->enter($__internal_d51bddce3cae30a502b33581aac40a060b79797cc8b6f18e487a865ac676acc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/csspropio.css"), "html", null, true);
        echo "\"";
        
        $__internal_d51bddce3cae30a502b33581aac40a060b79797cc8b6f18e487a865ac676acc3->leave($__internal_d51bddce3cae30a502b33581aac40a060b79797cc8b6f18e487a865ac676acc3_prof);

        
        $__internal_7ebd6873a68954416f0ba9879cc254915e78974d89f886a8ad043cf855f571be->leave($__internal_7ebd6873a68954416f0ba9879cc254915e78974d89f886a8ad043cf855f571be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_475c9aeace1d6c16f4fecde8796d9c0f78cc18e787f0128a036744df484ee21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475c9aeace1d6c16f4fecde8796d9c0f78cc18e787f0128a036744df484ee21f->enter($__internal_475c9aeace1d6c16f4fecde8796d9c0f78cc18e787f0128a036744df484ee21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ece65990eec8ab8a759716f7227ec9aff0fbbbcdb88f99f8f9fa3ef0825a67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ece65990eec8ab8a759716f7227ec9aff0fbbbcdb88f99f8f9fa3ef0825a67f->enter($__internal_9ece65990eec8ab8a759716f7227ec9aff0fbbbcdb88f99f8f9fa3ef0825a67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg2.jpg"), "html", null, true);
        echo "'); transform: translate3d(0px, 0px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Productos</h1>
            <h3>Tienda online.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id=\"blanco\"><div class=\"main main-raised\">
    <div class=\"container\">
      <div class=\"section text-center\">
        <div class=\"row\">
          <div class=\"col-md-8 ml-auto mr-auto\">
            <h2 class=\"title\">Hablemos de nuestros productos</h2>
            <h5 class=\"description\">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class=\"features\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-info\">
                  <i class=\"material-icons\">chat</i>
                </div>
                <h4 class=\"info-title\">Soporte </h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-success\">
                  <i class=\"material-icons\">verified_user</i>
                </div>
                <h4 class=\"info-title\">Compra totalmente Segura</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-danger\">
                  <i class=\"material-icons\">query_builder</i>
                </div>
                <h4 class=\"info-title\">Recibelo al instante!</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>   <div class=\"section text-center\">
        <h2 class=\"title\">Todos nuestros Productos</h2>
       
           
              <div class=\"team\">
          <div class=\"row\">
       ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto"] ?? $this->getContext($context, "producto")));
        foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
            // line 64
            echo "            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["productos"], "img", array())), "html", null, true);
            echo "\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "
                    <br>
                    <small class=\"card-description text-muted\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "nombre", array()), "html", null, true);
            echo "</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["productos"], "descripcion", array()), "html", null, true);
            echo "</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a hr ef=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
               
                </div>
                 
              </div>
 
            </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "      </div>


";
        
        $__internal_9ece65990eec8ab8a759716f7227ec9aff0fbbbcdb88f99f8f9fa3ef0825a67f->leave($__internal_9ece65990eec8ab8a759716f7227ec9aff0fbbbcdb88f99f8f9fa3ef0825a67f_prof);

        
        $__internal_475c9aeace1d6c16f4fecde8796d9c0f78cc18e787f0128a036744df484ee21f->leave($__internal_475c9aeace1d6c16f4fecde8796d9c0f78cc18e787f0128a036744df484ee21f_prof);

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
        return array (  180 => 89,  160 => 75,  154 => 72,  149 => 70,  144 => 68,  138 => 64,  134 => 63,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
 {% block stylesheets %}<link =\"{{ asset('css/csspropio.css')}}\"{% endblock %}
{% block body %}

 <div class=\"page-header header-filter clear-filter purple-filter\" data-parallax=\"true\" style=\"background-image: url('{{ asset('img/bg2.jpg')}}'); transform: translate3d(0px, 0px, 0px);\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 ml-auto mr-auto\">
          <div class=\"brand\">
            <h1>Productos</h1>
            <h3>Tienda online.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id=\"blanco\"><div class=\"main main-raised\">
    <div class=\"container\">
      <div class=\"section text-center\">
        <div class=\"row\">
          <div class=\"col-md-8 ml-auto mr-auto\">
            <h2 class=\"title\">Hablemos de nuestros productos</h2>
            <h5 class=\"description\">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class=\"features\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-info\">
                  <i class=\"material-icons\">chat</i>
                </div>
                <h4 class=\"info-title\">Soporte </h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-success\">
                  <i class=\"material-icons\">verified_user</i>
                </div>
                <h4 class=\"info-title\">Compra totalmente Segura</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-danger\">
                  <i class=\"material-icons\">query_builder</i>
                </div>
                <h4 class=\"info-title\">Recibelo al instante!</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>   <div class=\"section text-center\">
        <h2 class=\"title\">Todos nuestros Productos</h2>
       
           
              <div class=\"team\">
          <div class=\"row\">
       {% for productos in producto %}
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"{{ asset (productos.img)}}\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">{{productos.nombre}}
                    <br>
                    <small class=\"card-description text-muted\">{{productos.nombre}}</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">{{productos.descripcion}}</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a hr ef=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
               
                </div>
                 
              </div>
 
            </div>
             {% endfor %}
      </div>


{% endblock %}", "frontal/productos.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\productos.html.twig");
    }
}
