<?php

namespace App\Http\Controllers\Admin_Empresa;

use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Interfaces\entidadCrudControllerInterface;
use App\Managers\tour_manager;
use App\Repositorios\ImagenRepo;
use App\Repositorios\TourRepo;
use App\Traits\entidadesControllerComunesCrud;
use Illuminate\Http\Request;

class Admin_Producto_Especial_Controllers extends Controller implements entidadCrudControllerInterface
{

    use entidadesControllerComunesCrud;

    protected $Entidad_principal;
    protected $Nombre_entidad_plural;
    protected $Nombre_entidad_singular;
    protected $Carpeta_view_admin;
    protected $Path_view_get_admin_index;
    protected $Path_view_get_admin_crear;
    protected $Path_view_get_admin_editar;
    protected $Route_index;
    protected $Route_crear;
    protected $Route_crear_post;
    protected $Route_editar_post;
    protected $Route_luego_de_crear;
    protected $Path_carpeta_imagenes;
    protected $Nombre_del_campo_imagen;

    public function __construct(TourRepo $TourRepo,
        ImagenRepo $ImagenRepo) {
        $this->Entidad_principal = $TourRepo;
        $this->ImagenRepo = $ImagenRepo;
        $this->Nombre_entidad_plural = 'Tours';
        $this->Nombre_entidad_singular = 'Tour';
        $this->Carpeta_view_admin = strtolower(str_replace(' ', '_', $this->Nombre_entidad_plural));
        $this->Path_view_get_admin_index = 'admin.producto_especial.home';
        $this->Path_view_get_admin_crear = 'admin.producto_especial.crear';
        $this->Path_view_get_admin_editar = 'admin.' . $this->Carpeta_view_admin . '.editar';
        $this->Route_index = 'get_admin_productos_especiales';
        $this->Route_crear = 'get_admin_productos_especiales_crear';
        $this->Route_crear_post = 'set_admin_' . $this->Carpeta_view_admin . '_crear';
        $this->Route_editar_post = 'set_admin_' . $this->Carpeta_view_admin . '_editar';
        $this->Route_luego_de_crear = $this->Route_index;
        $this->Path_carpeta_imagenes = $this->Carpeta_view_admin . '/'; //donde se gurarda la imagen. Debe existir
        $this->Nombre_del_campo_imagen = strtolower($this->Nombre_entidad_singular) . '_id';
    }

    public function getPropiedades()
    {
        return ['name', 'fecha_inicio', 'cantidad_de_dias', 'description', 'descripcion_breve', 'precio', 'estado', 'tipo_de_tour', 'rank', 'tags', 'destacado'];
    }

    public function getManager($Request)
    {
        $manager = new tour_manager(null, $Request->all());

        return $manager;
    }

    public function olvidarCachesAsociadoAEstaEntidad()
    {
        HelpersGenerales::helper_olvidar_este_cache('ProductosHome');
        HelpersGenerales::helper_olvidar_este_cache('ProductosPagianaTorus');
    }

    public function get_admin(Request $Request)
    {
        $Entidades = $this->Entidad_principal->getEntidadesDeToursPaginadas($Request, 9, 'producto', 'rank', 'desc');
        $Titulo = 'Productos especiales';
        $Route_crear = $this->Route_crear;
        $Route_busqueda = $this->Route_index;
        $Carpeta_view_admin = 'producto_especial';

        return view($this->Path_view_get_admin_index, compact('Entidades', 'Route_crear', 'Titulo', 'Route_busqueda', 'Carpeta_view_admin'));
    }

    public function get_admin_crear()
    {
        $Route_crear_post = $this->Route_crear_post;
        $Titulo = 'Crear producto especial';
        $Carpeta_view_admin = 'producto_especial';

        return view($this->Path_view_get_admin_crear, compact('Route_crear_post', 'Titulo', 'Carpeta_view_admin'));
    }

}
