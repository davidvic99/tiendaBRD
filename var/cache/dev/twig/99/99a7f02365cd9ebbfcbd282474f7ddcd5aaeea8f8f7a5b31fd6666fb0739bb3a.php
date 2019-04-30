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
        $__internal_6398e02b676788271f3d99497e1e920d290db23e0a9fbb4d61286f5dd8acb1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6398e02b676788271f3d99497e1e920d290db23e0a9fbb4d61286f5dd8acb1c8->enter($__internal_6398e02b676788271f3d99497e1e920d290db23e0a9fbb4d61286f5dd8acb1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_c9768230f69a5f3e792b1cf1530efc8f666c647448a507e7e679da5ef281268a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9768230f69a5f3e792b1cf1530efc8f666c647448a507e7e679da5ef281268a->enter($__internal_c9768230f69a5f3e792b1cf1530efc8f666c647448a507e7e679da5ef281268a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6398e02b676788271f3d99497e1e920d290db23e0a9fbb4d61286f5dd8acb1c8->leave($__internal_6398e02b676788271f3d99497e1e920d290db23e0a9fbb4d61286f5dd8acb1c8_prof);

        
        $__internal_c9768230f69a5f3e792b1cf1530efc8f666c647448a507e7e679da5ef281268a->leave($__internal_c9768230f69a5f3e792b1cf1530efc8f666c647448a507e7e679da5ef281268a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0dec5758f38c21bd469a0ce9a06fad89090b631745e7a17fa000c91ed92e995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dec5758f38c21bd469a0ce9a06fad89090b631745e7a17fa000c91ed92e995->enter($__internal_c0dec5758f38c21bd469a0ce9a06fad89090b631745e7a17fa000c91ed92e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a14c0a333211b638779f55c04e22027ebe72ad32dec6885c307e1e906ad4c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a14c0a333211b638779f55c04e22027ebe72ad32dec6885c307e1e906ad4c61->enter($__internal_8a14c0a333211b638779f55c04e22027ebe72ad32dec6885c307e1e906ad4c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/csspropio.css"), "html", null, true);
        echo "\"";
        
        $__internal_8a14c0a333211b638779f55c04e22027ebe72ad32dec6885c307e1e906ad4c61->leave($__internal_8a14c0a333211b638779f55c04e22027ebe72ad32dec6885c307e1e906ad4c61_prof);

        
        $__internal_c0dec5758f38c21bd469a0ce9a06fad89090b631745e7a17fa000c91ed92e995->leave($__internal_c0dec5758f38c21bd469a0ce9a06fad89090b631745e7a17fa000c91ed92e995_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c2635e661847bc5dbd8c4db6f7cc9d022b96b771cee43c4293775a04903cef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2635e661847bc5dbd8c4db6f7cc9d022b96b771cee43c4293775a04903cef8->enter($__internal_1c2635e661847bc5dbd8c4db6f7cc9d022b96b771cee43c4293775a04903cef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d36a46ff19b84518d8459248a5a4eee4a31d81c6635e8093bd6e8bcf747c8a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36a46ff19b84518d8459248a5a4eee4a31d81c6635e8093bd6e8bcf747c8a97->enter($__internal_d36a46ff19b84518d8459248a5a4eee4a31d81c6635e8093bd6e8bcf747c8a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2 class=\"title\">Here is our team</h2>
        <div class=\"team\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/faces/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Gigi Hadid
                    <br>
                    <small class=\"card-description text-muted\">Model</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/faces/christian.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Christian Louboutin
                    <br>
                    <small class=\"card-description text-muted\">Designer</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-linkedin\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/faces/kendall.jpg"), "html", null, true);
        echo "\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Kendall Jenner
                    <br>
                    <small class=\"card-description text-muted\">Model</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> </div>


";
        
        $__internal_d36a46ff19b84518d8459248a5a4eee4a31d81c6635e8093bd6e8bcf747c8a97->leave($__internal_d36a46ff19b84518d8459248a5a4eee4a31d81c6635e8093bd6e8bcf747c8a97_prof);

        
        $__internal_1c2635e661847bc5dbd8c4db6f7cc9d022b96b771cee43c4293775a04903cef8->leave($__internal_1c2635e661847bc5dbd8c4db6f7cc9d022b96b771cee43c4293775a04903cef8_prof);

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
        return array (  185 => 108,  161 => 87,  136 => 65,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
        <h2 class=\"title\">Here is our team</h2>
        <div class=\"team\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"{{ asset ('img/faces/avatar.jpg')}}\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Gigi Hadid
                    <br>
                    <small class=\"card-description text-muted\">Model</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"{{ asset ('img/faces/christian.jpg')}}\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Christian Louboutin
                    <br>
                    <small class=\"card-description text-muted\">Designer</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-linkedin\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"team-player\">
                <div class=\"card card-plain\">
                  <div class=\"col-md-6 ml-auto mr-auto\">
                    <img src=\"{{asset ('img/faces/kendall.jpg')}}\" alt=\"Thumbnail Image\" class=\"img-raised rounded-circle img-fluid\">
                  </div>
                  <h4 class=\"card-title\">Kendall Jenner
                    <br>
                    <small class=\"card-description text-muted\">Model</small>
                  </h4>
                  <div class=\"card-body\">
                    <p class=\"card-description\">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                      <a href=\"#\">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                  <div class=\"card-footer justify-content-center\">
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#pablo\" class=\"btn btn-link btn-just-icon\"><i class=\"fa fa-facebook-square\"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> </div>


{% endblock %}", "frontal/productos.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\productos.html.twig");
    }
}
