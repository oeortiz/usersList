<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /index.html.twig */
class __TwigTemplate_08065e27414f9da94ec69e26a4d655d37564bf4ac33ccad61916f3986c148670 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "   
    Comforce
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\"/>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script> 
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script type=\"text/javascript\">
        var idUser = 'NULL';
        var dataRow;
        \$(document).ready( function () {
            table = \$('#myTable').DataTable({
                \"language\": {
                    paginate: {
                        first:    '«',
                        previous: '‹',
                        next:     '›',
                        last:     '»'
                    },
                    \"lengthMenu\": \"Mostrando _MENU_ registros por pagina\",
                    \"zeroRecords\": \"Sin resultados - disculpas\",
                    \"info\": \"Viendo pagina _PAGE_ de _PAGES_\",
                    \"infoEmpty\": \"Ningun registro disponible\",
                    \"infoFiltered\": \"(filtrados de _MAX_)\",
                    \"sSearch\": \"Buscar\",
                    \"dsfasdf\":\"siguiente\"
                }

            });

            \$('#myTable tbody').on( 'click', 'tr', function () {

                
                dataRow = table.row( this ).data();
                idUser = dataRow[0];

                \$(\"#myTable tbody tr\").removeClass('selected');
                \$(\"#id\").val(dataRow[0]);
                \$(\"#identification\").val(dataRow[1]);
                \$(\"#first_name\").val(dataRow[2]);
                \$(\"#last_name\").val(dataRow[3]);
                \$(\"#email\").val(dataRow[4]);
                \$(\"#phone\").val(dataRow[5]);
                if(dataRow[6] == \"SI\" )
                    \$(\"#is_active\").prop('checked', true);
                else
                    \$(\"#is_active\").prop('checked', false);

                \$(\"#password\").val(dataRow[1]);


                \$(this).addClass('selected');

            });

            //Form editions
            var 
                emailRegex = /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                dialog, form,      
                identification = \$( \"#identification\" ),
                firstName = \$( \"#first_name\" ),
                lastName = \$( \"#last_name\" ),
                phone = \$( \"#phone\" ),
                email= \$( \"#email\" ),
                isActive  = \$( \"#is_active\" ),
                password = \$( \"#password\" ),        
                tips = \$( \".validateTips\" );
                allFields = \$( [] ).add( firstName ).add( lastName ).add( phone );
            
        
            function updateTips( t ) {
            tips
                .text( t )
                .addClass( \"ui-state-highlight\" );
            setTimeout(function() {
                tips.removeClass( \"ui-state-highlight\", 1500 );
            }, 500 );
            }
        
            function checkLength( o, n, min, max ) {
            if ( o.val().length > max || o.val().length < min ) {
                o.addClass( \"ui-state-error\" );
                updateTips( \"La longitud de  \" + n + \" debe estar entre \" +
                min + \" y \" + max + \".\" );
                return false;
            } else {
                return true;
            }
            }

            function checkRegexp( o, regexp, n ) {
            if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( \"ui-state-error\" );
                updateTips( n );
                return false;
            } else {
                return true;
            }
            }

            function checkIfExist( o,n ){

                return true;

                if(idUser == null)
                    return true;
                if(dataRow == 'undefined')
                    return true;
                if(o.prop('name') == 'identification' && dataRow[1] == o.val() ){
                    return true;
                }

                if(o.prop('name') == 'email' && dataRow[4] == o.val() ){
                    return true;
                }

                var deferred = \$.Deferred();

                \$.ajax({
                    type:'POST',
                    url:'";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkUserPropertyExists");
        echo "',
                    data:{'field':o.prop('name'),'q': o.val()},
                    async: false,
                    success:function(res){
                        if(res === 'fail'){
                            updateTips( \"El Valor para  \" + n + \" ya existe!\")
                            o.addClass( \"ui-state-error\" );
                            deferred.resolve(false);
                            // return false;
                        }else{
                            deferred.reject(true);
                            // deferred.reject('boo');
                            // return true;
                        } 
                    }
                }); 
                return deferred.promise();
            }    
        
        
            function addUser() {
                var valid = true;
                allFields.removeClass( \"ui-state-error\" );

                valid = valid && checkLength( firstName, \"Nombres\", 3, 50 );
                valid = valid && checkLength( lastName, \"Apellidos\", 3, 50 );
                valid = valid && checkLength( phone, \"Telefono\", 3, 50 );
                valid = valid && checkLength( email, \"Correo Electronico\", 6, 70 );
                
                valid = valid && checkRegexp( firstName, /^[a-z]([0-9a-z_\\s])+\$/i, \"El campo Nombres solo permite letras y numeros y debe iniciar por una letra \" );
                valid = valid && checkRegexp( lastName, /^[a-z]([0-9a-z_\\s])+\$/i, \"El campo Apellidos solo permite letras y numeros y debe iniciar por una letra \" );

                valid = valid && checkRegexp( email, emailRegex, \"Ejemplo manuel@gmail.com\" );
                valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+\$/, \"EL campo Password solo permite: letras (a-z) y numeros (0-9)\" );
                valid = valid && checkRegexp( identification, /^([0-9])+\$/, \"EL campo Cedula solo permite: numeros (0-9)\" );
                valid = valid && checkRegexp( phone, /^([0-9])+\$/, \"EL campo Telefono solo permite: numeros (0-9)\" );

                \$.when(checkIfExist (identification ,'Cedula')).done(function(value) {
                    valid = valid && value;
                });

                \$.when(checkIfExist (email ,'Email')).done(function(value) {
                    valid = valid && value;
                });
                    
                if ( valid ) {

                    var url = '";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", ["id" => "usuario_id"]);
        echo "'; 
                    url = url.replace(\"usuario_id\", idUser);
                    var data = {
                            'firstName':firstName.val(),
                            'lastName':lastName.val(),
                            'email':email.val(),
                            'phone':phone.val(),
                            'isActive':isActive.prop('checked') ? 1:0,
                            'password':password.val(),
                            'identification':identification.val()
                        };

                    \$.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(dataOk) {
                        console.log(dataOk);
                    }
                    });

                    location.reload(true);
                    dialog.dialog( \"close\" );
                    alert(\"Operación Exitosa\");
                }
                return valid;
            }
        
            dialog = \$( \"#dialog-form\" ).dialog({
            autoOpen: false,
            height: 380,
            width: 350,
            modal: true,
            buttons: {
                \"Enviar\": addUser,
                Cancel: function() {
                dialog.dialog( \"close\" );
                }
            },
            close: function() {
                cleanFields();
                allFields.removeClass( \"ui-state-error\" );
            }
            });
        
        
            \$( \"#create-user\" ).button().on( \"click\", function() {
                idUser = 'NULL';
                dialog.dialog( \"open\" );
            });
        } );

        function cleanFields(){
            \$('input').val('');
        }

        function deleteUser(idU){

                var url = '";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", ["id" => "usuario_id"]);
        echo "'; 
                    url = url.replace(\"usuario_id\", idU);
                
                \$.ajax({
                    type: 'POST',
                    url: url,
                    success: function(dataOk) {
                        console.log(dataOk);
                        location.reload(true);
                        alert(\"Operación Exitosa\");
                    }
                });
        }

        function setData(){
            \$( \"#dialog-form\" ).dialog( \"open\" );
            
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 253
        echo "        
            <h1>Usuarios</h1>

            <br>
            <button id=\"create-user\">Crear Nuevo</button>
            <br>
            <br>
            <br>
            <div style=\"padding: 3.5em;\">
                    <table id=\"myTable\">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th>Cedula</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Activo</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
            // line 278
            echo "                                <tr>                                    
                                    <td>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "identification", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "firstName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "lastName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "email", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "phone", []), "html", null, true);
            echo "</td>                                    
                                    <td>";
            // line 285
            echo (($this->getAttribute($context["us"], "isActive", [])) ? ("SI") : ("NO"));
            echo "</td>
                                    <td>";
            // line 286
            echo twig_escape_filter($this->env, (($this->getAttribute($context["us"], "tipoUsuarioId", [])) ? ($this->getAttribute($this->getAttribute($context["us"], "tipoUsuarioId", []), "nombre", [])) : ("")), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"#\" onclick=\"setData()\">Editar</a>  
                                        <a href=\"#\" onclick='deleteUser( ";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "id", []), "html", null, true);
            echo ")' >Borrar</a> 
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                    
                            
                        </tbody>
                    </table>

                <div id=\"dialog-form\" title=\"Usuario\">
                  <p class=\"validateTips\">Todos los campos son obligatorios.</p>
                 
                  <form>
                    <!-- <fieldset> -->
                    <table>
                        <tr>
                            <td>
                                <label for=\"password\">Cedula</label>
                                <input type=\"text\" name=\"identification\" id=\"identification\" value=\"\" class=\"text ui-widget-content ui-corner-all\">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"first_name\">Nombres</label>
                                <input type=\"text\" name=\"first_name\" id=\"first_name\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>                    
                        </tr>

                        <tr>
                            <td>
                                <label for=\"last_name\">Apelidos</label>
                                <input type=\"text\" name=\"last_name\" id=\"last_name\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"email\">Correo Electronico</label>
                                <input type=\"text\" name=\"email\" id=\"email\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"phone\">Telefono</label>
                                <input type=\"text\" name=\"phone\" id=\"phone\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"is_active\">Esta Activo</label>
                                <input type=\"checkbox\" name=\"is_active\" id=\"is_active\" value=\"1\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"password\">Clave</label>
                                <input type=\"password\" name=\"password\" id=\"password\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>                        
                    </table>              
                 
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
                    <!-- </fieldset> -->
                  </form>
                </div> 
            </div>            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 292,  439 => 289,  433 => 286,  429 => 285,  425 => 284,  421 => 283,  417 => 282,  413 => 281,  409 => 280,  405 => 279,  402 => 278,  398 => 277,  372 => 253,  363 => 252,  333 => 232,  272 => 174,  222 => 127,  104 => 11,  95 => 10,  74 => 6,  54 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}   
    Comforce
{% endblock %}
        
{% block stylesheets %} 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\"/>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% endblock %}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script> 
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script type=\"text/javascript\">
        var idUser = 'NULL';
        var dataRow;
        \$(document).ready( function () {
            table = \$('#myTable').DataTable({
                \"language\": {
                    paginate: {
                        first:    '«',
                        previous: '‹',
                        next:     '›',
                        last:     '»'
                    },
                    \"lengthMenu\": \"Mostrando _MENU_ registros por pagina\",
                    \"zeroRecords\": \"Sin resultados - disculpas\",
                    \"info\": \"Viendo pagina _PAGE_ de _PAGES_\",
                    \"infoEmpty\": \"Ningun registro disponible\",
                    \"infoFiltered\": \"(filtrados de _MAX_)\",
                    \"sSearch\": \"Buscar\",
                    \"dsfasdf\":\"siguiente\"
                }

            });

            \$('#myTable tbody').on( 'click', 'tr', function () {

                
                dataRow = table.row( this ).data();
                idUser = dataRow[0];

                \$(\"#myTable tbody tr\").removeClass('selected');
                \$(\"#id\").val(dataRow[0]);
                \$(\"#identification\").val(dataRow[1]);
                \$(\"#first_name\").val(dataRow[2]);
                \$(\"#last_name\").val(dataRow[3]);
                \$(\"#email\").val(dataRow[4]);
                \$(\"#phone\").val(dataRow[5]);
                if(dataRow[6] == \"SI\" )
                    \$(\"#is_active\").prop('checked', true);
                else
                    \$(\"#is_active\").prop('checked', false);

                \$(\"#password\").val(dataRow[1]);


                \$(this).addClass('selected');

            });

            //Form editions
            var 
                emailRegex = /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                dialog, form,      
                identification = \$( \"#identification\" ),
                firstName = \$( \"#first_name\" ),
                lastName = \$( \"#last_name\" ),
                phone = \$( \"#phone\" ),
                email= \$( \"#email\" ),
                isActive  = \$( \"#is_active\" ),
                password = \$( \"#password\" ),        
                tips = \$( \".validateTips\" );
                allFields = \$( [] ).add( firstName ).add( lastName ).add( phone );
            
        
            function updateTips( t ) {
            tips
                .text( t )
                .addClass( \"ui-state-highlight\" );
            setTimeout(function() {
                tips.removeClass( \"ui-state-highlight\", 1500 );
            }, 500 );
            }
        
            function checkLength( o, n, min, max ) {
            if ( o.val().length > max || o.val().length < min ) {
                o.addClass( \"ui-state-error\" );
                updateTips( \"La longitud de  \" + n + \" debe estar entre \" +
                min + \" y \" + max + \".\" );
                return false;
            } else {
                return true;
            }
            }

            function checkRegexp( o, regexp, n ) {
            if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( \"ui-state-error\" );
                updateTips( n );
                return false;
            } else {
                return true;
            }
            }

            function checkIfExist( o,n ){

                return true;

                if(idUser == null)
                    return true;
                if(dataRow == 'undefined')
                    return true;
                if(o.prop('name') == 'identification' && dataRow[1] == o.val() ){
                    return true;
                }

                if(o.prop('name') == 'email' && dataRow[4] == o.val() ){
                    return true;
                }

                var deferred = \$.Deferred();

                \$.ajax({
                    type:'POST',
                    url:'{{ path(\"checkUserPropertyExists\") }}',
                    data:{'field':o.prop('name'),'q': o.val()},
                    async: false,
                    success:function(res){
                        if(res === 'fail'){
                            updateTips( \"El Valor para  \" + n + \" ya existe!\")
                            o.addClass( \"ui-state-error\" );
                            deferred.resolve(false);
                            // return false;
                        }else{
                            deferred.reject(true);
                            // deferred.reject('boo');
                            // return true;
                        } 
                    }
                }); 
                return deferred.promise();
            }    
        
        
            function addUser() {
                var valid = true;
                allFields.removeClass( \"ui-state-error\" );

                valid = valid && checkLength( firstName, \"Nombres\", 3, 50 );
                valid = valid && checkLength( lastName, \"Apellidos\", 3, 50 );
                valid = valid && checkLength( phone, \"Telefono\", 3, 50 );
                valid = valid && checkLength( email, \"Correo Electronico\", 6, 70 );
                
                valid = valid && checkRegexp( firstName, /^[a-z]([0-9a-z_\\s])+\$/i, \"El campo Nombres solo permite letras y numeros y debe iniciar por una letra \" );
                valid = valid && checkRegexp( lastName, /^[a-z]([0-9a-z_\\s])+\$/i, \"El campo Apellidos solo permite letras y numeros y debe iniciar por una letra \" );

                valid = valid && checkRegexp( email, emailRegex, \"Ejemplo manuel@gmail.com\" );
                valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+\$/, \"EL campo Password solo permite: letras (a-z) y numeros (0-9)\" );
                valid = valid && checkRegexp( identification, /^([0-9])+\$/, \"EL campo Cedula solo permite: numeros (0-9)\" );
                valid = valid && checkRegexp( phone, /^([0-9])+\$/, \"EL campo Telefono solo permite: numeros (0-9)\" );

                \$.when(checkIfExist (identification ,'Cedula')).done(function(value) {
                    valid = valid && value;
                });

                \$.when(checkIfExist (email ,'Email')).done(function(value) {
                    valid = valid && value;
                });
                    
                if ( valid ) {

                    var url = '{{ path(\"edit\", {'id': 'usuario_id'}) }}'; 
                    url = url.replace(\"usuario_id\", idUser);
                    var data = {
                            'firstName':firstName.val(),
                            'lastName':lastName.val(),
                            'email':email.val(),
                            'phone':phone.val(),
                            'isActive':isActive.prop('checked') ? 1:0,
                            'password':password.val(),
                            'identification':identification.val()
                        };

                    \$.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(dataOk) {
                        console.log(dataOk);
                    }
                    });

                    location.reload(true);
                    dialog.dialog( \"close\" );
                    alert(\"Operación Exitosa\");
                }
                return valid;
            }
        
            dialog = \$( \"#dialog-form\" ).dialog({
            autoOpen: false,
            height: 380,
            width: 350,
            modal: true,
            buttons: {
                \"Enviar\": addUser,
                Cancel: function() {
                dialog.dialog( \"close\" );
                }
            },
            close: function() {
                cleanFields();
                allFields.removeClass( \"ui-state-error\" );
            }
            });
        
        
            \$( \"#create-user\" ).button().on( \"click\", function() {
                idUser = 'NULL';
                dialog.dialog( \"open\" );
            });
        } );

        function cleanFields(){
            \$('input').val('');
        }

        function deleteUser(idU){

                var url = '{{ path(\"delete\", {'id': 'usuario_id'}) }}'; 
                    url = url.replace(\"usuario_id\", idU);
                
                \$.ajax({
                    type: 'POST',
                    url: url,
                    success: function(dataOk) {
                        console.log(dataOk);
                        location.reload(true);
                        alert(\"Operación Exitosa\");
                    }
                });
        }

        function setData(){
            \$( \"#dialog-form\" ).dialog( \"open\" );
            
        }
    </script>
{% endblock %}
    {% block body %}
        
            <h1>Usuarios</h1>

            <br>
            <button id=\"create-user\">Crear Nuevo</button>
            <br>
            <br>
            <br>
            <div style=\"padding: 3.5em;\">
                    <table id=\"myTable\">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th>Cedula</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Activo</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for us in users %}
                                <tr>                                    
                                    <td>{{ us.id }}</td>
                                    <td>{{ us.identification }}</td>
                                    <td>{{ us.firstName }}</td>
                                    <td>{{ us.lastName }}</td>
                                    <td>{{ us.email }}</td>
                                    <td>{{ us.phone }}</td>                                    
                                    <td>{{ us.isActive ?\"SI\":\"NO\" }}</td>
                                    <td>{{ us.tipoUsuarioId ? us.tipoUsuarioId.nombre :\"\" }}</td>
                                    <td>
                                        <a href=\"#\" onclick=\"setData()\">Editar</a>  
                                        <a href=\"#\" onclick='deleteUser( {{ us.id }})' >Borrar</a> 
                                    </td>
                                </tr>
                            {% endfor %}                    
                            
                        </tbody>
                    </table>

                <div id=\"dialog-form\" title=\"Usuario\">
                  <p class=\"validateTips\">Todos los campos son obligatorios.</p>
                 
                  <form>
                    <!-- <fieldset> -->
                    <table>
                        <tr>
                            <td>
                                <label for=\"password\">Cedula</label>
                                <input type=\"text\" name=\"identification\" id=\"identification\" value=\"\" class=\"text ui-widget-content ui-corner-all\">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"first_name\">Nombres</label>
                                <input type=\"text\" name=\"first_name\" id=\"first_name\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>                    
                        </tr>

                        <tr>
                            <td>
                                <label for=\"last_name\">Apelidos</label>
                                <input type=\"text\" name=\"last_name\" id=\"last_name\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"email\">Correo Electronico</label>
                                <input type=\"text\" name=\"email\" id=\"email\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"phone\">Telefono</label>
                                <input type=\"text\" name=\"phone\" id=\"phone\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"is_active\">Esta Activo</label>
                                <input type=\"checkbox\" name=\"is_active\" id=\"is_active\" value=\"1\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for=\"password\">Clave</label>
                                <input type=\"password\" name=\"password\" id=\"password\" value=\"\" class=\"text ui-widget-content ui-corner-all\">
                            </td>
                        </tr>                        
                    </table>              
                 
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
                    <!-- </fieldset> -->
                  </form>
                </div> 
            </div>            
{% endblock %}
", "/index.html.twig", "/Users/gsoft/Projects/comforce/app/Resources/views/index.html.twig");
    }
}
