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
        $__internal_e152908bc8e0c0383aed28fee75df575485c0d77973455ddd4fa9478bf8492fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e152908bc8e0c0383aed28fee75df575485c0d77973455ddd4fa9478bf8492fd->enter($__internal_e152908bc8e0c0383aed28fee75df575485c0d77973455ddd4fa9478bf8492fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $__internal_5e297036320ada97e76ee9d71134a94f208038b08aed0d8ff3fe3fffd4aa2f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e297036320ada97e76ee9d71134a94f208038b08aed0d8ff3fe3fffd4aa2f51->enter($__internal_5e297036320ada97e76ee9d71134a94f208038b08aed0d8ff3fe3fffd4aa2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e152908bc8e0c0383aed28fee75df575485c0d77973455ddd4fa9478bf8492fd->leave($__internal_e152908bc8e0c0383aed28fee75df575485c0d77973455ddd4fa9478bf8492fd_prof);

        
        $__internal_5e297036320ada97e76ee9d71134a94f208038b08aed0d8ff3fe3fffd4aa2f51->leave($__internal_5e297036320ada97e76ee9d71134a94f208038b08aed0d8ff3fe3fffd4aa2f51_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d8a6169c46117dc43625351dd9598c49351cfce2f5eb7dfe73231632b461db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8a6169c46117dc43625351dd9598c49351cfce2f5eb7dfe73231632b461db9->enter($__internal_8d8a6169c46117dc43625351dd9598c49351cfce2f5eb7dfe73231632b461db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_003342a67c287399991807fc896a4aee60047f22f88721a09a336e2f7e336292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003342a67c287399991807fc896a4aee60047f22f88721a09a336e2f7e336292->enter($__internal_003342a67c287399991807fc896a4aee60047f22f88721a09a336e2f7e336292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/csspropio.css"), "html", null, true);
        echo "\"";
        
        $__internal_003342a67c287399991807fc896a4aee60047f22f88721a09a336e2f7e336292->leave($__internal_003342a67c287399991807fc896a4aee60047f22f88721a09a336e2f7e336292_prof);

        
        $__internal_8d8a6169c46117dc43625351dd9598c49351cfce2f5eb7dfe73231632b461db9->leave($__internal_8d8a6169c46117dc43625351dd9598c49351cfce2f5eb7dfe73231632b461db9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f5834081a73d0b5eb6bf7e87884d923f3eee70200cbd4e021da7705be280baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5834081a73d0b5eb6bf7e87884d923f3eee70200cbd4e021da7705be280baa->enter($__internal_3f5834081a73d0b5eb6bf7e87884d923f3eee70200cbd4e021da7705be280baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_108ffcda82832fa25f84f93b265720d2620e1946acfef5971dbc39117dd35914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108ffcda82832fa25f84f93b265720d2620e1946acfef5971dbc39117dd35914->enter($__internal_108ffcda82832fa25f84f93b265720d2620e1946acfef5971dbc39117dd35914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      </div> </div></div></div>


";
        
        $__internal_108ffcda82832fa25f84f93b265720d2620e1946acfef5971dbc39117dd35914->leave($__internal_108ffcda82832fa25f84f93b265720d2620e1946acfef5971dbc39117dd35914_prof);

        
        $__internal_3f5834081a73d0b5eb6bf7e87884d923f3eee70200cbd4e021da7705be280baa->leave($__internal_3f5834081a73d0b5eb6bf7e87884d923f3eee70200cbd4e021da7705be280baa_prof);

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
      </div> </div></div></div>


{% endblock %}", "frontal/productos.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\app\\Resources\\views\\frontal\\productos.html.twig");
    }
}
