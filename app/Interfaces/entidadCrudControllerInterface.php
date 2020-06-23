<?php
namespace App\Interfaces;


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
  public function get_admin($Request);

  /**
   * Me lleva a la vista para crear
   */
  public function get_admin_crear();


  /**
   * Post de crear
   */
  public function set_admin_crear($Request);


  /**
   * get de editar
   */
  public function get_admin_editar($id);


  /**
   * post de editar
   */
  public function set_admin_editar($id,$Request);

}