<?php
namespace App\Interfaces;
use Illuminate\Http\Request;


interface entidadCrudControllerInterface{
  

  /**
   * Porpiedades para crear o editar
   */
  public function getPropiedades();

  /**
   * El mangar para validar los datos que viene de la vista
   */
  public function getManager($Request);

  /**
   * Me lleva a la vista para ver las etidades
   */
  public function get_admin(Request $Request);

  /**
   * Me lleva a la vista para crear
   */
  public function get_admin_crear();

  /**
   * Post de crear
   */
  public function set_admin_crear(Request $Request);

  /**
   * get de editar
   */
  public function get_admin_editar($id);

  /**
   * post de editar
   */
  public function set_admin_editar($id,Request $Request);


  /**
   * Tamaño de la imagen en pixeles
   */
  public function getImagenMiniaturaSize();

  /**
   * Olvida los cache que estés asociados a está entidad
   *
   * @return void
   */
  public function olvidarCachesAsociadoAEstaEntidad();

}