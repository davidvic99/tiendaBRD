<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7abf1ea9d27c825d9194bdef9dfb6ad5b7e1d7d329336471349b625e9d0aef0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abf1ea9d27c825d9194bdef9dfb6ad5b7e1d7d329336471349b625e9d0aef0e->enter($__internal_7abf1ea9d27c825d9194bdef9dfb6ad5b7e1d7d329336471349b625e9d0aef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f8f3fd2cacae43a7df40d95d00f1f5f74413764da12ed9f007986af237c176f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f3fd2cacae43a7df40d95d00f1f5f74413764da12ed9f007986af237c176f8->enter($__internal_f8f3fd2cacae43a7df40d95d00f1f5f74413764da12ed9f007986af237c176f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7abf1ea9d27c825d9194bdef9dfb6ad5b7e1d7d329336471349b625e9d0aef0e->leave($__internal_7abf1ea9d27c825d9194bdef9dfb6ad5b7e1d7d329336471349b625e9d0aef0e_prof);

        
        $__internal_f8f3fd2cacae43a7df40d95d00f1f5f74413764da12ed9f007986af237c176f8->leave($__internal_f8f3fd2cacae43a7df40d95d00f1f5f74413764da12ed9f007986af237c176f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_266be8306bcaf49055e4c7ab2ecb10782eb808519f07e3d395bfd99cab23f5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266be8306bcaf49055e4c7ab2ecb10782eb808519f07e3d395bfd99cab23f5a8->enter($__internal_266be8306bcaf49055e4c7ab2ecb10782eb808519f07e3d395bfd99cab23f5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c7e830c264ac8f37c9aa5b76bedb8aee5c2e5c09d82269731aab78665aecbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7e830c264ac8f37c9aa5b76bedb8aee5c2e5c09d82269731aab78665aecbc0->enter($__internal_4c7e830c264ac8f37c9aa5b76bedb8aee5c2e5c09d82269731aab78665aecbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c7e830c264ac8f37c9aa5b76bedb8aee5c2e5c09d82269731aab78665aecbc0->leave($__internal_4c7e830c264ac8f37c9aa5b76bedb8aee5c2e5c09d82269731aab78665aecbc0_prof);

        
        $__internal_266be8306bcaf49055e4c7ab2ecb10782eb808519f07e3d395bfd99cab23f5a8->leave($__internal_266be8306bcaf49055e4c7ab2ecb10782eb808519f07e3d395bfd99cab23f5a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af69c4aa013495ec8881ac932c475ce5f79abe4a37bb314b44a9b437d47664a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af69c4aa013495ec8881ac932c475ce5f79abe4a37bb314b44a9b437d47664a1->enter($__internal_af69c4aa013495ec8881ac932c475ce5f79abe4a37bb314b44a9b437d47664a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_70427ad578832f2b683b5042746424e91dce927d651aa543da544b90bd029c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70427ad578832f2b683b5042746424e91dce927d651aa543da544b90bd029c4a->enter($__internal_70427ad578832f2b683b5042746424e91dce927d651aa543da544b90bd029c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_70427ad578832f2b683b5042746424e91dce927d651aa543da544b90bd029c4a->leave($__internal_70427ad578832f2b683b5042746424e91dce927d651aa543da544b90bd029c4a_prof);

        
        $__internal_af69c4aa013495ec8881ac932c475ce5f79abe4a37bb314b44a9b437d47664a1->leave($__internal_af69c4aa013495ec8881ac932c475ce5f79abe4a37bb314b44a9b437d47664a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a63608bea7404292fa424cf742c2403250810e905afcb8e95b62d6dfcadac41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a63608bea7404292fa424cf742c2403250810e905afcb8e95b62d6dfcadac41->enter($__internal_9a63608bea7404292fa424cf742c2403250810e905afcb8e95b62d6dfcadac41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62cf323cc61368e95be673e366e8479e952d24a2884e9bcfc06f50cb628c17ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cf323cc61368e95be673e366e8479e952d24a2884e9bcfc06f50cb628c17ef->enter($__internal_62cf323cc61368e95be673e366e8479e952d24a2884e9bcfc06f50cb628c17ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62cf323cc61368e95be673e366e8479e952d24a2884e9bcfc06f50cb628c17ef->leave($__internal_62cf323cc61368e95be673e366e8479e952d24a2884e9bcfc06f50cb628c17ef_prof);

        
        $__internal_9a63608bea7404292fa424cf742c2403250810e905afcb8e95b62d6dfcadac41->leave($__internal_9a63608bea7404292fa424cf742c2403250810e905afcb8e95b62d6dfcadac41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
