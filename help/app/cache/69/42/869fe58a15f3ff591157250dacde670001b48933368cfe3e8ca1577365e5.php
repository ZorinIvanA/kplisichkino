<?php

/* new_post.view.tmpl */
class __TwigTemplate_6942869fe58a15f3ff591157250dacde670001b48933368cfe3e8ca1577365e5 extends Twig_Template
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
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <style type=\"text/css\">
    .note-editor .note-dropzone { opacity: 0 !important; }
    </style>
    <section class=\"invoice\">
      <!-- title row -->
      <div class=\"row\">
        <div class=\"col-md-9\">
          <div class=\"box box-default\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["PORTAL_new_msg"]) ? $context["PORTAL_new_msg"] : null), "html", null, true);
        echo "</h3>
              <div class=\"box-tools pull-right\">
                <h4> <i class=\"fa fa-comment\"></i></h4>
              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\">
                <div class=\"\">
                  <form class=\"form-horizontal\">
                    <div class=\"form-group\">
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
        echo "\">
                      </div>
                      <div class=\"col-sm-3\">
                        <select class=\"form-control\" id=\"type\">
                          <option ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["type1"]) ? $context["type1"] : null), "html", null, true);
        echo " value=\"1\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_idea_one"]) ? $context["PORTAL_idea_one"] : null), "html", null, true);
        echo " </option>
                          <option ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["type2"]) ? $context["type2"] : null), "html", null, true);
        echo " value=\"2\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble_one"]) ? $context["PORTAL_trouble_one"] : null), "html", null, true);
        echo "</option>
                          <option ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["type3"]) ? $context["type3"] : null), "html", null, true);
        echo " value=\"3\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_question_one"]) ? $context["PORTAL_question_one"] : null), "html", null, true);
        echo "</option>
                          <option ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["type4"]) ? $context["type4"] : null), "html", null, true);
        echo " value=\"4\">
                          ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["PORTAL_thank_one"]) ? $context["PORTAL_thank_one"] : null), "html", null, true);
        echo "</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div id=\"note\"></div>
                      </div>
                      <div class=\"col-sm-12\" >
                        <div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
                          <div class=\"dz-message\" data-dz-message>
                            <center class=\"text-muted\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["PORTAL_fileplace"]) ? $context["PORTAL_fileplace"] : null), "html", null, true);
        echo "</center>
                          </div>
                        <form action=\"#\" class=\"dropzone\"></form>
                        <div class=\"table table-striped\" class=\"files\" id=\"previews\">
                          <div id=\"template\" class=\"file-row\">
                            <!-- This is used as the file preview template -->
                            <table class=\"table\" style=\"margin-bottom: 0px;\">
                              <tbody><tr>
                                <th style=\"width:50%\"><p class=\"name\" data-dz-name></p> </th>
                                <td><small class=\"text-muted\"><p class=\"size\" data-dz-size></p></small></td>
                                <td style=\"width:30%\"><div class=\"progress progress-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\">
                                  <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\" data-dz-uploadprogress></div>
                                </div></td>
                                <td class=\"pull-right\"><button data-dz-remove class=\"btn btn-sm btn-danger delete\">
                                  <i class=\"glyphicon glyphicon-trash\"></i>
                                  <span>Delete</span>
                                </button></td>
                              </tr>
                            </tbody></table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-sm-12\" id=\"post_res\">
                    </div>
                    <div class=\"col-sm-6 col-sm-offset-3\">
                      <br>
                      <button class=\"btn btn-block btn-info\" id=\"make_new_post_data\" >";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["PORTAL_news_create"]) ? $context["PORTAL_news_create"] : null), "html", null, true);
        echo "</button>
                      <input type=\"hidden\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "\" id=\"post_hash\">
                    </div>
                  </div>
                </form>
                </div><!-- /.footer -->
              </div>
            </div>
          </div>
          <div class=\"col-md-3\">
            ";
        // line 78
        echo (isset($context["view_stat_cat"]) ? $context["view_stat_cat"] : null);
        echo "
          </div>
        </div>
        <!-- info row -->
      </section>
    </section>
  </div>";
    }

    public function getTemplateName()
    {
        return "new_post.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 78,  124 => 69,  120 => 68,  90 => 41,  76 => 30,  72 => 29,  66 => 28,  60 => 27,  54 => 26,  45 => 22,  32 => 12,  19 => 1,);
    }
}
