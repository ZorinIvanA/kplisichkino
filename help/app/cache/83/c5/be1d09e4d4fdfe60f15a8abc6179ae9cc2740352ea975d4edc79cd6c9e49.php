<?php

/* calendar.view.tmpl */
class __TwigTemplate_83c5be1d09e4d4fdfe60f15a8abc6179ae9cc2740352ea975d4edc79cd6c9e49 extends Twig_Template
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
        echo "<style>
.fc-sat {
  color: rgb(223, 79, 79);
}
.fc-sun {
  color: rgb(223, 79, 79);
}
</style>

<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-calendar\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_title"]) ? $context["CALENDAR_title"] : null), "html", null, true);
        echo "
                        <small>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_title_desc"]) ? $context["CALENDAR_title_desc"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_title"]) ? $context["CALENDAR_title"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h4 class=\"box-title\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_dr_ev"]) ? $context["CALENDAR_dr_ev"] : null), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"box-body\">
                  <!-- the events -->
                  <div id='external-events'>
                    <div class='external-event bg-green'> ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_ex_ev_3"]) ? $context["CALENDAR_ex_ev_3"] : null), "html", null, true);
        echo "</div>
                    <div class='external-event bg-yellow'>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_ex_ev_2"]) ? $context["CALENDAR_ex_ev_2"] : null), "html", null, true);
        echo "</div>
                    <div class='external-event bg-aqua'>  ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_ex_ev_4"]) ? $context["CALENDAR_ex_ev_4"] : null), "html", null, true);
        echo "</div>
                    <div class='external-event bg-light-blue'>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_ex_ev_5"]) ? $context["CALENDAR_ex_ev_5"] : null), "html", null, true);
        echo "</div>
                    <div class='external-event bg-red'>   ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_ex_ev_1"]) ? $context["CALENDAR_ex_ev_1"] : null), "html", null, true);
        echo "</div>
                    <div class=\"checkbox\">
                      <label for='drop-remove'>
                        <input type='checkbox' id='drop-remove' />
                        ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_del_after_drag"]) ? $context["CALENDAR_del_after_drag"] : null), "html", null, true);
        echo "
                      </label>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_create_event"]) ? $context["CALENDAR_create_event"] : null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"box-body\">
                  <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                    <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                    <ul class=\"fc-color-picker\" id=\"color-chooser\">
                      <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>                                           
                      <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                    </ul>
                  </div><!-- /btn-group -->
                  <div class=\"input-group\">
                    <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_name"]) ? $context["CALENDAR_name"] : null), "html", null, true);
        echo "\">
                    <div class=\"input-group-btn\">
                      <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_add"]) ? $context["CALENDAR_add"] : null), "html", null, true);
        echo "</button>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group -->
                </div>
              </div>





              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_filter"]) ? $context["CALENDAR_filter"] : null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"box-body\">



<form class=\"form-horizontal\" role=\"form\">
<div class=\"form-group\">
  
  <div class=\"col-sm-12\">
    <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" class=\"make_event_filter\" value=\"0\" checked> <small>";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_private"]) ? $context["CALENDAR_private"] : null), "html", null, true);
        echo "</small>
      
    </label>
  </div>
  </div>
    <div class=\"col-sm-12\">
    <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" class=\"make_event_filter\" value=\"1\" checked> <small>";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_dep"]) ? $context["CALENDAR_dep"] : null), "html", null, true);
        echo "</small>
      
    </label>
  </div>
  </div>
    <div class=\"col-sm-12\">
    <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" class=\"make_event_filter\" value=\"2\" checked> <small>";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_corp"]) ? $context["CALENDAR_corp"] : null), "html", null, true);
        echo "</small>
      
    </label>
  </div>
  </div>
</div>

<input type=\"hidden\" id=\"filter_events\" value=\"0,1,2\">
</form>


                </div>
              </div>










            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-body no-padding\">
                  <!-- THE CALENDAR -->
                  <div id=\"calendar\"></div>




<div class=\"modal fade\" id=\"event_modal_info\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_event"]) ? $context["CALENDAR_event"] : null), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
      <form class=\"form-horizontal\" role=\"form\">


              <div class=\"form-group\">
    <label for=\"event_name\" class=\"col-sm-2 control-label\"><small>";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_name"]) ? $context["CALENDAR_name"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\" id=\"ei_name\">
   
        </div>
  </div>

              <div class=\"form-group\">
    <label for=\"event_name\" class=\"col-sm-2 control-label\"><small>";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_description"]) ? $context["CALENDAR_description"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\" id=\"ei_desc\">
   
        </div>
  </div>



              <div class=\"form-group\">
    <label for=\"event_name\" class=\"col-sm-2 control-label\"><small>";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_period"]) ? $context["CALENDAR_period"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\" id=\"ei_period\">
   
        </div>
  </div>

                <div class=\"form-group\">
    <label for=\"event_name\" class=\"col-sm-2 control-label\"><small>";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_author"]) ? $context["CALENDAR_author"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\" id=\"ei_author\">
   
        </div>
  </div>



  </form>
      </div>
<div class=\"modal-footer\">
      

        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_close"]) ? $context["CALENDAR_close"] : null), "html", null, true);
        echo "</button>
        

        <input type=\"hidden\" id=\"current_event_hash\" value=\"\">
        <input type=\"hidden\" id=\"current_backgroundColor\" value=\"\">
        <input type=\"hidden\" id=\"current_borderColor\" value=\"\">

        <input type=\"hidden\" id=\"current_start\" value=\"\">
        <input type=\"hidden\" id=\"current_end\" value=\"\">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<div class=\"modal fade\" id=\"event_modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_edit_event"]) ? $context["CALENDAR_edit_event"] : null), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        

<form class=\"form-horizontal\" role=\"form\">


              <div class=\"form-group\">
    <label for=\"event_name\" class=\"col-sm-2 control-label\"><small>";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_name"]) ? $context["CALENDAR_name"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"event_name\" type=\"text\" class=\"form-control input-sm\" id=\"event_name\" placeholder=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_name"]) ? $context["CALENDAR_name"] : null), "html", null, true);
        echo "\">
        </div>
  </div>


              <div class=\"form-group\">
    <label for=\"event_desc\" class=\"col-sm-2 control-label\"><small>";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_description"]) ? $context["CALENDAR_description"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-10\">
   <textarea class=\"form-control input-sm\" rows=\"3\" name=\"event_desc\" id=\"event_desc\" placeholder=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_description"]) ? $context["CALENDAR_description"] : null), "html", null, true);
        echo "\"></textarea>
        </div>
  </div>


<div class=\"form-group\">
  <label for=\"all_day\" class=\"col-sm-2 control-label\"><small>";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_allday"]) ? $context["CALENDAR_allday"] : null), "html", null, true);
        echo "</small></label>
  <div class=\"col-sm-10\">
    <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" id=\"all_day\" value=\"\"> <small>";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_allday_desc"]) ? $context["CALENDAR_allday_desc"] : null), "html", null, true);
        echo "</small>
      
    </label>
  </div>
  </div>
</div>


<div class=\"form-group\">
<label for=\"period\" class=\"col-sm-2 control-label\"><small>";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_period"]) ? $context["CALENDAR_period"] : null), "html", null, true);
        echo "</small></label>
  <div class=\"col-sm-10\">
  <input type=\"text\" name=\"reservation\" id=\"reservation\" class=\"form-control input-sm\"  value=\"\" />
    
  </div>

</div>




    <div class=\"form-group\">
    <label for=\"visibility\" class=\"col-sm-2 control-label\"><small>";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_visibility"]) ? $context["CALENDAR_visibility"] : null), "html", null, true);
        echo "</small></label>
    <div class=\"col-sm-10\">
  <select class=\"form-control input-sm\" id=\"visibility\">
  <option value=\"0\">";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_e_1"]) ? $context["CALENDAR_e_1"] : null), "html", null, true);
        echo "</option>
  <option value=\"1\">";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_e_2"]) ? $context["CALENDAR_e_2"] : null), "html", null, true);
        echo "</option>
  <option value=\"2\">";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_e_3"]) ? $context["CALENDAR_e_3"] : null), "html", null, true);
        echo "</option>
</select>   </div>
  </div>

<div class=\"form-group\">
<label for=\"visibility\" class=\"col-sm-2 control-label\"><small>";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_color"]) ? $context["CALENDAR_color"] : null), "html", null, true);
        echo "</small></label>
<div class=\"col-sm-10\">

<span id=\"cur_color_event\" class=\"label\">";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_cur_color"]) ? $context["CALENDAR_cur_color"] : null), "html", null, true);
        echo "</span><br><br>
<div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                    <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                    <ul class=\"fc-color-picker\" id=\"color-chooser_event\">
                      <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>                                           
                      <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                    </ul>
                  </div><!-- /btn-group -->
                  
</div>
</div>







</form>


      </div>
      <div class=\"modal-footer\">
      <button id=\"cal_delete_current\" class=\"btn btn-danger btn-sm pull-left\">";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_del"]) ? $context["CALENDAR_del"] : null), "html", null, true);
        echo "</button>

        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 318
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_close"]) ? $context["CALENDAR_close"] : null), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"event_save_action\">";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_save"]) ? $context["CALENDAR_save"] : null), "html", null, true);
        echo "</button>

        <input type=\"hidden\" id=\"current_event_hash\" value=\"\">
        <input type=\"hidden\" id=\"current_backgroundColor\" value=\"\">
        <input type=\"hidden\" id=\"current_borderColor\" value=\"\">

        <input type=\"hidden\" id=\"current_start\" value=\"\">
        <input type=\"hidden\" id=\"current_end\" value=\"\">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


        ";
    }

    public function getTemplateName()
    {
        return "calendar.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 319,  457 => 318,  452 => 316,  415 => 282,  409 => 279,  401 => 274,  397 => 273,  393 => 272,  387 => 269,  372 => 257,  360 => 248,  353 => 244,  344 => 238,  339 => 236,  330 => 230,  325 => 228,  313 => 219,  285 => 194,  269 => 181,  259 => 174,  247 => 165,  237 => 158,  227 => 151,  186 => 113,  175 => 105,  164 => 97,  149 => 85,  134 => 73,  129 => 71,  104 => 49,  93 => 41,  86 => 37,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  62 => 28,  48 => 17,  42 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
