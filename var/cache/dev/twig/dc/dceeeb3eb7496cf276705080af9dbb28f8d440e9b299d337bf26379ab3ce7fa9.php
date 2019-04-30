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
        $__internal_4b6abed372b1a1bea0855ee067bbad0722f5fa98441790b5d5193fd55f0daa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6abed372b1a1bea0855ee067bbad0722f5fa98441790b5d5193fd55f0daa38->enter($__internal_4b6abed372b1a1bea0855ee067bbad0722f5fa98441790b5d5193fd55f0daa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9dd97bc94d5868269e617caa29463e59fb322926f0f1d442ee8813e21505d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dd97bc94d5868269e617caa29463e59fb322926f0f1d442ee8813e21505d59->enter($__internal_a9dd97bc94d5868269e617caa29463e59fb322926f0f1d442ee8813e21505d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
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
                <i class=\"material-icons\">shop</i> Información
              </a>
              <a href=\"https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">verified_user</i> FAQ
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
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/bootstrap-material-design.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 75
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
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    </body>
</html>
";
        
        $__internal_4b6abed372b1a1bea0855ee067bbad0722f5fa98441790b5d5193fd55f0daa38->leave($__internal_4b6abed372b1a1bea0855ee067bbad0722f5fa98441790b5d5193fd55f0daa38_prof);

        
        $__internal_a9dd97bc94d5868269e617caa29463e59fb322926f0f1d442ee8813e21505d59->leave($__internal_a9dd97bc94d5868269e617caa29463e59fb322926f0f1d442ee8813e21505d59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0991aa0e1eacfa52d4f40e00b3ce45f3ca138ed41f479c525fb05c349cfbf78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0991aa0e1eacfa52d4f40e00b3ce45f3ca138ed41f479c525fb05c349cfbf78->enter($__internal_e0991aa0e1eacfa52d4f40e00b3ce45f3ca138ed41f479c525fb05c349cfbf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62b8be1029e63a3e5b6b75161bdfca8c5add177aa0e3d039e7be957ffba2c9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b8be1029e63a3e5b6b75161bdfca8c5add177aa0e3d039e7be957ffba2c9da->enter($__internal_62b8be1029e63a3e5b6b75161bdfca8c5add177aa0e3d039e7be957ffba2c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62b8be1029e63a3e5b6b75161bdfca8c5add177aa0e3d039e7be957ffba2c9da->leave($__internal_62b8be1029e63a3e5b6b75161bdfca8c5add177aa0e3d039e7be957ffba2c9da_prof);

        
        $__internal_e0991aa0e1eacfa52d4f40e00b3ce45f3ca138ed41f479c525fb05c349cfbf78->leave($__internal_e0991aa0e1eacfa52d4f40e00b3ce45f3ca138ed41f479c525fb05c349cfbf78_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdded4727bb5de22266741dc550a67ad23dfc466f92028e1d83310674704e228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdded4727bb5de22266741dc550a67ad23dfc466f92028e1d83310674704e228->enter($__internal_bdded4727bb5de22266741dc550a67ad23dfc466f92028e1d83310674704e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79c1ea5f492723bd3fccb329ea16a2e7cb242c4e533c2e4ed0cbb515cee63711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c1ea5f492723bd3fccb329ea16a2e7cb242c4e533c2e4ed0cbb515cee63711->enter($__internal_79c1ea5f492723bd3fccb329ea16a2e7cb242c4e533c2e4ed0cbb515cee63711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79c1ea5f492723bd3fccb329ea16a2e7cb242c4e533c2e4ed0cbb515cee63711->leave($__internal_79c1ea5f492723bd3fccb329ea16a2e7cb242c4e533c2e4ed0cbb515cee63711_prof);

        
        $__internal_bdded4727bb5de22266741dc550a67ad23dfc466f92028e1d83310674704e228->leave($__internal_bdded4727bb5de22266741dc550a67ad23dfc466f92028e1d83310674704e228_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e63bb91f275e4b74e5ab30890ffd25ab4a5c7d73a7bf2177446be98025fc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e63bb91f275e4b74e5ab30890ffd25ab4a5c7d73a7bf2177446be98025fc8d->enter($__internal_42e63bb91f275e4b74e5ab30890ffd25ab4a5c7d73a7bf2177446be98025fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_405f6810be3685a36f8bcd83b500681a0447f10ce479922d19db9acd47fc6093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405f6810be3685a36f8bcd83b500681a0447f10ce479922d19db9acd47fc6093->enter($__internal_405f6810be3685a36f8bcd83b500681a0447f10ce479922d19db9acd47fc6093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_405f6810be3685a36f8bcd83b500681a0447f10ce479922d19db9acd47fc6093->leave($__internal_405f6810be3685a36f8bcd83b500681a0447f10ce479922d19db9acd47fc6093_prof);

        
        $__internal_42e63bb91f275e4b74e5ab30890ffd25ab4a5c7d73a7bf2177446be98025fc8d->leave($__internal_42e63bb91f275e4b74e5ab30890ffd25ab4a5c7d73a7bf2177446be98025fc8d_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62ff99a86cb66f0246dcae35eac2596a8c67d7953ed0d2dab7bd6f87e8961a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ff99a86cb66f0246dcae35eac2596a8c67d7953ed0d2dab7bd6f87e8961a20->enter($__internal_62ff99a86cb66f0246dcae35eac2596a8c67d7953ed0d2dab7bd6f87e8961a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e0b056a0f2127989c3362003c9ac6a60b23979d2b10aac7f921c56734967cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0b056a0f2127989c3362003c9ac6a60b23979d2b10aac7f921c56734967cb3->enter($__internal_9e0b056a0f2127989c3362003c9ac6a60b23979d2b10aac7f921c56734967cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e0b056a0f2127989c3362003c9ac6a60b23979d2b10aac7f921c56734967cb3->leave($__internal_9e0b056a0f2127989c3362003c9ac6a60b23979d2b10aac7f921c56734967cb3_prof);

        
        $__internal_62ff99a86cb66f0246dcae35eac2596a8c67d7953ed0d2dab7bd6f87e8961a20->leave($__internal_62ff99a86cb66f0246dcae35eac2596a8c67d7953ed0d2dab7bd6f87e8961a20_prof);

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
        return array (  227 => 94,  210 => 68,  193 => 13,  175 => 5,  163 => 95,  161 => 94,  139 => 75,  135 => 74,  131 => 73,  127 => 72,  123 => 71,  119 => 70,  114 => 69,  112 => 68,  54 => 14,  52 => 13,  47 => 11,  43 => 10,  35 => 5,  29 => 1,);
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
                <i class=\"material-icons\">shop</i> Información
              </a>
              <a href=\"https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">verified_user</i> FAQ
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
