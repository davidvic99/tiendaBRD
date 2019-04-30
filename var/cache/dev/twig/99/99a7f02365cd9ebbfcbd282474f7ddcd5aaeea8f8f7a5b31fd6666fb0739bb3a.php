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
        $__internal_ec91395516a8609188da2803fd730c1ebd40bcd81388eeec2c0fb61eac2fb463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec91395516a8609188da2803fd730c1ebd40bcd81388eeec2c0fb61eac2fb463->enter($__internal_ec91395516a8609188da2803fd730c1ebd40bcd81388eeec2c0fb61eac2fb463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_335a52526cb0696a6c7acc0a2531cc76404dc5eb5f16b6df2aaa78689d4812bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335a52526cb0696a6c7acc0a2531cc76404dc5eb5f16b6df2aaa78689d4812bb->enter($__internal_335a52526cb0696a6c7acc0a2531cc76404dc5eb5f16b6df2aaa78689d4812bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec91395516a8609188da2803fd730c1ebd40bcd81388eeec2c0fb61eac2fb463->leave($__internal_ec91395516a8609188da2803fd730c1ebd40bcd81388eeec2c0fb61eac2fb463_prof);

        
        $__internal_335a52526cb0696a6c7acc0a2531cc76404dc5eb5f16b6df2aaa78689d4812bb->leave($__internal_335a52526cb0696a6c7acc0a2531cc76404dc5eb5f16b6df2aaa78689d4812bb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d70f20259f6410540507aa4fa664fdbac4bcefe439822951374d16572981d79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70f20259f6410540507aa4fa664fdbac4bcefe439822951374d16572981d79b->enter($__internal_d70f20259f6410540507aa4fa664fdbac4bcefe439822951374d16572981d79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62ecee6a82234331cb5bd42f55ac0384a4b399991b518a3255d7d852676b686c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ecee6a82234331cb5bd42f55ac0384a4b399991b518a3255d7d852676b686c->enter($__internal_62ecee6a82234331cb5bd42f55ac0384a4b399991b518a3255d7d852676b686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/csspropio.css"), "html", null, true);
        echo "\"";
        
        $__internal_62ecee6a82234331cb5bd42f55ac0384a4b399991b518a3255d7d852676b686c->leave($__internal_62ecee6a82234331cb5bd42f55ac0384a4b399991b518a3255d7d852676b686c_prof);

        
        $__internal_d70f20259f6410540507aa4fa664fdbac4bcefe439822951374d16572981d79b->leave($__internal_d70f20259f6410540507aa4fa664fdbac4bcefe439822951374d16572981d79b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8e9af25167dd7bf25aa270fdb1672c7e1ebd91e7870bf5d04dfa7135a0bda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8e9af25167dd7bf25aa270fdb1672c7e1ebd91e7870bf5d04dfa7135a0bda1->enter($__internal_0d8e9af25167dd7bf25aa270fdb1672c7e1ebd91e7870bf5d04dfa7135a0bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62dd25a7213a7d0a9df8ca8bb8ad365b76f86ac551247b7152026d643e830f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dd25a7213a7d0a9df8ca8bb8ad365b76f86ac551247b7152026d643e830f34->enter($__internal_62dd25a7213a7d0a9df8ca8bb8ad365b76f86ac551247b7152026d643e830f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      </div>   </div>


";
        
        $__internal_62dd25a7213a7d0a9df8ca8bb8ad365b76f86ac551247b7152026d643e830f34->leave($__internal_62dd25a7213a7d0a9df8ca8bb8ad365b76f86ac551247b7152026d643e830f34_prof);

        
        $__internal_0d8e9af25167dd7bf25aa270fdb1672c7e1ebd91e7870bf5d04dfa7135a0bda1->leave($__internal_0d8e9af25167dd7bf25aa270fdb1672c7e1ebd91e7870bf5d04dfa7135a0bda1_prof);

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
        return array (  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
      </div>   </div>


{% endblock %}", "frontal/productos.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\productos.html.twig");
    }
}
