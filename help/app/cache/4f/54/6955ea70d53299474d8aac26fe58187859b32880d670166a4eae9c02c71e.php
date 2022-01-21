<?php

/* head.view.tmpl */
class __TwigTemplate_4f546955ea70d53299474d8aac26fe58187859b32880d670166a4eae9c02c71e extends Twig_Template
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
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title_header"]) ? $context["title_header"] : null), "html", null, true);
        echo "</title>
  </head>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_styles_start"]) ? $context["main_styles_start"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "  <link rel=\"stylesheet\" href=\"";
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
        // line 15
        echo "  <style type=\"text/css\">
  .input-longtext{
  width: 400 px;
  }
  /*!
  * iCheck v1.0.1, http://git.io/arlzeA
  * =================================
  * Powerful jQuery and Zepto plugin for checkboxes and radio buttons customization
  *
  * (c) 2013 Damir Sultanov, http://fronteed.com
  * MIT Licensed
  */
  /* iCheck plugin Minimal skin, black
  ----------------------------------- */
  .icheckbox_minimal,
  .iradio_minimal {
  display: inline-block;
  *display: inline;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  width: 18px;
  height: 18px;
  background: rgba(255, 255, 255, 0.7) url(css/iCheck/minimal/minimal.png) no-repeat;
  border: none;
  cursor: pointer;
  }
  .icheckbox_minimal {
  background-position: 0 0;
  }
  .icheckbox_minimal.hover {
  background-position: -20px 0;
  }
  .icheckbox_minimal.checked {
  background-position: -40px 0;
  }
  .icheckbox_minimal.disabled {
  background-position: -60px 0;
  cursor: default;
  }
  .icheckbox_minimal.checked.disabled {
  background-position: -80px 0;
  }
  .iradio_minimal {
  background-position: -100px 0;
  }
  .iradio_minimal.hover {
  background-position: -120px 0;
  }
  .iradio_minimal.checked {
  background-position: -140px 0;
  }
  .iradio_minimal.disabled {
  background-position: -160px 0;
  cursor: default;
  }
  .iradio_minimal.checked.disabled {
  background-position: -180px 0;
  }
  /* Retina support */
  @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5) {
  .icheckbox_minimal,
  .iradio_minimal {
  background-image: url('css/iCheck/minimal/minimal@2x.png');
  -webkit-background-size: 200px 20px;
  background-size: 200px 20px;
  }
  }
  .pace .pace-progress {
  background: #00c0ef;
  position: fixed;
  z-index: 2000;
  top: 0;
  left: 0;
  height: 2px;
  -webkit-transition: width 1s;
  -moz-transition: width 1s;
  -o-transition: width 1s;
  transition: width 1s;
  }
  .pace-inactive {
  display: none;
  }
  </style>
  <body class=\"skin-black\">
    <div class=\"wrapper\">";
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
        return array (  51 => 15,  39 => 13,  35 => 12,  30 => 10,  19 => 1,);
    }
}
