<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ventas/index.html.twig */
class __TwigTemplate_145303f46e13b4642ce99c98687022c11551c42b6645f36339bd3c3fbbef74dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagescript' => [$this, 'block_pagescript'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ventas/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ventas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ventas/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ventas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 6
        echo "    <script>
        \$(function () {
            //Date range picker
            \$('#reservationdate').datetimepicker({
                format: 'L'
            });
            //Date range picker
            \$('#reservation').daterangepicker()
            //Date range picker with time picker
            \$('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            \$('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 46
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"height: 100%\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Mis Ventas</h3>
                    </div>

                    <div class=\"row card-header\" style=\"padding-left: 30px;padding-right: 30px\">
                        <div class=\"input-group\">
                            <div class=\"col-md-2\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\">Ventas Diarias
                                </button>
                            </div>
                            <div class=\"col-md-3\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        >Ventas Semanales
                                </button>
                            </div>
                            <div class=\"col-md-3\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        >Ventas Mensuales
                                </button>
                            </div>
                            <div class=\"col-md-2\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        style=\"font-size: 14px;\" data-toggle=\"modal\" data-target=\"#modal-primary\">
                                    Filtrar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                        <table class=\"table table-head-fixed text-nowrap\">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>I.D.</th>
                                <th>Nombre</th>
                                <th>Total de Ventas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>183</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td><span class=\"tag tag-success\">Approved</span></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td>11-7-2014</td>
                                <td><span class=\"tag tag-warning\">Pending</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modal-primary\" style=\"display: none; padding-right: 17px;\" aria-modal=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content bg-primary\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Filtrar Datos</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                               <span class=\"input-group-text\">
                                                 <i class=\"far fa-calendar-alt\"></i>
                                               </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation\"
                                       placeholder=\"Rango de Fechas\">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\" style=\"margin-left: 7px;\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\">ASC</button>
                                <button type=\"button\"
                                        class=\"btn btn-default dropdown-toggle dropdown-hover dropdown-icon\"
                                        data-toggle=\"dropdown\">
                                    <span class=\"sr-only\">Toggle Dropdown</span>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">DESC</a>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\">10</button>
                                <button type=\"button\"
                                        class=\"btn btn-default dropdown-toggle dropdown-hover dropdown-icon\"
                                        data-toggle=\"dropdown\">
                                    <span class=\"sr-only\">Toggle Dropdown</span>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">15</a>
                                        <a class=\"dropdown-item\" href=\"#\">25</a>
                                        <a class=\"dropdown-item\" href=\"#\">50</a>
                                        <a class=\"dropdown-item\" href=\"#\">100</a>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-outline-light\">Aceptar</button>
                    <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ventas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  136 => 45,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ventas{% endblock %}

{% block pagescript %}
    <script>
        \$(function () {
            //Date range picker
            \$('#reservationdate').datetimepicker({
                format: 'L'
            });
            //Date range picker
            \$('#reservation').daterangepicker()
            //Date range picker with time picker
            \$('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            \$('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

        })
    </script>
{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"height: 100%\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Mis Ventas</h3>
                    </div>

                    <div class=\"row card-header\" style=\"padding-left: 30px;padding-right: 30px\">
                        <div class=\"input-group\">
                            <div class=\"col-md-2\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\">Ventas Diarias
                                </button>
                            </div>
                            <div class=\"col-md-3\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        >Ventas Semanales
                                </button>
                            </div>
                            <div class=\"col-md-3\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        >Ventas Mensuales
                                </button>
                            </div>
                            <div class=\"col-md-2\">
                                <button type=\"button\" class=\"btn btn-block btn-outline-primary\"
                                        style=\"font-size: 14px;\" data-toggle=\"modal\" data-target=\"#modal-primary\">
                                    Filtrar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                        <table class=\"table table-head-fixed text-nowrap\">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>I.D.</th>
                                <th>Nombre</th>
                                <th>Total de Ventas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>183</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td><span class=\"tag tag-success\">Approved</span></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td>11-7-2014</td>
                                <td><span class=\"tag tag-warning\">Pending</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modal-primary\" style=\"display: none; padding-right: 17px;\" aria-modal=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content bg-primary\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Filtrar Datos</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                               <span class=\"input-group-text\">
                                                 <i class=\"far fa-calendar-alt\"></i>
                                               </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation\"
                                       placeholder=\"Rango de Fechas\">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\" style=\"margin-left: 7px;\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\">ASC</button>
                                <button type=\"button\"
                                        class=\"btn btn-default dropdown-toggle dropdown-hover dropdown-icon\"
                                        data-toggle=\"dropdown\">
                                    <span class=\"sr-only\">Toggle Dropdown</span>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">DESC</a>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\">10</button>
                                <button type=\"button\"
                                        class=\"btn btn-default dropdown-toggle dropdown-hover dropdown-icon\"
                                        data-toggle=\"dropdown\">
                                    <span class=\"sr-only\">Toggle Dropdown</span>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">15</a>
                                        <a class=\"dropdown-item\" href=\"#\">25</a>
                                        <a class=\"dropdown-item\" href=\"#\">50</a>
                                        <a class=\"dropdown-item\" href=\"#\">100</a>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-outline-light\">Aceptar</button>
                    <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
{% endblock %}", "ventas/index.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\ventas\\index.html.twig");
    }
}
