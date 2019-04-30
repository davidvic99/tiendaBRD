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
        $__internal_ca0c1e00a3ee15f9146a8f8213c5b3b8b166a8f6a63f0d423c60e29eeae50f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0c1e00a3ee15f9146a8f8213c5b3b8b166a8f6a63f0d423c60e29eeae50f4a->enter($__internal_ca0c1e00a3ee15f9146a8f8213c5b3b8b166a8f6a63f0d423c60e29eeae50f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_374fc7e8cbfec99cca256ca2f0df69a0a97abb7371894d3d7d97bf22e80afb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374fc7e8cbfec99cca256ca2f0df69a0a97abb7371894d3d7d97bf22e80afb08->enter($__internal_374fc7e8cbfec99cca256ca2f0df69a0a97abb7371894d3d7d97bf22e80afb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <a class=\"navbar-brand\" href=\"https://demos.creative-tim.com/material-kit/index.html\">
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
        
        $__internal_ca0c1e00a3ee15f9146a8f8213c5b3b8b166a8f6a63f0d423c60e29eeae50f4a->leave($__internal_ca0c1e00a3ee15f9146a8f8213c5b3b8b166a8f6a63f0d423c60e29eeae50f4a_prof);

        
        $__internal_374fc7e8cbfec99cca256ca2f0df69a0a97abb7371894d3d7d97bf22e80afb08->leave($__internal_374fc7e8cbfec99cca256ca2f0df69a0a97abb7371894d3d7d97bf22e80afb08_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_373104755e367a55c52656785e52601710553bc85c21c631d4ec0858a3d703e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373104755e367a55c52656785e52601710553bc85c21c631d4ec0858a3d703e4->enter($__internal_373104755e367a55c52656785e52601710553bc85c21c631d4ec0858a3d703e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d03d4d74aec4cfa667aac5580714219feb13630b0c4ec9c82ef2de27a2e0bdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03d4d74aec4cfa667aac5580714219feb13630b0c4ec9c82ef2de27a2e0bdd2->enter($__internal_d03d4d74aec4cfa667aac5580714219feb13630b0c4ec9c82ef2de27a2e0bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d03d4d74aec4cfa667aac5580714219feb13630b0c4ec9c82ef2de27a2e0bdd2->leave($__internal_d03d4d74aec4cfa667aac5580714219feb13630b0c4ec9c82ef2de27a2e0bdd2_prof);

        
        $__internal_373104755e367a55c52656785e52601710553bc85c21c631d4ec0858a3d703e4->leave($__internal_373104755e367a55c52656785e52601710553bc85c21c631d4ec0858a3d703e4_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09070df53c8710dce0936e48a32eb28c0cdae4af4ce0dd836bf64266387a0a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09070df53c8710dce0936e48a32eb28c0cdae4af4ce0dd836bf64266387a0a12->enter($__internal_09070df53c8710dce0936e48a32eb28c0cdae4af4ce0dd836bf64266387a0a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d61222088fdeaa05349cc1fdec6925d636b14a872b99f32cdea398022a5e0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d61222088fdeaa05349cc1fdec6925d636b14a872b99f32cdea398022a5e0e2->enter($__internal_3d61222088fdeaa05349cc1fdec6925d636b14a872b99f32cdea398022a5e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d61222088fdeaa05349cc1fdec6925d636b14a872b99f32cdea398022a5e0e2->leave($__internal_3d61222088fdeaa05349cc1fdec6925d636b14a872b99f32cdea398022a5e0e2_prof);

        
        $__internal_09070df53c8710dce0936e48a32eb28c0cdae4af4ce0dd836bf64266387a0a12->leave($__internal_09070df53c8710dce0936e48a32eb28c0cdae4af4ce0dd836bf64266387a0a12_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61dec6809e716ae8dd9900ac6770c5cbba785428597e0015d0230ec8639ae30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61dec6809e716ae8dd9900ac6770c5cbba785428597e0015d0230ec8639ae30->enter($__internal_e61dec6809e716ae8dd9900ac6770c5cbba785428597e0015d0230ec8639ae30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a10a36c08e1365862bcf35b92f88a9df4aa7afb7b2bdd3b186cf5ebb3a499c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10a36c08e1365862bcf35b92f88a9df4aa7afb7b2bdd3b186cf5ebb3a499c41->enter($__internal_a10a36c08e1365862bcf35b92f88a9df4aa7afb7b2bdd3b186cf5ebb3a499c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a10a36c08e1365862bcf35b92f88a9df4aa7afb7b2bdd3b186cf5ebb3a499c41->leave($__internal_a10a36c08e1365862bcf35b92f88a9df4aa7afb7b2bdd3b186cf5ebb3a499c41_prof);

        
        $__internal_e61dec6809e716ae8dd9900ac6770c5cbba785428597e0015d0230ec8639ae30->leave($__internal_e61dec6809e716ae8dd9900ac6770c5cbba785428597e0015d0230ec8639ae30_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_911602339e960aee6a88188699b2fcf2be02644964b6a1ce39a767a0685758b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911602339e960aee6a88188699b2fcf2be02644964b6a1ce39a767a0685758b1->enter($__internal_911602339e960aee6a88188699b2fcf2be02644964b6a1ce39a767a0685758b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_336c89a8e0eb7f06b302d3769d4071826c0050f4a9423fa2f73b078706c4bf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336c89a8e0eb7f06b302d3769d4071826c0050f4a9423fa2f73b078706c4bf88->enter($__internal_336c89a8e0eb7f06b302d3769d4071826c0050f4a9423fa2f73b078706c4bf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_336c89a8e0eb7f06b302d3769d4071826c0050f4a9423fa2f73b078706c4bf88->leave($__internal_336c89a8e0eb7f06b302d3769d4071826c0050f4a9423fa2f73b078706c4bf88_prof);

        
        $__internal_911602339e960aee6a88188699b2fcf2be02644964b6a1ce39a767a0685758b1->leave($__internal_911602339e960aee6a88188699b2fcf2be02644964b6a1ce39a767a0685758b1_prof);

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
        <a class=\"navbar-brand\" href=\"https://demos.creative-tim.com/material-kit/index.html\">
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
