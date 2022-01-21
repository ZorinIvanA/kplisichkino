<?php

/* head.view.tmpl */
class __TwigTemplate_08de0fbc9a4713a9deb354219a5f233aad8a5222733a4e606dde9b7d6f2ac73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\" class=\"c\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title_header"]) ? $context["title_header"] : null), "html", null, true);
        echo "</title>


</head>
 
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_styles_start"]) ? $context["main_styles_start"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
<link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\">

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<style type=\"text/css\" media=\"all\">
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>




";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_style"]) ? $context["page_style"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "
<link rel=\"stylesheet\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\">

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "





";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_styles_end"]) ? $context["main_styles_end"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<body class=\"skin-blue\" style=\"\">
";
    }

    public function getTemplateName()
    {
        return "head.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  99 => 41,  95 => 40,  87 => 34,  75 => 31,  72 => 30,  68 => 29,  58 => 21,  46 => 18,  43 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }
}
