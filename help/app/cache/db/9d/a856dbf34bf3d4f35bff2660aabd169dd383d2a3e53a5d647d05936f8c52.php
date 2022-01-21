<?php

/* navbar.view.tmpl */
class __TwigTemplate_db9da856dbf34bf3d4f35bff2660aabd169dd383d2a3e53a5d647d05936f8c52 extends Twig_Template
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
        echo "<div class=\"wrapper\">

               <header class=\"main-header\">

            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["index_page"]) ? $context["index_page"] : null), "html", null, true);
        echo "\" class=\"logo\">
            
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["img_logo_small"]) ? $context["img_logo_small"] : null), "html", null, true);
        echo "\">
                 ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->



 

          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["EXT_toggle_nav"]) ? $context["EXT_toggle_nav"] : null), "html", null, true);
        echo "</span>
          </a>





                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


";
        // line 31
        if (((isset($context["main_portal_active"]) ? $context["main_portal_active"] : null) == "true")) {
            // line 32
            echo "<li class=\"dropdown messages-menu\">
<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_title"]) ? $context["PORTAL_title"] : null), "html", null, true);
            echo "</a>
</li>
";
        }
        // line 36
        echo "

                    <li class=\"dropdown messages-menu\">
                            <a href=\"#\" id=\"show_online_users\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-users\"></i>
                                <span class=\"label label-success online_users_label\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["get_total_users_online"]) ? $context["get_total_users_online"] : null), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\"> <strong class=\"online_users_label\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["get_total_users_online"]) ? $context["get_total_users_online"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["EXT_users_online"]) ? $context["EXT_users_online"] : null), "html", null, true);
        echo "</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\" id=\"online_users_content\">
";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ar_online"]) ? $context["ar_online"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "
<li><!-- start message -->
                                            <a href=\"view_user?";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
            echo "\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "usr_img", array()), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\" />
                                                </div>
                                                <h4>
                                                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "
                                                    
                                                    
                                                </h4>
                                                <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "posada", array()), "html", null, true);
            echo "</p>
                                            </a>
                                        </li><!-- end message -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                        
                                        
                                                                            </ul>
                                </li>
                                <li class=\"footer\"><a href=\"clients\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["EXT_users_all_view"]) ? $context["EXT_users_all_view"] : null), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                        
                        
                        
                    
                    
<li class=\"dropdown messages-menu\" id=\"unread_msg\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope\"></i>
                                <span class=\"label label-warning label_unread_msg\">";
        // line 79
        echo (isset($context["atm_v"]) ? $context["atm_v"] : null);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                            <p class=\"header\" id=\"nav_t_msgs\"> 
                                <center>

                                ";
        // line 85
        echo (isset($context["title_m"]) ? $context["title_m"] : null);
        echo "</center></p>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\" id=\"unread_msgs_content\">
                                    
                                    ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ar_msg"]) ? $context["ar_msg"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "                                    
                                    
                                        <li><!-- start message -->
                                            <a href=\"messages?to=";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_code", array()), "html", null, true);
            echo "\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "usr_img", array()), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\"/>
                                                </div>
                                                <h4>
                                                    ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "usr_name", array()), "html", null, true);
            echo "
                                                    
                                                    <small><i class=\"fa fa-clock-o\"></i> <time id=\"b\" datetime=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_op", array()), "html", null, true);
            echo "\"></time> </time></small>
                                                </h4>
                                                <p>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "msg", array()), "html", null, true);
            echo "</p>
                                            </a>
                                        </li><!-- end message -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                        
                                        
                                        
                                        
                                        
                                                                            </ul>
                                </li>
                                <li class=\"footer\"><a href=\"messages\">";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["EXT_all_msgs"]) ? $context["EXT_all_msgs"] : null), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                        
           


";
        // line 121
        if (((isset($context["cal_count"]) ? $context["cal_count"] : null) != 0)) {
            // line 122
            echo "<li class=\"dropdown messages-menu\" id=\"\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"label label-info\">";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["cal_count"]) ? $context["cal_count"] : null), "html", null, true);
            echo "</span>
                            </a>


                            
                            <ul class=\"dropdown-menu\">
                                <p class=\"header\" id=\"nav_t_events\"> 
                                <center>";
            // line 132
            echo (isset($context["CALENDAR_NAVBAR_W"]) ? $context["CALENDAR_NAVBAR_W"] : null);
            echo "</center> </p>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\" id=\"\">
";
            // line 136
            echo (isset($context["calendar_get_events_today"]) ? $context["calendar_get_events_today"] : null);
            echo "






                                    </ul>
                                    </li>
                                    
                                    </ul>
                                    </li>

";
        }
        // line 150
        echo "











                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                <span>";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["namemy"]) ? $context["namemy"] : null), "html", null, true);
        echo " <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["usr_img"]) ? $context["usr_img"] : null), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" style=\"border: 2px solid;
border-color: transparent;
border-color: rgba(255, 255, 255, 0.2);\" />
                                    <p>
                                        ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["usr_fio"]) ? $context["usr_fio"] : null), "html", null, true);
        echo "
                                        <small>";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["usr_posada"]) ? $context["usr_posada"] : null), "html", null, true);
        echo "</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"col-xs-6 text-center\">
                                        <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "stats\">";
        echo twig_escape_filter($this->env, (isset($context["STATS_TITLE_short"]) ? $context["STATS_TITLE_short"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"col-xs-6 text-center\">
                                        <a href=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "help\">";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_help"]) ? $context["NAVBAR_help"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                    
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                    
                                        <a href=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "profile\" class=\"btn btn-default btn-flat\"> <i class=\"fa fa-user\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"pull-right\">
                                    
                                        <a href=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "logout\" class=\"btn btn-default btn-flat\"> <i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_logout"]) ? $context["NAVBAR_logout"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        









        
        
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["usr_img"]) ? $context["usr_img"] : null), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["EXT_hello"]) ? $context["EXT_hello"] : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["usr_name"]) ? $context["usr_name"] : null), "html", null, true);
        echo "</p>

                            <a ><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "list\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input name=\"t\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["LIST_find_button"]) ? $context["LIST_find_button"] : null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["LIST_find_ph"]) ? $context["LIST_find_ph"] : null), "html", null, true);
        echo "\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='find' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    
                    
                    
                    
                    <ul class=\"sidebar-menu\">
                        <li 
";
        // line 251
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "dashboard")) {
            echo " class=\"active\" ";
        }
        // line 252
        echo "                        >
                            <a  href=\"";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "dashboard\">
                                <i class=\"fa fa-dashboard\"></i> <span>
                                ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_TITLE"]) ? $context["DASHBOARD_TITLE"] : null), "html", null, true);
        echo "</span>
                            </a>
                        </li>
                        
                        <li ";
        // line 259
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "create")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "create\"><i class=\"fa fa-tag\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_create_ticket"]) ? $context["NAVBAR_create_ticket"] : null), "html", null, true);
        echo "</a></li>
                        

                        
            <li ";
        // line 263
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "list")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "list\"><i class=\"fa fa-list-alt\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_list_ticket"]) ? $context["NAVBAR_list_ticket"] : null), "html", null, true);
        echo " ";
        echo (isset($context["newtickets"]) ? $context["newtickets"] : null);
        echo "</a></li>


            <li ";
        // line 266
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "news")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "news\"><i class=\"fa fa-bullhorn\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_news"]) ? $context["NAVBAR_news"] : null), "html", null, true);
        echo "</a></li>   

            <li ";
        // line 268
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "calendar")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "calendar\"><i class=\"fa fa-calendar\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["CALENDAR_title"]) ? $context["CALENDAR_title"] : null), "html", null, true);
        echo (isset($context["cal_et"]) ? $context["cal_et"] : null);
        echo "</a></li> 
            
                        <li ";
        // line 270
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "messages")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "messages\"><i class=\"fa fa-comments\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_navbar"]) ? $context["MESSAGES_navbar"] : null), "html", null, true);
        echo " ";
        echo (isset($context["atm"]) ? $context["atm"] : null);
        echo "</a></li>
            
            
            <li ";
        // line 273
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "clients")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "clients\"><i class=\"fa fa-users\"></i>  ";
        echo twig_escape_filter($this->env, (isset($context["USERS_list"]) ? $context["USERS_list"] : null), "html", null, true);
        echo "</a></li>
                        
            
            
            
            
            <li ";
        // line 279
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "helper")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "helper\"><i class=\"fa fa-globe\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_helper"]) ? $context["NAVBAR_helper"] : null), "html", null, true);
        echo "</a></li>
            
                        <li ";
        // line 281
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "notes")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "notes\"><i class=\"fa fa-book\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_notes"]) ? $context["NAVBAR_notes"] : null), "html", null, true);
        echo "</a></li>
                        
                        
";
        // line 284
        if (((isset($context["some_priv"]) ? $context["some_priv"] : null) == true)) {
            // line 285
            echo " <li class=\"treeview ";
            echo twig_escape_filter($this->env, (isset($context["tree_stat_class"]) ? $context["tree_stat_class"] : null), "html", null, true);
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-bar-chart-o\"></i><span> ";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["EXT_graph"]) ? $context["EXT_graph"] : null), "html", null, true);
            echo "</span><i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                            <li ";
            // line 290
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "main_stats")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "main_stats\"><i class=\"fa fa-line-chart\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["ALLSTATS_main"]) ? $context["ALLSTATS_main"] : null), "html", null, true);
            echo "</a></li>
                            <li ";
            // line 291
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "user_stats")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "user_stats\"><i class=\"fa fa-pie-chart\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["EXT_graph_user"]) ? $context["EXT_graph_user"] : null), "html", null, true);
            echo "</a></li>

                            <li ";
            // line 293
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "sla_rep")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "sla_rep\"><i class=\"fa fa-bolt\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["SLA_rep"]) ? $context["SLA_rep"] : null), "html", null, true);
            echo "</a></li>


                            </ul>
 </li>
";
        }
        // line 299
        echo "
                        

";
        // line 302
        if (((isset($context["val_admin"]) ? $context["val_admin"] : null) == true)) {
            // line 303
            echo "
                         <li class=\"treeview ";
            // line 304
            echo twig_escape_filter($this->env, (isset($context["tree_admin_class"]) ? $context["tree_admin_class"] : null), "html", null, true);
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-shield\"></i>
                                <span>";
            // line 307
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_admin"]) ? $context["NAVBAR_admin"] : null), "html", null, true);
            echo " </span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                             <li ";
            // line 311
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "config")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "config\"><i class=\"fa fa-cog\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_conf"]) ? $context["NAVBAR_conf"] : null), "html", null, true);
            echo "</a></li>

                             <li ";
            // line 313
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "portal")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "portal\"><i class=\"icon-svg\" style=\" padding-right: 6px;\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_title"]) ? $context["PORTAL_title"] : null), "html", null, true);
            echo "</a></li>



                    <li ";
            // line 317
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "users")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "users?list\"><i class=\"fa fa-users\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_users"]) ? $context["NAVBAR_users"] : null), "html", null, true);
            echo "</a></li>



                    <li ";
            // line 321
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "deps")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "deps\"><i class=\"fa fa-sitemap\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_deps"]) ? $context["NAVBAR_deps"] : null), "html", null, true);
            echo "</a></li>
                    <li ";
            // line 322
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "units")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "units\"><i class=\"fa fa-building-o\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_units"]) ? $context["NAVBAR_units"] : null), "html", null, true);
            echo "</a></li>

                                        <li ";
            // line 324
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "mailers")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "mailers\"><i class=\"fa fa-paper-plane-o\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_mailers"]) ? $context["NAVBAR_mailers"] : null), "html", null, true);
            echo "</a></li>
                                        
                    <li ";
            // line 326
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "files")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "files\"><i class=\"fa fa-files-o\"></i>  ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_files"]) ? $context["NAVBAR_files"] : null), "html", null, true);
            echo "</a></li>
                    
                    <li ";
            // line 328
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "scheduler")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "scheduler\"><i class=\"fa fa-clock-o\"></i>  ";
            echo twig_escape_filter($this->env, (isset($context["cron_navbar"]) ? $context["cron_navbar"] : null), "html", null, true);
            echo "</a></li>
                    
                                        
                    <li ";
            // line 331
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "approve")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "approve\"><i class=\"fa fa-check-square-o\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_approve"]) ? $context["NAVBAR_approve"] : null), "html", null, true);
            echo (isset($context["apr"]) ? $context["apr"] : null);
            echo "</a></li>
                            
                            
                            <li ";
            // line 334
            if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "posada")) {
                echo " class=\"active\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "posada\"><i class=\"fa fa-male\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_posads"]) ? $context["NAVBAR_posads"] : null), "html", null, true);
            echo "</a></li>
                            
                            
                            
                            </ul>
                            
                         </li>
";
        }
        // line 342
        echo "                       
                        
                        
                        
                                            </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

<div class=\"content-wrapper\" >
<div class=\"main_i\" style=\"";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["style_hide"]) ? $context["style_hide"] : null), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "navbar.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  751 => 352,  739 => 342,  722 => 334,  709 => 331,  697 => 328,  686 => 326,  675 => 324,  664 => 322,  654 => 321,  641 => 317,  628 => 313,  617 => 311,  610 => 307,  604 => 304,  601 => 303,  599 => 302,  594 => 299,  579 => 293,  568 => 291,  558 => 290,  552 => 287,  546 => 285,  544 => 284,  532 => 281,  521 => 279,  506 => 273,  492 => 270,  480 => 268,  469 => 266,  455 => 263,  442 => 259,  435 => 255,  430 => 253,  427 => 252,  423 => 251,  404 => 237,  399 => 235,  388 => 229,  382 => 226,  349 => 198,  340 => 194,  327 => 186,  319 => 183,  310 => 177,  306 => 176,  299 => 172,  291 => 167,  272 => 150,  255 => 136,  248 => 132,  238 => 125,  233 => 122,  231 => 121,  221 => 114,  212 => 107,  202 => 103,  197 => 101,  192 => 99,  186 => 96,  181 => 94,  176 => 91,  172 => 90,  164 => 85,  155 => 79,  141 => 68,  135 => 64,  125 => 60,  118 => 56,  112 => 53,  107 => 51,  103 => 49,  99 => 48,  90 => 44,  84 => 41,  77 => 36,  69 => 33,  66 => 32,  64 => 31,  50 => 20,  36 => 9,  32 => 8,  25 => 5,  19 => 1,);
    }
}
