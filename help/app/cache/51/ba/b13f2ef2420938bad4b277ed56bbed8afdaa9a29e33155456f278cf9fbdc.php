<?php

/* clients_inc.view.tmpl */
class __TwigTemplate_51bab13f2ef2420938bad4b277ed56bbed8afdaa9a29e33155456f278cf9fbdc extends Twig_Template
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
        echo "    
";
        // line 2
        if (((isset($context["menu"]) ? $context["menu"] : null) == "new")) {
            // line 3
            echo "
";
            // line 4
            if (((isset($context["oks"]) ? $context["oks"] : null) == true)) {
                // line 5
                echo "    <div class=\"alert alert-success\">
        
        ";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["EXT_client_add_after"]) ? $context["EXT_client_add_after"] : null), "html", null, true);
                echo "
        
    </div>
";
            }
            // line 11
            echo "


<div class=\"box box-solid\">
<div class=\"box-header\">
                                    <h3 class=\"box-title\">";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["USERS_new_add"]) ? $context["USERS_new_add"] : null), "html", null, true);
            echo "</h3>
                                </div>
                                
                                
                                
    <div class=\"box-body\">
<div id=\"form_message\"></div>

<form class=\"form-horizontal\" role=\"form\">



  <div class=\"form-group\" id=\"login_user_grp\">
    <label for=\"login\" class=\"col-sm-2 control-label\"><small>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["USERS_login"]) ? $context["USERS_login"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"login_user\" type=\"\" class=\"form-control input-sm\" id=\"login_user\" placeholder=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["USERS_login"]) ? $context["USERS_login"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
  
  
  
    
      <div class=\"form-group\" id=\"fio_user_grp\">
    <label for=\"fio\" class=\"col-sm-2 control-label\"><small>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["USERS_fio"]) ? $context["USERS_fio"] : null), "html", null, true);
            echo "</small></label>
    <div class=\"col-sm-10\">
    <input autocomplete=\"off\" id=\"fio_user\" name=\"fio_user\" type=\"\" class=\"form-control input-sm\" placeholder=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["USERS_fio_full"]) ? $context["USERS_fio_full"] : null), "html", null, true);
            echo "\">
    </div>
  </div>
    
    
    
    
    
    
    
    <div class=\"form-group\">
    <label for=\"mail\" class=\"col-sm-2 control-label\"><small>";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["USERS_mail"]) ? $context["USERS_mail"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"mail\" type=\"text\" class=\"form-control input-sm\" id=\"mail\" placeholder=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["USERS_mail"]) ? $context["USERS_mail"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
  

  
  
    <div class=\"form-group\">
    <label for=\"tel\" class=\"col-sm-2 control-label\"><small>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["WORKER_tel"]) ? $context["WORKER_tel"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"tel\" type=\"text\" class=\"form-control input-sm\" id=\"tel\" placeholder=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["WORKER_tel"]) ? $context["WORKER_tel"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
      <div class=\"form-group\">
    <label for=\"skype\" class=\"col-sm-2 control-label\"><small>Skype</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"skype\" type=\"text\" class=\"form-control input-sm\" id=\"skype\" placeholder=\"skype\">
        </div>
  </div>
  
      <div class=\"form-group\">
    <label for=\"adr\" class=\"col-sm-2 control-label\"><small>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"adr\" type=\"text\" class=\"form-control input-sm\" id=\"adr\" placeholder=\"";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
  
   <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"posada\" class=\"col-sm-2 control-label\"><small>";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
            echo ": </small></label>
            <div class=\"col-sm-10\" style=\"\">
                <select name=\"posada\" id=\"posada\" data-placeholder=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm\">
                    <option value=\"0\"></option>
                    ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pos_arr"]) ? $context["pos_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 93
                echo "
                        <option value=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</option>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
                </select>
            </div>
        </div>

    </div>
</div>

                                
                                
 <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"pidrozdil\" class=\"col-sm-2 control-label\"><small>";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["WORKER_unit"]) ? $context["WORKER_unit"] : null), "html", null, true);
            echo ": </small></label>
            <div class=\"col-sm-10\" style=\"\">
                <select name=\"pid\" id=\"pidrozdil\" data-placeholder=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["WORKER_unit"]) ? $context["WORKER_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm\">
                    <option value=\"0\"></option>
                    ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unit_arr"]) ? $context["unit_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 115
                echo "
                        <option value=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</option>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "
                </select>
            </div>
        </div>

    </div>
</div>  
  
  
 <div class=\"\"><hr></div>
<div class=\"\">
<center>
    <button type=\"submit\" id=\"create_user_approve\" class=\"btn btn-success\">";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["USERS_make_create"]) ? $context["USERS_make_create"] : null), "html", null, true);
            echo "</button>
</center>

<div id=\"res\"></div>

</div>
</form>
    </div>
</div>





    ";
        }
        // line 146
        echo "    ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "list")) {
            // line 147
            echo "<div class=\"box box-solid\">
<div class=\"box-header\">

                                </div>
                                
                                
                                
    <div class=\"box-body\">
    
    

  
  <div class=\"panel-body\">




";
            // line 164
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_arr"]) ? $context["list_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 165
                echo "



<div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title \"><a href=\"";
                // line 171
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "view_user?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\" class=\"text-light-blue\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fio_r", array()), "html", null, true);
                echo "</a></h3>
                                    <div class=\"box-tools pull-right\">
";
                // line 173
                echo $this->getAttribute($context["item"], "r", array());
                echo $this->getAttribute($context["item"], "get_user_status", array());
                echo "

                                    </div>
                                </div>
                                <div class=\"box-body\">
                                    <div class=\"row\">
                                    
                                    <div class=\"col-md-2\">
                                         

<img style=\" border: 1px solid #dddddd;\" src=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_user_img_by_id", array()), "html", null, true);
                echo "\" alt=\"user image\" class=\"img-responsive\"/>



                                    </div>
                                    <div class=\"col-md-3\">
                                        <div class=\"row\">

 

                                            ";
                // line 193
                if (($this->getAttribute($context["item"], "adr_t", array()) == true)) {
                    // line 194
                    echo "                                            <div class=\"col-md-6\"> <small class=\"text-muted\"> ";
                    echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
                    echo ": </small></div>
                                            <div class=\"col-md-6\"> <small>";
                    // line 195
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adr_r", array()), "html", null, true);
                    echo "</small></div>
                                            ";
                }
                // line 197
                echo "
                                            ";
                // line 198
                if (($this->getAttribute($context["item"], "skype_t", array()) == true)) {
                    // line 199
                    echo "                                            <div class=\"col-md-6\"> <small class=\"text-muted\"> Skype: </small></div>
                                            <div class=\"col-md-6\"> <small>";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "skype_r", array()), "html", null, true);
                    echo "</small></div>
                                            ";
                }
                // line 202
                echo "
                                            ";
                // line 203
                if (($this->getAttribute($context["item"], "tel_t", array()) == true)) {
                    // line 204
                    echo "                                            <div class=\"col-md-6\"> <small class=\"text-muted\"> ";
                    echo twig_escape_filter($this->env, (isset($context["WORKER_tel"]) ? $context["WORKER_tel"] : null), "html", null, true);
                    echo ": </small></div>
                                            <div class=\"col-md-6\"> <small>";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tel_r", array()), "html", null, true);
                    echo "</small></div>          
                                            ";
                }
                // line 207
                echo "
                                            ";
                // line 208
                if (($this->getAttribute($context["item"], "mail_t", array()) == true)) {
                    // line 209
                    echo "                                            <div class=\"col-md-6\"> <small class=\"text-muted\"> ";
                    echo twig_escape_filter($this->env, (isset($context["USERS_mail"]) ? $context["USERS_mail"] : null), "html", null, true);
                    echo ": </small></div>
                                            <div class=\"col-md-6\"> <small>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email_r", array()), "html", null, true);
                    echo "</small></div>
                                            ";
                }
                // line 211
                echo "        
                                                                                                                                                                                                         

                                        </div>
                                        
                                       
                                        
                                        
                                    
                                       
                                        
                                    </div>
                                    <div class=\"col-md-3\">
                                    
                                    </div>
                                    <div class=\"col-md-4\">
";
                // line 227
                if (((isset($context["NAVBAR_all_t"]) ? $context["NAVBAR_all_t"] : null) == "list")) {
                    // line 228
                    echo "

<a href=\"";
                    // line 230
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "userinfo?user=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                    echo "\" class=\"btn btn-default btn-xs btn-block\" ><i class=\"fa fa-tag\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NAVBAR_all_tickets", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_clients_total_ticket", array()), "html", null, true);
                    echo ")</a>


";
                }
                // line 234
                echo "


                                       ";
                // line 237
                if (((isset($context["priv_edit_client"]) ? $context["priv_edit_client"] : null) == true)) {
                    // line 238
                    echo "             <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "clients?edit=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                    echo "\" class=\"btn btn-default btn-xs btn-block\" ><i class=\"fa fa-pencil\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "CONF_act_edit", array()), "html", null, true);
                    echo "</a>";
                }
                // line 239
                echo "                                                                                
                 
                                    </div>
                                    
                                    </div>
                                    
                                </div><!-- /.box-body -->
                            </div>



                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "
    


      </div>
</div>
</div>



";
        }
        // line 262
        echo "


";
        // line 265
        if (((isset($context["menu"]) ? $context["menu"] : null) == "edit")) {
            // line 266
            echo "


        ";
            // line 269
            if (((isset($context["oks2"]) ? $context["oks2"] : null) == true)) {
                // line 270
                echo "        <div class=\"alert alert-success\">
        
        ";
                // line 272
                echo twig_escape_filter($this->env, (isset($context["EXT_client_add_after"]) ? $context["EXT_client_add_after"] : null), "html", null, true);
                echo "
        
    </div>
    ";
            }
            // line 276
            echo "



<div class=\"box box-solid\">
<div class=\"box-header\">
                                    <h3 class=\"box-title\">";
            // line 282
            echo twig_escape_filter($this->env, (isset($context["USERS_make_edit_user"]) ? $context["USERS_make_edit_user"] : null), "html", null, true);
            echo "</h3>
                                </div>
                                
                                
                                
    <div class=\"box-body\">
    
    
    
    
    
    <form class=\"form-horizontal\" role=\"form\">



  <div class=\"form-group\" id=\"login_user_grp\">
    <label for=\"login\" class=\"col-sm-2 control-label\"><small>";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["USERS_login"]) ? $context["USERS_login"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"login_user\" type=\"\" class=\"form-control input-sm\" id=\"login_user2\" exclude-param=\"";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo "\" placeholder=\"USERS_login\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  

    
      <div class=\"form-group\" id=\"fio_user_grp\">
    <label for=\"fio\" class=\"col-sm-2 control-label\"><small>";
            // line 307
            echo twig_escape_filter($this->env, (isset($context["USERS_fio"]) ? $context["USERS_fio"] : null), "html", null, true);
            echo "</small></label>
    <div class=\"col-sm-10\">
    <input autocomplete=\"off\" id=\"fio_user\" name=\"fio_user\" type=\"\" class=\"form-control input-sm\" placeholder=\"";
            // line 309
            echo twig_escape_filter($this->env, (isset($context["USERS_fio_full"]) ? $context["USERS_fio_full"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
            echo "\">
    </div>
  </div>
    
    
    
    
    
    
    
    <div class=\"form-group\">
    <label for=\"mail\" class=\"col-sm-2 control-label\"><small>";
            // line 320
            echo twig_escape_filter($this->env, (isset($context["USERS_mail"]) ? $context["USERS_mail"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"mail\" type=\"text\" class=\"form-control input-sm\" id=\"mail\" placeholder=\"";
            // line 322
            echo twig_escape_filter($this->env, (isset($context["USERS_mail"]) ? $context["USERS_mail"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  

  
  
    <div class=\"form-group\">
    <label for=\"tel\" class=\"col-sm-2 control-label\"><small>";
            // line 330
            echo twig_escape_filter($this->env, (isset($context["WORKER_tel"]) ? $context["WORKER_tel"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"tel\" type=\"text\" class=\"form-control input-sm\" id=\"tel\" placeholder=\"";
            // line 332
            echo twig_escape_filter($this->env, (isset($context["WORKER_tel"]) ? $context["WORKER_tel"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
      <div class=\"form-group\">
    <label for=\"skype\" class=\"col-sm-2 control-label\"><small>Skype</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"skype\" type=\"text\" class=\"form-control input-sm\" id=\"skype\" placeholder=\"skype\" value=\"";
            // line 339
            echo twig_escape_filter($this->env, (isset($context["skype"]) ? $context["skype"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
      <div class=\"form-group\">
    <label for=\"adr\" class=\"col-sm-2 control-label\"><small>";
            // line 344
            echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-10\">
    <input autocomplete=\"off\" name=\"adr\" type=\"text\" class=\"form-control input-sm\" id=\"adr\" placeholder=\"";
            // line 346
            echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["adr"]) ? $context["adr"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
  
   <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"posada\" class=\"col-sm-2 control-label\"><small>";
            // line 354
            echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
            echo ": </small></label>
            <div class=\"col-sm-10\" style=\"\">
                <select name=\"posada\" id=\"posada\" data-placeholder=\"";
            // line 356
            echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm\">
                    <option value=\"0\"></option>
                    
";
            // line 359
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pos_arr11"]) ? $context["pos_arr11"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 360
                echo "                        <option ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "se", array()), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</option>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "
                </select>
            </div>
        </div>

    </div>
</div>

                                
                                
 
  

<div class=\"\"><hr></div>
<div class=\"\">
";
            // line 378
            if (((isset($context["priv_edit_client"]) ? $context["priv_edit_client"] : null) == true)) {
                // line 379
                echo "<center>
    <button type=\"submit\" id=\"edit_user_approve\" value=\"";
                // line 380
                echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
                echo "\" class=\"btn btn-success\">";
                echo twig_escape_filter($this->env, (isset($context["USERS_make_edit_user"]) ? $context["USERS_make_edit_user"] : null), "html", null, true);
                echo "</button>
</center>
";
            }
            // line 383
            echo "</div>


<div id=\"res\"></div>


</form>
    

    

    </div>
</div>





";
        }
    }

    public function getTemplateName()
    {
        return "clients_inc.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 383,  665 => 380,  662 => 379,  660 => 378,  643 => 363,  629 => 360,  625 => 359,  619 => 356,  614 => 354,  601 => 346,  596 => 344,  588 => 339,  576 => 332,  571 => 330,  558 => 322,  553 => 320,  537 => 309,  532 => 307,  520 => 300,  515 => 298,  496 => 282,  488 => 276,  481 => 272,  477 => 270,  475 => 269,  470 => 266,  468 => 265,  463 => 262,  450 => 251,  433 => 239,  424 => 238,  422 => 237,  417 => 234,  404 => 230,  400 => 228,  398 => 227,  380 => 211,  375 => 210,  370 => 209,  368 => 208,  365 => 207,  360 => 205,  355 => 204,  353 => 203,  350 => 202,  345 => 200,  342 => 199,  340 => 198,  337 => 197,  332 => 195,  327 => 194,  325 => 193,  312 => 183,  298 => 173,  289 => 171,  281 => 165,  277 => 164,  258 => 147,  255 => 146,  237 => 131,  223 => 119,  212 => 116,  209 => 115,  205 => 114,  200 => 112,  195 => 110,  180 => 97,  169 => 94,  166 => 93,  162 => 92,  157 => 90,  152 => 88,  141 => 80,  136 => 78,  121 => 66,  116 => 64,  104 => 55,  99 => 53,  85 => 42,  80 => 40,  68 => 31,  63 => 29,  47 => 16,  40 => 11,  33 => 7,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
