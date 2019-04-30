<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f0bc9fd1b530b4a2e19303b1394236d2b8437d11d20aacbe9b7b8fa510a2d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0bc9fd1b530b4a2e19303b1394236d2b8437d11d20aacbe9b7b8fa510a2d24->enter($__internal_4f0bc9fd1b530b4a2e19303b1394236d2b8437d11d20aacbe9b7b8fa510a2d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8245667716bcebf6d7edd42af877a287a4184f49e7fc80fd551131b28badba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8245667716bcebf6d7edd42af877a287a4184f49e7fc80fd551131b28badba4f->enter($__internal_8245667716bcebf6d7edd42af877a287a4184f49e7fc80fd551131b28badba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4f0bc9fd1b530b4a2e19303b1394236d2b8437d11d20aacbe9b7b8fa510a2d24->leave($__internal_4f0bc9fd1b530b4a2e19303b1394236d2b8437d11d20aacbe9b7b8fa510a2d24_prof);

        
        $__internal_8245667716bcebf6d7edd42af877a287a4184f49e7fc80fd551131b28badba4f->leave($__internal_8245667716bcebf6d7edd42af877a287a4184f49e7fc80fd551131b28badba4f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1f2aaf60c67c84c845224930ef3be7722bfe038ebdd2eb38f0baa2d0cdd4b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f2aaf60c67c84c845224930ef3be7722bfe038ebdd2eb38f0baa2d0cdd4b97->enter($__internal_d1f2aaf60c67c84c845224930ef3be7722bfe038ebdd2eb38f0baa2d0cdd4b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6363f0dc6acfa3768cb7a0cc216d5181317dba5b2e957301d5b18434765bc0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6363f0dc6acfa3768cb7a0cc216d5181317dba5b2e957301d5b18434765bc0d1->enter($__internal_6363f0dc6acfa3768cb7a0cc216d5181317dba5b2e957301d5b18434765bc0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6363f0dc6acfa3768cb7a0cc216d5181317dba5b2e957301d5b18434765bc0d1->leave($__internal_6363f0dc6acfa3768cb7a0cc216d5181317dba5b2e957301d5b18434765bc0d1_prof);

        
        $__internal_d1f2aaf60c67c84c845224930ef3be7722bfe038ebdd2eb38f0baa2d0cdd4b97->leave($__internal_d1f2aaf60c67c84c845224930ef3be7722bfe038ebdd2eb38f0baa2d0cdd4b97_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1be89b2529e9a598ebef5287ad4844449d3e35d0db861bb6e2f6388d2d670dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1be89b2529e9a598ebef5287ad4844449d3e35d0db861bb6e2f6388d2d670dd->enter($__internal_a1be89b2529e9a598ebef5287ad4844449d3e35d0db861bb6e2f6388d2d670dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0721ace95283b68fbb0c1269480a767e427cc145b239036d56026e4afff26baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0721ace95283b68fbb0c1269480a767e427cc145b239036d56026e4afff26baf->enter($__internal_0721ace95283b68fbb0c1269480a767e427cc145b239036d56026e4afff26baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0721ace95283b68fbb0c1269480a767e427cc145b239036d56026e4afff26baf->leave($__internal_0721ace95283b68fbb0c1269480a767e427cc145b239036d56026e4afff26baf_prof);

        
        $__internal_a1be89b2529e9a598ebef5287ad4844449d3e35d0db861bb6e2f6388d2d670dd->leave($__internal_a1be89b2529e9a598ebef5287ad4844449d3e35d0db861bb6e2f6388d2d670dd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6257dfba04cc7c2fe6e6e04c774c41e5d6bca98509fc5cbecf2db3aede772e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6257dfba04cc7c2fe6e6e04c774c41e5d6bca98509fc5cbecf2db3aede772e0->enter($__internal_d6257dfba04cc7c2fe6e6e04c774c41e5d6bca98509fc5cbecf2db3aede772e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba00282c852764bfb528a45130627b1a6d5ad6b7b35f2b1671ec84db197fa069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba00282c852764bfb528a45130627b1a6d5ad6b7b35f2b1671ec84db197fa069->enter($__internal_ba00282c852764bfb528a45130627b1a6d5ad6b7b35f2b1671ec84db197fa069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba00282c852764bfb528a45130627b1a6d5ad6b7b35f2b1671ec84db197fa069->leave($__internal_ba00282c852764bfb528a45130627b1a6d5ad6b7b35f2b1671ec84db197fa069_prof);

        
        $__internal_d6257dfba04cc7c2fe6e6e04c774c41e5d6bca98509fc5cbecf2db3aede772e0->leave($__internal_d6257dfba04cc7c2fe6e6e04c774c41e5d6bca98509fc5cbecf2db3aede772e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
