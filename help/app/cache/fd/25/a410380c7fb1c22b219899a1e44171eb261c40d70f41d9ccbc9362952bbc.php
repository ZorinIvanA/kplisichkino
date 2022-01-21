<?php

/* notes.view.tmpl */
class __TwigTemplate_fd25a410380c7fb1c22b219899a1e44171eb261c40d70f41d9ccbc9362952bbc extends Twig_Template
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
        echo "<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-book\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["NOTES_title"]) ? $context["NOTES_title"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["NOTES_title_ext"]) ? $context["NOTES_title_ext"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["NOTES_title"]) ? $context["NOTES_title"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



<section class=\"content\">


<div class=\"row\">

<div class=\"col-md-3\">
<button id=\"create_new_note\" type=\"submit\" class=\"btn btn-success btn-sm btn-block\"><i class=\"fa fa-file-o\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["NOTES_create"]) ? $context["NOTES_create"] : null), "html", null, true);
        echo "</button>
<br>
      <div class=\"\">
      <div class=\"\">
      <div id=\"table_list\" style=\"margin-bottom: 0px; margin-bottom: 0px;\">
  
</div>
      </div></div>
  
</div>
<div class=\"col-md-9\">
  <div class=\"box box-solid\">
      <div class=\"box-body\">
    <div id=\"summernote\">
                           <div class=\"text-muted well well-sm no-shadow\">
  <p>                <center>
                    ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["NOTES_cr"]) ? $context["NOTES_cr"] : null), "html", null, true);
        echo "
                </center></p>
  
</div>
  </div>
  <div id=\"re\">
  </div>
      </div></div>
</div>


<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["NOTES_link"]) ? $context["NOTES_link"] : null), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\">
  <div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"\" value=\"\">
  </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>
</section>";
    }

    public function getTemplateName()
    {
        return "notes.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 52,  73 => 36,  54 => 20,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
