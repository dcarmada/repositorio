<?php


class ASIGNATURA_SHOWALL_View extends SHOWALL_View
{

    /**
     * ALUMNO_SHOWALL_View constructor.
     * @param array $field_list Campos a mostrar en la lista
     * @param array $values_list Lista de valores
     */
    public function __construct($field_list, $values_list){
        parent::__construct($field_list, $values_list);
        $this->tittle="Listado Asignaturas";
        $this->header="Listado Asignaturas";
    }
}