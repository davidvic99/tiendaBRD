<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94251f9ef154b57a458ef0b1ad320219258766f868275c2bd027b012822bf019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94251f9ef154b57a458ef0b1ad320219258766f868275c2bd027b012822bf019->enter($__internal_94251f9ef154b57a458ef0b1ad320219258766f868275c2bd027b012822bf019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8feaf10906ed5c80ad990a00501aa843dde93ee0e53d01f69157d5499497c1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feaf10906ed5c80ad990a00501aa843dde93ee0e53d01f69157d5499497c1d0->enter($__internal_8feaf10906ed5c80ad990a00501aa843dde93ee0e53d01f69157d5499497c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-kit.css?v=2.0.5"), "html", null, true);
        echo " \" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("demo/demo.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-kit.css?v=2.0.5"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
          <nav class=\"navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg\" color-on-scroll=\"100\" id=\"sectionsNav\">
    <div class=\"container\">
      <div class=\"navbar-translate\">
        <a class=\"navbar-brand\" href=\"/inicio\">
          <b>Página de inicio</b> </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"dropdown nav-item\">
            <a href=\"/productos\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">store</i> Productos
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
              <a href=\"/productos\" class=\"dropdown-item\">
                <i class=\"material-icons\">layers</i> Información
              </a>
           
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\" onclick=\"scrollToDownload()\">
              <i class=\"material-icons\">announcement</i> Noticias
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://twitter.com/CreativeTim\" target=\"_blank\" data-original-title=\"Follow us on Twitter\">
              <i class=\"fa fa-twitter\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://www.facebook.com/CreativeTim\" target=\"_blank\" data-original-title=\"Like us on Facebook\">
              <i class=\"fa fa-facebook-square\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://www.instagram.com/CreativeTimOfficial\" target=\"_blank\" data-original-title=\"Follow us on Instagram\">
              <i class=\"fa fa-instagram\"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/bootstrap-material-design.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-kit.js?v=2.0.5"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function() {
        
            materialKit.initFormExtendedDatetimepickers();

            materialKit.initSliders();
            });


            function scrollToDownload() {
            if (\$('.section-download').length != 0) {
                \$(\"html, body\").animate({
                scrollTop: \$('.section-download').offset().top
                }, 1000);
            }
            }

        </script>
        ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "    </body>
</html>
";
        
        $__internal_94251f9ef154b57a458ef0b1ad320219258766f868275c2bd027b012822bf019->leave($__internal_94251f9ef154b57a458ef0b1ad320219258766f868275c2bd027b012822bf019_prof);

        
        $__internal_8feaf10906ed5c80ad990a00501aa843dde93ee0e53d01f69157d5499497c1d0->leave($__internal_8feaf10906ed5c80ad990a00501aa843dde93ee0e53d01f69157d5499497c1d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd294c864b665dbb2ac4c17118c28dd62f796d9c2bf74fd21f792e1f86f20cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd294c864b665dbb2ac4c17118c28dd62f796d9c2bf74fd21f792e1f86f20cad->enter($__internal_fd294c864b665dbb2ac4c17118c28dd62f796d9c2bf74fd21f792e1f86f20cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6154778e4faa5e9d1047a2b0815ecdbfe7b494c5d9c0b7569e60d1804790d236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6154778e4faa5e9d1047a2b0815ecdbfe7b494c5d9c0b7569e60d1804790d236->enter($__internal_6154778e4faa5e9d1047a2b0815ecdbfe7b494c5d9c0b7569e60d1804790d236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6154778e4faa5e9d1047a2b0815ecdbfe7b494c5d9c0b7569e60d1804790d236->leave($__internal_6154778e4faa5e9d1047a2b0815ecdbfe7b494c5d9c0b7569e60d1804790d236_prof);

        
        $__internal_fd294c864b665dbb2ac4c17118c28dd62f796d9c2bf74fd21f792e1f86f20cad->leave($__internal_fd294c864b665dbb2ac4c17118c28dd62f796d9c2bf74fd21f792e1f86f20cad_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f08774d3c00f6f4220b7907414b563332ff637522647b6e7cb832667becc8725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08774d3c00f6f4220b7907414b563332ff637522647b6e7cb832667becc8725->enter($__internal_f08774d3c00f6f4220b7907414b563332ff637522647b6e7cb832667becc8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fde554a9417141b987d0dd6b365bff1ad86aca92cc48749d26681899817db025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde554a9417141b987d0dd6b365bff1ad86aca92cc48749d26681899817db025->enter($__internal_fde554a9417141b987d0dd6b365bff1ad86aca92cc48749d26681899817db025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fde554a9417141b987d0dd6b365bff1ad86aca92cc48749d26681899817db025->leave($__internal_fde554a9417141b987d0dd6b365bff1ad86aca92cc48749d26681899817db025_prof);

        
        $__internal_f08774d3c00f6f4220b7907414b563332ff637522647b6e7cb832667becc8725->leave($__internal_f08774d3c00f6f4220b7907414b563332ff637522647b6e7cb832667becc8725_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_8571b2a28289877e85a3f0fc3704a5760b302ca54cf2eecee49b463a1dfd8ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8571b2a28289877e85a3f0fc3704a5760b302ca54cf2eecee49b463a1dfd8ece->enter($__internal_8571b2a28289877e85a3f0fc3704a5760b302ca54cf2eecee49b463a1dfd8ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_323bbb604ee8c80011b2b15b532f6919b431a065e69b1da4a670878c42d45b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323bbb604ee8c80011b2b15b532f6919b431a065e69b1da4a670878c42d45b5c->enter($__internal_323bbb604ee8c80011b2b15b532f6919b431a065e69b1da4a670878c42d45b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_323bbb604ee8c80011b2b15b532f6919b431a065e69b1da4a670878c42d45b5c->leave($__internal_323bbb604ee8c80011b2b15b532f6919b431a065e69b1da4a670878c42d45b5c_prof);

        
        $__internal_8571b2a28289877e85a3f0fc3704a5760b302ca54cf2eecee49b463a1dfd8ece->leave($__internal_8571b2a28289877e85a3f0fc3704a5760b302ca54cf2eecee49b463a1dfd8ece_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05ce7bc13320b60da65c7a3eabc549890a7e0aa66c40fb754e0af552af72eacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ce7bc13320b60da65c7a3eabc549890a7e0aa66c40fb754e0af552af72eacf->enter($__internal_05ce7bc13320b60da65c7a3eabc549890a7e0aa66c40fb754e0af552af72eacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da2cec9f3d5b3923ff4351afb8b663c6fa9a4e195ef3bddc074b3255d1fc16ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2cec9f3d5b3923ff4351afb8b663c6fa9a4e195ef3bddc074b3255d1fc16ba->enter($__internal_da2cec9f3d5b3923ff4351afb8b663c6fa9a4e195ef3bddc074b3255d1fc16ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da2cec9f3d5b3923ff4351afb8b663c6fa9a4e195ef3bddc074b3255d1fc16ba->leave($__internal_da2cec9f3d5b3923ff4351afb8b663c6fa9a4e195ef3bddc074b3255d1fc16ba_prof);

        
        $__internal_05ce7bc13320b60da65c7a3eabc549890a7e0aa66c40fb754e0af552af72eacf->leave($__internal_05ce7bc13320b60da65c7a3eabc549890a7e0aa66c40fb754e0af552af72eacf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 96,  215 => 70,  198 => 16,  180 => 5,  168 => 97,  166 => 96,  144 => 77,  140 => 76,  136 => 75,  132 => 74,  128 => 73,  124 => 72,  119 => 71,  117 => 70,  60 => 17,  58 => 16,  54 => 15,  47 => 11,  43 => 10,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <link href=\"{{ asset('css/material-kit.css?v=2.0.5')}} \" rel=\"stylesheet\" />
        <link href=\"{{ asset('demo/demo.css')}} \" rel=\"stylesheet\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"{{ asset('css/material-kit.css?v=2.0.5')}}\" rel=\"stylesheet\" />
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
          <nav class=\"navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg\" color-on-scroll=\"100\" id=\"sectionsNav\">
    <div class=\"container\">
      <div class=\"navbar-translate\">
        <a class=\"navbar-brand\" href=\"/inicio\">
          <b>Página de inicio</b> </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"dropdown nav-item\">
            <a href=\"/productos\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">store</i> Productos
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
              <a href=\"/productos\" class=\"dropdown-item\">
                <i class=\"material-icons\">layers</i> Información
              </a>
           
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\" onclick=\"scrollToDownload()\">
              <i class=\"material-icons\">announcement</i> Noticias
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://twitter.com/CreativeTim\" target=\"_blank\" data-original-title=\"Follow us on Twitter\">
              <i class=\"fa fa-twitter\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://www.facebook.com/CreativeTim\" target=\"_blank\" data-original-title=\"Like us on Facebook\">
              <i class=\"fa fa-facebook-square\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" href=\"https://www.instagram.com/CreativeTimOfficial\" target=\"_blank\" data-original-title=\"Follow us on Instagram\">
              <i class=\"fa fa-instagram\"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
        {% block body %}{% endblock %}
        <script src=\"{{ asset('js/core/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/core/popper.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/core/bootstrap-material-design.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/plugins/moment.min.js')}}\"> </script>
        <script src=\"{{ asset('js/plugins/bootstrap-datetimepicker.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/plugins/nouislider.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/material-kit.js?v=2.0.5')}}\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function() {
        
            materialKit.initFormExtendedDatetimepickers();

            materialKit.initSliders();
            });


            function scrollToDownload() {
            if (\$('.section-download').length != 0) {
                \$(\"html, body\").animate({
                scrollTop: \$('.section-download').offset().top
                }, 1000);
            }
            }

        </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\base.html.twig");
    }
}
