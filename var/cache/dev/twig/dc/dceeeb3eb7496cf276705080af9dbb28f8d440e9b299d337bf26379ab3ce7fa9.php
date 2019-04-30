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
        $__internal_2f6c199b358da83e6d5cebae8871f5d33b1d1fc48398cc2376c2a475f698c51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6c199b358da83e6d5cebae8871f5d33b1d1fc48398cc2376c2a475f698c51b->enter($__internal_2f6c199b358da83e6d5cebae8871f5d33b1d1fc48398cc2376c2a475f698c51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1013077c453882c617f94f035f768c65182a89aded42fc4a9e25051a93deef7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1013077c453882c617f94f035f768c65182a89aded42fc4a9e25051a93deef7d->enter($__internal_1013077c453882c617f94f035f768c65182a89aded42fc4a9e25051a93deef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">apps</i> Components
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
              <a href=\"./index.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">layers</i> All Components
              </a>
              <a href=\"https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"javascript:void(0)\" onclick=\"scrollToDownload()\">
              <i class=\"material-icons\">cloud_download</i> Download
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
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core/bootstrap-material-design.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 76
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
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_2f6c199b358da83e6d5cebae8871f5d33b1d1fc48398cc2376c2a475f698c51b->leave($__internal_2f6c199b358da83e6d5cebae8871f5d33b1d1fc48398cc2376c2a475f698c51b_prof);

        
        $__internal_1013077c453882c617f94f035f768c65182a89aded42fc4a9e25051a93deef7d->leave($__internal_1013077c453882c617f94f035f768c65182a89aded42fc4a9e25051a93deef7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f3209569706b1388ab92fc7609ea6e14be4ec48bfefa8578aa675479a3e2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f3209569706b1388ab92fc7609ea6e14be4ec48bfefa8578aa675479a3e2ff->enter($__internal_93f3209569706b1388ab92fc7609ea6e14be4ec48bfefa8578aa675479a3e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3255359f2a96e3921549a22bebfd2295c67c32f4e0829182c90c2c097127bbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3255359f2a96e3921549a22bebfd2295c67c32f4e0829182c90c2c097127bbf5->enter($__internal_3255359f2a96e3921549a22bebfd2295c67c32f4e0829182c90c2c097127bbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3255359f2a96e3921549a22bebfd2295c67c32f4e0829182c90c2c097127bbf5->leave($__internal_3255359f2a96e3921549a22bebfd2295c67c32f4e0829182c90c2c097127bbf5_prof);

        
        $__internal_93f3209569706b1388ab92fc7609ea6e14be4ec48bfefa8578aa675479a3e2ff->leave($__internal_93f3209569706b1388ab92fc7609ea6e14be4ec48bfefa8578aa675479a3e2ff_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca11026d67888a2d7395dff6b03bb48f6b3d3038fa2af8831ea551317329d7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca11026d67888a2d7395dff6b03bb48f6b3d3038fa2af8831ea551317329d7f9->enter($__internal_ca11026d67888a2d7395dff6b03bb48f6b3d3038fa2af8831ea551317329d7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de7ce53e535830ebe448e45cd2163db6148984b23ca258e0d071b92bb9d709cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7ce53e535830ebe448e45cd2163db6148984b23ca258e0d071b92bb9d709cd->enter($__internal_de7ce53e535830ebe448e45cd2163db6148984b23ca258e0d071b92bb9d709cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_de7ce53e535830ebe448e45cd2163db6148984b23ca258e0d071b92bb9d709cd->leave($__internal_de7ce53e535830ebe448e45cd2163db6148984b23ca258e0d071b92bb9d709cd_prof);

        
        $__internal_ca11026d67888a2d7395dff6b03bb48f6b3d3038fa2af8831ea551317329d7f9->leave($__internal_ca11026d67888a2d7395dff6b03bb48f6b3d3038fa2af8831ea551317329d7f9_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d92fc2ba18b92dc65e0c08f9b5f0f5a95949a581fd4b6744f985fcf4eb4d57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d92fc2ba18b92dc65e0c08f9b5f0f5a95949a581fd4b6744f985fcf4eb4d57e->enter($__internal_4d92fc2ba18b92dc65e0c08f9b5f0f5a95949a581fd4b6744f985fcf4eb4d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6d157cbd747a9b9213e63a87324fdbe09bfc88a540f8a3cbee83b74c46ec397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d157cbd747a9b9213e63a87324fdbe09bfc88a540f8a3cbee83b74c46ec397->enter($__internal_f6d157cbd747a9b9213e63a87324fdbe09bfc88a540f8a3cbee83b74c46ec397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6d157cbd747a9b9213e63a87324fdbe09bfc88a540f8a3cbee83b74c46ec397->leave($__internal_f6d157cbd747a9b9213e63a87324fdbe09bfc88a540f8a3cbee83b74c46ec397_prof);

        
        $__internal_4d92fc2ba18b92dc65e0c08f9b5f0f5a95949a581fd4b6744f985fcf4eb4d57e->leave($__internal_4d92fc2ba18b92dc65e0c08f9b5f0f5a95949a581fd4b6744f985fcf4eb4d57e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d3a41e66ee5b8a5877f2184d4c1129eca306107d18e6a6e654931b1a096b3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3a41e66ee5b8a5877f2184d4c1129eca306107d18e6a6e654931b1a096b3b4->enter($__internal_4d3a41e66ee5b8a5877f2184d4c1129eca306107d18e6a6e654931b1a096b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c718269dcccbe62ad74473ea2446e56645cbaa7813b0856009b34492ae2ce87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c718269dcccbe62ad74473ea2446e56645cbaa7813b0856009b34492ae2ce87e->enter($__internal_c718269dcccbe62ad74473ea2446e56645cbaa7813b0856009b34492ae2ce87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c718269dcccbe62ad74473ea2446e56645cbaa7813b0856009b34492ae2ce87e->leave($__internal_c718269dcccbe62ad74473ea2446e56645cbaa7813b0856009b34492ae2ce87e_prof);

        
        $__internal_4d3a41e66ee5b8a5877f2184d4c1129eca306107d18e6a6e654931b1a096b3b4->leave($__internal_4d3a41e66ee5b8a5877f2184d4c1129eca306107d18e6a6e654931b1a096b3b4_prof);

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
        return array (  228 => 95,  211 => 69,  194 => 13,  176 => 5,  164 => 96,  162 => 95,  140 => 76,  136 => 75,  132 => 74,  128 => 73,  124 => 72,  120 => 71,  115 => 70,  113 => 69,  54 => 14,  52 => 13,  47 => 11,  43 => 10,  35 => 5,  29 => 1,);
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
            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">apps</i> Components
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
              <a href=\"./index.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">layers</i> All Components
              </a>
              <a href=\"https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html\" class=\"dropdown-item\">
                <i class=\"material-icons\">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"javascript:void(0)\" onclick=\"scrollToDownload()\">
              <i class=\"material-icons\">cloud_download</i> Download
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
