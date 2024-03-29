<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed41eb498e098245cad15af4feeb6d70773dd12747f982a2ad6eaf0b5a956318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed41eb498e098245cad15af4feeb6d70773dd12747f982a2ad6eaf0b5a956318->enter($__internal_ed41eb498e098245cad15af4feeb6d70773dd12747f982a2ad6eaf0b5a956318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1bccb2cac9e8d340e78b4d19faa06bc4eebb7dd999410543af69b6c8f72b65b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bccb2cac9e8d340e78b4d19faa06bc4eebb7dd999410543af69b6c8f72b65b5->enter($__internal_1bccb2cac9e8d340e78b4d19faa06bc4eebb7dd999410543af69b6c8f72b65b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed41eb498e098245cad15af4feeb6d70773dd12747f982a2ad6eaf0b5a956318->leave($__internal_ed41eb498e098245cad15af4feeb6d70773dd12747f982a2ad6eaf0b5a956318_prof);

        
        $__internal_1bccb2cac9e8d340e78b4d19faa06bc4eebb7dd999410543af69b6c8f72b65b5->leave($__internal_1bccb2cac9e8d340e78b4d19faa06bc4eebb7dd999410543af69b6c8f72b65b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4281c0244b57db2173b77dc6ea339602a95558b60b92858d65c0205d8195725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4281c0244b57db2173b77dc6ea339602a95558b60b92858d65c0205d8195725->enter($__internal_f4281c0244b57db2173b77dc6ea339602a95558b60b92858d65c0205d8195725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95b3fc0af2fee8de5a476b440550b8953fb29087ef0adbdec9e47a75520e5e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b3fc0af2fee8de5a476b440550b8953fb29087ef0adbdec9e47a75520e5e39->enter($__internal_95b3fc0af2fee8de5a476b440550b8953fb29087ef0adbdec9e47a75520e5e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_95b3fc0af2fee8de5a476b440550b8953fb29087ef0adbdec9e47a75520e5e39->leave($__internal_95b3fc0af2fee8de5a476b440550b8953fb29087ef0adbdec9e47a75520e5e39_prof);

        
        $__internal_f4281c0244b57db2173b77dc6ea339602a95558b60b92858d65c0205d8195725->leave($__internal_f4281c0244b57db2173b77dc6ea339602a95558b60b92858d65c0205d8195725_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4ffa22be519e26e4d67e3e08b7fabedd10e56d597884fb79d5ac14793fafb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ffa22be519e26e4d67e3e08b7fabedd10e56d597884fb79d5ac14793fafb17->enter($__internal_e4ffa22be519e26e4d67e3e08b7fabedd10e56d597884fb79d5ac14793fafb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c0595b9f235de3b222a99d950175d0e4ecb8a2bf8cbf0ae4259568ccf16323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0595b9f235de3b222a99d950175d0e4ecb8a2bf8cbf0ae4259568ccf16323c->enter($__internal_5c0595b9f235de3b222a99d950175d0e4ecb8a2bf8cbf0ae4259568ccf16323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c0595b9f235de3b222a99d950175d0e4ecb8a2bf8cbf0ae4259568ccf16323c->leave($__internal_5c0595b9f235de3b222a99d950175d0e4ecb8a2bf8cbf0ae4259568ccf16323c_prof);

        
        $__internal_e4ffa22be519e26e4d67e3e08b7fabedd10e56d597884fb79d5ac14793fafb17->leave($__internal_e4ffa22be519e26e4d67e3e08b7fabedd10e56d597884fb79d5ac14793fafb17_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c934e0fb0e0233377e112b4edf3ae51ef0a50d9907c7af0cade220b82c093b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c934e0fb0e0233377e112b4edf3ae51ef0a50d9907c7af0cade220b82c093b->enter($__internal_a7c934e0fb0e0233377e112b4edf3ae51ef0a50d9907c7af0cade220b82c093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_848ac84ba689831bb41adb12a69b0bd0d66a7c5ac423332172206b3b934d3196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848ac84ba689831bb41adb12a69b0bd0d66a7c5ac423332172206b3b934d3196->enter($__internal_848ac84ba689831bb41adb12a69b0bd0d66a7c5ac423332172206b3b934d3196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_848ac84ba689831bb41adb12a69b0bd0d66a7c5ac423332172206b3b934d3196->leave($__internal_848ac84ba689831bb41adb12a69b0bd0d66a7c5ac423332172206b3b934d3196_prof);

        
        $__internal_a7c934e0fb0e0233377e112b4edf3ae51ef0a50d9907c7af0cade220b82c093b->leave($__internal_a7c934e0fb0e0233377e112b4edf3ae51ef0a50d9907c7af0cade220b82c093b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
