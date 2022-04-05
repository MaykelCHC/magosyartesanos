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

/* user/_form.html.twig */
class __TwigTemplate_1ce5b03031ddbaac1ddb56142b4a0f252efb074ba2b15c7a951bea0e3b161e15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newusuario"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "
                    </div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "empresa", [], "any", false, false, false, 21), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "direccion", [], "any", false, false, false, 30), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "poblacion", [], "any", false, false, false, 39), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pais", [], "any", false, false, false, 48), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "emitefactura", [], "any", false, false, false, 64), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "apellidos", [], "any", false, false, false, 73), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nif", [], "any", false, false, false, 82), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\" style=\"margin-top: 55px\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "provincia", [], "any", false, false, false, 91), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "telefono", [], "any", false, false, false, 100), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "password", [], "any", false, false, false, 109), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "roles", [], "any", false, false, false, 116), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>

        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"> Cancelar</a>
    </div>
    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "_token", [], "any", false, false, false, 126), 'row');
        echo "
</form>
";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 128,  219 => 126,  214 => 124,  203 => 116,  193 => 109,  181 => 100,  169 => 91,  157 => 82,  145 => 73,  133 => 64,  123 => 57,  111 => 48,  99 => 39,  87 => 30,  75 => 21,  63 => 12,  56 => 8,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newusuario'}}) }}
<form role=\"form\" action=\"{{ path('app_user_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        {{ form_errors(form) }}
                    </div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.nombre) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.empresa) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.direccion) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.poblacion) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.pais) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.email) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    {{ form_widget(form.emitefactura) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.apellidos) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.nif) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\" style=\"margin-top: 55px\">
                            {{ form_widget(form.provincia) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.telefono) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.password) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    {{ form_widget(form.roles) }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>

        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_user_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}
", "user/_form.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\user\\_form.html.twig");
    }
}
