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
        $__internal_c88dcb3b07c34428ab78c6decd41cb1f388250a3d492a59f1d1f2872d9d3151e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88dcb3b07c34428ab78c6decd41cb1f388250a3d492a59f1d1f2872d9d3151e->enter($__internal_c88dcb3b07c34428ab78c6decd41cb1f388250a3d492a59f1d1f2872d9d3151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_9a5a2f2486d6d08de7b1019a8cdf68cc1f39690bdd67c0d004ddc81ff1e592a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5a2f2486d6d08de7b1019a8cdf68cc1f39690bdd67c0d004ddc81ff1e592a4->enter($__internal_9a5a2f2486d6d08de7b1019a8cdf68cc1f39690bdd67c0d004ddc81ff1e592a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88dcb3b07c34428ab78c6decd41cb1f388250a3d492a59f1d1f2872d9d3151e->leave($__internal_c88dcb3b07c34428ab78c6decd41cb1f388250a3d492a59f1d1f2872d9d3151e_prof);

        
        $__internal_9a5a2f2486d6d08de7b1019a8cdf68cc1f39690bdd67c0d004ddc81ff1e592a4->leave($__internal_9a5a2f2486d6d08de7b1019a8cdf68cc1f39690bdd67c0d004ddc81ff1e592a4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf37a9f012cd786fb2c490f2a37a8ec441ba1c226e76700e61e04c7bbc3eac9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf37a9f012cd786fb2c490f2a37a8ec441ba1c226e76700e61e04c7bbc3eac9f->enter($__internal_bf37a9f012cd786fb2c490f2a37a8ec441ba1c226e76700e61e04c7bbc3eac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ec11ccde5d255bf881a12ec9d9f216c7aabfa6b98ca8d1ee7d5ba223cf7d8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec11ccde5d255bf881a12ec9d9f216c7aabfa6b98ca8d1ee7d5ba223cf7d8b0->enter($__internal_2ec11ccde5d255bf881a12ec9d9f216c7aabfa6b98ca8d1ee7d5ba223cf7d8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/csspropio.css"), "html", null, true);
        echo "\"";
        
        $__internal_2ec11ccde5d255bf881a12ec9d9f216c7aabfa6b98ca8d1ee7d5ba223cf7d8b0->leave($__internal_2ec11ccde5d255bf881a12ec9d9f216c7aabfa6b98ca8d1ee7d5ba223cf7d8b0_prof);

        
        $__internal_bf37a9f012cd786fb2c490f2a37a8ec441ba1c226e76700e61e04c7bbc3eac9f->leave($__internal_bf37a9f012cd786fb2c490f2a37a8ec441ba1c226e76700e61e04c7bbc3eac9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a784f5c33c956daf61c5e2242481bb443a1a4e841b51513e2f5566287ea3dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a784f5c33c956daf61c5e2242481bb443a1a4e841b51513e2f5566287ea3dd8->enter($__internal_4a784f5c33c956daf61c5e2242481bb443a1a4e841b51513e2f5566287ea3dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ad817275fc29c15438e352e5805dc759799f27c3b4040a70b07b94e5fd703ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad817275fc29c15438e352e5805dc759799f27c3b4040a70b07b94e5fd703ee->enter($__internal_6ad817275fc29c15438e352e5805dc759799f27c3b4040a70b07b94e5fd703ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h1>Tienda de la tripe alianza.</h1>
            <h3>Esto va a quedar dabutens.</h3>
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
            <h2 class=\"title\">Let&apos;s talk product</h2>
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
                <h4 class=\"info-title\">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-success\">
                  <i class=\"material-icons\">verified_user</i>
                </div>
                <h4 class=\"info-title\">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-danger\">
                  <i class=\"material-icons\">fingerprint</i>
                </div>
                <h4 class=\"info-title\">Fingerprint</h4>
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
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
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
        
        $__internal_6ad817275fc29c15438e352e5805dc759799f27c3b4040a70b07b94e5fd703ee->leave($__internal_6ad817275fc29c15438e352e5805dc759799f27c3b4040a70b07b94e5fd703ee_prof);

        
        $__internal_4a784f5c33c956daf61c5e2242481bb443a1a4e841b51513e2f5566287ea3dd8->leave($__internal_4a784f5c33c956daf61c5e2242481bb443a1a4e841b51513e2f5566287ea3dd8_prof);

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
            <h1>Tienda de la tripe alianza.</h1>
            <h3>Esto va a quedar dabutens.</h3>
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
            <h2 class=\"title\">Let&apos;s talk product</h2>
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
                <h4 class=\"info-title\">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-success\">
                  <i class=\"material-icons\">verified_user</i>
                </div>
                <h4 class=\"info-title\">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"info\">
                <div class=\"icon icon-danger\">
                  <i class=\"material-icons\">fingerprint</i>
                </div>
                <h4 class=\"info-title\">Fingerprint</h4>
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
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
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
