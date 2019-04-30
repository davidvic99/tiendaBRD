<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303569c2dac1d3a88f385affe05df85e756f3a683c2471f529851cf4661c6f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303569c2dac1d3a88f385affe05df85e756f3a683c2471f529851cf4661c6f05->enter($__internal_303569c2dac1d3a88f385affe05df85e756f3a683c2471f529851cf4661c6f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e92407c28ecd3b25aadafe4b854cd89f64f1e5397b987d59e850c97c5ed9069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92407c28ecd3b25aadafe4b854cd89f64f1e5397b987d59e850c97c5ed9069b->enter($__internal_e92407c28ecd3b25aadafe4b854cd89f64f1e5397b987d59e850c97c5ed9069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303569c2dac1d3a88f385affe05df85e756f3a683c2471f529851cf4661c6f05->leave($__internal_303569c2dac1d3a88f385affe05df85e756f3a683c2471f529851cf4661c6f05_prof);

        
        $__internal_e92407c28ecd3b25aadafe4b854cd89f64f1e5397b987d59e850c97c5ed9069b->leave($__internal_e92407c28ecd3b25aadafe4b854cd89f64f1e5397b987d59e850c97c5ed9069b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c496e1820abff356c6869e724b993397e9d516c7379dc838e73728e43d2339cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c496e1820abff356c6869e724b993397e9d516c7379dc838e73728e43d2339cd->enter($__internal_c496e1820abff356c6869e724b993397e9d516c7379dc838e73728e43d2339cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1f427e33b940d81cdba66eab90606c5eb15aa929c68f8117f7a9bb83f9e425d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f427e33b940d81cdba66eab90606c5eb15aa929c68f8117f7a9bb83f9e425d->enter($__internal_c1f427e33b940d81cdba66eab90606c5eb15aa929c68f8117f7a9bb83f9e425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c1f427e33b940d81cdba66eab90606c5eb15aa929c68f8117f7a9bb83f9e425d->leave($__internal_c1f427e33b940d81cdba66eab90606c5eb15aa929c68f8117f7a9bb83f9e425d_prof);

        
        $__internal_c496e1820abff356c6869e724b993397e9d516c7379dc838e73728e43d2339cd->leave($__internal_c496e1820abff356c6869e724b993397e9d516c7379dc838e73728e43d2339cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbaf2b49f4d137e992a3662552b19856b62960f2b9085b06a7028717fead2f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbaf2b49f4d137e992a3662552b19856b62960f2b9085b06a7028717fead2f23->enter($__internal_dbaf2b49f4d137e992a3662552b19856b62960f2b9085b06a7028717fead2f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d1d6618d6edfe043f4a1dd52e92268e3d707e02be844c9f468086f70f8458dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d6618d6edfe043f4a1dd52e92268e3d707e02be844c9f468086f70f8458dd->enter($__internal_1d1d6618d6edfe043f4a1dd52e92268e3d707e02be844c9f468086f70f8458dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1d1d6618d6edfe043f4a1dd52e92268e3d707e02be844c9f468086f70f8458dd->leave($__internal_1d1d6618d6edfe043f4a1dd52e92268e3d707e02be844c9f468086f70f8458dd_prof);

        
        $__internal_dbaf2b49f4d137e992a3662552b19856b62960f2b9085b06a7028717fead2f23->leave($__internal_dbaf2b49f4d137e992a3662552b19856b62960f2b9085b06a7028717fead2f23_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e03a7142ac7755251b34cdc3180775673f716dd605ed2f1fa2dbd060f9e2b1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03a7142ac7755251b34cdc3180775673f716dd605ed2f1fa2dbd060f9e2b1fc->enter($__internal_e03a7142ac7755251b34cdc3180775673f716dd605ed2f1fa2dbd060f9e2b1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ef8bd901b459549db599a3868c9a0cad2ca76ec764a457f5ce22bd0ef79d5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef8bd901b459549db599a3868c9a0cad2ca76ec764a457f5ce22bd0ef79d5cb->enter($__internal_0ef8bd901b459549db599a3868c9a0cad2ca76ec764a457f5ce22bd0ef79d5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ef8bd901b459549db599a3868c9a0cad2ca76ec764a457f5ce22bd0ef79d5cb->leave($__internal_0ef8bd901b459549db599a3868c9a0cad2ca76ec764a457f5ce22bd0ef79d5cb_prof);

        
        $__internal_e03a7142ac7755251b34cdc3180775673f716dd605ed2f1fa2dbd060f9e2b1fc->leave($__internal_e03a7142ac7755251b34cdc3180775673f716dd605ed2f1fa2dbd060f9e2b1fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
